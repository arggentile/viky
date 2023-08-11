<?php

namespace app\controllers;

use app\models\Beneficios;
use app\models\search\BeneficiosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BeneficiosController implements the CRUD actions for Beneficios model.
 */
class BeneficiosController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Beneficios models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'main-admin';
        try{
            
            $searchModel = new BeneficiosSearch();
            $dataProvider = $searchModel->search($this->request->queryParams);
        } catch (Exception $e) {
            var_dump($e->getMessage()); exit;
            \Yii::$app->getSession()->setFlash('error', 'Excepcion. ' . $e->getMessage());
            \Yii::$app->getModule('audit')->data('catchedexc', \yii\helpers\VarDumper::dumpAsString($e));
        }
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Beneficios model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Beneficios model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
         $this->layout = 'main-admin';
        try{
            $transaction = \Yii::$app->db->beginTransaction(); 
            $model = new Beneficios();

            if ($this->request->isPost && $model->load($this->request->post())) {
                $model->file = \yii\web\UploadedFile::getInstance($model, 'file'); 
                $file = $model->file;
                $multimedia = new \app\models\Multimedia();
                $multimedia->tipo_archivo = $file->extension;
                $multimedia->nombre_archivo = $file->baseName . '.' . $file->extension;
                $multimedia->comentario = "";
                if(!$multimedia->save())
                    throw new \yii\web\HttpException(400, "No se pudo grabar la multimedia.");
                
                
                $model->id_multimedia = $multimedia->id;
                        
                if($model->save()){
                    if(!$model->file->saveAs(\Yii::getAlias('@files') . DIRECTORY_SEPARATOR . $multimedia->id)){
                        throw new \yii\web\HttpException(400, "Error al grabar los adjunto en disco.");
                    }
                    $transaction->commit();
                }
                
            } else {
                $model->loadDefaultValues();
            }
        } catch (\yii\base\Exception $e) {
            if($transaction->isActive)$transaction->rollBack();            
            
            var_dump($e->getMessage());  exit;
            \Yii::$app->getSession()->setFlash('error', 'Excepcion. ' . $e->getMessage());
            \Yii::$app->getModule('audit')->data('catchedexc', \yii\helpers\VarDumper::dumpAsString($e));
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Beneficios model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Beneficios model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Beneficios model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Beneficios the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Beneficios::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
