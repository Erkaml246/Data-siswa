<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TblSiswa $model */

$this->title = 'Tambah Data Siswa';
$this->params['breadcrumbs'][] = ['label' => 'Tambah Data Siswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-siswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
