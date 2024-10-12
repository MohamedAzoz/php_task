<?php
    include_once '../../layouts/head.php';
    include_once '../../layouts/navbar.php';
    include_once '../../veander/config.php';
    include_once '../../veander/function.php';

    if(isset($_POST['submit'])){
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $gender=$_POST['gender'];
        $phone=$_POST['phone'];
        $experince=$_POST['experince'];
        $insertcamp="INSERT INTO `trainers` (`first_name`, `last_name`, `gender`, `phone`, `experince`) VALUES ('$first_name', '$last_name', '$gender', '$phone', '$experince')";
        mysqli_query($conn, $insertcamp);
        redirect('trainers/index.php');
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
                <label class="text-light fw-bold" for="gender">gender : </label>
                <select name="gender" id="gender">
                    <option value=""></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="phone">phone : </label>
                <input required id="phone" name="phone" type="text" class="form-control">
            </div>
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="experince">experince : </label>
                <input required id="experince" name="experince" type="text" class="form-control">
            </div>
            <button class="btn btn-light mx-auto d-block my-3" type="submit" name="submit">submit</button>
        </form>
    </div>
</div>



<?php
    include_once "../../layouts/script.php";
?>