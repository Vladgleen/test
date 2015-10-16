<?
//Задание 1
header('Content-type: text/html; charset=utf-8');

$name='Влад';
$age=21;

echo 'Меня зовут '.$name.' <br />';
echo 'Мне '.$age.' год <br />';

?>

<?
//Задание 2
define('CONSTANT', 'Владимир');
echo CONSTANT;

?>

<?
//Задание 3
echo '<br />';
$book = array('title'=>'"Java for dummies"', 'author'=>'unknown', 'pages'=>'600');
echo 'Недавно я прочитал книгу '.$book['title'].' , автор которой '.$book['author'].' и в которой около '.$book['pages'].' страниц';

?>

<?
//Задание 4
echo '<br />';

$book1 = array(
    "title1" => "Зов ктулху",
    "author1" => "Говард Лафвркрафт",
    "pages1" => 44
    );
$book2 = array(
    "title2" => "Халявы нет:начало пути",
    "author2" => "Амиран Сардаров",
    "pages2" => 114
    );
$book = array($book1,$book2);
echo 'Недавно я прочитал книги '.$book[0]['title1'].' и '.$book[1]['title2'].', написанные соответственно авторами '.$book[0]['author1'].' и '.$book[1]['author2'].', я осилил в сумме '.($book[0]['pages1']+$book[1]['pages2']).' страницы, что вполне ожидаемо';

?>
