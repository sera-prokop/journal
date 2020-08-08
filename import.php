<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/style.css" rel="stylesheet">
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <p class="logout">Поздравляем! Вы вошли на защищенную страницу. <a href="logout.php">Нажмите здесь</a> для выхода.</p>
    <a class="back" href="./index.php">Назад</a>
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScwAftvrG3cuUf91f1iaHXPQyJ6rJk7gx71cqQnkkh5ClUnvg/viewform?embedded=true" width="1000" height="3900" frameborder="0" marginheight="0" marginwidth="0" onload="loaded()">Загрузка…</iframe>



    <script>
        var loadCounter = 0;
        var iframeElement = document.querySelector('iframe');

        var loaded = function() {

            loadCounter += 1;

            iframeElement.setAttribute('height', '3900px');

            if (loadCounter % 2 == 0) {

                iframeElement.setAttribute('height', '500px');
                window.scrollTo(0, 0)

            }

        }

    </script>
</body>
</html>