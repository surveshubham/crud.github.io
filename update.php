<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>

   form {
    margin: 0 auto;
    width: 70%;
    margin-top: 135px;
    }
  
  </style>
 <body>


 <?php 
    
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  include 'connetion.php';
    
  $srn = $_GET['srno'];
  $username = $_POST['username'];
  $work = $_POST['work'];
 
  $sql = "UPDATE `crud` SET `username` = '$username', `work` = '$work' WHERE `crud`.`srno` = $srn;";
  $result = mysqli_query($conn , $sql);

  if($result){
    header("location: /shubham/php%20crud%20app/?");
  }else{
    echo "not updated";
  }
 };

 ?>

 <form  action= "<?php $_SERVER['SERVER_NAME']; ?>"  method="POST">
 <h3>update here</h3>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
    <div id="emailHelp" class="form-text">please put your name here</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">work</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="work">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">DO YOU WANT TO UPDATE ABOVE DETAILS</label>
  </div>
   <button type="submit" class="btn btn-primary">Submit</button>
 </form>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>


</html>