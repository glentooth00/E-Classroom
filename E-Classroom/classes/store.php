<?php 


if($_POST){

    include 'teacher.php';

    $teacher_info = new Teacher();

    $teacher_info->save('teacher_info',[    

        'firstname' => $_POST['firstname'],
        'middlename' => $_POST['middlename'],
        'lastname' => $_POST['lastname'],
        'gender' => $_POST['gender'],
        'address' => $_POST['address'],
        'date_joined' => $_POST['date_joined'],
        'username' => $_POST['username'],
        'password' => $_POST['password']

    ]);
      
    // header('location:../Teacher_reg.php');

}

?>