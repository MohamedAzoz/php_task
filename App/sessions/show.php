<?php
    include_once "../../layouts/head.php";
    include_once "../../layouts/navbar.php";
    include_once "../../veander/config.php";
   if(isset($_GET['show'])){
     $id=$_GET['show'];
     $scltrainer = " SELECT * FROM `sessions` WHERE id = $id ";
     $trainerdata = mysqli_query($conn, $scltrainer);
     $session=$trainerdata->fetch_assoc();

     $campselct = " SELECT id FROM `camps`";
     $camps = mysqli_query($conn, $campselct);
     $campall=$camps->fetch_assoc();
     $session['id_camp']=$campall['id'];

   }
?>

<h1 class="text-center text-secondary fw-bold my-4">List Of Sessions</h1>
    <div class="container col-md-6 my-4">
        <div class="card border border-2 border-dark bg-primary p-4 text-center text-light shadow-lg">
            <h3>Duration : <?= $session['duration']." hours" ?></h3>
            <hr>
            <h3>Session number : <?= $session['session_number'] ?></h3>
            <hr>
            <h3>Cotent : <?= $session['cotent'] ?></h3>
            <hr>
            <h3>Id camp : <?= $session['id_camp'] ?></h3>
        </div>
    </div>
<?php
    include_once "../../layouts/script.php";
?>