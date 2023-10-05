<?php
    session_start();
    include 'server.php';
    
    $title = $_POST['title'];
    $detail = $_POST['detail'];
    $id = $_POST['id'];

    $sql = "UPDATE post SET
    title='$title', 
    detail='$detail'
    WHERE post_id = $id
    "; 

    $result = mysqli_query($conn, $sql) or die("Error in sql : $sql".mysqli_error($conn));
    mysqli_close($conn);

    if($result){
        header('Location: read.php?id=' . $_POST['id']);
    } else {
        echo 'Error !!';
    }

?>
