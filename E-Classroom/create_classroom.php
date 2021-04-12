<?php 
session_start();

$id = $_SESSION['id'];

?>
<?php 
    include 'template/header.temp.php';
?>
<div class="container-fluid mt-5">
    <h5 class="display-4">Create Classroom</h5>
    <div class="form-row w-25">
        <form method="POST" action="classes/create_classroom.php">
        <table>
                    <!--id here -->
                    <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>" required>
                
                    <tr>
                    <td><label class="label">Subject</label>

                        <select name="classroom_subject" class="form-select" required>
                                
                                <option>Select subject</option>
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="PE">PE</option>
                                <option value="History">History</option>
                                <option value="Science">Science</option>

                        </select>

                    </td>
                </tr>
                
                <tr>
                    <td><label class="label">Date created</label><input type="date" class="form-control" name="date_created" required></td>
                </tr>
                <tr>
                    <td><label class="label">Year & Section</label><input class="form-control" name="level_section" required></td>
                </tr>
               
                <tr>
                    <td><button class="btn btn-primary col-md-12 mt-4" name="create">Create</button></td>
                </tr>
            </table>
        </form>     
    </div>
</div>

