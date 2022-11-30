<?php

$tasks = [
    'HTML',
    'CSS',
    'Javascript',
    'Responsive design',
    'Laravel',
];



header('Content-Type: application/json');
echo json_encode($tasks);
