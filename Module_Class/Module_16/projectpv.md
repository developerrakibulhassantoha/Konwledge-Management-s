# 1. Log:
```php
function demo(Request $request):int  
{  
    $num1= $request->num1;  
    $num2= $request->num2;  
    $result= $num2 + $num1;  
  
    log::info($result);  
  
    return $result;  
}
Route::get('/demo1/{num1}/{num2}', [DemoControler::class, 'demo']);
```

# 2. Session:
```php
function sessionPut(Request $request):bool  
{  
    $email= $request->email;  
    $request->session()->put('userEmail', $email);  
    return true;  
}  
  
function sessionPull(Request $request):string  
{  
    return $request->session()->pull('userEmail', 'default');  
}  
function sessionGet(Request $request):string  
{  
    return $request->session()->get('userEmail', 'default value');  
}  
  
function sessionForget(Request $request):bool  
{  
    $request->session()->forget('userEmail');  
    return true;  
}  
function sessionFlash(Request $request):bool  
{  
     $request->session()->flush();  
     return true;  
}

Route::get('/sessionPut/{email}', [DemoControler::class, 'sessionPut']);  
Route::get('/sessionPull', [DemoControler::class, 'sessionPull']);  
Route::get('/sessionGet', [DemoControler::class, 'sessionGet']);  
Route::get('/sessionForget', [DemoControler::class, 'sessionForget']);  
Route::get('/sessionFlash', [DemoControler::class, 'sessionFlash']);
```

# 3.Middleware:
```php
// middleware file
public function handle(Request $request, Closure $next): Response  
{  
        return $next($request);  
}
```

```php
//controller file
function DemoControllerA(Request $request):string  
{  
    return 'hello middleware';  
}
```

```php
//web.php
Route::get('hello',[DemoControler::class, 'DemoControllerA'])->middleware(DemoMiddleware::class);
```
## 1. Request Verification:
```php
// middleware file
public function handle(Request $request, Closure $next): Response  
{  
    $key = $request->header('key');  
    if($key == 'xyz123'){  
        return $next($request);  
    }else{  
        return response()->json('unauthorized', 401);  
    }  
}
```

```php
//controller file
function DemoControllerAction(Request $request):string  
{  
    return 'hello middleware';  
}
```

```php
//web.php
Route::get('hello',[DemoControler::class, 'DemoControllerAction'])->middleware(DemoMiddleware::class);
```
## 2. Request Redirect:
```php
//middleware file
public function handle(Request $request, Closure $next): Response  
{  
    $key = $request->key;  
    if($key == 'xyz123'){  
        return $next($request);  
    }else{  
        return redirect('/hello2');  
    }  
}
```

```php
//controller file
function DemoController1(Request $request):string  
{  
    return 'hello middleware successful';  
}  
function DemoController2(Request $request):string  
{  
    return 'hello middleware unsuccessful';  
}
```

```php
//web.php
Route::get('hello1/{key}',[DemoControler::class, 'DemoController1'])->middleware(DemoMiddleware::class);  
Route::get('hello2',[DemoControler::class, 'DemoController2']);
```

## 3. Apply For Route And Route Group:
```php
//middleware file
public function handle(Request $request, Closure $next): Response  
{  
    $key = $request->key;  
    if($key == 'xyz123'){  
        return $next($request);  
    }else{  
        return response()->json('Unauthorized', 401);  
    }
```

```php
//controller file
function Demo1(Request $request):string  
{  
    return 'Hello1 middleware successful';  
}  
function Demo2(Request $request):string  
{  
    return 'Hello2 middleware successful';  
}  
function Demo3(Request $request):string  
{  
    return 'Hello3 middleware successful';  
}  
function Demo4(Request $request):string  
{  
    return 'Hello4 middleware successful';  
}
```

```php
//web.php
Route::middleware('
				  .')->group(function(){  
    Route::get('hello1/{key}',[DemoControler::class, 'Demo1']);  
    Route::get('hello2/{key}',[DemoControler::class, 'Demo2']);  
    Route::get('hello3/{key}',[DemoControler::class, 'Demo3']);  
    Route::get('hello4/{key}',[DemoControler::class, 'Demo4']);  
});
```

```php
//app.php
->withMiddleware(function (Middleware $middleware) {  
    $middleware->alias([  
        'demo'=>DemoMiddleware::class  
    ]);  
})
```
## 4. Apply For Whole Application:
```php
//middleware file
public function handle(Request $request, Closure $next): Response  
{  
    $key = $request->key;  
    if($key == 'xyz123'){  
        return $next($request);  
    }else{  
        return response()->json('Unauthorized', 401);  
    }  
}
```

