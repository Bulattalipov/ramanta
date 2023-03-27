<?php


// if (isset($_POST['form'])) { // Это ид кнопки на которую нажмут и сработает php скрипт - Убрать если просто сообщение при заходе на страницу ( внизу скобку убрать }

$name = $_POST['name'];// это что ловим с формы
$phone = $_POST['phone']; // это что ловим с формы
// Можно приписывать так если ловить не надо
// $zakaz = "Заказ с сайты XXX";

$token = "5902989609:AAENps6NFNrT4qQDdaCQ0NAb4pRhPYur_0M"; // Это ТОКЕН
$chat_id = "-941692996"; // Это ИД группы

$arr = array(

// 'Заказ с сайты: ' => $zakaz,
  'Имя: ' => $name,
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

// Это условие Если отправлено редирект если нет  ошибка Можно убрать!
if ($sendToTelegram) {
  header('Location: index.html');
  console.log("fmfrgrg");
} else {
  echo "Error";
}
// ид кнопки
// }
?>