<?php 
    session_start();
    if($_SESSION['username']===NULL){
        header('location: login.php');
    } else {
    echo "Hello " . $_SESSION['username'];
}
?>