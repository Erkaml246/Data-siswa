<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TblJenisKelamin $model */

$this->title = 'Create Tbl Jenis Kelamin';
$this->params['breadcrumbs'][] = ['label' => 'Tambah Jenis Kelamin', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-jenis-kelamin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
