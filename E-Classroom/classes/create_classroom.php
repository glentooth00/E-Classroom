<?php 
 
 include_once 'teacher.php';

if($_POST){

    $create_room = new Teacher();

    $create_room->createClassroom([

            'id'                => $_POST['id'],
            'classroom_subject' => $_POST['classroom_subject'],
            'date_created'      => $_POST['date_created'],
            'level_section'     => $_POST['level_section']  
        ]);

    // header("location:../home.php");

}



?>