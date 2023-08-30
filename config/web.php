<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
        '@files' => '@app/_files',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'b7rC4BXugmX3cvRRjaMODSLXRGYewrzk',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'assetManager' => [
            'forceCopy' => true
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages', // if advanced application, set @frontend/messages
                    'sourceLanguage' => 'es',
                    'fileMap' => [
                        'security/login' => '/user/login'
                    ],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'site/index'
            ],
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@Da/User/resources/views' => '@app/views/user'
                ]
            ]
        ],
    ],
     'controllerMap' => [
        'security' => [
            'class' => 'app\controllers\user\SecurityController',
        ]
    ],
    'params' => $params,
    'modules' => [
        'user' => [
            'class' => Da\User\Module::class,
            'enableEmailConfirmation' => false,
            'allowUnconfirmedEmailLogin' => true,
            'allowPasswordRecovery' => true,
            'allowAdminPasswordRecovery' => true,
            'administrators' => ['admin'],
            'administratorPermissionName' => 'user-management',
            'classMap' => [
                 'LoginForm' => 'app\models\forms\LoginForm',
            ],
            'controllerMap' => [
                'security' => 'app\controllers\user\SecurityController',
            //    'recovery' => 'frontend\controllers\user\RecoveryController',
            //    'registration' => 'frontend\controllers\user\RegistrationController'
            ],
        ],
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
            // uncomment the following to add your IP if you are not connecting from localhost.
            //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
         'allowedIPs' => ['127.0.0.1', '*','::1'],
    ];
}

return $config;
