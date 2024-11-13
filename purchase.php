<?php
    $server = 'localhost';
    $user_name = 'root';
    $password = '';
    $dbname = 'Furniture purchase';
    $connect = mysqli_connect($server,$user_name,$password,$dbname);
    if(!$connect){
        die("failed" .mysqli_connect_error());
    }
?>
    
<?php
    $Item_Name= $_POST['Item_Name'];
    $Quantity = $_POST['Quantity'];
    $address = $_POST['address'];
    $sql = "INSERT INTO purchase (Item_Name,Quantity,address) VALUES ('$Item_Name','$Quantity','$address')";
    $result = mysqli_query($connect,$sql);
    if($result){
        echo "successful";
    }
    else{
        echo "error";
    }
    mysqli_close($connect);

?>