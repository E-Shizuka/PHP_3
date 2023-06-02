<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/reset.css" />
  <link rel="stylesheet" type="text/css" href="css/sanitize.css" />
  <link
    href="https://fonts.googleapis.com/earlyaccess/kokoro.css"
    rel="stylesheet"
  />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
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
      <!-- <div>
        模様の色: <input type="text" name="color">
      </div> -->
      <div>
      模様の色:
        <select name="color">
          <option value="">未選択</option>
          <option value="赤系">赤系（赤、ピンク等）</option>
          <option value="黄色系">黄色系（黄色、オレンジ）</option>
          <option value="緑系">緑系（緑、黄緑、青緑、オリーブ）</option>
          <option value="青系">青系（青、水色、紺）</option>
          <option value="紫系">紫系（紫、青紫、赤紫）</option>
          <option value="茶色系">茶色系（茶色、ベージュ）</option>
          <option value="黒系">黒系（黒、グレー）</option>
          <option value="白系">白</option>
        </select>
        </select>
      </div>
      <!-- <div>
        生地の色: <input type="text" name="cloth_color">
      </div> -->
      <div>
        生地の色:
        <select name="cloth_color">
          <option value="">未選択</option>
          <option value="白系">白</option>
          <option value="赤系">赤系（赤、ピンク等）</option>
          <option value="黄色系">黄色系（黄色、オレンジ）</option>
          <option value="緑系">緑系（緑、黄緑、青緑、オリーブ）</option>
          <option value="青系">青系（青、水色、紺）</option>
          <option value="紫系">紫系（紫、青紫、赤紫）</option>
          <option value="茶色系">茶色系（茶色、ベージュ）</option>
          <option value="黒系">黒系（黒、グレー）</option>
        </select>
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