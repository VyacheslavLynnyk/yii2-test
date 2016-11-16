<?php

namespace common\models;

use Yii;
use common\models\FormGen;

/**
 * This is the model class for table "form_gen_data".
 *
 * @property integer $id
 * @property string $field_data
 * @property string $created_at
 * @property integer $field_gen_id
 *
 * @property FormGen $fieldGen
 */
class FormGenData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form_gen_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        // TODO: check field require
        //        $this->id = 1;
        //        echo "<pre>"; print_r($this->getFieldGen()); echo "</pre>";
        //        exit;
        $rulesArray =  [
            [['field_data', 'field_gen_id'], 'required'],
            [['field_data'], 'string'],
            [['created_at'], 'safe'],
            [['field_gen_id'], 'integer'],
            [['field_gen_id'], 'exist', 'skipOnError' => true, 'targetClass' => FormGen::className(), 'targetAttribute' => ['field_gen_id' => 'id']],
        ];



        ;
        return $rulesArray;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'field_data' => 'Field Data',
            'created_at' => 'Created At',
            'field_gen_id' => 'Field Gen ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFieldGen()
    {
        return $this->hasOne(FormGen::className(), ['id' => 'field_gen_id']);
    }
}
