<?php
    include_once "../../layouts/head.php";
    include_once "../../layouts/navbar.php";
    include_once "../../veander/config.php";
    include_once "../../veander/function.php";
    $selectsessionss = "SELECT * FROM `sessions`";
    $sessions = mysqli_query($conn, $selectsessionss);
    if(isset($_GET['delet'])){
        $id=$_GET['delet'];
        $deletsessions = " DELETE FROM `sessions` WHERE id = $id ";
        $sessionsdata = mysqli_query($conn, $deletsessions);
        redirect('sessions');
      }
      $i=0;
?>

<h1 class="text-center text-secondary fw-bold my-3">List Of Sessions</h1>
    <div class="container col-md-6">
        <a href="./creat.php" class="btn btn-primary my-3">Add new Sessions</a>
        <table class="table table-primary">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Session number</th>
                        <th class="text-center">Cotent</th>
                        <th class="text-center" colspan="3">action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($sessions as $session) : ?>
                        <tr>
                            <td class="text-center"><?php echo ++$i?></td>
                            <td class="text-center"><?php echo $session['session_number']?></td>
                            <td class="text-center"><?php echo $session['cotent']?></td>
                            <td class="text-center"><a href="./show.php?show=<?= $session['id'] ?>"><i class="bi bi-eye text-dark fs-5"></i></a></td>
                            <td class="text-center"><a href="./index.php?delet=<?= $session['id'] ?>"><i class="bi bi-trash3 text-danger fs-5"></i></a></td>
                            <td class="text-center"><a href="./update.php?update=<?= $session['id'] ?>"><i class="bi bi-pencil text-warning fs-5"></i></a></td>
                    </tr>
                        <?php endforeach ; ?>
                </tbody>
            </table>
    </div>
<?php
    include_once "../../layouts/script.php";
?>