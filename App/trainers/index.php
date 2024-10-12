<?php
    include_once "../../layouts/head.php";
    include_once "../../layouts/navbar.php";
    include_once "../../veander/config.php";
    include_once "../../veander/function.php";
    $selecttrainers = "SELECT * FROM `trainers`";
    $trainers = mysqli_query($conn, $selecttrainers);
    if(isset($_GET['delet'])){
        $id=$_GET['delet'];
        $delettrainers = " DELETE FROM `trainers` WHERE id = $id ";
        $trainersdata = mysqli_query($conn, $delettrainers);
        redirect('trainers');
      }
      $i=0;
?>

<h1 class="text-center text-secondary fw-bold my-3">List Of Trainers</h1>
    <div class="container col-md-6">
        <a href="./creat.php" class="btn btn-primary my-3">Add new camp</a>
        <table class="table table-primary">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Gender</th>
                        <th class="text-center" colspan="3">action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($trainers as $trainer) : ?>
                        <tr>
                            <td class="text-center"><?php echo ++$i?></td>
                            <td class="text-center"><?php echo $trainer['first_name']." ".$trainer['last_name']?></td>
                            <td class="text-center"><?php echo $trainer['gender']?></td>
                            <td class="text-center"><a href="./show.php?show=<?= $trainer['id'] ?>"><i class="bi bi-eye text-dark fs-5"></i></a></td>
                            <td class="text-center"><a href="./index.php?delet=<?= $trainer['id'] ?>"><i class="bi bi-trash3 text-danger fs-5"></i></a></td>
                            <td class="text-center"><a href="./update.php?update=<?= $trainer['id'] ?>"><i class="bi bi-pencil text-warning fs-5"></i></a></td>
                    </tr>
                        <?php endforeach ; ?>
                </tbody>
            </table>
    </div>
<?php
    include_once "../../layouts/script.php";
?>