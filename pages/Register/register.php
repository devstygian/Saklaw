<?php 
$servername  = "localhost";
$username = "root";
$password = "";
$dbname = "saklaw";

$conn = mysqli_connect($servername, $username,$password, $dbname);

if (!$conn){
die ("Connection Failed: " . mysqli_connect_error());
}
    $action = $_POST['signin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $fullname = $_POST['fullname'];
    $zipcode = $_POST['zipcode'];
    $birthday = $_POST['birthday'];
    $gmail = $_POST['gmail'];
    $number = $_POST['number'];

    if(!empty($username) && !empty($fullname) && !empty($address) && !empty($gmail) && !empty($zipcode) && !empty($contact) && !empty($birthday) && !empty($password)){
    if($action == "ADD"){     
            $sql = "insert into users(username, gmail, password, address, fullname, zipcode, birthday, number) VALUES ('$username', '$gmail', '$password', '$address', '$fullname', '$zipcode', '$birthday', '$number')";
            $msg = "Registration successful!";             
            }  
           if(mysqli_query( $conn, $sql))
                            {

                       echo $msg;         
                            }  
             else   
                    { 
                  
        echo "Error ". $sql . "<br>";
        mysqli_error($conn);
             }
        
            }
   echo "<br><br><br><a a href='home.html'> Back to signUp List</a>"

?>