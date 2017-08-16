<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simple PHP App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <style>body {margin-top: 40px; background-image: https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjuz9fGidvVAhVljFQKHUmNAR8QjRwIBw&url=https%3A%2F%2Ftwitter.com%2Fronoglesby%2Fstatus%2F505041849615015936&psig=AFQjCNE7OlHqIez9FqVfYaxiWXEUPiYmLA&ust=1502949546726812;}</style>
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <div class="container">
            <div class="hero-unit">
                <h1>Simple PHP App</h1>
                <h2>Congratulations</h2>
                <p>Your PHP application is now running on a container in Amazon ECS.</p>
                <p>The container is running PHP version <?php echo phpversion(); ?>.</p>
                <?php
                        $myfile = fopen("/var/www/my-vol/date", "r") or die("");
                        echo fread($myfile,filesize("/var/www/my-vol/date"));
                        fclose($myfile);
                ?>

            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

</html>
