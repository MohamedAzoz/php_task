<?php
    include_once '../../layouts/head.php';
    include_once '../../layouts/navbar.php';
    include_once '../../veander/config.php';
    include_once '../../veander/function.php';

    if(isset($_GET['update'])){
        $id=$_GET['update'];
        $sclct = " SELECT * FROM `trainers` WHERE id = $id";
        $trainersofdata = mysqli_query($conn, $sclct);
        $gettrainer=$trainersofdata->fetch_assoc();
    }
    if(isset($_POST['submit'])){
        $phone=$_POST['phone'];
        $experince=$_POST['experince'];
        $updatetrainers="UPDATE `trainers` SET `phone`='$phone',`experince`='$experince' WHERE id = $id";
        mysqli_query($conn, $updatetrainers);
        redirect('trainers');
    }
   
?>

<h1 class="text-center my-3 text-secondary fw-bold">Update Trainer</h1>
<div class="container col-md-6">
    <div class="card border border-0 bg-primary p-4">
        <form method="post">
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="phone">Phone : </label>
                <input required id="phone" name="phone" type="text" class="form-control">
            </div>
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="experince">Experince : </label>
                <input required id="experince" name="experince" type="text" class="form-control">
            </div>
            <button class="btn btn-warning mx-auto d-block my-3" type="submit" name="submit">update</button>
        </form>
    </div>
</div>



<?php
    include_once "../../layouts/script.php";
?>