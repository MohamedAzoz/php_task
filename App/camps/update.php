<?php
    include_once '../../layouts/head.php';
    include_once '../../layouts/navbar.php';
    include_once '../../veander/config.php';
    include_once '../../veander/function.php';

    if(isset($_GET['edit'])){
        $id=$_GET['edit'];
        $sclct = " SELECT * FROM `camps` WHERE id = $id ";
        $campofdata = mysqli_query($conn, $sclct);
        $getcamp=$campofdata->fetch_assoc();
    }
    if(isset($_POST['submit'])){
        $title=$_POST['title'];
        $description=$_POST['description'];
        $start_at=$_POST['start_at'];
        $end_at=$_POST['end_at'];
        $updatecamp="UPDATE `camps` SET `title`='$title',`description`='$description',`start_at`='$start_at',`end_at`='$end_at' WHERE id=$id";
        mysqli_query($conn, $updatecamp);
        redirect('camps');
    }
   
?>

<h1 class="text-center my-3 text-secondary fw-bold">Update Camp</h1>
<div class="container col-md-6">
    <div class="card border border-0 bg-primary p-4">
        <form method="post">
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="title">title : </label>
                <input required id="title" name="title" type="text" class="form-control">
            </div>
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="description">Description : </label>
                <input required id="description" name="description" type="text" class="form-control">
            </div>
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="start_at">Start_at : </label>
                <input required id="start_at" name="start_at" type="date" class="form-control">
            </div>
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="end_at">End_at : </label>
                <input required id="end_at" name="end_at" type="date" class="form-control">
            </div>
            <button class="btn btn-warning mx-auto d-block my-3" type="submit" name="submit">update</button>
        </form>
    </div>
</div>



<?php
    include_once "../../layouts/script.php";
?>