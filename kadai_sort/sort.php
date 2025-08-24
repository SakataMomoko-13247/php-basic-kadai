<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
</head>

<body>
  <p>
    <?php
    echo '昇順にソートします。<br>';

    $nums = array(15, 4, 18, 23, 10);

    sort($nums);
    foreach ($nums as $key => $val) {
      echo "$val\n <br>";
    }

    echo '降順にソートします。<br>';
    rsort($nums);
    foreach ($nums as $key => $val) {
      echo "$val\n <br>";
    }

    ?>
  </p>
</body>

</html>