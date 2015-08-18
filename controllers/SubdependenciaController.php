<?php

namespace app\controllers;

use Yii;
use app\models\Subdependencia;
use app\models\Dependencia;
use app\models\search\SubdependenciaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SubdependenciaController implements the CRUD actions for Subdependencia model.
 */
class SubdependenciaController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Subdependencia models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SubdependenciaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Subdependencia model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Subdependencia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Subdependencia();
        $data = Dependencia::find()->all();
        $dependencias = (count($data)==0)?[''=>'']:\yii\helpers\ArrayHelper::map($data, 'dependencia_id','dependencia_nombre');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->subdependencia_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'dependencias' => $dependencias,
            ]);
        }
    }

    /**
     * Updates an existing Subdependencia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $data = Dependencia::find()->all();
        $dependencias = (count($data)==0)?[''=>'']:\yii\helpers\ArrayHelper::map($data,'dependencia_id,dependencia_nombre');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->subdependencia_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'dependencias' => $dependencias,
            ]);
        }
    }

    /**
     * Deletes an existing Subdependencia model.
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
     * Finds the Subdependencia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Subdependencia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Subdependencia::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
