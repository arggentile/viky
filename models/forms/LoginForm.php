<?php

namespace app\models\forms;

use Da\User\Form\LoginForm as BaseForm;


class LoginForm extends BaseForm {

    public $organismo;
    
     public function rules() {
        return \yii\helpers\ArrayHelper::merge(
                        parent::rules(),
                        [
                        ['organismo', 'safe']
                        ]
        );
    }
}

