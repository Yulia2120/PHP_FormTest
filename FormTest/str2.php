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
<!--    <label for="tQuest1">Answer1</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest" value="">-->
<!--    </label>-->
<!--    <label for="tQuest1">Answer2</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest" value="">-->
<!--    </label>-->
<!--    <label for="tQuest1">Answer3</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest" value="">-->
<!--    </label>-->
<!--    <label for="tQuest1">Answer4</label>-->
    <p>Question 2</p>
    <label>
        <input type="text" name="tQuest" value="Answer2">
    </label>
<!--    <label for="tQuest2">Answer1</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest" value="">-->
<!--    </label>-->
<!--    <label for="tQuest2">Answer2</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest" value="">-->
<!--    </label>-->
<!--    <label for="tQuest2">Answer3</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest" value="">-->
<!--    </label>-->
<!--    <label for="tQuest2">Answer4</label>-->
    <p>Question 3</p>
    <label>
        <input type="text" name="tQuest" value="Answer3">
    </label>
<!--    <label for="tQuest3">Answer1</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest" value="">-->
<!--    </label>-->
<!--    <label for="tQuest3">Answer2</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest" value="Answer">-->
<!--    </label>-->
<!--    <label for="tQuest3">Answer3</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest" value="">-->
<!--    </label>-->
<!--    <label for="tQuest3">Answer4</label>-->
    <p>Question 4</p>
    <label>
        <input type="text" name="tQuest4" value="Answer4">
    </label>
<!--    <label for="tQuest4">Answer1</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest4" value="">-->
<!--    </label>-->
<!--    <label for="tQuest4">Answer2</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest4" value="">-->
<!--    </label>-->
<!--    <label for="tQuest4">Answer3</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest4" value="">-->
<!--    </label>-->
<!--    <label for="tQuest4">Answer4</label>-->
    <p>Question 5</p>
    <label>
        <input type="text" name="tQuest5" value="Answer5">
    </label>
<!--    <label for="tQuest5">Answer1</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest5" value="">-->
<!--    </label>-->
<!--    <label for="tQuest5">Answer2</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest5" value="">-->
<!--    </label>-->
<!--    <label for="tQuest5">Answer3</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest5" value="">-->
<!--    </label>-->
<!--    <label for="tQuest5">Answer4</label>-->
    <p>Question 6</p>
    <label>
        <input type="text" name="tQuest6" value="Answer6">
    </label>
<!--    <label for="tQuest6">Answer1</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest6" value="">-->
<!--    </label>-->
<!--    <label for="tQuest6">Answer2</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest6" value="">-->
<!--    </label>-->
<!--    <label for="tQuest6">Answer3</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest6" value="">-->
<!--    </label>-->
<!--    <label for="tQuest6">Answer4</label>-->
    <p>Question 7</p>
    <label>
        <input type="text" name="tQuest7" value="Answer7">
    </label>
<!--    <label for="tQuest7">Answer1</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest7" value="">-->
<!--    </label>-->
<!--    <label for="tQuest7">Answer2</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest7" value="">-->
<!--    </label>-->
<!--    <label for="tQuest7">Answer3</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest7" value="">-->
<!--    </label>-->
<!--    <label for="tQuest7">Answer4</label>-->
    <p>Question 8</p>
    <label>
        <input type="text" name="tQuest8" value="Answer8">
    </label>
<!--    <label for="tQuest8">Answer1</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest8" value="">-->
<!--    </label>-->
<!--    <label for="tQuest8">Answer2</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest8" value="">-->
<!--    </label>-->
<!--    <label for="tQuest8">Answer3</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest8" value="">-->
<!--    </label>-->
<!--    <label for="tQuest8">Answer4</label>-->
    <p>Question 9</p>
    <label>
        <input type="text" name="tQuest9" value="Answer9">
    </label>
<!--    <label for="tQuest9">Answer1</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest9" value="">-->
<!--    </label>-->
<!--    <label for="tQuest9">Answer2</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest9" value="">-->
<!--    </label>-->
<!--    <label for="tQuest9">Answer3</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest9" value="">-->
<!--    </label>-->
<!--    <label for="tQuest9">Answer4</label>-->
    <p>Question 10</p>
    <label>
        <input type="text" name="tQuest10" value="Answer10">
    </label>
<!--    <label for="tQuest10">Answer1</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest10" value="">-->
<!--    </label>-->
<!--    <label for="tQuest10">Answer2</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest10" value="">-->
<!--    </label>-->
<!--    <label for="tQuest10">Answer3</label>-->
<!--    <label>-->
<!--        <input type="text" name="tQuest10" value="">-->
<!--    </label>-->
<!--    <label for="tQuest10">Answer4</label>-->
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