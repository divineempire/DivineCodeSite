<?php
$project_info = $_POST['project-info'];
$name = $_POST['name'];
$contact = $_POST['contact'];


$message = urlencode("💬 У вас новый заказ на сайте\n😃 Имя: ${name} \n🏠Контакт: ${contact} \n ℹИнформация: ${project_info}");

$vk_access_token = "e816f1176f13a2d7f24493c3ae19d6be9d477cb6849da8fca016ad061118fba596497ce6c59af07d41bd5";
$vk_user_id = "73359457";
$random_id = rand(PHP_INT_MIN, PHP_INT_MAX);

$response = file_get_contents("https://api.vk.com/method/messages.send?user_id=${vk_user_id}&random_id=${random_id}&message=${message}&access_token={$vk_access_token}&v=5.95");

?>