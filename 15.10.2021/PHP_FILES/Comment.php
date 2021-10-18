<?
if(isset($_POST['comment'])){
    $to = "email";
    $content = $_POST['comment'];
    if(mail("$to", "Text", "comment"))
    {
        header("Location: questionnaire.php");
        exit();
    }
    else{
        header("Location: Authorization.php");
        exit();
    }
}
//Отправка реализуется. Сохраняется txt-file в папке email (OpenServer)
//Однако, текстовик приходит пустой. Решение проблемы не нашел.
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Styles/comment.css">
    <title>Document</title>
</head>
<body>

        <form method="post" >
            <p>Отправьте Ваш комментарий касательно данной страницы.</p><br>
            <textarea cols="50" rows="25" name="comment" maxlength="500"></textarea>
            <p class="button">
                <button>Отправить</button>
            </p>
        </form>


</body>
</html>