<?php

    include 'template/header.temp.php';

    $pageTitle = 'Teacher Registration';

?>

<title><?php echo $pageTitle; ?></title>


<div class="container w-50 m-5">
    <h2><label>Teacher Registration</label></h2>
    <form action="functionClass/process.php" method="POST">
        <table class="table table-stripped">
            <tr>
                <td>Firstname</td><td><input type="text" class="form-control" name="f_name" required></td>
            </tr>
            <tr>
                <td>Middlename</td><td><input type="text" class="form-control" name="m_name" required></td>
            </tr>
            <tr>
                <td>Lastname</td><td><input type="text" class="form-control" name="l_name" required></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select name="gender" class="form-select" required>
                        <option>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Address</td><td><input type="text" class="form-control" name="address" required></td>
            </tr>
            <tr>
                <td>Date Joined</td><td><input  type="date" class="form-control" name="date_joined" required></td>
            </tr>
            <tr>
                <td>Username</td><td><input type="text"  class="form-control" name="username" required></td>
            </tr>
            <tr>
                <td>Password</td><td><input type="text" class="form-control" name="password" required></td>
            </tr>
        </table>
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    </form>

   

</div>





<?php 
  
    include 'template/footer.temp.php'

?>