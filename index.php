<head>
    <title>Комментарии</title>
    <meta charset="utf-8">

</head>

<body style="display: flex; flex-direction: column; height: 100%; margin: 0 0 0 0">
    <header style="background-color: #f9f9f9;">
        <div style="display: flex; justify-content: space-between; margin: 1em 6em">
            <div style="display: flex; flex-direction: column; justify-content: space-between;">
                <div class="contacts">
                    <p><b>Телефон: (499)340-94-71</b></p>
                    <p><b>Email: <u>info@future-group.ru</u></b></p>
                </div>
                <h1 style="font-size: 3em; margin-bottom: 0">Коментарии</h1>
            </div>
            <img src="FutureLogo.png" alt="logo" style="align-self: center; width: 12em; height: 13.125em; margin-left: 2em">
        </div>
    </header>

    <main style="flex: 1 0 auto; background-color: #eeeeee">
        <div class="wrapper" style="margin: 1em 6em;">
            <div id="comments">
                <div class="comment" id="comment1">
                    <div class="comment_head" style="margin-bottom: 0.5em">
                        <span><b>Савва</b></span>
                        <span style="margin-left: 3em">18:05 07.02.2014</span>
                    </div>
                    <div class="comment_text">Спасибо за Ваше тестовое задание. Оно, действительно, изумительное</div>
                    <br>
                </div>
                <?php
                    /*try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    } catch(PDOException $e) {
                        die("Ошибка доступа к базе!") . PHP_EOL;
                    }
                    foreach ($conn->query("SELECT * from Comments") as $comment_in_db) {
                        $id = $comment_in_db['id'];
                        $name = $comment_in_db['name'];
                        echo "<div class='comment' id='"."$id'>";
                        echo "<span><b>$name</b></span>";
                        echo '<span style="margin-left: 3em">'.date("H:i Y-m-d", $comment_in_db['time']).'</span>';
                        echo "</div>";
                        echo '<div class="comment_text">'.$comment_in_db['text'].'</div><br>';
                        echo '</div>';
                    }*/
                ?>
            </div>
            <hr>
            <h2>Оставить комментарий</h2>
            <form action="index.php" method="post" style="display: flex; flex-direction: column; min-width: 20em; max-width: 35em">
                <label for="name">Ваше имя</label>
                <br>
                <input id="name" type="text" name="name" style="height: 3em">
                <br>
                <label for="comment">Ваш комментарий</label>
                <br>
                <textarea name="comment" cols="40" rows="8"></textarea>
                <br><br>
                <button type="submit" style="min-width: 10em; align-self: flex-end">Отправить</button>
            </form>
        </div>
    </main>
    <?php
       /* if ($_POST['name'] and $_POST['comment'])
        {
            $time = time();
            $add = $conn->prepare("INSERT INTO Comments (name, text, time) VALUES (:name, :text, :time)");
            $add->bindParam(':name', $_POST['name']);
            $add->bindParam(':text', $_POST['comment']);
            $add->bindParam(':time', $time);
            $add->execute();
       ?>
       <script>location.assign("/")</script>
       <?php
        }*/
    ?>
    <footer style="display: flex; flex-direction: column; flex-shrink: 0; align-items: flex-start; background-color: #f9f9f9">
        <div class="wrapper" style="display: flex; flex-direction: row; margin: 1em 6em">
            <img class="footer_block1" src="FutureLogo.png" alt="logo" style="align-self: center; width: 8em; height: 8.75em">
            <div class="footer_block2" style="align-self: flex-end; margin-left: 3em">
                <div class="contacts">
                    <p><b>Телефон: (499)340-94-71</b></p>
                    <p><b>Email: <u>info@future-group.ru</u></b></p>
                    <p><b>Адрес: <u>115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</u></b></p>
                </div>
                <p>&copy; 2010 - 2014 Future, Все права защищены</p>
            </div>
        </div>
    </footer>

</body>
