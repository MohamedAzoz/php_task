<?php
    include_once "../../layouts/head.php";
    include_once "../../layouts/navbar.php";
    include_once "../../veander/config.php";
   if(isset($_GET['show'])){
     $id=$_GET['show'];
     $scltrainer = " SELECT * FROM `trainers` WHERE id = $id ";
     $trainerdata = mysqli_query($conn, $scltrainer);
     $trainer=$trainerdata->fetch_assoc();
   }
?>

<h1 class="text-center text-secondary fw-bold my-4">List Of Trainers</h1>
    <div class="container col-md-6 my-4">
        <div class="card border border-2 border-dark bg-primary p-4 text-center text-light shadow-lg">
            <h3>Name : <?= $trainer['first_name']." ".$trainer['last_name'] ?></h3>
            <hr>
            <h3>Gender : <?= $trainer['gender'] ?></h3>
            <hr>
            <h3>Phone : <?= $trainer['phone'] ?></h3>
            <hr>
            <h3>Experince : <?= $trainer['experince'] ?></h3>
        </div>
    </div>
<?php
    include_once "../../layouts/script.php";
?>