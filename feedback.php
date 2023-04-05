<?php include "inc/header.php" ?>

<?php
$sql = "SELECT * FROM feedback"; //Текст SQL-запроса
$result = mysqli_query($conn, $sql); //Непосредственно запрашиваем данные из БД
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC); //Запихиваем данные в ассоциативный массив feedback
?>

    <h2>Feedback</h2>

    <?php if(empty($feedback)) : ?> <!-- Такая конструкция используется часто при работе с PHP внутри HTML-кода -->
      <p class="lead mt3">There is no feedback</p> <!-- Так указываем что хотим вывести при соблюдении условия выше -->
    <?php endif; ?>

    <?php foreach($feedback as $item) : ?> <!-- Та же самая конструкция, что и выше -->
      <div class="card my-3 w-75">
        <div class="card-body text-center">
          <?php echo $item["body"]; ?>
          <div class="text-secondary mt-2">
            By <?php echo $item["name"]; ?> on <?php echo $item["date"]; ?>
          </div>
        </div>
      </div>

    <?php endforeach; ?>

<?php include "inc/footer.php" ?>

