<?php
$insert=false;
if(Isset($_POST['name'])){
$_SERVER="localhost";
$username="root";
$passwoer="";

$con=mysqli_connect($_SERVER,$username,$passwoer);

if(!$con){
    die("connection to this database failed due to".mysqli_connect_error());
}
// echo "Success connecting to the db";
$name=$_POST["naam"];
$gender=$_POST["g"];
$age=$_POST["a"];
$email=$_POST["email"];
$phone=$_POST["ph"];
$desc=$_POST["d"];
    $sql= "INSERT INTO `tour`.`k_trip` (`Name`, `age`, `gender`, `email`, `phone`, `other`, `entered date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp()); ";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcom to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="https://www.tourmyindia.com/blog//wp-content/uploads/2019/08/Hampi-virupaksha-temple.jpg" alt="Karnataka">
    <div class="container">
        <h1>Welcom to UBDT Dvangere Karnataka Trip form</h1>
<?php
            if($insert==true)
            echo "<p class='col'>Thanks for submitting your form.We are happy to see you joining for the Karnataka trip.
            </p>";
?>
        <form action="index.php" method="POST">
        <input type="text" name="neme" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="a" placeholder="Enter your age">
        <input type="text" name="gender" id="g" placeholder="Enter your gender">
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <input type="Phone_no" name="Phone_no" id="Ph" placeholder="Enter your Phone_no">
        <textarea name="desc" id="d" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
       <button class="btn">Submit</button>
    </form>
    </div>
    <script src="index.js"></script>
   <!---- INSERT INTO `tour` (`si.no`, `Name`, `age`, `gender`, `email`, `phone`, `other`, `entered date`) VALUES ('1', 'testname', '21', 'female', 'thia@.com', '7625528393', 'this is my first ever php myadmin message', current_timestamp()); -->
</body>
</html>
?>