<?php
    include_once '../../layouts/head.php';
    include_once '../../layouts/navbar.php';
    include_once '../../veander/config.php';
    include_once '../../veander/function.php';

    if(isset($_POST['submit'])){
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $age=$_POST['age'];
        $phone=$_POST['phone'];
        $college=$_POST['college'];
        $level_number=$_POST['level_number'];
        $insertcamp="INSERT INTO `traines` (`first_name`, `last_name`, `age`, `phone`, `college`, `level_number`) VALUES ('$first_name', '$last_name', '$age', '$phone', '$college', '$level_number')";
        mysqli_query($conn, $insertcamp);
        redirect('traines/index.php');
    }
   
?>

<h1 class="text-center my-3 text-secondary fw-bold">Add new Trainer</h1>
<div class="container col-md-6">
    <div class="card border border-0 bg-primary p-4">
        <form method="post">
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="first_name">first name : </label>
                <input required id="first_name" name="first_name" type="text" class="form-control">
            </div>
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="last_name">last name : </label>
                <input required id="last_name" name="last_name" type="text" class="form-control">
            </div>
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="age">Age : </label>
                <input required id="age" name="age" type="number" class="form-control">
            </div>
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="phone">phone : </label>
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
            <button class="btn btn-light mx-auto d-block my-3" type="submit" name="submit">submit</button>
        </form>
    </div>
</div>



<?php
    include_once "../../layouts/script.php";
?>