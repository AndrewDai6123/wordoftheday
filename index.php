<?php
    $HITS_COUNTER_FILE = "hits.txt";

    function hit_counter(){
        global $HITS_COUNTER_FILE;
        $hits = file_get_contents($HITS_COUNTER_FILE);
        $hits++;
        file_put_contents($HITS_COUNTER_FILE, $hits);
        return $hits;
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
    //Use include to have top.html show on index.php page (Assignment part 2)
    include "top.html";?>
    <p>Welcome to George's GRE vocab word of the day page!
        Each time you visit, a random word and it's definition
        will be shown.
    </p>
    <p><a href="word.php">See the word of the day!</a></p>
    <hr>
    <p>This page has been accessed <?= hit_counter() ?> times.</p>
</body>
</html>