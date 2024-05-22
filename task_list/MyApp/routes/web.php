<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    class Task
    {
        public function __construct(
            public int $id,
            public string $title,
            public string $description,
            public ?string $long_description,
            public bool $completed,
            public string $created_at,
            public string $updated_at
        ) {
        }
    }
    
    $tasks = [
        new Task(
            1,
            'Buy groceries',
            'Task 1 description',
            'Task 1 long description',
            false,
            '2023-03-01 12:00:00',
            '2023-03-01 12:00:00'
        ),
        new Task(
            2,
            'Sell old stuff',
            'Task 2 description',
            null,
            false,
            '2023-03-02 12:00:00',
            '2023-03-02 12:00:00'
        ),
        new Task(
            3,
            'Learn programming',
            'Task 3 description',
            'Task 3 long description',
            true,
            '2023-03-03 12:00:00',
            '2023-03-03 12:00:00'
        ),
        new Task(
            4,
            'Take dogs for a walk',
            'Task 4 description',
            null,
            false,
            '2023-03-04 12:00:00',
            '2023-03-04 12:00:00'
        ),
    ];

    return view('index', [
        'tasks' => $tasks
    ]);
});

Route::get('/tasks', function() {
    return view('tasks', [
        'tasks' => \App\Models\Task::all(),
    ]);
})->name('all-tasks');

Route::get('/task-detail/{id}', function($id) {
    return view('show', [
        'task' => \App\Models\Task::findOrFail($id),
    ]);
})->name('show-task');
