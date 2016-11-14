<?php
	require_once("system/data.php");
	require_once("system/security.php");
?>


    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <title>Luisa - die Namensapp</title>
        <link rel="stylesheet" href="css/style.css">
        <!-- Path to Framework7 Library CSS-->
        <link rel="stylesheet" href="css/framework7.ios.min.css">
        <!-- Path to your custom app styles-->
        <link rel="stylesheet" href="css/my-app.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>

        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    </head>

    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="left">Zwischenstand </div>
            </div>
        </div>

        <div class="list_container">
            <div class="list-block">
                <ul id="ul_list">
                    <!-- one element -->
                    <li class="swipeout duell_border">
                        <div class="swipeout-content item-content duell_bg">
                            <div id="name01" class="item-media">Duell noch 2 Tage</div>
                        </div>
                        <div class="swipeout-actions-right">
                            <!-- Add this button and item will be deleted automatically -->
                            <a style="color:black; background-color:#D7FFF8;" href="#" class="action1">teilen</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--hier kommt php -->
        <!-- Listenansicht -->
        <?php 
                       $duell_id = $_GET["duell_id"];
                        $sql = "SELECT namensliste FROM duell WHERE id = $duell_id;";
                        $duell = get_result($sql)->fetch_array();
                        ?>
            <script>
                var duell_array = <?php print_r($duell['namensliste']); ?>;
                duell_array.forEach(makeList);
                //php while schlaufe und if name = gewinnername dann
                function makeList(item, index) {
                    $("ul").append("<li class='swipeout'><div class='swipeout-content item-content'><div class='item-media'>" + item + "</div><div class='item-after'><span class='badge bg-green'>5</span></div></div><div class='swipeout-actions-right'><a href='#' class='swipeout-delete'> <img style='padding: 0px 60px 0px 0px; height: 60%;' src='img/trash.svg'></a></div></li>");
                }
            </script>
            <!-- Listenansicht Ende -->
            <!-- Path to Framework7 Library JS-->
            <script type="text/javascript" src="js/framework7.min.js"></script>
            <!-- Path to your app js-->
            <script type="text/javascript" src="js/my-app.js"></script>

    </body>

    </html>