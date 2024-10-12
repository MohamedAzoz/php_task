<?php
    include_once '../../layouts/head.php';
    include_once '../../layouts/navbar.php';
    include_once '../../veander/config.php';
    include_once '../../veander/function.php';

    if(isset($_GET['update'])){
        $id=$_GET['update'];
        $sclct = " SELECT * FROM `traines` WHERE id = $id";
        $trainersofdata = mysqli_query($conn, $sclct);
        $gettrainer=$trainersofdata->fetch_assoc();
    }
    if(isset($_POST['submit'])){
        $age=$_POST['age'];
        $phone=$_POST['phone'];
        $college=$_POST['college'];
        $level_number=$_POST['level_number'];
        $updatetrainers="UPDATE `traines` SET `age`='$age',`phone`='$phone',`college`='$college',`level_number`='$level_number' WHERE id = $id";
        mysqli_query($conn, $updatetrainers);
        redirect('traines');
    }
   
?>

<h1 class="text-center my-3 text-secondary fw-bold">Update Traine</h1>
<div class="container col-md-6">
    <div class="card border border-0 bg-primary p-4">
        <form method="post">
        <div class="form-group my-3">
                <label class="text-light fw-bold" for="age">Age : </label>
                <input required id="age" name="age" type="number" class="form-control">
            </div>
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="phone">Phone : </label>
                <input required id="phone" name="phone" type="text" class="form-control">
            </div>
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="college">College : </label>
                <input required id="college" name="college" type="text" class="form-control">
            </div>
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="level_number">level number : </label>
                <input required id="level_number" name="level_number" type="number" class="form-control">
            </div>
            <button class="btn btn-warning mx-auto d-block my-3" type="submit" name="submit">update</button>
        </form>
    </div>
</div>



<?php
    include_once "../../layouts/script.php";
?>