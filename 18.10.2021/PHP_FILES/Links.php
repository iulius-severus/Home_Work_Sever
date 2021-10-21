<?
$site = $_POST['site'];
function go_to_the_site($str){
    header("Location: $str");
}

if($site == 'Fact'){
    go_to_the_site('https://fact.digital/');
    $site = '';
    setcookie('last', 'Fact', time() + 3600 * 24 * 7, '/');
}
elseif ($site == 'Bitrix'){
    go_to_the_site('https://www.bitrix24.ru/');
    $site = '';
    setcookie('last', 'Bitrix', time() + 3600 * 24 * 7, '/');
}
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
<body style="background-color: <? echo $_COOKIE['color']?>">
    <div>
        <p>Предлагаем Вам посетить следующие сайты.</p><br>
        <form method="post" id="">
            <select name="site">
                <option value="Fact">Fact</option>
                <option value="Bitrix">Bitrix</option>
            </select>
            <input type="submit" value="Перейти">
        </form>
    </div>
</body>
</html>

