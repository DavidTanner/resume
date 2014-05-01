<?php
/**
 * Created by PhpStorm.
 * User: David Tanner
 * Date: 4/28/14
 * Time: 10:58 PM
 */

$parent = "accordian_section";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Professional Me</title>

    <meta name="viewport" content="width=device-width user-scalable=no">

    <link rel="shortcut icon" type="image/x-icon" href="FAVICON.ICO">
    <link rel='stylesheet' href="css/bootstrap-theme.min.css" type="text/css">
    <link rel='stylesheet' href="css/bootstrap.min.css" type="text/css">
    <link rel='stylesheet' href="css/jumbotron-narrow.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <style type="text/css">

        body {
            font-family: Verdana, serif;
            color: #00275d;
        }

        #title h4 {
            display: inline-block;
        }

        #accordian-buttons div{
            display: inline-block;
        }

        .wgb a, #title a {
            color: inherit;
        }

        .wgb a:active, .wgb a:hover {
            color: white;
        }

        label.btn-primary {
            background-color: #00275d;
        }

        .wgb {
            color: white;
            background-color: #00275d;
            text-shadow:
                -.025em -.025em 0 #dab37b,
                .025em -.025em 0 #dab37b,
                -.025em .025em 0 #dab37b,
                .025em .025em 0 #dab37b;
        }

        hr {
            color: #dab37b;
            margin-top: 10px;
            margin-bottom: 10px;
            border-top: 2px solid #dab37b;
        }

        .panel-group p {
            text-indent: 5%;
        }



    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div id="title" class="col-sm-12 text-center">
            <h1><span class="wgb">&nbsp;David Tanner&nbsp;</span></h1>
            <h4>CELL&nbsp;<a href="tel:(801) 810-6443">(801) 810-6443</a></h4>
            <h4 class="hidden-xs">&nbsp;|&nbsp;</h4>
            <h4>EMAIL&nbsp;<a href="mailto:david.joel.tanner@gmail.com">david.joel.tanner@gmail.com</a></h4>
        </div>
    </div>
    <hr>

    <div class="panel-group" id="<?php echo $parent;?>">
        <div>
            <div id="accordian-buttons">
                <h4>
<?php
    $sections = array();
    include "src/profile.php";
?>
                </h4>
            </div>
<?php
    foreach ($sections as $section) {
        create_collapse_body($section["entry"], $section["body"], $section["in_collapse"]);
    }
?>
        </div>
        <hr>
    </div>
</div>
<?php include "src/footer.php";?>