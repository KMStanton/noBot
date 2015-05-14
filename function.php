<?php
session_start();
function nobot($timegap, $processed)
{
    if (isset($_SESSION['user_time']) && $_SESSION['user_time'] != '') {
        $time = (time() - $timegap) - $_SESSION['user_time'];
        if ($time >= 0) {
            $timecheck = "TRUE";
        }
    } else {
        $time = '';
    }

    //user is not a suspected bot, and can view next page
    if (isset($timecheck)) {
//        echo "we think you're not a bot:$time";

    } else {
//        echo "we think you're a bot:$time";
        echo $processed;
    }

    $_SESSION['user_time'] = time(); //time user loaded last page
}

nobot(5, "output");
