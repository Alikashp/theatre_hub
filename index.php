<?php
$link = mysqli_connect("localhost", "root", "root", "theatrehub"); 
 
if ($link == false){ 
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error()); 
} 
else { 
    print("Соединение установлено успешно"); 
}
?>