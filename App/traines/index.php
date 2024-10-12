<?php
    include_once "../../layouts/head.php";
    include_once "../../layouts/navbar.php";
    include_once "../../veander/config.php";
    include_once "../../veander/function.php";
    $selecttraines = "SELECT * FROM `traines`";
    $traines = mysqli_query($conn, $selecttraines);
    if(isset($_GET['delet'])){
        $id=$_GET['delet'];
        $delettraines = " DELETE FROM `traines` WHERE id = $id ";
        $trainesdata = mysqli_query($conn, $delettraines);
        redirect('traines');
      }
      $i=0;
?>

<h1 class="text-center text-secondary fw-bold my-3">List Of Traines</h1>
    <div class="container col-md-6">
        <a href="./creat.php" class="btn btn-primary my-3">Add new camp</a>
        <table class="table table-primary">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Age</th>
                        <th class="text-center" colspan="3">action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($traines as $traine) : ?>
                        <tr>
                            <td class="text-center"><?php echo ++$i?></td>
                            <td class="text-center"><?php echo $traine['first_name']." ".$traine['last_name']?></td>
                            <td class="text-center"><?php echo $traine['age']?></td>
                            <td class="text-center"><a href="./show.php?show=<?= $traine['id'] ?>"><i class="bi bi-eye text-dark fs-5"></i></a></td>
                            <td class="text-center"><a href="./index.php?delet=<?= $traine['id'] ?>"><i class="bi bi-trash3 text-danger fs-5"></i></a></td>
                            <td class="text-center"><a href="./update.php?update=<?= $traine['id'] ?>"><i class="bi bi-pencil text-warning fs-5"></i></a></td>
                    </tr>
                        <?php endforeach ; ?>
                </tbody>
            </table>
    </div>
<?php
    include_once "../../layouts/script.php";
?>