<?php

use App\Database\QueryBuilder;

$tasks = QueryBuilder::get('tasks');
require 'resources/index.view.php';
