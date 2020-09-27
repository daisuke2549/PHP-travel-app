<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><?php echo 'Hello World'; ?></h1>
<h1><?php echo 'PHP マスターになるぞ'; ?></h1>
<h1>
  <?php
    $score = 96;
    echo $score;
  ?>
</h1>
<h2>
<?php
    function calCircleArea($radius) {
      return $radius;
    }
    echo calCircleArea(6);
  ?>
</h2>
<h1>
<?php
    $score = 80;
    if ($score == 80) {
      echo 'scoreは80';
      echo '</br>';
    }
    if ($score >= 80) {
      echo 'scoreは80以上';
      echo '</br>';
    }
    if ($score != 79) {
      echo 'scoreは79ではない';
      echo '</br>';
    }
  ?>
</h1>

<h3>
<?php
    $scores = [96, 86, 56, 89];
    echo $scores[1];
    echo $scores[3];
      $scores[0] = 2;
    echo '変更後: '.$scores[0];
  ?>
</h3>

<h4>
<?php
$str = "abcdefghijklmn";
echo substr($str,0,9);
?>
</h4>

<h3>
<?php
$scores = [89, 76, 35, 24, 40];
foreach ($scores as $score) {
  echo $score;
}
  ?>
</h3>
<h5>
<?php
    $scores = [
      "数学" => 89,
      "英語" => 66,
      "理科" => 59,
      "社会" => 83
    ];
    echo $scores["英語"];
    echo '</br>';
    $scores["英語"] = "不明";
    echo $scores["英語"];
  ?>
</h5>


</body>
</html>