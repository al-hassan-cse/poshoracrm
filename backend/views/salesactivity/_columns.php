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
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'customer_id',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'invoice_no',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'invoice_date',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'sales_catagories',
    ],
	  [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'sales_status',
    ],
	
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'service_order_gateway',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'service_date',
    ],
/*    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'services_category',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'services_line',
    ],*/
	    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'sercatName',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'serlineName',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'company_name_b2b',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'customer_name',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'customer_mobile',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'customer_email',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'customer_address',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'sp_name',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'sp_cell_number',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'city',
    ],
	  [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'zone',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'location',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'address',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'mode_of_payments',
    ],
	  [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'receiver_name',
    ],
	  [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'field_representative',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'name_of_representative',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'poshora_received_date',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'invoice_bill',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'ssl_charge',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'vat',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'service_charge',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'ssl_charge_factoring',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'poshora_charge',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'sp_service_charges',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'poshora_received',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'additional_received',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'sp_spare_parts',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'sp_discount_demurrage',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'poshora_spare_parts',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'poshora_discount_demurrage',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'net_bill_claimed',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'deduction_vat',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'deduction_ait',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'net_paid',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'remarks',
    ],
   [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'added_date',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'added_by',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'edit_date',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'edit_by',
    ],

];   