<!DOCTYPE html>
<html>
<head>
    <title>Форма ввода</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <label for="name">ВВЕДИТЕ ИМЯ:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="surname">ВВЕДИТЕ ФАМИЛИЮ:</label>
        <input type="text" name="surname" id="surname">
        <br>
        <label for="file">Выберите файл:</label>
        <input type="file" name="file" id="file">
        <br>
        <input type="submit" value="Отправить">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $file = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        
        // Папка для сохранения загруженных файлов
        $upload_dir = 'uploads/';

        // Генерируем уникальное имя файла
        $new_filename = uniqid().'.'.$file_ext;

        // Полный путь к файлу
        $upload_path = $upload_dir.$new_filename;

        // Перемещаем загруженный файл в папку для сохранения
        if (move_uploaded_file($file_tmp, $upload_path)) {
            echo "<h2>Введенные данные:</h2>";
            echo "<p>Имя: $name</p>";
            echo "<p>Фамилия: $surname</p>";
            echo "<p>Картинка:</p>";
            echo "<img src='$upload_path' alt='Картинка'>";
        } else {
            echo "Ошибка при загрузке файла.";
        }
    }
    ?>
</body>
</html>
