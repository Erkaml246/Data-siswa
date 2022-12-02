<?php

use app\models\TblJenisKelamin;
use common\models\TblSiswa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\TblSiswaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Siswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-siswa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nis',
            'nama',
            //'jenis_kelamin_id',

            [
                'attribute'=>'jenisKelamin.jenis_kelamin',
                'filter' => Html::activeDropDownList($searchModel, 'jenis_kelamin_id',
                    ArrayHelper::map(TblJenisKelamin::find()->asArray()->all(), 'id', 'jenis_kelamin'),
                    ['class'=>'form-control','prompt'=>'pilih jenis kelamin']),
                'value'=>function ($model, $key, $index, $column) {
                    return $model->jenisKelamin->jenis_kelamin;
                },
            ],




            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblSiswa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
