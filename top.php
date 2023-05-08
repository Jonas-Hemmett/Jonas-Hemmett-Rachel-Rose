<?php

$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);

$path_parts = pathinfo($phpSelf);
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Scooby-Doo</title>
        <meta name="author" content="Jonas Hemmett and Rachel Rose">
        <meta name="Jonas Hemmett's Site" content="Scooby-Doo">
        <meta name="description" content="Web Design Final">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" href="resources/icons/favicon.ico">

        <link rel="stylesheet" 
        href="css/custom.css?version=<?php print time(); ?>" 
        type="text/css">

        <link rel="stylesheet" 
        media="(max-width: 820px)"  
        href="css/custom-tablet.css?version=<?php print time (); ?>" 
        type=text/css>
        <!--Changed from 800 to 820 to fit the screen size of an iPad Air-->

        <link rel="stylesheet" 
        media="(max-width: 600px)"
        href="css/custom-phone.css?version=<?php print time (); ?>" 
        type=text/css>
       
       
    </head>
<?php 
//lab8start
    print '<body class="grid-layout positioning"
                id="' . $path_parts['filename'] . '">';
    print '<!--####     Start Of Body   ####-->';
    include 'connect-DB.php';
    print PHP_EOL;
    include 'header.php';
    print PHP_EOL;
    include 'nav.php';
//lab8end
?>