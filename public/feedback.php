<?php header('Content-type: text/html; charset=utf-8'); // задаем кодировку
if (!empty($_POST['email']) && (!empty($_POST['message']))) { //проверяем поля на пустоту
$to = "feedback@teplobrick.ru" ; // куда отправляем письмо
$mail = 'Email: '.$_POST['email']. PHP_EOL; // получаем данные из формы
$text='Message:' .$_POST['message']; // получаем данные из формы
$message=$mail. htmlentities($text); // формируем сообщение
$subject = "FeedBack site"; // тема письма
mail($to, $subject, $message); // отправка письма
echo "Письмо отправлено!"; // сообщение при отправке
} else {
echo "Заполните все поля"; // сообщение при ошибке
}
?>
<script type="text/javascript">
setInterval(function(){ document.location.replace("index.html"); }, 3000);
</script>