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
            [['form_name', 'field_type'], 'required'],
            [['field_type'], 'string'],
            [['field_require'], 'integer'],
            [['form_name', 'field_def', 'field_place'], 'string', 'max' => 255],
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
            'field_def' => 'Field Def',
            'field_place' => 'Field Place',
            'field_require' => 'Field Require',
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
