**Submission Guidelines:**  
1. Do not just copy paste the templates.  
2. Must replace necessary things according to the question in the template, if needed.  
3. No need to add any extra codes, namespaces or comments. Just follow the template to accomplish the tasks.  
4. Do not add the comments of the template in your answer. Those are just for your understanding purpose.  
5. If there is any expected output given, then you must organize your response to show that output.

  
**Task 1:**

Suppose you are sending a Form request in Laravel.

Now, create a route in Laravel that handles a POST request to the '/form-submit' URL with the following data: ‘email’ = ‘john@test.com’. Inside the route closure, retrieve the 'email' input parameter from the request and store it in a variable called $email.

  
Expected Output:

If there is email Return a JSON response with the following data:

  
{

"status": "success",

"message": "Form submitted successfully.",

"email": "john@test.com"

}

If there is no email in the request Return a JSON response with the following data:

{

"status": "failed",

"message": "Form submission failed."

}

//Template for Task 1:

Route::post('/form-submit’, function (Request $request) {

// Retrieve the 'email' input parameter from the request

$email = ;

// Check if the email exists in the request

if(){

     // Return a successful JSON response

     return ......;

}else{

     // Return a failed JSON response

     return ......;

}

});

  
**Task 2:**

In your Laravel application, you want to retrieve the value of the 'User-Agent' header from a GET request to ‘/user-agent’ URL.

Write the code to accomplish this and store the value in a variable called $userAgent. Return the $userAgent as a response.

   
Expected Output might be different based on your client and its version. For example,  It might be look like any of these:

  
In Postman Output:

PostmanRuntime/7.35.0

  
In Chrome Output:

Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36

  
In Firefox Output:

Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0

  
// Template for Task 2

Route::get('/user-agent', function(Request $request){

// Retrieve the 'User-Agent' header from the request

$userAgent = ;

  
// Return the $userAgent in the response

return ...;

});
# Solution:
```php
Task 01:
use Illuminate\Support\Facades\Route; 
use Illuminate\Http\Request; 
Route::post('/form-submit', function (Request $request) { 
$email = $request->input('email'); 
if ($email) { 
return response()->json([
'status' => 'success', 
'message' => 'Form submitted successfully.', 
'email' => $email ]); 
} else { return response()->json([ 
'status' => 'failed', 
'message' => 'Form submission failed.' 
]); 
} }); 

Task 02: 
use Illuminate\Http\Request; 
Route::get('/user-agent', function (Request $request) { $userAgent = $request->header('User-Agent'); 
return response()->json([ 'userAgent' => $userAgent ]);
});

```