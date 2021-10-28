<?php
class Enter{
    public $hostname;
    public function __construct($hostname)
    {
        $this->hostname = $hostname;
    }
    public function entry()
    {
        $hostname = 'localhost';
        $username = 'Iulius';
        $password_db = 'iulius1990';
        $db_name = 'authorization';
        $db_connect = mysqli_connect($hostname, $username, $password_db, $db_name);
        mysqli_set_charset($db_connect, 'utf8');
        $db_connect = mysqli_connect($hostname, $username, $password_db, $db_name);
        if ( !empty($_REQUEST['password']) and !empty($_REQUEST['login']) )
        {
            $login_true = trim($_REQUEST['login']);
            $password_true = trim($_REQUEST['password']);
            $query = 'SELECT * FROM `enter` WHERE Login = "'.$login_true.'" AND `Password` = "'.$password_true.'" ';
            $result = mysqli_query($db_connect, $query);
            $user = mysqli_fetch_assoc($result);
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
        }
    }
}
class Color{
    /*public $color;
    public function __construct($color)
    {
        $this->color = $color;
    }
    */
    public function Change()
    {
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
    }



}


