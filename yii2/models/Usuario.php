<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string $username
 * @property string $password_has
 * @property string $auth_key
 * @property string $email
 * @property string $school
 * @property string $academic_title
 * @property string $lattesUrl
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password_has', 'auth_key', 'email', 'school', 'academic_title', 'lattesUrl', 'status', 'created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['username', 'password_has', 'auth_key'], 'string', 'max' => 255],
            [['email', 'school', 'academic_title', 'lattesUrl'], 'string', 'max' => 64],
            [['status'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password_has' => 'Password Has',
            'auth_key' => 'Auth Key',
            'email' => 'Email',
            'school' => 'School',
            'academic_title' => 'Academic Title',
            'lattesUrl' => 'Lattes Url',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
