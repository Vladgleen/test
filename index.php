<?
header('Content-type: text/html; charset=utf-8');

$date = array(rand(1,time()), //создем массив date с юниксовыми метками
    rand(1,time()),
    rand(1,time()),
    rand(1,time()),
    rand(1,time())
    );

echo "Наименьший день ".min(date('d', $date[0]),
    date('d', $date[1]),
    date('d', $date[2]),
    date('d', $date[3]),
    date('d', $date[4])
    )."<br/>"; // опредлеляем и выводим наиемньший день

echo "Наибольший месяц ".max(date('m', $date[0]),
    date('m', $date[1]),
    date('m', $date[2]),
    date('m', $date[3]),
    date('m', $date[4])
    )."<br/>"; // опредлеляем и выводим наибольший Месяц

    sort($date);
    print_r($date);

    echo "<br/>";
    $selected = array_slice($date, -1, 1);
    echo $selected.  date(' d.m.Y, H:i:s'), "<br/>";
    
    echo date_default_timezone_set('America/New_York');
    echo date_default_timezone_get();
    
    

    
    ?>

