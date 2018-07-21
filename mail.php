<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251" />
</head>

<body><?php
$url = "contacts.html"; //Ваша страница, где вы будете ставить форму обратной связи.
$title = "http://крым-агротехкомплект.рф/"; //адрес вашего сайта
$subject = "Письмо с сайта $title"; //Тема отпровляемых вам сообщений
$admail = "arik.mirzoyan@gmil.com"; //Ваш e-mail, на который будут отправляться письма
$back = "<p><a href=\"javascript: history.back()\">Назад</a></p>";

if(@$_POST['nick'] or @$_POST['email'] or @$_POST['delivery'] or @$_POST['msg'])
{
@$nick = $_POST['nick'] or die("Убедитесь, что вы ввели свое имя!$back");
@$email = $_POST['email'] or die("Убедитесь, что вы ввели свой E-mail или новер телефона!$back");
@$delivery = $_POST['delivery'] or die("Убедитесь, что вы ввели тему сообщения!$back");
@$msg = $_POST['msg'] or die("Убедитесь, что вы ввели сообшение!$back");



//if(!eregi("^[a-z0-9\._-]+@[a-z0-9\._-]+\.[a-z]{2,4}\$", $email)) 
//{
//echo "Убедитесь, что вы ввели корректный E-mail!$back";
//exit;
//}

$content = "\nПользователь $nick!\n
Почта или номер телефон: $email\n
Отправил(а) вам письмо с сайта - \"$title\"\n
Тема - $delivery, со следующим содержанием:\n\n$msg";
if(!@mail($admail, $subject, $content))
{
echo "Ошибка при отправке письма. Пожалуйста сообщите об этом администратору данного сайта, используя любой другой вид связи.$back";
exit;
}
else
{
echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в ближайшее время ";
echo "<meta http-equiv=\"refresh\" content=\"1;URL=$url\">";
}
}
else {
die("Для отправки сообщения заполните все поля!$back");
}
?>
</body></html>