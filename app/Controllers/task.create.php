<?php

use App\Database\QueryBuilder;
use App\Core\Request;

$description = Request::get('description');
QueryBuilder::insert('tasks', [
    'description' => $description
]);
header("Location:http://localhost/php-basics");
