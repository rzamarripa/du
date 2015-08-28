<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
use yii\helpers\Html;
use app\models\USUARIOS;
use app\models\TramiteNuevo;

?>
<div class="site-index">
    <div class="jumbotron">
        <h1><?php if(Yii::$app->user->isGuest) echo "Necesitas Iniciar Sesión"; else echo "Bienvenido al departamento de " . Yii::$app->user->identity->username; ?></h1>
        <p class="lead">Página Principal</p>
    </div>
    <table id="datatable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Tipo tramite</th>
                <th>Acciones</th>
                
            
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tramites as $tramite) {?> 
            <tr>
                <td><?= $tramite->tipoTramite->nombre ?></td>
                <td>
                    <?= Html::a('Detalles',['tramite-zonificacion/index'],['class'=>'btn btn-primary btn-sm'])?>            
                </td>

                   
            
            </tr>
            <?php }?>
        </tbody>
    </table>    
            </div>           
        </div>
    </div>
</div>

