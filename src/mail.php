<?php
$name = $_POST['username'];
$phone = $_POST['userphone'];
$email = $_POST['useremail'];

echo $name;
?>

<?php
$subject = 'Заказ на ремонт';
$message = 'Имя: ' .$name. ' Номер: ' .$phone. ' Почта: ' .$email;
$to = 'sork67@gmail.com';
mail($to, $subject, $message, 'Content-Type: text');
?>