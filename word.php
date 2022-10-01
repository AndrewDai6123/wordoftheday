<?php
    $WORDS_FILE = "allwords.txt";

    function get_random_word(){
        global $WORDS_FILE;
        $lines = file($WORDS_FILE);
        $random_index = rand(0,count($lines)-1);
        $random_line = $lines[$random_index];
        $tokens = explode("\t",$random_line);
        list($word, $part, $defn) = $tokens;

        ?>
        <blockquote>
            <p>
                <?= $word ?> - <?= $part ?> <br>
                <?= $defn ?>
            </p>
        </blockquote>
    <?php
    }

    //A loop to handle generating the vocab images on the word.php page (Assignment part 1)
    function generate_vocab_images(){
        for ($i = 1; $i <=12; $i++){
            if ($i == 6 && 12)
            {
                echo '<img src="vocab.jpg" alt="vocab guy"><br>';
            }
            else{ 
                echo '<img src="vocab.jpg" alt="vocab guy">';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Word of the Day!</title>
    <link rel="stylesheet" href="word.css">
</head>
<body>
    <?php 
    //Use include to have top.html show on word.php page (Assignment part 2)
    include "top.html";?>
    <p>Your word of the day:</p>
    <?php
        get_random_word();
    ?>
</body>
</html>