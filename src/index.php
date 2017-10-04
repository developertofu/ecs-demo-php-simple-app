<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simple PHP App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!--<style>body {margin-top: 40px; background-image: url("http://i.memecaptain.com/gend_images/2Ru_CA.jpg");}</style>-->
        <style>body {margin-top: 40px; background-color: #008000;}</style>
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <?php
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, "http://ec2-52-23-174-240.compute-1.amazonaws.com:8200/v1/secret/bleachertest/mysqlpwd");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");


            $headers = array();
            $headers[] = "X-Vault-Token: dd02d6f0-b4b5-6e28-18f2-192f4ac19f1b";
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            $result = curl_exec($ch);
            echo $result;

            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            curl_close ($ch);
        ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

</html>
