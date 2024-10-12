<?php
    include_once '../../layouts/head.php';
    include_once '../../layouts/navbar.php';
    include_once '../../veander/config.php';
    include_once '../../veander/function.php';

    if(isset($_POST['submit'])){
        $title=$_POST['title'];
        $description=$_POST['description'];
        $start_at=$_POST['start_at'];
        $end_at=$_POST['end_at'];
        $insertcamp="INSERT INTO `camps` (`title`, `description`, `start_at`, `end_at`) VALUES ('$title', '$description', '$start_at', '$end_at')";
        mysqli_query($conn, $insertcamp);
        redirect('camps/index.php');
    }
   
?>

<h1 class="text-center my-3 text-secondary fw-bold">Add new Camp</h1>
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
            <button class="btn btn-light mx-auto d-block my-3" type="submit" name="submit">submit</button>
        </form>
    </div>
</div>



<?php
    include_once "../../layouts/script.php";
?>