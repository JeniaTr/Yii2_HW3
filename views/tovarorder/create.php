<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TovarOrder */

$this->title = 'Create Tovar Order';
$this->params['breadcrumbs'][] = ['label' => 'Tovar Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tovar-order-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
