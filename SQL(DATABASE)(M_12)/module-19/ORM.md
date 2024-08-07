# Data Insert:
```php
<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model

{

    protected $fillable = ['brandName', 'brandImg'];

}
```

```php
<?php
namespace App\Http\Controllers;

use App\Models\Brand;

use Illuminate\Http\Request;

class DemoController extends Controller

{

    function demoAction(Request $request){

       return Brand::create($request->input());

    }

}
```

```php
<?php
use App\Http\Controllers\DemoController;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

Route::post('/create-brand',[DemoController::class, 'demoAction']);
```


# Data Update:
```php
<?php

namespace App\Models;  

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model

{

    protected $fillable = ['brandName', 'brandImg'];

}
```

```php
<?php

namespace App\Http\Controllers;

use App\Models\Brand;

use Illuminate\Http\Request;

class DemoController extends Controller

{

    function demoAction(Request $request){

       return Brand::where('id', $request->id)->update($request->input());

    }

}
```

```php
<?php

use App\Http\Controllers\DemoController;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

  

Route::post('/update-brand/{id}',[DemoController::class, 'demoAction']);
```

# Why we write fillable inside model:
 # There are a few reasons why you might want to use the fillable property in Laravel

### -  ==Security==: It helps protect your application from mass assignment attacks.
### -  ==Performance==: It can improve the performance of your application by reducing the number of fields that need to be checked when mass assigning data.
### -  ==Readability==: It makes your code more readable by explicitly defining which fields can be mass assigned.
### -  ==Consistency==: It ensures that all of your models have the same set of fillable fields, which can make your code more consistent.
### -  ==Extensibility==: It allows you to easily add or remove fillable fields as your application evolves.


# Update Or Create:
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model

{

    protected $fillable = ['brandName', 'brandImg'];

}
```

```php
<?php

namespace App\Http\Controllers;

use App\Models\Brand;

use Illuminate\Http\Request;

class DemoController extends Controller

{

    function demoAction(Request $request){

       return Brand::updateOrCreate(

        ['brandName'=>$request->brandName],

        $request->input()

    );

    }

}
```

```php
<?php

use App\Http\Controllers\DemoController;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

Route::post('/update-create-brand/{brandName}',[DemoController::class, 'demoAction']);

```


# Delete:
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model

{

    protected $fillable = ['brandName', 'brandImg'];

}
```

```php
<?php

namespace App\Http\Controllers;

use App\Models\Brand;

use Illuminate\Http\Request;

class DemoController extends Controller

{

    function demoAction(Request $request){

       return Brand::where('id', '=', $request->id)->delete();

    }

}
```

```php
<?php

use App\Http\Controllers\DemoController;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

  

Route::get('/delete-brand/{id}',[DemoController::class, 'demoAction']);
```

# Increment and Decrement:
```php
<?php

namespace App\Http\Controllers;

use App\Models\Brand;

use App\Models\Product;

use Illuminate\Http\Request;

class DemoController extends Controller

{

    function demoAction(){

       //return Product::where('id', 1)->increment('price', 1000);

       return Product::where('id', 1)->decrement('price', 1000);

    }

}
```

```php
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;


Route::get('/',[DemoController::class, 'demoAction']);

```

# Retrieving All Rows:
```php
<?php

namespace App\Http\Controllers;

use App\Models\Brand;

use App\Models\Product;

use Illuminate\Http\Request;

class DemoController extends Controller

{

    function demoAction(){

        return Product::get();

       //return Product::all();

       //return Product::first(); 

       //return Product::find(10);

    }

}
```

```php
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;

Route::get('/',[DemoController::class, 'demoAction']);

```

# Retrieving List Of Column:
```php
<?php

namespace App\Http\Controllers;

use App\Models\Brand;

use App\Models\Product;

use Illuminate\Http\Request;

class DemoController extends Controller

{

    function demoAction(){

       // return Product::pluck(' 'price');

        return Product::pluck('price', 'title');

    }

}
```

```php
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;

Route::get('/',[DemoController::class, 'demoAction']);

```

# Aggregation:
```php
<?php

namespace App\Http\Controllers;

use App\Models\Brand;

use App\Models\Product;

use Illuminate\Http\Request;

class DemoController extends Controller

{

    function demoAction(){

        return Product::sum('price');

        // return Product::count('price');

        // return Product::max('price');

        // return Product::max('price');

        // return Product::avg('price');

    }

}
```

```php
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;

Route::get('/',[DemoController::class, 'demoAction']);

```

# Select Clause:
```php
<?php

namespace App\Http\Controllers;

use App\Models\Brand;

use App\Models\Product;

use Illuminate\Http\Request;

class DemoController extends Controller

{

    function demoAction(){

        return Product::select('price', 'title', 'discount')->get();
       
///unique value return korar jonnu distinct() use kora hoy
        return Product::select('price')->distinct()->get();

    }

}
```

```php
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;

Route::get('/',[DemoController::class, 'demoAction']);
```
