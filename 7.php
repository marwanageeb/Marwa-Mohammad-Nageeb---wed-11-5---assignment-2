<?php
/* 
7- We have a numeric array for names:
$names = ['ahmed', 'mohammed', 'hasan'];
Write a script to display names in a dynamic(HTML list):
 •ahmed
 •mohammed
 •hasan
*/
$names = ['ahmed', 'mohammed', 'hasan'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display names in a dynamic HTML list</title>
</head>
<body>
    <ul>
        <?php
        foreach($names as $name)
        {
        ?>
        <li><?php echo $name;?></li>
        <?php }?>
    </ul>
</body>
</html>