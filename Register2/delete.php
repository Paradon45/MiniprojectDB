<?php
    include 'server.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM post WHERE post_id = $id";

    $result = mysqli_query($conn, $sql) or die("Error in sql : $sql".mysqli_error($conn));

    $sql_a = "DELETE FROM comment WHERE id = $id";

    $result_a = mysqli_query($conn, $sql_a) or die("Error in sql : $sql".mysqli_error($conn));

    mysqli_close($conn);

    if($result){
        header('Location: profile.php');
    } else {
        echo 'Error !!';
    }

?>
