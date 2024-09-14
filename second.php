<?php
$conn = mysqli_connect('localhost', 'root', '', 'shahin');

if (!$conn) {
    echo ' connecting error' . mysqli_connect_error($conn);
}

if (isset($_GET['delete'])) {
    $delete = $_GET['delete'];
    $sql1 = "DELETE FROM student WHERE id = $delete";
    if (mysqli_query($conn, $sql1) == TRUE) {
        header('location:second.php');
    }
}


?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>edit delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>


    </style>
</head>

<body>

    <div class="container w-auto mt-5">
        <h3 class="bg-secondary text-center p-2 text-white">user information</h3>
        <?php
        $insert = "SELECT * FROM student";
        $result = mysqli_query($conn, $insert);
        echo "<table class = ' table table-secondary' >
<tr>
 <th>id</th>
 <th>name</th>
 <th>email</th>
 <th>age</th>
 <th>gender</th>
 <th>course</th>
<th> edit delete</th>
</tr>
";
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $age = $row['age'];
            $gender = $row['gender'];
            $course = $row['course'];

            echo "
  <tr>
  <td>$id</td>
  <td>$name</td>
  <td>$email</td>
  <td>$age</td>
  <td>$gender</td>
  <td>$course</td>
  <td> 
   <span class= 'btn btn-success'>
    <a href='edit.php?id=$id' class = ' text-white text-decoration-none' >edit</a></span>
   <span class='btn btn-danger' >
   <a href='second.php?delete=$id' class = ' text-white text-decoration-none'>delete</a> </span>
   </td>
  </tr> 
";
   }
        echo "</table> ";
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>