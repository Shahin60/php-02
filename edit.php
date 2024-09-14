<?php

$eon = mysqli_connect('localhost', 'root', '', 'shahin');

if (isset($_GET['id'])) {
    $editid = $_GET['id'];
    $sql = "SELECT * FROM student WHERE id = $editid ";
    $query = mysqli_query($eon, $sql);
    $data = mysqli_fetch_assoc($query);
    $id     = $data['id'];
    $name  = $data['name'];
    $email  = $data['email'];
    $age    = $data['age'];
    $course = $data['course'];
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age    = $_POST['age'];
    $course = $_POST['course'];
   

    $upd = "UPDATE student name = '$name', email = '$email',age = '$age',course = '$course' WHERE id = $id";
  if ( mysqli_query($eon ,$upd ) === TRUE){
    echo 'data update '. mysqli_error($eon);
  }else {
    echo ' not upd';
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
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class=" form-control">
                <span>Name:</span>
                <input type="text" name="name" id="" placeholder="name" value="<?php echo $name; ?>" class=" form-control ">
                <span>Email:</span>
                <input type="email" name="email" id="" placeholder="email" value="<?php echo $email; ?>" class=" form-control">

                <input type="email" name="id" id="" value="<?php echo $id; ?>" hidden>
                <input type="text" name="age" id="" placeholder="age" value="<?php echo $age; ?>" class=" form-control mt-2">
                <input type="text" name="course" id="" placeholder="cource name" value="<?php echo $course; ?>" class=" form-control mt-2">
                <input class="btn btn-secondary mt-2" type="edit" value="edit" name="edit">

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>