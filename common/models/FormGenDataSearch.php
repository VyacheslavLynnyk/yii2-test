<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FormGenData;

/**
 * FormGenDataSearch represents the model behind the search form about `app\models\FormGenData`.
 */
class FormGenDataSearch extends FormGenData
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'field_gen_id'], 'integer'],
            [['field_data', 'created_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = FormGenData::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'created_at' => $this->created_at,
            'field_gen_id' => $this->field_gen_id,
        ]);

        $query->andFilterWhere(['like', 'field_data', $this->field_data]);

        return $dataProvider;
    }
}
