<?php
    include_once "../../layouts/head.php";
    include_once "../../layouts/navbar.php";
    include_once "../../veander/config.php";
   if(isset($_GET['show'])){
     $id=$_GET['show'];
     $sclcamp = " SELECT * FROM `camps` WHERE id = $id ";
     $campdata = mysqli_query($conn, $sclcamp);
     $camp=$campdata->fetch_assoc();
     $start=strtotime($camp['start_at']);
     $end=strtotime($camp['end_at']);
     $duration=$end-$start;
   }
?>

<h1 class="text-center text-secondary fw-bold my-4">List Of Camps</h1>
    <div class="container col-md-6 my-4">
        <div class="card border border-2 border-dark bg-primary p-4 text-center text-light shadow-lg">
            <h3>Title : <?= $camp['title'] ?></h3>
            <hr>
            <h3>Description : <?= $camp['description'] ?></h3>
            <hr>
            <h3>Start at : <?= $camp['start_at'] ?></h3>
            <hr>
            <h3>End at : <?= $camp['end_at'] ?></h3>
            <hr>
            <h3>Duration : <?= intval($duration/(60*60*24))." Days"; ?></h3>
        </div>
    </div>
<?php
    include_once "../../layouts/script.php";
?>