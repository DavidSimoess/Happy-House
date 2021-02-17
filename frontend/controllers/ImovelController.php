<?php

namespace frontend\controllers;

use common\models\Imagens;
use common\models\User;
use frontend\models\PedidoForm;
use Yii;
use common\models\Imovel;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ImovelController implements the CRUD actions for Imovel model.
 */
class ImovelController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Imovel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Imovel::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Imovel model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */

    public function actionView($id)
    {

        $dataProvider = new ActiveDataProvider([
            'query' => Imovel::find(),
        ]);



        $modelUser = $this->findModelUser($id);
        $modelImagem = $this->findModelImagem($id);
        $modelPedido = new PedidoForm();

        if ( $modelPedido->load(Yii::$app->request->post()) &&  $modelPedido->enviarPedido($id)) {
            Yii::$app->session->setFlash('success', 'Enviado com sucesso!');
        }

        return $this->render('view', [
            'model' => $this->findModel($id),
            'dataProvider' => $dataProvider,
            'modelImagem' => $modelImagem,
            'modelUser' => $modelUser,

            'modelPedido' => $modelPedido,
        ]);
    }

    /**
     * Creates a new Imovel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Imovel();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Imovel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Imovel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Imovel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Imovel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Imovel::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionIndex2()
    {

        $model = Imovel::findOne(1);


        $dataProvider = new ActiveDataProvider([
            'query' => Imovel::find(),
            'pagination' => [
                'pageSize' => 18,
            ]
        ]);

        return $this->render('index2', ['dataProvider' => $dataProvider,'model' => $model ]);
    }

    protected function findModelImagem($idImovel)
    {
        $modelImagem = Imagens::findAll(['id_Imovel' => $idImovel]);
        //var_dump($modelImagem);
        //die();
        return $modelImagem;


    }

    protected function findModelUser($idImovel)
    {
        $imovel = Imovel::findOne(['id' => $idImovel]);
        $iduser = $imovel->id_user;
        $modelUser = User::findAll(['id' => $iduser]);
        //var_dump($modelImagem);
        //die();
        return $modelUser;


    }

    public function actionEnviarPedido($id)
    {

        $modelPedido = new PedidoForm();
        if ( $modelPedido->load(Yii::$app->request->post()) &&  $modelPedido->enviarPedido($id)) {
            Yii::$app->session->setFlash('success', 'Enviado com sucesso!');

        }

        return  $modelPedido;
    }
}
