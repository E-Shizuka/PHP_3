<?php
// DB接続したいファイル（todo_create.php, todo_read.php, など）
include('functions.php');
$pdo = connect_to_db();

// $sql = 'SELECT * FROM todo_table ORDER BY deadline ASC';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // 入力された検索キーワードを取得
  $pattern = $_POST['pattern'];
  $color = $_POST['color'];
  $cloth_color = $_POST['cloth_color'];
  $hotel = $_POST['hotel'];

  // SQLクエリを構築
  $sql = 'SELECT * FROM kimono_search WHERE 1=1'; // 初期クエリ

  if (!empty($pattern)) {
    $sql .= " AND pattern LIKE '%$pattern%'";
  }
  if (!empty($color)) {
    $sql .= " AND color LIKE '%$color%'";
  }
  if (!empty($cloth_color)) {
    $sql .= " AND cloth_color LIKE '%$cloth_color%'";
  }
  if (!empty($hotel)) {
    $sql .= " AND hotel LIKE '%$hotel%'";
  }

  $sql .= ' ORDER BY updated_at ASC';

  $pdo->prepare($sql);
  $stmt = $pdo->prepare($sql);
  
  try {
  $stmt->execute();
} catch (PDOException $e) {
  echo "SQL Error: " . $e->getMessage();
}
  
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";
foreach ($result as $record) {
  $output .= "
    <tr>
      <td>{$record["pattern"]}</td>
      <td>{$record["color"]}</td>
      <td>{$record["cloth_color"]}</td>
      <td>{$record["hotel"]}</td>
      </tr>
      ";
    }
    
    // <td>
    //   <a href='kimono_edit.php?id={$record["id"]}'>edit</a>
    // </td>
    // <td>
    //   <a href='kimono_delete.php?id={$record["id"]}'>delete</a>
    // </td>

}


//編集画面や削除するためにリンクをつける。その際にidを取得する

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>着物検索</title>
</head>

<body>
  <fieldset>
    <legend>着物検索結果</legend>
    <a href="kimono_input.php">検索画面</a>
    <table>
      <thead>
        <tr>
          <th>検索結果</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>