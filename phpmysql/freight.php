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
<!--数组-->
    <?php
    $prices=array('tires'=>100,'oil'=>50,'spark plugs'=>11);
    foreach ($prices as $key=>$price){
        echo $key.'-'.$price.'<br>';
    }
    $products=array(
            array('TIR','tires',100),
            array('OIL','oil',10),
            array('SPK','Spark Plugs',4),
    );
    for($row=0;$row<3;$row++){
        for($column=0;$column<3;$column++){
            echo '|'.$products[$row][$column];
        }
        echo '|<br>';
    }
    //二维数组描述性索引
    $products=array(
            array('Code'=>'TIR',
                   'Description'=>'Tires',
                   'Price'=>100),
            array('Code'=>'OIL',
                    'Description'=>'Oil',
                    'Price'=>10),
            array('Code'=>'SPK',
                    'Description'=>'Spark ',
                    'Price'=>4),
    );

    for($row=0;$row<3;$row++){
        while(list($key,$value) = each($products[$row])){
            echo "|$value";
        }
        echo '|<br>';
    }

    //随机排序
    $pictures=['tire.jpg','oil.jpg','spark_plug.jpg','door.jpg','steering_wheel.jpg','thermostat.jpg','wiper_blade.jpg','gasket.jpg'];
    shuffle($pictures);
    echo '<br > 随机函数<br>';
    for($i=0;$i<3;$i++){
        echo $pictures[$i].'  ';
    }
    ?>

</body>
</html>