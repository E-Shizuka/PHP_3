<?php
include("functions.php");

// var_dump($_POST);
// exit();


// データ受け取り
$id = $_GET['id'];

// DB接続
$pdo = connect_to_db();

// SQL実行

//WHEREでidの設定を忘れると全てのデータが削除されるので注意！
$sql = 'DELETE FROM todo_table WHERE id=:id';

//削除扱い（手順、考え方）
////実際に削除せずに削除した時間を追加（初期値nullでdbに追加しておく）
////表示するphpでWHERE 削除した時間 IS NULLを取ってくるように設定する

$stmt = $pdo->prepare($sql);

//バインド変数
$stmt->bindValue(':id', $id, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:kimono_read.php");
exit();

