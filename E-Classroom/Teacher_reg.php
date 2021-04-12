<?php 
    include 'template/header.temp.php';
?>
<div class="container w-100 pt-3 table-bordered">
<form action="classes/store.php" method="POST">
    <h2 class="display-5">Teacher Registration</h2>
    <br>
    <table class="table table-striped w-50">
        <tr>
            <td>Firstname</td><td><input type="text" class="form-control" name="firstname" required></td>
        </tr>
        <tr>
            <td>Middlename</td><td><input type="text" class="form-control" name="middlename" required></td>
        </tr>
        <tr>
            <td>Lastname</td><td><input type="text" class="form-control" name="lastname" required></td>
        </tr>
        <tr>
            <td>Gender</td>
                <td>
                    <select name="gender" class="form-select" required>
                        <option>Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>

                    </select>
            </td>
        </tr>
        <tr>
            <td>Address</td><td><input type="text" class="form-control" name="address" required></td>
        </tr>
        <tr>
            <td>Date registered</td><td> <input class="form-control" type="date" name="date_joined" id="example-date-input"></td>
        </tr>
        <tr>
            <td>Username</td><td><input type="text" class="form-control" name="username" required></td>
        </tr>
        <tr>
            <td>Password</td><td><input type="text" class="form-control" name="password" required></td>
        </tr>
        
    </table>
    <button class="btn btn-primary" name="submit">Submit</button>
</form>
<br>
<a href="index.php">Already a member?Login now</a>
</div>



<?php 
    include 'template/footer.temp.php';
?>