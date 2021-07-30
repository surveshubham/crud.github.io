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

      form  {
       margin: 0 auto;
       width: 70%;
        margin-top:33px;
        margin-bottom: 40px;
     }
  
     .tablle{
       margin: 0 auto;
       width: 80%;
     }
    
  </style>

  <body>
  <!-- navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
  
    </div>
  </div>
</nav>


<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'connetion.php';
    
    $username = $_POST['username'];
    $work =$_POST['work'];
    $sql2 = "INSERT INTO `crud` (`srno`, `username`, `work`) VALUES (NULL, '$username', '$work');";
    
    $result2 = mysqli_query($conn ,$sql2);
    if(!$result2){
        echo "something goes wrong";
    }else{
       echo "";
    }
    

 }
?>

<form  action="/shubham/php%20crud%20app/?" method="POST">
<h3>insert here</h3>
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
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



<div class="tablle">
 <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">srno</th>
      <th scope="col">username</th>
      <th scope="col">work</th>
      <th scope="col">delete</th>
      <th scope="col">update</th>
    </tr>
  </thead>

<?php  
  include 'connetion.php';
  $sql3 = "SELECT * FROM `crud`";
  $result2 = mysqli_query($conn,$sql3);
   
  $num = mysqli_num_rows($result2);
   while($row = mysqli_fetch_assoc($result2))

 {

 echo '
 <tbody>
   <tr>
   <th scope="row">'.$row['srno'].'</th>
   <td>'.$row['username'].'</td>
   <td>'.$row['work'].'</td>
   <td><a href="http://localhost/shubham/php%20crud%20app/delete.php?srno='.$row['srno'].'"><button type="button" class="btn btn-primary">delete</button></td></a>
   <td><a href="http://localhost/shubham/php%20crud%20app/update.php?srno='.$row['srno'].'"><button type="button" class="btn btn-primary"  >update</button></td></a>
  </tr>
  </tbody>
 ';
    }


?>
</table>
</div>







 

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