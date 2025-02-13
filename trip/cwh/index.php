<?php
$insert = false;
if(isset($_POST['name'])){

   $server = "localhost";
   $username = "root";
   $password = "";

   $con = mysqli_connect($server,$username,$password);

   if($con){}

if(!$con){
    die("connection to this database is failed". mysqli_connect_error());

}
// echo "Success connecting to the db";

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
 
$sql = "INSERT INTO `trip` . `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`)
VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
// echo $sql;


 if($con->query($sql) == true){
    // echo "Successfully Inserted";
    $insert = true;
 }
 else{
    echo "ERROR: $sql <br> $con->error";
    // $not_insert = true;
 }
 $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>
    <link rel="stylesheet" href="../cwh/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Dancing+Script:wght@400..700&family=Pacifico&display=swap" rel="stylesheet">
</head>


    <img src="../cwh/images/bg.jpg" class="bg"   alt="IIT Kanpur">
    <div class="container">
        <h1>Welcome To IIT Kanpur U.S. Trip Form</h1>
        <p>Enter your details to confirm your participation in the trip</p>
        <?php
        if ($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
} 
?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="" placeholder="Enter your name">
            <input type="text" name="age" id="" placeholder="Enter your age">
            <input type="text" name="gender" id="" placeholder="Enter your gender">
            <input type="email" name="email" id="" placeholder="Enter your email">
            <input type="phone" name="phone" id="" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your text here..."></textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->


        </form>

            
    </div>
    
    <script src="index.js"></script>

</body>
</html>