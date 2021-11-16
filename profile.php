<?php 
    include('dbconnect.php');
    session_start();
    if(empty($_SESSION['username'])){
    $username = mysqli_real_escape_string($connection, $_SESSION['username']);

    $query = "SELECT * FROM users where username ='{$username}';";
    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["userid"]. " - Name: " . $row["username"]. " " . $row["useremail"]. "<br>";
          }
    } else {
        header('location: login.php');
    }
}
?>