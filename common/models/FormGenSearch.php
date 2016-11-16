<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FormGen;

/**
 * FormGenSearch represents the model behind the search form about `app\models\FormGen`.
 */
class FormGenSearch extends FormGen
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'field_require'], 'integer'],
            [['form_name', 'field_type', 'field_def', 'field_place'], 'safe'],
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
        $query = FormGen::find();

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
            'field_require' => $this->field_require,
        ]);

        $query->andFilterWhere(['like', 'form_name', $this->form_name])
            ->andFilterWhere(['like', 'field_type', $this->field_type])
            ->andFilterWhere(['like', 'field_def', $this->field_def])
            ->andFilterWhere(['like', 'field_place', $this->field_place]);

        return $dataProvider;
    }
}
