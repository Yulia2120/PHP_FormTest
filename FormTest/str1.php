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
<p>Набрано баллов с предыдущей страницы: <?php echo $_SESSION['res1'] ?></p>

<form action="" method="post">
    <p>Question 1</p>
    <label>
        <input type="checkbox" name="cQuest1" value="Answer1">
    </label>
    <label for="cQuest1">Answer1</label>
    <label>
        <input type="checkbox" name="cQuest1" value="Answer2">
    </label>
    <label for="cQuest1">Answer2</label>
    <label>
        <input type="checkbox" name="cQuest1" value="Answer3">
    </label>
    <label for="cQuest1">Answer3</label>
    <label>
        <input type="checkbox" name="cQuest1" value="Answer4">
    </label>
    <label for="cQuest1">Answer4</label>
    <p>Question 2</p>
    <label>
        <input type="checkbox" name="cQuest2" value="Answer1">
    </label>
    <label for="cQuest2">Answer1</label>
    <label>
        <input type="checkbox" name="cQuest2" value="Answer2">
    </label>
    <label for="cQuest2">Answer2</label>
    <label>
        <input type="checkbox" name="cQuest2" value="Answer3">
    </label>
    <label for="cQuest2">Answer3</label>
    <label>
        <input type="checkbox" name="cQuest2" value="Answer4">
    </label>
    <label for="cQuest2">Answer4</label>
    <p>Question 3</p>
    <label>
        <input type="checkbox" name="cQuest3" value="Answer1">
    </label>
    <label for="cQuest3">Answer1</label>
    <label>
        <input type="checkbox" name="cQuest3" value="Answer2">
    </label>
    <label for="cQuest3">Answer2</label>
    <label>
        <input type="checkbox" name="cQuest3" value="Answer3">
    </label>
    <label for="cQuest3">Answer3</label>
    <label>
        <input type="checkbox" name="cQuest3" value="Answer4">
    </label>
    <label for="cQuest3">Answer4</label>
    <p>Question 4</p>
    <label>
        <input type="checkbox" name="cQuest4" value="Answer1">
    </label>
    <label for="cQuest4">Answer1</label>
    <label>
        <input type="checkbox" name="cQuest4" value="Answer2">
    </label>
    <label for="cQuest4">Answer2</label>
    <label>
        <input type="checkbox" name="cQuest4" value="Answer3">
    </label>
    <label for="cQuest4">Answer3</label>
    <label>
        <input type="checkbox" name="cQuest4" value="Answer4">
    </label>
    <label for="cQuest4">Answer4</label>
    <p>Question 5</p>
    <label>
        <input type="checkbox" name="cQuest5" value="Answer1">
    </label>
    <label for="cQuest5">Answer1</label>
    <label>
        <input type="checkbox" name="cQuest5" value="Answer2">
    </label>
    <label for="cQuest5">Answer2</label>
    <label>
        <input type="checkbox" name="cQuest5" value="Answer3">
    </label>
    <label for="cQuest5">Answer3</label>
    <label>
        <input type="checkbox" name="cQuest5" value="Answer4">
    </label>
    <label for="cQuest5">Answer4</label>
    <p>Question 6</p>
    <label>
        <input type="checkbox" name="cQuest6" value="Answer1">
    </label>
    <label for="cQuest6">Answer1</label>
    <label>
        <input type="checkbox" name="cQuest6" value="Answer2">
    </label>
    <label for="cQuest6">Answer2</label>
    <label>
        <input type="checkbox" name="cQuest6" value="Answer3">
    </label>
    <label for="cQuest6">Answer3</label>
    <label>
        <input type="checkbox" name="cQuest6" value="Answer4">
    </label>
    <label for="cQuest6">Answer4</label>
    <p>Question 7</p>
    <label>
        <input type="checkbox" name="cQuest7" value="Answer1">
    </label>
    <label for="cQuest7">Answer1</label>
    <label>
        <input type="checkbox" name="cQuest7" value="Answer2">
    </label>
    <label for="cQuest7">Answer2</label>
    <label>
        <input type="checkbox" name="cQuest7" value="Answer3">
    </label>
    <label for="cQuest7">Answer3</label>
    <label>
        <input type="checkbox" name="cQuest7" value="Answer4">
    </label>
    <label for="cQuest7">Answer4</label>
    <p>Question 8</p>
    <label>
        <input type="checkbox" name="cQuest8" value="Answer1">
    </label>
    <label for="cQuest8">Answer1</label>
    <label>
        <input type="checkbox" name="cQuest8" value="Answer2">
    </label>
    <label for="cQuest8">Answer2</label>
    <label>
        <input type="checkbox" name="cQuest8" value="Answer3">
    </label>
    <label for="cQuest8">Answer3</label>
    <label>
        <input type="checkbox" name="cQuest8" value="Answer4">
    </label>
    <label for="cQuest8">Answer4</label>
    <p>Question 9</p>
    <label>
        <input type="checkbox" name="cQuest9" value="Answer1">
    </label>
    <label for="cQuest9">Answer1</label>
    <label>
        <input type="checkbox" name="cQuest9" value="Answer2">
    </label>
    <label for="cQuest9">Answer2</label>
    <label>
        <input type="checkbox" name="cQuest9" value="Answer3">
    </label>
    <label for="cQuest9">Answer3</label>
    <label>
        <input type="checkbox" name="cQuest9" value="Answer4">
    </label>
    <label for="cQuest9">Answer4</label>
    <p>Question 10</p>
    <label>
        <input type="checkbox" name="cQuest10" value="Answer1">
    </label>
    <label for="cQuest10">Answer1</label>
    <label>
        <input type="checkbox" name="cQuest10" value="Answer2">
    </label>
    <label for="cQuest10">Answer2</label>
    <label>
        <input type="checkbox" name="cQuest10" value="Answer3">
    </label>
    <label for="cQuest10">Answer3</label>
    <label>
        <input type="checkbox" name="cQuest10" value="Answer4">
    </label>
    <label for="cQuest10">Answer4</label>
    <br>
    <br>
    <button>Result</button>

