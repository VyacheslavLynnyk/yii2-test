<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "app_form".
 *
 * @property integer $id
 * @property string $f_name
 * @property string $l_name
 * @property string $birth_date
 * @property string $phone
 * @property string $email
 * @property string $status
 */
class AppForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'app_form';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['f_name', 'l_name', 'birth_date'], 'required'],
            [['birth_date'], 'safe'],
            [['status'], 'string'],
            [['f_name', 'l_name', 'email'], 'string', 'max' => 64],
            [['phone'], 'string', 'max' => 24],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'f_name' => 'First Name',
            'l_name' => 'Last Name',
            'birth_date' => 'Birth Date',
            'phone' => 'Phone',
            'email' => 'Email',
            'status' => 'Status',
        ];
    }
}
