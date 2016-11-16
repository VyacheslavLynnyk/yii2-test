<?php

namespace frontend\controllers;

use Yii;
use common\models\FormGen;
use common\models\FormGenData;
use common\models\FormGenDataSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FormGenDataController implements the CRUD actions for FormGenData model.
 */
class FormGenDataController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all FormGenData models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FormGenDataSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Creates a new FormGenData model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new FormGenData();
        $formGen = $this->findFormGen($id);

        $model->created_at = date('Y-m-d H:i:s');
        $model->field_gen_id = $id;
        $validation = true;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($formGen->field_require){
                $validation = !empty($model->field_data);
                Yii::$app->session->setFlash('danger', 'нужно заполнить поле');
            }
            if ($validation){
                $model->save();
                Yii::$app->session->setFlash('success', 'Форма сохранена успешно');
                return $this->redirect(['site/forms']);
            }
        }
        return $this->render('create', [
            'model' => $model,
            'formGen' => $formGen
        ]);
    }

    /**
     * Updates an existing FormGenData model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing FormGenData model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FormGenData model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return FormGenData the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = FormGenData::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function findFormGen($id)
    {
        if (($model = FormGen::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
