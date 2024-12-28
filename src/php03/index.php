<?php

require_once('config/status_codes.php');

$random_numbers = array_rand($status_codes, 4);

foreach ($random_numbers as $index) {
    $options[] = $status_codes[$index];
}
$question = $options[mt_rand(0, 3)];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
<header class="header">
    <div class="header_inner">
        <a class="header_logo" href="/php03">Status Code Quiz</a>
    </div>
</header>
<main>
    <div class="quiz_content">
        <div class="question">
            <p class="question_text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
            <p class="question_text"><?php echo $question['description'] ?></p>
        </div>
        <form class="quiz-form" action="result.php" method="post">
            <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>">
            <div class="quiz-form_item">
                <?php foreach ($options as $option): ?>
                <div class="quiz-form_group">
                    <input class="quiz-form_radio" id="<?php echo $option['code'] ?>" type="radio" name="option" value="<?php echo $option['code'] ?>">
                    <label class="quiz-form_label" for="<?php echo $option['code'] ?>">
                        <?php echo $option['code'] ?>
                    </label>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="quiz-form_button">
                <button class="quiz-form_button-submit" type="submit">
                回答
                </button>
            </div>
        </form>
    </div>
</main>
</body>

</html>