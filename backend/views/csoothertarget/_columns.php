<?php
use yii\helpers\Url;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'target_from',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'target_to',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'target_daterange',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'moduleName',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'sales_conversion_target',
    ],
  [
      'class'=>'\kartik\grid\DataColumn',
      'attribute'=>'sales_amount_target',
  ],
  [
      'class'=>'\kartik\grid\DataColumn',
      'attribute'=>'call_target',
  ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   