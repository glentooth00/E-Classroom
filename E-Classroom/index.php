<?php 
  session_start();
    include 'template/header.temp.php';
?>

<?php if (isset($_SESSION['failed'])) : ?>
            <div class="alert alert-danger text-center" role="alert" >
                <?= $_SESSION['failed'];   ?>
                </div>           
                <?php unset($_SESSION['failed']);?>      
<?php endif ?>




<div class="container w-25 pt-5 mt-5 p-4 bg-light">
<form action="classes/login.php" method="POST">
  <h3 class="display-6 text-center">Login</h3>
  <div class="form-group pt-2">
    <label for="formGroupExampleInput">Username</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="username" placeholder="Username" required>
  </div>
  <div class="form-group mt-3">
    <label for="formGroupExampleInput2">Password</label>
    <input type="password" class="form-control" id="formGroupExampleInput2" name="password" placeholder="Password" required>
  </div>
  <div class="form-group p-4 col-md-12 text-center">
     <button class="btn btn-primary  col-md-10">Login</button>  <a class="btn btn-outline-dark p-2 " href="Teacher_reg.php">Add user</a>
  </div>
</form>
<br>

</div>


<?php 
    include 'template/footer.temp.php';
?>