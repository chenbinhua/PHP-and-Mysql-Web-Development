<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="0">
    <tr>
        <td algin="center">distance</td>
        <td algin="center">cost</td>
    </tr>
    <?php
   for($distance=50;$distance<=250;$distance+=50){
       echo '<tr><td>'.$distance.'</td>'.'<td>'.($distance/10).'</td></tr>';
   }
    ?>
</table>
</body>
</html>