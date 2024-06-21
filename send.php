<?php
// Получаем данные из формы
$name = $_POST['name'];
$phone = $_POST['phone'];
$text = $_POST['text'];

// Ваш API-ключ Telegram бота
$telegram_api_key = '';

// Чат-идентификатор группы в Telegram, куда будут отправляться уведомления
$chat_id = '';

// Сообщение для отправки в группу
$message = "Заявка с сайта:\nИмя: $name\nНомер телефона: $phone\nСообщение: $text";

// URL для отправки сообщения в Telegram
$telegram_url = "https://api.telegram.org/bot$telegram_api_key/sendMessage?chat_id=$chat_id&text=" . urlencode($message);

// Отправляем запрос к API Telegram
$response = file_get_contents($telegram_url);

// Проверяем результат отправки
if ($response === false) {
    echo 'Ошибка при отправке заявки.';
} else {
    echo 'Заявка успешно отправлена.';
}
?>