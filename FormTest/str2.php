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
<p>Набрано баллов с предыдущей страницы: <?php echo $_SESSION['res2'] ?></p>

<form action="" method="post">
    <p>Question 1</p>
    <label>
        <input type="text" name="tQuest" value="Answer1">
    </label>

    <p>Question 2</p>
    <label>
        <input type="text" name="tQuest" value="Answer2">
    </label>

    <p>Question 3</p>
    <label>
        <input type="text" name="tQuest" value="Answer3">
    </label>

    <p>Question 4</p>
    <label>
        <input type="text" name="tQuest4" value="Answer4">
    </label>

    <p>Question 5</p>
    <label>
        <input type="text" name="tQuest5" value="Answer5">
    </label>

    <p>Question 6</p>
    <label>
        <input type="text" name="tQuest6" value="Answer6">
    </label>

    <p>Question 7</p>
    <label>
        <input type="text" name="tQuest7" value="Answer7">
    </label>

    <p>Question 8</p>
    <label>
        <input type="text" name="tQuest8" value="Answer8">
    </label>

    <p>Question 9</p>
    <label>
        <input type="text" name="tQuest9" value="Answer9">
    </label>

    <p>Question 10</p>
    <label>
        <input type="text" name="tQuest10" value="Answer10">
    </label>

    <br>
    <br>
    <button>Finish</button>

</form>
<?php
$ot = 0;
$not = 0;
$questions = ['Answer1', 'Answer2', 'Answer3', 'Answer4', 'Answer5', 'Answer6', 'Answer7', 'Answer8', 'Answer9', 'Answer10'];
//     'Question1'=> [
//             'quest'=> 'tQuest',
//         'value'=>'Answer'
//    ],
//    'Question2'=>[
//        'quest'=> 'tQuest',
//        'value'=>'Answer'
//    ],
//    'Question3'=>[
//        'quest'=> 'tQuest',
//        'value'=>'Answer'
//    ]
//];
for ($i = 0; $i < 10; $i ++) {
    if (isset($_POST["tQuest{$i}"])) {
        if ($_POST["tQuest{$i}"] == $questions[$i]) {
            $ot += 5;
        } else {
            $not ++;
        }
    }
}
//if (isset($_POST['tQuest'])){
//    foreach ($_POST as $k =>$v) {
//        if (array_key_exists($k, $questions)) {
//            $ot += 5;
//        } else {
//            $not ++;
//        }
//    }
//}

$_SESSION['res3'] = $ot;
?>
<p>Набрано баллов: <?php echo $_SESSION['res3']; ?></p>
<p>Правильных ответов: <?php echo $ot; ?></p>
<p>Неправильных ответов: <?php echo $not; ?></p>
<a href='result.php' class="btn">Next</a>
</div>
</body>
</html>