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
use app\models\TipoTramites;
use app\models\USUARIOS;
use app\models\VisitasEscuelas;
use app\models\VisitasLugares;

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
        $requisitos = Requisitos::find()->all();
            return $this->render('index', [
                'requisitos'=> $requisitos
            ]);   
    }

    public function actionLogin()
    {    
        $model = new LoginForm();

        if(!Yii::$app->user->isGuest or $model->load(Yii::$app->request->post()) && $model->login()){

           $usuarioActual = UsuariosRoles::find()->where('usuarioId = :id',['id'=>Yii::$app->user->id])->all();

           foreach ($usuarioActual as $ua) {

                
                if($ua->roles->nombre == "educacion"){
                    return $this->redirect(["site/escuelas"]);
                }
                else if($ua->roles->nombre == "Proyectos"){ 
                    return $this->redirect(['proyectos/index']);
                }

                 else if($ua->roles->nombre == "eduardo"){ 
                    return $this->redirect(['dictamenes/index']);
                }

                 else if($ua->roles->nombre == "Zonificacion"){ 
                    return $this->redirect(['tramite-zonificacion/index']);
                }
                else if($ua->roles->nombre == "Uso de Suelo"){
                    return $this->redirect(['tramite-zonificacion/index']);
                    //$rol = UsuariosRoles::find()->where('usuarioId = '. Yii::$app->user->id)->one();
                    //$tramites = TipoTramitesRoles::find()->where('roleId = '. $rol->roleId . ' and leer = 1' )->all();
                    //return $this->redirect(['tipos-tramite/index']);
                    //'index',['tipos-tramites'=>$tramites]);
                }
                else if($ua->roles->nombre == 'Dev'){
                 return $this->redirect(['tramite-zonificacion/index']);
                }
                else if($ua->roles->nombre == 'pedro'){
                 return $this->redirect(['tramites-espectaculares/index']);
                }
                else if($ua->roles->nombre == 'Fraccionamiento'){
                 return $this->redirect(['tramites-autorizacion/index']);
                }
                else if($ua->roles->nombre == 'Construccion'){
                 return $this->redirect(['tramites-alineamiento/index']);
                }
                else if($ua->roles->nombre == 'Sistemas'){
                 return $this->redirect(['tipos-tramite/index']);
                }

            }
        }else {
            $requisitos = Requisitos::find()->all();
            return $this->render('login', [
                'model' => $model,
                'requisitos'=> $requisitos
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
        $usuarioActual = UsuariosRoles::find()->where('usuarioId = :id',['id'=>Yii::$app->user->id])->all();
        $model = new SignupForm();
        $usuarios = USUARIOS::find()->all();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                return $this->redirect(['roles', 'id' => $user->id]);
            }
        }
        foreach ($usuarioActual as $ur) {
            if($ur->roles->nombre == 'Dev' or $ur->roles->nombre == 'Sistemas'){
                return $this->render('signup', [
                    'model' => $model,
                    'usuarios' => $usuarios,
                ]);
            }
		}
        return $this->goHome();
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

    public function actionEscuelas()

     {

      $model= new VisitasEscuelas();        
        $VisitasLugares = VisitasLugares::find()->where('estatus_did = 1')->all();
        $VisitasEscuelas = VisitasEscuelas::find()->where('estatus_did = 1')->all();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        return $this->redirect('escuelas');
        } else {
            return $this->render('escuelas', ['model'=>$model,'VisitasLugares'=>$VisitasLugares,'VisitasEscuelas'=>$VisitasEscuelas]);
        }
    }




     public function actionDev()

     {
         return $this->render('dev');
    
    }

    public function actionRoles($id)
    {
        $model = new UsuariosRoles;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['signup']);
        } 
        $usuarioActual = UsuariosRoles::find()->where('usuarioId = :id',['id'=>Yii::$app->user->id])->all();
        foreach ($usuarioActual as $ur) {
            $model->usuarioId = $id;
            $roles = UsuariosRoles::find()->where('usuarioId=:id',['id'=>$id])->all();
            return $this->render('roles',['model'=>$model,'roles'=>$roles]);
        }
         return $this->redirect(['site/index']);
    }
}