</form>

<?php
$ot = 0;
$not = 0;
if (isset($_POST['cQuest1'])) {
    if (($_POST['cQuest1'] != 'Answer1') && ($_POST['cQuest1'] != 'Answer2') ) {
        $ot+=3;
    }else{$not++;}
}

if (isset($_POST['cQuest2'])) {
    if (($_POST['cQuest2'] != 'Answer1') && ($_POST['cQuest2'] != 'Answer2') ) {
        $ot+=3;
    }else{$not++;}
}
if(isset($_POST['cQuest3'])){
    if (($_POST['cQuest3'] !='Answer1') && ($_POST['cQuest3'] != 'Answer2')) {
        $ot+=3;
    }else{$not++;}
}
if(isset($_POST['cQuest4'])){
    if (($_POST['cQuest4'] !='Answer1') && ($_POST['cQuest4'] != 'Answer2')) {
        $ot+=3;
    }else{$not++;}
}
if(isset($_POST['cQuest5'])){
    if (($_POST['cQuest5'] !='Answer1') && ($_POST['cQuest5'] != 'Answer2')) {
        $ot+=3;
    }else{$not++;}
}
if(isset($_POST['cQuest6'])){
    if (($_POST['cQuest6'] !='Answer1') && ($_POST['cQuest6'] != 'Answer2')) {
        $ot+=3;
    }else{$not++;}
}
if(isset($_POST['cQuest7'])){
    if (($_POST['cQuest7'] !='Answer1') && ($_POST['cQuest7'] != 'Answer2')) {
        $ot+=3;
    }else{$not++;}
}
if(isset($_POST['cQuest8'])){
    if (($_POST['cQuest8'] !='Answer1') && ($_POST['cQuest8'] != 'Answer2')) {
        $ot+=3;
    }else{$not++;}
}
if(isset($_POST['cQuest9'])){
    if (($_POST['cQuest9'] !='Answer1') && ($_POST['cQuest9'] != 'Answer2')) {
        $ot+=3;
    }else{$not++;}
}
if(isset($_POST['cQuest10'])){
    if (($_POST['cQuest10'] !='Answer1') && ($_POST['cQuest10'] != 'Answer2')) {
        $ot+=3;
    }else{$not++;}
}
$_SESSION['res2'] = $ot;
?>
<p>Набрано баллов: <?php echo $_SESSION['res2']; ?></p>
<p>Правильных ответов: <?php echo $ot; ?></p>
<p>Неправильных ответов: <?php echo $not; ?></p>
 <a href='str2.php' class="btn">Next</a>
</div>
</body>
</html>
