<head>
    <title>Комментарии</title>
    <meta charset="utf-8">

    <style>

    </style>
</head>

<body style="display: flex; flex-direction: column; height: 100%; margin: 0 0 0 0">

    <header style="background-color: #f9f9f9;">
        <div style="display: flex; justify-content: space-between; margin: 1em 6em">
            <div style="display: flex; flex-direction: column; justify-content: space-between;">
                <div class="contacts">
                    <p><b>Телефон: (499)340-94-71</b></p>
                    <p><b>Email: <u>info@future-group.ru</u></b></p>
                </div>
                <h1 style="">Коментарии</h1>
            </div>
            <img src="FutureLogo.png" alt="logo">
        </div>
    </header>

    <main style="flex: 1 0 auto; background-color: #eeeeee">
        <div class="wrapper" style="margin: 1em 6em;">
            <div id="comments">
                <?php ?>
            </div>
            <hr>
            <h2>Оставить комментарий</h2>
            <form action="" method="post" style="display: flex; flex-direction: column; min-width: 20em; max-width: 35em">
                <label for="name">Ваше имя</label>
                <br>
                <input id="name" type="text" name="name" style="height: 2em">
                <br><br>
                <label for="comment">Ваш комментарий</label>
                <br>
                <textarea name="Comment" cols="40" rows="8"></textarea>
                <br><br>
                <button type="submit" style="min-width: 10em; align-self: flex-end">Отправить</button>
            </form>
        </div>
    </main>

    <footer style="display: flex; flex-direction: column; flex-shrink: 0; align-items: flex-start; background-color: #f9f9f9">
        <div class="wrapper" style="display: flex; flex-direction: row; margin: 1em 6em">
            <img src="FutureLogo.png" alt="logo" style="align-self: flex-end; width: 129px; height: 140px">
            <div class="footer_block2" style="align-self: flex-end; margin-left: 3em">
                <div class="contacts" style="">
                    <p><b>Телефон: (499)340-94-71</b></p>
                    <p><b>Email: <u>info@future-group.ru</u></b></p>
                    <p><b>Адрес: <u>115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</u></b></p>
                </div>
                <p>&copy; 2010 - 2014 Future, Все права защищены</p>
            </div>
        </div>
    </footer>

</body>

<?php
