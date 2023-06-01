<?php
require_once 'database.php';
?>
<?php
       $sql = "SELECT id, title, datetime, address FROM `performance`";

       // Выполнение запроса
       $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Цикл для вывода информации для каждой карточки
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $title = $row['title'];
        $date = $row['datetime'];
        $where = $row['address'];
    }
        <section>
        <h2 class ="first-title">Самые свежие спектакли Казани</h2>
        <div class="container">
        <div>
        <img src="Скрипач.jpg"alt='Скрипач на крыше' class="img1">
        <p class="title-1"><?=$title?></p>
        <p class="underwrite"><?=$date?></p>
        <p class="underwrite"><?=$where?></p>
        </div>
        <div>
        <img src="Примадонна.jpg"alt='Примадонны' class="img1">
        echo "<p class='title-1'>" . $title . "</p>";
        echo "<p class='date'>" . $datetime . "</p>";
        echo "<p class='where'>" . $address . "</p>";
        </div>
        <div>
        <img src="Никах.jpg"alt='Безумный нихак, или похищение жениха' class="img1">
        <p class="title-1">Безумный нихак, или похищение жениха</p>
        <p class="underwrite">21 июля, 18:00</p>
        <p class="underwrite">Театр драммы и комедии им. Тинчурина</p>
        </div>
        </div>
      </section>
}
?>