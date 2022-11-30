<?php

$tasks = [
    'HTML',
    'CSS',
    'Javascript',
    'Responsive design',
    'Laravel',
];

// $_POST['name'];
// var_dump('name');

header('Content-Type: application/json');
echo json_encode($tasks);
