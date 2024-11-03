<?php
// Подключение библиотеки
session_start();
$json = file_get_contents('php://input'); // Получение json строки
$data = json_decode($json, true); // Преобразование json
if (!isset($data['csrfToken']) || $data['csrfToken'] !== $_SESSION['csrf_token']) {
      header('HTTP/1.1 403 Forbidden');
      echo "Ошибка: неверный CSRF-токен.";
      exit;
}
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Получение данных

$name = $data['name'];
$email = $data['email'];
$tel = $data['tel'];
$area = $data['area'];

if (empty($name) || empty($email) || empty($tel)) {
      header('HTTP/1.1 400 Bad Request');
      echo "Ошибка: все поля обязательны для заполнения.";
      exit;
}
    
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header('HTTP/1.1 400 Bad Request');
      echo "Ошибка: неверный формат email адреса.";
      exit;
}
    
if (preg_match("/\d/", $name)) {
      header('HTTP/1.1 400 Bad Request');
      echo "Ошибка: имя не должно содержать цифры.";
      exit;
}

if (preg_match("/^\+7 $$\d{3}$$ \d{3}-\d{2}-\d{2}$/", $tel)) { 
      header('HTTP/1.1 400 Bad Request');
      echo "Ошибка: неверный формат номера телефона.";
      exit;
}




$title = 'Заявка с сайта 3d65'; // Название письма
$body = '<p>Имя: <strong>'.$name.'</strong></p>'.
      '<p>Почта: <strong>'.$email.'</strong></p>'. 
      '<p>Телефон: <strong>'.$tel.'</strong></p>'. 
      '<p>Комментарий к заявке: <strong>'.$area.'</strong></p>';
// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
$mail->isSMTP();
$mail->CharSet = 'UTF-8';
$mail->SMTPAuth   = true;

// Настройки почты отправителя
$mail->Host       = 'smtp.mail.ru'; // SMTP сервера вашей почты
$mail->Username   = 'noreply@3d65.ru'; // Логин на почте
$mail->Password   = 'uxf3HLunE8jBePkV4AeN'; // Пароль на почте
$mail->SMTPSecure = 'ssl';
$mail->Port       = 465;

$mail->setFrom('noreply@3d65.ru', 'Заявка с сайта 3d65'); // Адрес самой почты и имя отправителя

// Получатель письма
$mail->addAddress('info@3d65.ru');

// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;

// Правильный вызов send()
if (!$mail->send()) {
throw new Exception("Ошибка отправки: {$mail->ErrorInfo}"); 
} else {
echo ('Сообщение успешно отправлено');
}

} catch (Exception $e) {
header('HTTP/1.1 400 Bad Request');
echo "Сообщение не было отправлено. Причина ошибки: " . $e->getMessage();
}
?>
