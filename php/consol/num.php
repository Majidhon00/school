
  <br>
  <h4>Savol</h4>
  <input type="text" name="sovol" placeholder="Sovol" class="form-control"><br>
  <form action="">
    <div class="row">
      <div class="col-lg-10">
        <h5>javoblar</h5>
        <textarea name="jovoba" cols="30" rows="2" placeholder="Jovob-1" class="form-control"></textarea><br>
      </div>
      <div class="col-lg-2">
        <p>tug'ri javob</p>
        <input type="radio" name="chek" value="A"> A
      </div>
    </div>
    <div class="row">
      <div class="col-lg-10">
        <textarea name="jovobb" cols="30" rows="2" placeholder="Jovob-2" class="form-control"></textarea><br>
      </div>
      <div class="col-lg-2">
        <input type="radio" name="chek" value="B"> B
      </div>
    </div>
    <div class="row">
      <div class="col-lg-10">
        <textarea name="jovobc" cols="30" rows="2" placeholder="Jovob-3" class="form-control"></textarea><br>
      </div>
      <div class="col-lg-2">
        <input type="radio" name="chek" value="C"> C
      </div>
    </div>

  <br>
  <input type="submit" class="btn btn-primary" name="submitj" value="send">
  </form>
  <?

  if (isset($_GET['submitj'])) {
    $sav = addslashes($_GET['sovol']);
    $j1 = addslashes($_GET['jovoba']);
    $j2 = addslashes($_GET['jovobb']);
    $j3 = addslashes($_GET['jovobc']);
    $radio = $_GET['chek'];
    $con = new mysqli('localhost', 'root', 'root', 'school');
    $sql = "insert into s_j(savol,j_1,j_2,j_3,t_j) values('{$sav}','{$j1}','{$j2}','{$j3}','{$radio}')";
    $q = $con->query($sql);
  }
  ?>