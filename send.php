<?php
$toemail = 'test@google.com';
$fromemail = 'From: fromemail@frommail.com';
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
if(mail($toemail, 'Получена заявка от '.$name, 'Получена заявка от '.$name.'. '.$message.'. Телефон: '.$phone, $fromemail)) {
	echo 'Ваше сообщение успешно отправлено.';
} else {
	echo 'Проблемы с отправкой.';
}
?>

<?php
phpinfo();
?>