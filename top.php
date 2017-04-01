<?php
// parse the url into htmlentites to remove any suspicious vales that someone
// may try to pass in. htmlentites helps avoid security issues.

$phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");

// break the url up into an array, then pull out just the filename
$path_parts = pathinfo($phpSelf);

 ?>	
<!DOCTYPE html>
<html lang="en">
    <head>
<!-- you can add php code here (similar to nav.php) to print a different title on each page -->
        <title>Codefest Team 5</title>

        <meta charset="utf-8">
        <meta name="author" content="Team 5">
        <meta name="description" content="Where are you? Learn UVM campus">

        <!-- see: http://webdesign.tutsplus.com/tutorials/htmlcss-tutorials/quick-tip-dont-forget-the-viewport-meta-tag/ -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/custom.css" type="text/css" media="screen">

    </head>

    <?php
// giving each body tag an id really helps with css later on
            print '<body id="' . $path_parts['filename'] . '">';
    ?>
<!-- ######################     Start of Body   ############################ -->