```php
//controller file
function Demo1(Request $request):string  
{  
    return 'Hello1 middleware successful';  
}  
function Demo2(Request $request):string  
{  
    return 'Hello2 middleware successful';  
}  
function Demo3(Request $request):string  
{  
    return 'Hello3 middleware successful';  
}  
function Demo4(Request $request):string  
{  
    return 'Hello4 middleware successful';  
}
```

```php
//web.php
Route::get('hello1/{key}',[DemoControler::class, 'Demo1']);  
Route::get('hello2/{key}',[DemoControler::class, 'Demo2']);  
Route::get('hello3/{key}',[DemoControler::class, 'Demo3']);  
Route::get('hello4/{key}',[DemoControler::class, 'Demo4']);
```

```php
//app.php
->withMiddleware(function (Middleware $middleware) {   
        $middleware->web([  
            DemoMiddleware::class,  
        ]);  
    })
```

# 5. Manupulate Request Header:
```php
//Middleware
public function handle(Request $request, Closure $next): Response

    {

    //Add Value

        $request->headers->add(['email'=>'hassan@gmail.com']);

        return $next($request);

  

    //Replace Value

        $request->headers->replace(['email'=>'rakibhassan@gmail.com']);

        return $next($request);

  

    //Remove Value

        $request->headers->remove('email');

        return $next($request);

    }

}
```

```php
//Controller
function demoAction(Request $request)

    {

        return $request->header();

    }
```

```php
//web.php
Route::get('/hello', [DemoControler::class, 'demoAction'])->middleware(DemoMiddleware::class);
```

# 6. Request Rate Limiting and grouping:
```php
//controller
function demoAction(Request $request)

    {

        return 'My name is Rakibul Hassan Toha';

    }
```

```php
//web.php
Route::get('/hello', [DemoControler::class, 'demoAction'])->middleware('throttle:3,1');
```
### Route grouping Rate Limiting
```php
//app.php
    ->withMiddleware(function (Middleware $middleware) {
    
        $middleware->web([
            'throttle:3,1'

        ]);

    })
```

# Controller Details------
# 1. Basic Controller:
```php
//controller
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoControler extends Controller

{

    function DemoAction(Request $request)

    {

        return 'My name is Rakibul Hassan Toha';

    }

  

}
```

```php
//web.php
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoControler;


Route::get('/hello', [DemoControler::class, 'DemoAction']);

```

# 2. Single Action Controller

### single controller file create command : php artisan make:controller SingleActionController --invokable
```php
//single controller
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class SingleActionController extends Controller

{

    /**

     * Handle the incoming request.

     */

    public function __invoke(Request $request)

    {

        return "I'm a Single Action Controller";

  

    }

}
```

```php
//web.php
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SingleActionController;

Route::get('/single',SingleActionController::class);

```

# 3. Resource Controller:
```php
http://127.0.0.1:8000/photo -> GET ->Index()
http://127.0.0.1:8000/photo/create -> GET ->Create()
http://127.0.0.1:8000/photo -> PUT ->Store()
http://127.0.0.1:8000/photo/251 -> GET ->Show()
http://127.0.0.1:8000/photo/251/edit -> GET ->edit()
http://127.0.0.1:8000/photo/220 -> PUT ->update()
http://127.0.0.1:8000/photo/251 -> DELETE ->destory()
```

```php
//controller
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourseController extends Controller

{

    public function index()

    {

        return "index method";

    }

  

    public function create()

    {

        return "create method";

    }

  

    public function store(Request $request)

    {

        return "store method";

    }

  

    public function show(string $id)

    {

        return "show method";

    }

  

    public function edit(string $id)

    {

        return "edit method";

    }

  

    public function update(Request $request, string $id)

    {

        return "update method";

    }

  

    public function destroy(string $id)

    {

        return "destroy method";

    }

}
```

```php
//web.php
Route::resource('photo',ResourseController::class);
```

```php
// app.php // csrf token code
 $middleware->validateCsrfTokens(except: [

            '/*'

        ]);
```

# ==Blade Engine== 
## 1.Understanding Blade Template Engine:
```php
//controller
<?php  
namespace App\Http\Controllers;  
use Illuminate\Http\Request;  
class HomeController extends Controller  
{  
    function page(){  
        return view('home');  
    }  
}
```

```php
//web.php
<?php  
use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\HomeController;  
  
Route::get('/home',[HomeController::class, 'page']);
```

