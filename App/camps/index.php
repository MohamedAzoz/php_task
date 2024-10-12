<?php
    include_once "../../layouts/head.php";
    include_once "../../layouts/navbar.php";
    include_once "../../veander/config.php";
    include_once "../../veander/function.php";
    $selectCamps = "SELECT * FROM `camps`";
    $camps = mysqli_query($conn, $selectCamps);
    if(isset($_GET['delet'])){
        $id=$_GET['delet'];
        $deletcamp = " DELETE FROM `camps` WHERE id = $id ";
        $campdata = mysqli_query($conn, $deletcamp);
        redirect('camps');
      }
      $i=0;
?>

<h1 class="text-center text-secondary fw-bold">List Of Camps</h1>
    <div class="container col-md-6">
        <a href="./creat.php" class="btn btn-primary my-3">Add new camp</a>
        <table class="table table-primary ">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Description</th>
                        <th class="text-center" colspan="3">action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($camps as $camp) : ?>
                        <tr>
                            <td class="text-center"><?php echo ++$i?></td>
                            <td class="text-center"><?php echo $camp['title']?></td>
                            <td class="text-center"><?php echo $camp['description']?></td>
                            <td class="text-center"><a href="./show.php?show=<?= $camp['id'] ?>"><i class="bi bi-eye text-dark fs-5"></i></a></td>
                            <td class="text-center"><a href="./index.php?delet=<?= $camp['id'] ?>"><i class="bi bi-trash3 text-danger fs-5"></i></a></td>
                            <td class="text-center"><a href="./update.php?edit=<?= $camp['id'] ?>"><i class="bi bi-pencil text-warning fs-5"></i></a></td>
                    </tr>
                        <?php endforeach ; ?>
                </tbody>
            </table>
    </div>
<?php
    include_once "../../layouts/script.php";
?>