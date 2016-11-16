<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "form_gen".
 *
 * @property integer $id
 * @property string $form_name
 * @property string $field_type
 * @property string $field_def
 * @property string $field_place
 * @property integer $field_require
 *
 * @property FormGenData[] $formGenDatas
 */
class FormGen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form_gen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['form_name', 'field_type', 'status'], 'required'],
            [['field_type'], 'string'],
            [['field_require', 'status'], 'integer'],
            [['form_name', 'field_def', 'field_place'], 'string', 'max' => 255],
            ['status', 'default', 'value'=>'Active'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'form_name' => 'Form Name',
            'field_type' => 'Field Type',
            'field_def' => 'Defult Field',
            'field_place' => 'Placeholder',
            'field_require' => 'Required Field',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormGenDatas()
    {
        return $this->hasMany(FormGenData::className(), ['field_gen_id' => 'id']);
    }
}
