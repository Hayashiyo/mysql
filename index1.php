<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>學生管理系統</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<style>
*{margin: 0;
padding: 0;}

table{border: solid ,black;
text-align: center;
}


</style>

<body>
    <h1>學生管理系統</h1>
    <?php
    $dsn = "mysql:host=localhost;charset=utf8;dbname=schoolnew";
    $pdo = new PDO($dsn, 'root', '');

    $sql = "SELECT * FROM `students` LIMIT 20";

    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_NAMED);

    // echo "<pre>";
    // print_r($rows);
    // echo "</pre>";

    ?>
    <table>
        <tr>
            <td>學號</td>
            <td>姓名</td>
            <td>生日</td>
            <td>畢業國中</td>
            <td>年齡</td>
        </tr>
        <?php
        foreach ($rows as $row) {
            $age=round((strtotime('now')-strtotime($row['birthday']))/(60*60*24*365),1);
            echo "<tr>";
            echo "<td>{$row['school_num']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row[ 'birthday']}</td>";
            echo "<td>{$row['graduate_at']}</td>";
            echo"<td>{$age}</td>";
            echo "</tr>";
        }
        ?>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>