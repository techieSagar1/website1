<?php
    $server = 'localhost';
    $user_name = 'root';
    $password = '';
    $dbname = 'Furniture Website';
    $connect = mysqli_connect($server,$user_name,$password,$dbname);
    if(!$connect){
        die("failed" .mysqli_connect_error());
    }
?>
    

<?php
    $username= $_POST['username'];
    $email = $_POST['email'];
    $password= $_POST['password'];
    $sql = "INSERT INTO furniture (username,email,password) VALUES ('$username','$email','$password')";
    $result = mysqli_query($connect,$sql);
    if($result){
        echo "successful";
    }
    else{
        echo "error";
    }
    mysqli_close($connect);
?>