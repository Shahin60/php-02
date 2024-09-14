<?php

$eon = mysqli_connect('localhost', 'root', '', 'shahin');

if (isset($_POST['submit'])) {
  $name =   $_POST['name'];
  $email =  $_POST['email'];
  $age =    $_POST['age'];
  $course = $_POST['course'];
  $gender = $_POST['gender'];
  $insert = "INSERT INTO student (name,email,age,course,gender) VALUES 
            ('$name', '$email', '$age', '$course', '$gender')";

  if (mysqli_query($eon, $insert) == TRUE) {
    echo ' data insert';
    header('location:index.php');
  } else {
    echo 'data not insert' . mysqli_error($eon);
  }
}


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>




  <div class=" w-25 m-auto ">

    <div class=" py-3">
      <h3 class="text-center">Registation form</h3>
      <form action="index.php" method="POST" class=" form-control">
        <span>Name:</span>
        <input type="text" name="name" id="" placeholder="name" class=" form-control ">
        <span>Email:</span>
        <input type="email" name="email" id="" placeholder="email" class=" form-control">
        <input type="text" name="age" id="" placeholder="age" class=" form-control mt-2">
        <input type="text" name="course" id="" placeholder="cource name" class=" form-control mt-2">
        <input type="radio" name="gender" id="" value="male">
        <span>male</span>
        <input type="radio" name="gender" value="female">
        <span>female</span>
        <br>
        <input class="btn btn-secondary mt-2" type="submit" value="submit" name="submit">

      </form>

    </div>
  </div>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>