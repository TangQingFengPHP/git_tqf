<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $heading; ?></h1>
    <ul>
      <?php
        foreach ($tolist as $item):
      ?>
      <li><?php echo $item;?></li>
    <?php endforeach;?>
    </ul>
</html>
