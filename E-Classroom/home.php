<?php 
session_start();

include 'classes/teacher.php';
$verify_user = new Teacher();

if($_SESSION['success'] == true){

 $username = $_SESSION['username'];

 $verify_user->verify($username);

}
?>

<?php 
     include 'template/header.temp.php';
?>






<div class="container container-fluid bg-light p-3 mt-5 table-bordered ">
     <h2 class="display-4 mt-5">Hello Teacher <?=  $_SESSION['firstname'] ?></h2>    
  
          <!--Button to create classroom -->
          <a href="create_classroom.php?id=<?= $_SESSION['id'] ?>" class="btn btn-outline-primary">Create Classroom</a>



     <br>
<a href="classes/logout.php " class="btn">Logout</a>
</div>



