<?
if (isset($_POST['ser']))
{
  
  ?>
    <table class="table table-active ">
      <th>ism</th>
      <th>email</th>
      <th>tel</th>
      <th>vaqti</th>
      <th>tastiqlash</th>
      <?
     include "hosting.php";
      $sql = "select * from insert_login where name like '%".$_POST['ser']."%'";
      $q = $con->query($sql);
      while ($r2 = $q->fetch_object()) { ?>
        <tr>
          <td><?= $r2->name ?></td>
          <td><a href="#"><?= $r2->login ?></a></td>
          <td><?= $r2->tel ?></td>
          <td><?= $r2->time ?></td>
          <td><a href="<?= $r2->id ?>" class="btn btn-danger del"><i class="fas fa-trash"></i></a>
            <?
            if ($r2->tip == 0) {
            ?><a href="?t=<?= $r2->id ?>" class="btn btn-success"><i class="fas fa-check"></i></a></td><? } else { echo "Tastiqlandi"; } ?>
        </tr>
      <?
      }
      echo "</table>";
}