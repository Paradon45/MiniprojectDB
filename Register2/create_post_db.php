<?php
    session_start();
    include 'server.php';
    
    $title = $_POST['title'];
    $detail = $_POST['detail'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO post
    (title, detail,id)
    VALUES
    ('$title', '$detail', '$user_id')
    ";

    $result = mysqli_query($conn, $sql) or die("Error in sql : $sql".mysqli_error($conn));
    mysqli_close($conn);

    if($result){
        header('Location: post.php');
    } else {
        echo 'Error !!';
    }

?>
