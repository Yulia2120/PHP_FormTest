<?php
session_start();

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <title>Test</title>
</head>
<body>
<div class="container">
<p>Набрано баллов: <?php echo $_SESSION['res1'] + $_SESSION['res2'] + $_SESSION['res3']; ?></p>
<br>
<a href='str.php'>Пройти тест заново</a>
<br>
</div>
</body>
</html>