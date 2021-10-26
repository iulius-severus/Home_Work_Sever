<?
$color = $_POST['color'];
if($color == 'blueviolet'){
    setcookie('color', 'blueviolet', time() + 3600 * 24 * 7);
}
if($color == 'green'){
    setcookie('color', 'green', time() + 3600 * 24 * 7);
}
if($color == 'gold'){
    setcookie('color', 'gold', time() + 3600 * 24 * 7);
}
if($color == 'blue') {
    setcookie('color', 'blue', time() + 3600 * 24 * 7);
}
//header("Location: Comment.php");
/*$login_true = "Sever";
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
entry();
*/
function entry()
{
    $hostname = 'localhost';
    $username = 'Iulius';
    $password_db = 'iulius1990';
    $db_name = 'authorization';
    $db_connect = mysqli_connect($hostname, $username, $password_db, $db_name);
    mysqli_set_charset($db_connect, 'utf8');
    //if(count($_REQUEST)>0)
    if ( !empty($_REQUEST['password']) and !empty($_REQUEST['login']) )
    {
        $login_true = trim($_REQUEST['login']);
        $password_true = trim($_REQUEST['password']);
        $query = 'SELECT * FROM `enter` WHERE Login = "'.$login_true.'" AND `Password` = "'.$password_true.'" ';
        $result = mysqli_query($db_connect, $query);
        $user = mysqli_fetch_assoc($result);
        //!empty($user)
        if(!empty($user))
        {
            header("Location: Comment.php");
            exit();
        }
        else{
            header("Location: End.php");
            exit();

        }
        //Логин для авторизации: Iulius
        //Пароль для авторизации: iulius1990

        //Непонятно почему, но  если в else я закладываю echo,
        //то это echo выводится постоянно. Когда же я закладываю header,
        //то при попытке открыть страницу автоизации в браузере из IDE сразу же
        //отрабатывается else.
        //Очевидно,я чего-то недопонимаю в логике работы. Прошу разъяснить.

        /*else{
            echo "Asta la vista!";
        }
        */
    }
}
entry();
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
<body style="background-color: <? echo $_COOKIE['color']?>">
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