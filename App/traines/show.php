<?php
    include_once "../../layouts/head.php";
    include_once "../../layouts/navbar.php";
    include_once "../../veander/config.php";
   if(isset($_GET['show'])){
     $id=$_GET['show'];
     $scltraine = " SELECT * FROM `traines` WHERE id = $id ";
     $trainedata = mysqli_query($conn, $scltraine);
     $traine=$trainedata->fetch_assoc();
   }
?>

<h1 class="text-center text-secondary fw-bold my-4">List Of Camps</h1>
    <div class="container col-md-6 my-4">
        <div class="card border border-2 border-dark bg-primary p-4 text-center text-light shadow-lg">
            <h3>Name : <?= $traine['first_name']." ".$traine['last_name'] ?></h3>
            <hr>
            <h3>Gender : <?= $traine['age'] ?></h3>
            <hr>
            <h3>Phone : <?= $traine['phone'] ?></h3>
            <hr>
            <h3>Experince : <?= $traine['college'] ?></h3>
            <hr>
            <h3>Experince : <?= $traine['level_number'] ?></h3>
        </div>
    </div>
<?php
    include_once "../../layouts/script.php";
?>