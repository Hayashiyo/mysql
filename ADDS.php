<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=schoolnew";

$pdo = new PDO($dsn, 'root', '');

$sql="INSERT INTO `students`
 (`id`, `school_num`, `name`, 
 `birthday`, `uni_id`, `addr`, 
 `parents`, `tel`, `dept`, 
 `graduate_at`, `status_code`)
  VALUES
   (NULL, 915084, '人',
  1984-06-12, 'F133322235', '家', 
  '人父','0223344567L', 3, 
  5, '001')";

// $pdo->query($sql);
$res=$pdo->exec($sql);
echo $res;


?>