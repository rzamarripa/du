<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "USUARIOS".
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property integer $status
 * @property string $email
 * @property string $auth_key
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password_reset_token
 */
class Utilerias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'USUARIOS';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password_hash', 'email', 'auth_key', 'created_at', 'updated_at','cod_usu'], 'required'],
            [['username', 'password_hash', 'email', 'auth_key', 'password_reset_token','cod_usu'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password_hash' => 'Password Hash',
            'status' => 'Status',
            'email' => 'Email',
            'auth_key' => 'Auth Key',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'password_reset_token' => 'Password Reset Token',
            'cod_usu' => 'Cod_usu',
        ];
    }

    public function saludar($algo){
        return $algo . ' xxx';
    }

    public function formatFechaFormatoCorto($fecha){
        return  date('d',strtotime($fecha)) .'-' . (Yii::$app->params['meses'][date('n',strtotime($fecha))]) . '-' . date('y',strtotime($fecha));          
    }

    public function grabahistorialusoreportes($reporte){
        $stored = strstr($reporte, 'MP_');
        $stored = strstr($stored, ' ', true); // Desde PHP 5.3.0

        $cod_usu= Yii::$app->user->identity->COD_USU;

        $sql = "exec ". "MP_LOG_GRABA_HISTORIAL_USO_REPORTES_QUICKINFO " . 
            "'" . $cod_usu . "'," .
            "'" . $stored . "'," .
            "'INTELIWEB'," .
            "''"; 

        $rs = Yii::$app->db->createCommand($sql)->execute();   
    }


}
