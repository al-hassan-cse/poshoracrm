<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */
?>
<div class="user-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'user_level',
            'email:email',
            'status',
            'password',
            'bp_id',
            'cso_id',
        ],
    ]) ?>

</div>
