<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Get rich like a pro, make all the money you have ever wished to make in this world" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <title><?php
        $title = "Get Rich Like A Pro";
        if(is_404()){
            $title = "page not found | ".$title;
            echo $title; 
        } else {
            echo $title;
        }
    ?></title>
</head>

<body>