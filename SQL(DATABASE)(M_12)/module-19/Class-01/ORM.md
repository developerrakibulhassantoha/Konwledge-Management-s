1. database connect
2. php artisan migrate
3. php artisan make:model Task --migration or php artisan make:model Task --m
4. ==migration query create:==
```sql
Schema::create('tasks', function (Blueprint $table) {

            $table->id();

            $table->string('title');

            $table->string('description')->nullable();

            $table->enum('status',['completed','pending'])->default('pending');

            $table->date('due_date')->nullable();

            $table->timestamps();

        });
```
5. php artisan migrate
6. php artisan make:controller taskController
7. ==data create:==
```php
<?php
namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
class taskController extends Controller

{

    function doSomething(){

        Task::create([

            'title'=>'This first title',

            'description'=>'That is Sample description',

            'due_date'=>'2024-07-07'

        ]);

        return "Create the database";
        
        /// or auto create
        Task::create([

            'title'=>fake()->sentence(15),

            'description'=>fake()->sentence(25),

            // 'due_date'=>now()->addDays(7)
            'due_date'=>now()->addDays(rand(1,7))

        ]);

        return "Create the database";
        ////
    }

}
```

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Task extends Model

{

    protected $fillable=[

        'title',

        'description',

        'status',

        'due_date'

    ];

}
```

```php
<?php

use App\Http\Controllers\DemoController;

use App\Http\Controllers\taskController;

use Illuminate\Support\Facades\Route;

Route::get('/create', [taskController::class, 'doSomething']);

```

8. php artisan make:seeder TaskSeeder
9. ==Seed Create==:
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use App\Models\Task;

class TaskSeeder extends Seeder

{
    public function run(): void
    {
	    Task::truncate(); // data delete kore abr new data dokabe //corupdate data
        for($i=0; $i<10; $i++){

            Task::create([

                'title'=>fake()->sentence(15),

                'description'=>fake()->sentence(25),

                'due_date'=>now()->addDays(rand(1,7))

            ]);

        }

    }

}
```

```php
<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use Database\Seeders\TaskSeeder;

class DatabaseSeeder extends Seeder

{

    public function run(): void

    {

        $this->call(TaskSeeder::class);

    }

}
```
10. php artisan db:seed
11. php artisan db:seed
12. ==Data filter commad==:
```php
function index(){

        return Task::all();

        return Task::limit(5)->get();

        return Task::where('status', 'completed')->get();

        return Task::where('status', 'pending')->get();

        return Task::whereStatus('completed')->get();

        return Task::whereStatus('completed')->count();

        return Task::find(6);

        return Task::findOrFail(60);
        
        return Task::orderBy('id', 'desc')->get();
        
Route::get('/rakib', [taskController::class, 'index']);
    }
```
13. show data hidden
```php
protected $hidden=[

        'created_at',

        'updated_at'

    ];
```
14. status change:
```php
function doSomething(){
	Task::find(1)->update(['status'=>'completed']);
}
```
15. multiple data insert:
```php
Task::insert([

            [

                'title'=>fake()->sentence(15),

                'description'=>fake()->sentence(25),

                'due_date'=>now()->addDays(rand(1,7))

            ],

            [

                'title'=>fake()->sentence(15),

                'description'=>fake()->sentence(25),

                'due_date'=>now()->addDays(rand(1,7))

            ],

            [

                'title'=>fake()->sentence(15),

                'description'=>fake()->sentence(25),

                'due_date'=>now()->addDays(rand(1,7))

            ],

        ]);
```
16. url diye data filter :
```php
http://127.0.0.1:8000/task/2

function show(Request $request, $id){

        return Task::find($id);

    }
    Route::get('/task/{id}', [taskController::class, 'show']);
    //or model diye filter 
    function show(Request $request, Task $task){

        return $task;

    }
    Route::get('/task/{task}', [taskController::class, 'show']);
```
17. rename the taskController file
18. php artisan make:controller TaskController -r
19. controller route e korte hbe :  Route::resource('/tasks',TaskController::class);
20. php artisan route:list
21. TaskController code:
22. url query: http://127.0.0.1:8000/tasks?status=pending
```php
public function index(Request $request)

    {

        $status = $request->get('status');

        if(!$status){

            $tasks= Task::all();

        }else if($status == 'completed'){

            $tasks = Task::where('status', 'completed')->get();

        }else{

            $tasks = Task::where('status', 'pending')->get();

        }

        return $tasks;
        
/// or
		$tasks = Task::when($request->status, function($query, $status){

            $query->where('status', $status);

        })->get();

        return $tasks;

    }
```
# Laravel view project:

23.  npm install 
24. npm install -D tailwindcss postcss autoprefixer
25. npx tailwindcss init -p
26. tailwind.config.js
```js
content: [ 
"./resources/**/*.blade.php", 
"./resources/**/*.js", 
"./resources/**/*.vue", 
],
```
27. app.css
```php
@tailwind base;
@tailwind components;
@tailwind utilities;
```
28. npm run dev
29. php artisan make:component app --view
30. app.blade.php
```html
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
</body>
</html>
```