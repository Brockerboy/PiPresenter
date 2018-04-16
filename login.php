<!DOCTYPE html>
<html>
<!--Created By: Nicholas Riley and Brock Gibson
    Application is designed as a kiosk display for the Mizzou Christian Campus House-->
<head>
	<title>CCH Slideshow Login</title>
	<meta charset="utf-8">
	<link href="app.css" rel="stylesheet" type="text/css">
    <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <script>
//        jquery ui Function
       $(function(){
           $("input[type=submit]").button();
       });


    </script>

    <style>
        #container {
            background-color: lightslategray;
        }
    </style>
</head>
<body>
    <div id="loginWidget" class="ui-widget">
        <h1 class="ui-widget-header">Login</h1>

        <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
        ?>

        <form action="loginPHP.php" method="POST">

            <input type="hidden" name="action" value="do_login">

            <div class="stack">
                <label for="username">User name:</label>
                <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" autofocus value="<?php print $username; ?>">
            </div>

            <div class="stack">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all">
            </div>

            <div class="stack">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

</body>
</html>