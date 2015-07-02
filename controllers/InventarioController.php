<?php

namespace app\controllers;

use Yii;
use app\models\Usuario;
use app\models\search\UsuarioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UsuarioController implements the CRUD actions for Usuario model.
 */
class InventarioController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new UsuarioSearch();
        $model = new Usuario();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model,
        ]);
    }
}