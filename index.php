<?php

    require('vendor/autoload.php');

    $youtube = new Madcoda\Youtube\Youtube(array('key' => '**KEY**'));

    $video = $youtube->getVideoInfo('rie-hPVJ7Sw');

    print_r($video);