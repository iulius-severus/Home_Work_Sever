<?
//header("Location: Comment.php");
$login_true = "Sever";
$password_true = "0606";
function entry()
{
    if(count($_POST)>0)
    {
        $login = trim($_POST['login']);
        $password = trim($_POST['password']);
        $login_true = "Sever";
        $password_true = "0606";
        if($login == $login_true || $password == $password_true)
        {
            header("Location: Comment.php");
            exit();
        }
        else{
            echo "Asta la vista!";
        }
    }
}
entry()

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Styles/Authorization.css">
    <title>Authorization</title>
</head>
<body>
<form class="in" method="post">
    <p class="start">Авторизация</p>
    <p>
        Введите логин <input class="in_log" type="text" name="login">
    </p>
    <p>
        Введите пароль <input class="in_pas" type="password" name="password">
    </p>
    <p class="button">
        <button>Отправить</button>
    </p>
</form>
</body>
</html>