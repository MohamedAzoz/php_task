<?php
    include_once '../../layouts/head.php';
    include_once '../../layouts/navbar.php';
    include_once '../../veander/config.php';
    include_once '../../veander/function.php';

    if(isset($_GET['update'])){
        $id=$_GET['update'];
        $sclct = " SELECT * FROM `sessions` WHERE id = $id";
        $trainersofdata = mysqli_query($conn, $sclct);
        $gettrainer=$trainersofdata->fetch_assoc();
    }
    if(isset($_POST['submit'])){
        $duration=$_POST['duration'];
        $session_number=$_POST['session_number'];
        $cotent=$_POST['cotent'];
        $session_number=$_POST['session_number'];
        $updatetrainers="UPDATE `sessions` SET `duration`='$duration',`session_number`='$session_number',`cotent`='$cotent' WHERE id = $id";
        mysqli_query($conn, $updatetrainers);
        redirect('sessions');
    }
?>
<h1 class="text-center my-3 text-secondary fw-bold">Update Session</h1>
<div class="container col-md-6">
    <div class="card border border-0 bg-primary p-4">
        <form method="post">
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="duration">Duration : </label>
                <input required id="duration" name="duration" type="number" class="form-control">
            </div>
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="session_number">Session number : </label>
                <input required id="session_number" name="session_number" type="number" class="form-control">
            </div>
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="cotent">Cotent : </label>
                <input required id="cotent" name="cotent" type="text" class="form-control">
            </div>
            <button class="btn btn-warning mx-auto d-block my-3" type="submit" name="submit">update</button>
        </form>
    </div>
</div>



<?php
    include_once "../../layouts/script.php";
?>