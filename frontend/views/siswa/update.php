<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TblSiswa $model */

$this->title = 'Update Tbl Siswa: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Update Data Siswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-siswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
