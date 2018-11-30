
<?php
    session_start();
    $dbhost = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'webtasks';
    $conn = mysqli_connect($dbhost, $username, $password, $db);
    if (isset($_POST['name'])) {
        $login = $_POST['name'];
        $password = $_POST['pass'];
        $query = "SELECT * FROM admins WHERE username='$login' AND pass='$password'";
        $result = $conn->query($query);
        if ($result->num_rows == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['login'] = $login;
            $_SESSION['admin'] = $row['admin'];
        }
        header('location: ../week11/task3.php');
        
    }
?>
<form action="task12C.php" method="post">
    <input type="text" name="name">
    <input type="password" name="pass">
    <input type="submit">
</form>
