<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
<form action="insertcode.php" method="POST">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="nm" class="form-control">
   
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="em" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Age</label>
    <input type="number" name="ag" class="form-control">
   
  </div>
  <div class="mb-3">
    <label class="form-label">City</label>
    <input type="text" name="ct" class="form-control">
  </div>
  <button type='submit' class="btn btn-primary" name="insert">Data Insert</button>
</form>
</div>
</body>
</html>