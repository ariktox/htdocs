<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251" />
</head>

<body><?php
$url = "contacts.html"; //���� ��������, ��� �� ������ ������� ����� �������� �����.
$title = "http://����-���������������.��/"; //����� ������ �����
$subject = "������ � ����� $title"; //���� ������������ ��� ���������
$admail = "arik.mirzoyan@gmil.com"; //��� e-mail, �� ������� ����� ������������ ������
$back = "<p><a href=\"javascript: history.back()\">�����</a></p>";

if(@$_POST['nick'] or @$_POST['email'] or @$_POST['delivery'] or @$_POST['msg'])
{
@$nick = $_POST['nick'] or die("���������, ��� �� ����� ���� ���!$back");
@$email = $_POST['email'] or die("���������, ��� �� ����� ���� E-mail ��� ����� ��������!$back");
@$delivery = $_POST['delivery'] or die("���������, ��� �� ����� ���� ���������!$back");
@$msg = $_POST['msg'] or die("���������, ��� �� ����� ���������!$back");



//if(!eregi("^[a-z0-9\._-]+@[a-z0-9\._-]+\.[a-z]{2,4}\$", $email)) 
//{
//echo "���������, ��� �� ����� ���������� E-mail!$back";
//exit;
//}

$content = "\n������������ $nick!\n
����� ��� ����� �������: $email\n
��������(�) ��� ������ � ����� - \"$title\"\n
���� - $delivery, �� ��������� �����������:\n\n$msg";
if(!@mail($admail, $subject, $content))
{
echo "������ ��� �������� ������. ���������� �������� �� ���� �������������� ������� �����, ��������� ����� ������ ��� �����.$back";
exit;
}
else
{
echo "���� ��������� ������� ����������!<Br> �� �������� ����� � ��������� ����� ";
echo "<meta http-equiv=\"refresh\" content=\"1;URL=$url\">";
}
}
else {
die("��� �������� ��������� ��������� ��� ����!$back");
}
?>
</body></html>