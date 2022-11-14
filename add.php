<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=schoolnew";
$pdo = new PDO($dsn, 'root', '');

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>新增學生</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <h2>NEW生</h2>
  <form action="api/ADDS" method="post">
<table>
    <tr>
      <td>學號</td>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <td>生日</td>
      <td><input type="date" name="birthday"></td>
    </tr>
    <tr>
      <td>UID</td>
      <td><input type="text" name="UID" id=""></td>
    </tr>
    <tr>
      <td>ADDR</td>
      <td><input type="text" name="ADDR" id=""></td>
    </tr>
    <tr>
      <td>家長</td>
      <td><input type="text" name="UID" id=""></td>
    </tr>
    <tr>
      <td>TEL</td>
      <td></td>
    </tr>
    <tr>
      <td>科目</td>
      <td><select name="dept">
          <?php
          $sql = "SELECT * FROM `dept`";
          $depts = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
          foreach ($depts as $dept) {
            echo "<option value='{$dept['id']}'>{$dept['name']}</option>";
          }
          ?>

        </select>
      </td>
    </tr>
    <tr>
      <td>畢業</td>
      <td><select name="dept">
      <?php
          $sql = "SELECT * FROM `graduate_school`";
          $depts = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
          foreach ($depts as $dept) {
            echo "<option value='{$dept['id']}'>{$dept['name']}</option>";
          }
          ?>
          </select>
      </td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <input type="submit" class="btn btn-success" value="Submit Button">
    </table>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>