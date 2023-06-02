<?php

//<div>
    //     着物の柄、モチーフ: <input type="text" name="pattern">
    //   </div>
    //   <div>
    //     模様の色: <input type="text" name="color">
    //   </div>
    //   <div>
    //     生地の色: <input type="date" name="cloth_color">
    //   </div>
    //   <div>
    //     旅館: <input type="date" name="hotel">
    //   </div>
    //   <div>
    //     <button>検索</button>
    //   </div>
    // </fieldset>
if (
  !isset($_POST['pattern']) || $_POST['pattern'] === '' ||
  !isset($_POST['color']) || $_POST['color'] === '' ||
  !isset($_POST['cloth_color']) || $_POST['cloth_color'] === '' ||
  !isset($_POST['hotel']) || $_POST['hotel'] === ''
  ) {
    exit('paramError');
  }

  $pattern = $_POST['pattern'];
  $color = $_POST['color'];
  $cloth_color = $_POST['cloth_color'];
  $hotel = $_POST['hotel'];

// DB接続したいファイル（todo_create.php, todo_read.php, など）
include('functions.php');
$pdo = connect_to_db();

$sql = 'INSERT INTO kimono_search(id, pattern, color, cloth_color, hotel, created_at, updated_at, deleted_at) VALUES(NULL, :pattern, :color, :cloth_color, :hotel, now(), now(), NULL)';

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':pattern', $pattern, PDO::PARAM_STR);
$stmt->bindValue(':color', $color, PDO::PARAM_STR);
$stmt->bindValue(':cloth_color', $cloth_color, PDO::PARAM_STR);
$stmt->bindValue(':hotel', $hotel, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:kimono_input.php");
exit();
