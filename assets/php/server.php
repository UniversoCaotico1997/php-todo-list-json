<?php

$tasks = [
    'HTML',
    'CSS',
    'Javascript',
    'Rsponsive design',
    'Laravel',
];


header('Content-Type: application/json');
echo json_encode($tasks);
