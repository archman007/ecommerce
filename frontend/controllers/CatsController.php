<?php

namespace app\controllers;
namespace frontend\controllers;

use app\models\lk1;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CatsController implements the CRUD actions for lk1 model.
 */
class CatsController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all lk1 models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => lk1::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'idlk1' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single lk1 model.
     * @param int $idlk1 Idlk1
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idlk1)
    {
        return $this->render('view', [
            'model' => $this->findModel($idlk1),
        ]);
    }

    /**
     * Creates a new lk1 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new lk1();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idlk1' => $model->idlk1]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing lk1 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idlk1 Idlk1
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idlk1)
    {
        $model = $this->findModel($idlk1);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idlk1' => $model->idlk1]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing lk1 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idlk1 Idlk1
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idlk1)
    {
        $this->findModel($idlk1)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the lk1 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idlk1 Idlk1
     * @return lk1 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idlk1)
    {
        if (($model = lk1::findOne(['idlk1' => $idlk1])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
