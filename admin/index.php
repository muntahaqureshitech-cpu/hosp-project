<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php 
require_once "master/linkcss.php";
?>

</head>
<body>
<?php 
require_once "master/header.php";
?>
<div class="container-xxl">
    <div class="row">
        <div class="col-lg-3">
            <?php 
              require_once "master/side_nav.php";
            ?>
        </div>
        <div class="col-lg-9">
            <h1 class="my-3">Dashboard</h1>
        </div>
    </div>
</div>
    


<?php 
require_once "master/linkjs.php";
?>
</body>
</html>