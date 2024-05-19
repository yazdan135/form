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
            <label for="username">Username</label>
            <input id="username" name="username" type="text">
        </div>
        <div>
            <label for="email">Email</label>
            <input id="email" name="email" type="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" name="password" type="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO form (name, email, password) VALUES ('$name', '$email', '$pass')";
    $result = mysqli_query($con , $sql);

    if($result){
        echo "<script>
        alert('Signup successful');
        </script>";
    }
    else{
        echo "<script>
        alert('Signup unsuccessful');
        </script>";
    }
}
?>
