<?php

use App\Controllers\TaskController;
use App\Core\Request;
use App\Core\Router;

require '_init.php';

Router::make()
    ->get('', [TaskController::class, 'index'])
    ->post('task/create', [TaskController::class, 'create'])
    ->get('task/delete', [TaskController::class, 'delete'])
    ->get('task/update', [TaskController::class, 'update'])
    ->resolve(Request::uri(), Request::method());
