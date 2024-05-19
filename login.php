<?php
include("./connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>
<body>
    <form action="" method="POST"> 
        <div>
            <label for="">Username</label>
            <input name="username" type="text">
        </div>
        <div>
            <label for="">Email</label>
            <input name="email" type="email">
        </div>
        <div>
            <label for="">Password</label>
            <input name="password" type="password">
        </div>
        <input type="submit" value="Submit" name="submit" />
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM form WHERE name='$name' AND email='$email' AND password='$pass'";
    $result = mysqli_query($con , $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        echo "
            <script>
            alert('Login successful');
            window.location.href = 'welcome.php';
            </script>";
    }
    else{
        echo "
            <script>
            alert('Login unsuccessful');
            window.location.href = 'decline.php';
            </script>";
    }
}
?>
