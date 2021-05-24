<?php

return [
    'product' => [
        'status' => [
            'active' => 1,
            'unActive' => 0,
        ],
        // 'weight_unit' => [
        //     'gram' => 1,
        //     'kilogram' => 2,
        // ],
        // 'dimension_unit' => [
        //     'millimeter' => 1,
        //     'centimeter' => 2,
        //     'meter' => 3,
        // ],
        'virtual' => [
            'physical' => 1,
            'download' => 2,
            'only_view' => 3,
            'service' => 4,
        ],
    ],
    'pagination' => [
        'backend' => 10,
        'frontend' => 7,
    ],
    'coupon' => [
        'type' => [
            'fixed' => 1,
            'percent' => 2,
        ],
        'status' => [
            'used' => 2,
            'active' => 1,
            'unActive' => 0,
        ],
    ],
    'order' => [
        'status' => [
            'ordered' => 1,
            'processing' => 2,
            'cancelled' => 3,
            'done' => 4,
            'failed' => 5,
        ],
    ],
    'shipping' => [
        'default_fee' => 20000,
        'method' => [
            'standard' => 1
        ],
        'status' => [
            'not_sent' => 1,
            'sending' => 2,
            'done' => 3
        ],
    ],
    'payment' => [
        'method' => [
            'cash' => 1,
        ],
        'status' => [
            'unpaid' => 1,
            'partial' => 2,
            'paid' => 3,
            'return' => 4,
        ],
    ],
];
