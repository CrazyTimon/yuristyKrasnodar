<?php
$toemail = 'test@google.com';
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
if(mail($toemail, 'Получена заявка от '.$name, $message.'. Телефон: '.$phone)) {
	echo 'Ваше сообщение успешно отправлено.';
} else {
	echo 'Проблемы с отправкой.';
}
?>