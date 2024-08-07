# Laravel_11 E-commerce project
# Setup-01
###  1. Install Laravel>Database Config
### 2. Install Breeze
1. composer require laravel/breeze --dev
2. php artisan breeze:install
3. database>migrations>users>
$table->tinyInteger('role')->defualt(2);
4. app>model>user
fillable[
'role'
]
5. php artisan migrate
6. npm install 
7. npm run dev
### 3. Create View File and Route for Each Role
1. resources>views>copy the dashboard.blade.php and past
2. rename dashboard.blade.php new name admin.blade.php
3. rename dashboard.blade.php new name vendor.blade.php
4. routes>web.php>dashboard, admin and vendor route create
```php
Route::get('/dashboard', function () {

    return view('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/dashboard', function () {

    return view('admin');

})->middleware(['auth', 'verified'])->name('admin');

Route::get('/vendor/dashboard', function () {

    return view('vendor');

})->middleware(['auth', 'verified'])->name('vendor');
```
### 4. Go To AuthenticatedSessionController File and Change Redirect After Login Based on user Role
1. app>http>controller>Auth>AuthenticatedSessionController>create condition
```php
$authUserRole= Auth::user()->role;

        if($authUserRole==0){

            return redirect()->intended(route('admin', absolute: false));

        }elseif($authUserRole==1){

            return redirect()->intended(route('vendor', absolute: false));

        }else{

            return redirect()->intended(route('dashboard', absolute: false));

        }
```

### 5. Create and Modify middleware
1. php artisan make:middleware RoleManager
2. app>Http>Middleware>RoleManager
```php
<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;

use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;

class RoleManager

{
    public function handle(Request $request, Closure $next, $role): Response

    {

        if(!Auth::check()){

            return redirect()->route('login');

        }

        $authUserRole = Auth::user()->role;

        switch($role){

            case 'admin':

                if($authUserRole==0){

                    return $next($request);

                }

                break;

  

            case 'vendor':

                if($authUserRole==1){

                    return $next($request);

                }

                break;

  

            case 'customer':

                if($authUserRole==2){

                    return $next($request);

                }      

        }

  

        switch($authUserRole){

            case 0:

                return redirect()->route('admin');

            case 1:

                return redirect()->route('vendor');

            case 2:

                return redirect()->route('dashboard');

        }

        return redirect()->route('login');

    }

}
```
### 6. Go inside bootstrap > app and declare middleware
1. bootstrap>app.php>
2. $middleware->alias
```php
->withMiddleware(function (Middleware $middleware) {

        $middleware->alias([

            'rolemanager'=>RoleManager::class

        ]);

    })
```
### 7. Add Middleware To Route
1. rolemanager:customer
2. rolemanager:admin
3. rolemanager:vendor
```php
Route::get('/dashboard', function () {

    return view('dashboard');

})->middleware(['auth', 'verified', 'rolemanager:customer'])->name('dashboard');

  

Route::get('/admin/dashboard', function () {

    return view('admin');

})->middleware(['auth', 'verified', 'rolemanager:admin'])->name('admin');

  

Route::get('/vendor/dashboard', function () {

    return view('vendor');

})->middleware(['auth', 'verified', 'rolemanager:vendor'])->name('vendor');
```
# Setup - 02
# ==Admin Route Group:==
### 1. app > http > controller > admin > DashboardController file create
php artisan make:controller admin/DashboardController
### 2. DashboardController  > index function create > return view('admin.admin')
```php
function index(){
        return view('admin.admin');
    }
```
### 3. laravel document > copy to middleware document > copy to Controllers document>Route create
```php
Route::middleware(['auth', 'verified', 'rolemanager:admin'])->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/admin/dashboard', 'index')->name('admin');
        });
});
```

# Setup-03
# ==AdminPanel setup==:
### 1. AdminKit dashboard Template download
### 2. adminkit-main>static>css,fonts,img,js file copy>Laravel public
### 3. create new file public folder> copy file past create folder
### 4. resources file>views>create admin new file>create layouts new file>layouts.blade.php create.
>>### ==resources>views>admin>layouts>layout.blade.php==
### 5. adminkit-main>static>pages-blank.html>open the html file>copy the html code>past the layout.blade.php 
### 6. pages-blank.html> @yield() include
### 7. pages-"{{asset(admin_asset/link)}}"
### 8. admin.blade.php>
```php
@extends('admin.layouts.layout')
@section('admin-content')
    <h1>Admin pages</h1>
@endsection

```
### 9.move to admin.blade.php>admin file>web.php>route customize>admin.admin
### 10.login admin dashboard successfully


# # Admin Routes Setup 04:
# 1. Recourse >views >admin >create file >blade engine create
1. category create 
2. category manage
3. sub category  create
4. sub category  manage
5. product manage 
6. product manage review
7. order history
8. order manage
9.  attribute create 
10. attribute manage
11. cart  history
12. cart manage 
13. manage user
14. manage store
15. discount create 
16. discount manage
17. payment manage
18. payment create
19. settings
# 2. Controller Create
