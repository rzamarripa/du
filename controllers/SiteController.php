<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SignupForm;
use app\models\Requisitos;
use app\models\UsuariosRoles;
use app\models\TipoTramitesRoles;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    //'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
	    	if(!Yii::$app->user->isGuest){
		       $rol = UsuariosRoles::find()->where('usuarioId = '. Yii::$app->user->id)->one();

               $tramites = TipoTramitesRoles::find()->where('roleId = '. $rol->roleId . ' and leer = 1' )->all();
                return $this->render('index',['tramites'=>$tramites]);

    
		    
	    	}else{
		    	$model = new LoginForm();
    	

           if ($model->load(Yii::$app->request->post()) && $model->login()) {  
            $rol = UsuariosRoles::find()->where('usuarioId = '. Yii::$app->user->id)->one();

            $tramites = TipoTramitesRoles::find()->where('roleId = '. $rol->roleId . ' and leer = 1' )->all();
                return $this->render('index',['tramites'=>$tramites]);

           if ($model->load(Yii::$app->request->post()) && $model->login()) {
		           $usuarioActual = UsuariosRoles::find()->where('usuarioId = :id',['id'=>Yii::$app->user->id])->all();
				   foreach ($usuarioActual as $ua) {
	              		 if($ua->roles->nombre == "Proyectos"){
				  		 	return $this->redirect(['proyectos/index']);
	                }
	            }
		   		$rol = UsuariosRoles::find()->where('usuarioId = '. Yii::$app->user->id)->one();

		   		$tramites = TipoTramitesRoles::find()->where('roleId = '. $rol->roleId . ' and leer = 1' )->all();
		   		return $this->render('index',['tramites'=>$tramites]);


	        
           } else {
            $requisitos = Requisitos::find()->all();
            return $this->render('login', [
                'model' => $model,
                'requisitos'=> $requisitos
            ]);
           }
	    	}
        
        
    }

    public function actionLogin()
    {    
        if (!Yii::$app->user->isGuest) {
	       return $this->goHome();
		}

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
		    

			return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSignup()
    {
	    if(Yii::$app->user->identity->username == "dev"){
		    $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                return $this->goHome();
            }
        }
        return $this->render('signup', [
            'model' => $model,
        ]);
	    }else{
		    return $this->goHome();
	    }
        
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
