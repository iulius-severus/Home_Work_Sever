<?
/*print_r($_GET);
$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
// = $_GET['id'];
*/
/*<img src="Images/<? echo $id;?>.jpg">
<a href="Index.php?id=<?echo ($id < 4) ? $id+1 : 1;?>">Вперед</a>
<a href="Index.php?id=<?echo ($id > 1) ? $id-1 : 4;?>">Назад</a>
*/
?>
<?
print_r($_POST);
$login_true = "Julius";
$password_true = "0606";
if(count($_POST)>0)
{
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);
    $hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';
    if($login == $login_true || $password == $password_true || password_verify('$password_true', $hash))
    {
        echo "Доступ открыт.";
    }
    else{
        echo "Asta la vista!";
    }
}
else{
    echo "Введите данные";
    }


/*echo "<pre>";
$hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';
if (password_verify('$password_true', $hash)) {
    echo 'Пароль правильный!';
} else {
    echo 'Пароль неверный! До уничтожения Вашего ПК осталось 12 сек.';
}
echo "</pre>";
*/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <p>
        <select name="login">
            <option value="Tom" >Tom</option>
            <option value="Franc">Franc</option>
            <option value="Julius">Julius</option>

        </select>


    </p>
    <p>
        Пароль <input type="text" name="password">
    </p>
    <p>
         <button>Отправить</button>
    </p>

</form>
</body>
</html>




