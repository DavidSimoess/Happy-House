<?php

namespace backend\controllers;

use Yii;
use common\models\Imovel;
use common\models\Imagens;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

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
        return $this->render('view', [
            'model' => $this->findModel($id),
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
        $modelImagem = new Imagens();
        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            $imageFile = UploadedFile::getInstances($modelImagem, 'imagem');
            //var_dump($imageFile);
            //die();
            //$i = 0;

            //if (isset($imageFile->size)){
                foreach ($imageFile as $file){
                    $modelImagens = new Imagens();
                    $modelImagens->id_Imovel = $model->id;
                    //$i++;
                    var_dump($modelImagens);
                    //die();
                    $file->saveAs('imagens/'.$file->baseName.'.'.$file->extension);
                    $modelImagens->imagem = $file->baseName.'.'.$file->extension;
                    $modelImagens->save(false);
                }
            //var_dump($i);
                //die();
                //$imageFile->saveAs('imagens/'.$imageFile->baseName.'.'.$imageFile->extension);
            //}


            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'modelImagem' => $modelImagem,
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
        $model = $this->findModel($id); //Imovel

        //Imagens daquele id
        $modelImagem = $this->findModelImagem($id);
        //die();

        $imagem = new Imagens();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'modelImagem' => $modelImagem,
            'imagem' => $imagem
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
        $this->findModelImagem($id)->delete;

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionImagem($idImovel, $idImagem){


        $imagem = Imagens::findOne(['id'=> $idImagem, 'id_Imovel'=> $idImovel]);

        unlink('imagens/'.$imagem->imagem);

        $imagem->delete();

        return $this->redirect(['update', 'id' => $idImovel]);

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

    protected function findModelImagem($idImovel)
    {
        $modelImagem = Imagens::findAll(['id_Imovel' => $idImovel]);
        //var_dump($modelImagem);
        //die();
        return $modelImagem;


    }
}
