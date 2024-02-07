<?php

$module_name = 'EmployeeInteractionTracking';
$ESListViewDefs['EmployeeInteractionTracking'] = [
    'columns' => [
        'name' => [
            'link' => true,
            'default' => true,
        ],
        'date' => [
            'default' => true,
        ],
        'employee_name' => [
            'default' => true,
        ],
        'assigned_user_name' => [
            'default' => true,
        ],
        'date_entered' => [
            'default' => true,
        ],
        'date_modified' => [
            'default' => true,
        ],
        'created_by_name' => [
            'link' => true,
        ],
        'modified_by_name' => [
            'link' => true,
        ],
    ],
    'search' => [
        'name' => [],
        'date' => [],
        'employee_name' => [],
        'assigned_user_name' => [],
        'date_entered' => [],
        'date_modified' => [],
        'created_by_name' => [],
        'modified_by_name' => [],
    ],
];