```php
//blade
<h1>Home page</h1>
```

## 2.Pass Data From Controller
```php
//controller
<?php  
namespace App\Http\Controllers;  
use Illuminate\Http\Request;  
class HomeController extends Controller  
{  
    function page(Request $request){  
  
        $num1=$request->num1;  
        $num2=$request->num2;  
        $sum = $num2 + $num1;  
        $data=['result'=>$sum];  
        $result=['msg'=>'This is my message'];  
        return view('home', $data, $result);  
    }  
}
```

```php
//web.php
Route::get('/home',[HomeController::class, 'page']);  
Route::get('/home/{num1}/{num2}',[HomeController::class, 'page']);
```

```php
//blade
<h1>Home page</h1>  
<h1>{{$msg}}</h1>  
<h1>{{$result}}</h1>
```

## 3. if else:
```php
//controller
<?php  
namespace App\Http\Controllers;  
use Illuminate\Http\Request;  
class HomeController extends Controller  
{  
    function page(Request $request){  
        $num1=$request->num1;  
        $num2=$request->num2;  
        $sum = $num2 + $num1;  
        $data=['result'=>$sum];  
        return view('home', $data);  
    }  
}
```

```php
//web.php
Route::get('/home/{num1}/{num2}',[HomeController::class, 'page']);
```

```php
//Blade Engine
@if($result==100)  
    <h1>Result is Hundred</h1>  
@elseif($result==1000)  
    <h1>Result is Thousand</h1>  
@elseif($result==100000)  
    <h1>Result is One Lac</h1>  
@elseif($result==300000)  
    <h1>Result is Three Lac</h1>  
@elseif($result==500000)  
    <h1>Result is Five Lac</h1>  
@else  
    <h1>Result is our Range</h1>  
@endif
```

## 4.switch case
```php
//controller
<?php  
namespace App\Http\Controllers;  
use Illuminate\Http\Request;  
class HomeController extends Controller  
{  
    function page(Request $request){  
        $num1=$request->num1;  
        $num2=$request->num2;  
        $sum = $num2 + $num1;  
        $data=['result'=>$sum];  
        return view('home', $data);  
    }  
}
```

```php
//web.php
Route::get('/home/{num1}/{num2}',[HomeController::class, 'page']);
```

```php
//Blade Engine
@switch($result)  
    @case(100)  
        <h1>Result is our hundred</h1>  
        @break  
    @case(1000)  
        <h1>Result is our Thousand</h1>  
        @break  
    @case(100000)  
        <h1>Result is our One lac</h1>  
        @break  
    @case(200000)  
        <h1>Result is our two lac</h1>  
        @break  
    @case(500)  
        <h1>Result is our five lac</h1>  
        @break    @default    <h1>Result is our in Range</h1>  
  
@endswitch
```

## 5.For Loop
```php
//controller
<?php  
namespace App\Http\Controllers;  
use Illuminate\Http\Request;  
class HomeController extends Controller  
{  
    function page(Request $request){  
        return view('home');  
    }  
}
```

```php
//web.php
Route::get('/',[HomeController::class, 'page']);
```

```php
//Blade Engine
<body>  
<ul>  
    @for($i=0; $i<100; $i=$i+1)  
           <li> {{$i}}</li>  
    @endfor</ul>  
</body>
```

## 6. For Each Loop
```php
//controller
<?php  
namespace App\Http\Controllers;  
use Illuminate\Http\Request;  
class HomeController extends Controller  
{  
    function page(Request $request){  
        $data=[  
            ['name'=>'Rakib','email'=>'rakib@gmail.com'],  
            ['name'=>'sifa','email'=>'sifa@gmail.com'],  
            ['name'=>'Tony','email'=>'tony@gmail.com'],  
            ['name'=>'john','email'=>'john@gmail.com'],  
            ['name'=>'jonedoe','email'=>'jonedoe@gmail.com'],  
            ['name'=>'hassan','email'=>'hassan@gmail.com'],  
        ];  
        return view('home',['users'=>$data]);  
    }  
}
```

```php
//web.php
Route::get('/',[HomeController::class, 'page']);
```

```php
//Blade Engine
<body>  
<ul>  
    @foreach($users as $eachUser)  
        <li>User name is ={{$eachUser['name']}} and user email = {{$eachUser['email']}}</li>  
    @endforeach</ul>  
</body>
```

## 7.Including Asssets
```php
{{asset'css/bootstrap.min.css'}}
```