```html
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>calculator</title>

    <!---------------- bootstrap.min.css linking here--------------->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

  <div class="container">

    <h1 class="row gy-2 gx-3 align-items-center mt-5 mb-5 justify-content-center">Calculator Project</h1>

    <form>

      <div class="row justify-content-md-center">

        <div class="col-4">

          <label for="firstNumber" class="form-label">First Number:</label>

          <input type="text" class="form-control" id="firstNumber">

        </div>

        <div class="col-4">

          <label for="operators" class="form-label">Operation:</label>

          <select id="operators" class="form-select">

            <option selected>selecte option</option>

            <option value="add">addition (+)</option>

            <option value="subtraction">subtraction (-)</option>

            <option value="divide"> division (/)</option>

            <option value="multiply">multiplication (*)</option>

          </select>

        </div>

        <div class="col-4">

          <label for="secondNumber" class="form-label">Second Number:</label>

          <input type="text" class="form-control" id="secondNumber">

        </div>

  

      </div>

      <div>

        <div>

          <button type="button" class="btn btn-warning mb-3 mt-5" onclick="calculator();">calculator</button>

        </div>

        <div class="col-12">

          <input type="text"  class="form-control" id="result2" placeholder="Example input placeholder"  >

        </div>

      </div>

    </form>

  </div>

  
  

    <!------------------ main.js linking here ------------------------>

    <script src="js/main.js"></script>

    <!---------------- bootstrap.bundle.min.js linking here ------------->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
```