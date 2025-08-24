<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
</head>

<body>
  <p>
    <?php
    $tamanegi = ['name' => '名前:玉ねぎ', 'price' => '値段:200', 'origin' => '産地:北海道'];

    echo $tamanegi['name'];
    echo '<br>';
    echo $tamanegi['price'];
    echo '<br>';
    echo $tamanegi['origin'];

    ?>
  </p>
</body>

</html>