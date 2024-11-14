?php
// Include function page
include_once('lib/functions/userFunction.php');

if (isset($_POST['btnLogin'])) {
    $result = Authentication($_POST['userName'], $_POST['userPass']); // Use square brackets here
    echo($result);
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMS</title>
    <!--Link Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
</head>
<body style=" background-image:url('images/glitter-golden-bokeh-lights-scaled.jpeg');">
    

<div class="container" style="margin-top: 80px;"> 
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="background-color: rgba(0, 0, 0, 0.4);">
                <div class="card-header" style="color:white">
                    Login Section
                </div>