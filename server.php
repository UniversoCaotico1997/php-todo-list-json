<?php

$tasks = [
    'HTML',
    'CSS',
    'Javascript',
    'Responsive design',
    'Laravel',
];

// var_dump($tasks);

header('Content-Type: application/json');
echo json_encode($tasks);
