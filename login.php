<?php
// connect to MySQL
$host="127.0.0.1";
$user="root";
$password="";
$database="projectdb2";
$connect=  mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_errno()){
    die("cannot connect to database field". mysqli_connect_error());   
}
//  else {
//     echo 'Database is connected';  
// }
if(isset($_POST['submit']))
{
// Cheack from DB
        $UserName = $_POST['UserName'];
        $password = $_POST['password'];
        $query="SELECT * FROM admin WHERE UserName='$UserName' AND password='$password' ";
        $result = mysqli_query($connect, $query);
        if(!$result){
                echo'<script>alert("<< ERROR in Query >>");</script>';
            }

// Read (password and User Name) from DB and Cheack
        $row = mysqli_fetch_assoc($result);
        if ( $row['UserName'] == $UserName && $row['password'] == $password){
         	header("location:search.php");
        }else{
            echo'<script>alert("Infromation is NOT correct (password or User Name)");</script>';}
}
	?>
<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="UTF-8">
        <title></title>
    </head>
<body>
<center><h1>Welcome</h1></center>	
	<center><h2>Login</h2></center>
<center>
	
	<form method = "POST" action="login.php">
		<input type="text" name="UserName" placeholder="Enter User Name: " required autofocus> <br><br>
		<input type="password" name="password" placeholder="Enter Password: " maxlength="15" required> <br><br>
		<input type="submit" name="submit" value="Login">
</form>
</center>
</body>
</html>
<?php
// close connection
mysqli_close($connect);
?>