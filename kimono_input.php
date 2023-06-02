<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>着物検索</title>
</head>

<body>
  <form action="kimono_read.php" method="POST">
    <fieldset>
      <legend>着物検索画面</legend>
      <a href="kimono_read.php">検索画面</a>
      <div>
        着物の柄、モチーフ: <input type="text" name="pattern">
      </div>
      <div>
        模様の色: <input type="text" name="color">
      </div>
      <div>
        生地の色: <input type="text" name="cloth_color">
      </div>
      <div>
        旅館: <input type="text" name="hotel">
      </div>
      <div>
        <button>検索</button>
      </div>
    </fieldset>
  </form>

</body>

</html>