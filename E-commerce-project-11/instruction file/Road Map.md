# Laravel_11 E-commerce project
# Setup-01
### 1. Install Laravel
### 2. Install Breeze
### 3. Create View File and Route for Each Role
### 4. Go To AuthenticatedSessionController File and Change Redirect After Login Based on user Role
### 5. Create and Modify middleware
### 6. Go inside bootstrap > app and declare middleware
### 7. Add Middleware To Route


# Setup-02
# ==AdminPanel setup==:
### 1. AdminKit dashboard Template download
### 2. adminkit-main>static>css,fonts,img,js file copy>Laravel public
### 3. create new file public folder> copy file past create folder
### 4. resources file>views>create admin new file>create layouts new file>layouts.blade.php create.
>>### ==resources>views>admin>layouts>layout.blade.php==
### 5. adminkit-main>static>pages-blank.html>open the html file>copy the html code>past the layout.blade.php 
### 6. pages-blank.html>class(content)> @yield() include
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


# Setup - 03
# ==Admin Route Group:==
### 1. app > http > controller > admin > adminMainController file create
### 2. adminMainController  > index function create > return view('admin.admin')
```php
function index(){
        return view('admin.admin');
    }
```
### 3. laravel document > copy to middleware document > copy to Route Prefixes document > copy to Controllers document.
```php
Route::middleware(['auth', 'verified', 'rolemanager:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::controller(adminMainController::class)->group(function () {
            Route::get('/dashboard', 'index')->name('admin');
        });
    });
});
```