<?php
/* 
8- We have a 2D array for instructors (outer is numeric, inner is associative):

Write a script to display instructors data in a dynamic HTML nested list:
 
•kareem fouad
    o backend developer
    o	php
•ahmed bahnasy
    o frontend developer
    o angular
  •ahmed nasr
    o backend developer
    o .net

*/
$instructors = [
    'kareem fouad' => [
        'job' => 'backend developer',
        'track' => 'php',
    ],
    'ahmed bahnasy' => [
        'job' => 'frontend developer',
        'track' => 'angular',
    ],
    'ahmed nasr' => [
        'job' => 'backend developer',
        'track' => '.net',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> display instructors data in a dynamic HTML nested list </title>
</head>

<body>
    <ul>
        <?php
        $keys = array_keys($instructors);
        for ($i = 0; $i < count($instructors); $i++) { ?>
            <li> <?php echo $keys[$i] ?></li>
            <ul>
                <?php foreach ($instructors[$keys[$i]] as $key => $value) { ?>
                    <li> <?php echo "$key:  $value" ?> </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </ul>
</body>

</html>
