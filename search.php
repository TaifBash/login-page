<?php
// connect to MySQL
$host="127.0.0.1";
$user="root";
$password="";
$database="projectdb2";
$connect=  mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_errno()){
    die("cannot connect to database field:". mysqli_connect_error());
    }
//  else {
//     echo 'Database is connected';  
// }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <center>
            <h1>Search on employee from MySQL table</h1>
    </center>
    <body>
         <form action='' method='POST'>
            
            Enter SSN:<input type='text' name='SSN'>
            <input type='submit' name='submit' value='Search'>
            
        </form>
 <?php
// Read from database
            if (isset($_POST['submit'])) 
            { 
                $SSN=$_POST['SSN'];
                $query="select * from employee where SSN like " . $SSN . "";
                $result=  mysqli_query($connect, $query);
            
            if(! $result){
        echo'<script>alert("<< ERROR in Query >>");</script>';
            }
        }
?>
        <ul>
<?php
// Write SSN from DB and Cheack
        if (isset($_POST['submit'])) 
        {  
          $row = mysqli_fetch_assoc($result);
               
            if ($row['SSN'] == $SSN)
                {
                    while(true){           
                     echo '<li> FNAME:'     .$row['FNAME'].     "</li>"; echo '<li> MINIT:'     .$row['MINIT'].     "</li>";
                     echo '<li> LNAME:'     .$row['LNAME'].     "</li>"; echo '<li> SSN:'       .$row['SSN'].       "</li>";
                     echo '<li> BDATE:'     .$row['BDATE'].     "</li>"; echo '<li> ADDRESS:'   .$row['ADDRESS'].   "</li>";
                     echo '<li> SEX:'       .$row['SEX'].       "</li>"; echo '<li> SALARY:'    .$row['SALARY'].    "</li>";
                     echo '<li> SUPER_SSN:' .$row['SUPER_SSN']. "</li>"; echo '<li> DNO:'       .$row['DNO'].       "</li>";
                     break;
                    }
                }else{
                    echo'<script>alert("The SSN is NOT exist in the DB");</script>';
                }
        }
?>
        </ul>
    </body>
</html>
<?php
// close connection
mysqli_close($connect);
?>