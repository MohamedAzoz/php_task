<?php
    include_once '../../layouts/head.php';
    include_once '../../layouts/navbar.php';
    include_once '../../veander/config.php';
    include_once '../../veander/function.php';

    $sclcamp = " SELECT * FROM `camps`";
    $camps = mysqli_query($conn, $sclcamp);

    if(isset($_POST['submit'])){
        $duration=$_POST['duration'];
        $session_number=$_POST['session_number'];
        $cotent=$_POST['cotent'];
        $id_camp=$_POST['id_camp'];
         $campname="SELECT * FROM camps WHERE id = $id_camp";
         $camps = mysqli_query($conn, $campname);

        $insertcamp="INSERT INTO `sessions` ( `duration`, `session_number`, `cotent`, `id_camp`) VALUES ('$duration', '$session_number', '$cotent','$id_camp')";
        mysqli_query($conn, $insertcamp);
        redirect('sessions');
    }
   
?>

<h1 class="text-center my-3 text-secondary fw-bold">Add new Session</h1>
<div class="container col-md-6">
    <div class="card border border-0 bg-primary p-4">
        <form method="post">
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="duration">Duration : </label>
                <input required id="duration" name="duration" type="number" class="form-control">
            </div>
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="session_number">session number : </label>
                <input required id="session_number" name="session_number" type="number" class="form-control">
            </div>
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="id_camp">Slect camp : </label>
                <select name="id_camp" id="id_camp">
                    <option value=""></option>
                <?php foreach ($camps as $camp) : ?>
                    <option value="<?php echo $camp['id']?>" name="id"><?php echo $camp['title']?></option>
                    <?php endforeach ; ?>
                </select>
            </div>
            <div class="form-group my-3">
                <label class="text-light fw-bold" for="cotent">cotent : </label>
                <input required id="cotent" name="cotent" type="text" class="form-control">
            </div>
            <button class="btn btn-light mx-auto d-block my-3" type="submit" name="submit">submit</button>
        </form>
    </div>
</div>



<?php
    include_once "../../layouts/script.php";
?>