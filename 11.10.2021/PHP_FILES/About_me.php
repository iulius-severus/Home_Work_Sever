<?php
/*date_default_timezone_set('America/New_York');*/
/*date_default_timezone_set('Asia/Tokyo');*/
/*date_default_timezone_set('Australia/Sydney');*/
$t = date("H:i:s");
echo "$t";
if(($t >= "08:00") && ($t <= "23:59"))
{
    echo "<link rel='stylesheet' href='../Styles/styles_main.css'>";
}
else{
    echo "<link rel='stylesheet' href='../Styles/styles_night_theme.css'>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no,
          initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Студенты Факт.Школы</title>
</head>
<body class="foundation">
<header class="head">
    <a href="https://fact.digital/" target="_blank" title="Перейти на сайт компании Факт"><img class="logo" src="../Images/Fact.jpg"></a>
    <!--<div class="students">
        <b>Студенты Факт.Школы</b>
    </div>-->
    <div class="menu">
                <div class="Mendeleev"><a href="Table_of_Mendeleev.php" target="_blank"><span class="nav_text">Таблица Д.И.Менделеева</span></a></div>
                <div class="Animals"><a href="Animals.php" target="_blank"><span>Хомяк.Решение</span></a></div>
                <div class="Array"><a href="Array_problems.php" target="_blank">Массивы</a></div>
    </div>
</header>
<main>
    <div class="foto"> <img class="picture" src="../Images/sever.jpeg" alt="foto"> </div>
    <div class="name">  <b><i>Юлий Александрович Север</i></b> </div>
    <div class="about_me"><u>Обо мне</u>
        <p class="text">
            <? $a = 'Я - Юлий Север. Мне 31 год. Имею законченное высшее образование
            (бакалавр социологии, ФГБОУ ОГУ, 2012 г.). Большая часть
            моего трудового стажа связана с госслужбой
            (около 7 лет проработал в отделе по работе с обращениями граждан
            аппарата Губернатора и Правительства Оренбургской области).
            Однако, летом 2020 года уволился с госслужбы по собственному желанию,
            окончательно осознав, что не желаю посвящать этой работе всю жизнь.
            В настоящее время работаю в ООО "ИРИС" в должности инженера-электроника.
            Интерес к миру IT возник и стал крепнуть с осени 2019 г. С того периода начал самостоятельное
            изучение сферы web-разработки (Hexlet), затем прошел краткий курс по основам кибербезопасности (осень 2019г),
            и уже в 2020 г. освоил курс от университета Иннополис - "Основы программирования.Быстрый старт". Зачем я поступил
            в Факт.Школу? Для того, чтобы начать карьеру web-разработчика. И не в отдаленной перспективе, а в реальные обозримые сроки.:)';

            echo str_replace('Я - Юлий Север.', '<span style="color: ghostwhite">Я - Юлий Север.</span>', $a);


            ?>
        </p>
    </div>
    <div class="about_lessons"><u>О занятиях</u>
        <p class="text">
            <?
            $b = 'Говоря о занятиях, в первую очередь хотел бы отметить хорошее качество подаваемого 
            материала. Лекции изложены чётко, понятно, имеют последовательную структуру, что способствует 
            лёгкому усвоению. Темп занятий, форма подачи нового материала никаких нареканий не вызывают. 
            Хорошо видно стремление преподавателя донести до студентов суть и передать необходимые навыки. 
            В том, что касается оптимизации учебного процесса, имею следующее предложение. Предложение касается первых
            занятий, посвященных настройке IDE PHPStorm. В связи с тем, что студенты используют разные версии ПО 
            (как IDE, так и OpenServer\'а) некоторое их число сталкивается с проблемами настройки отладчика, 
            из-за чего эти студенты отстают от группы, отвлекают преподавателя. Поэтому хотел бы предложить, если это возможно, 
            при наборе последующих групп заранее размещать на GooglDisc определенную версию IDE и OpenServer\'a.';
            //Задача №1. Часть вторая.
            $arr = explode(" ", $b);
            foreach ($arr as $key => $value){

                if(array_search($key, array_keys($arr)) % 2 == 0){

                    echo "<span style='color: floralwhite' align='left'>  $value</basefont>";
                }
                elseif(array_search($key, array_keys($arr)) % 2 !=0){

                    echo  "<span style='color:red' align='left' > $value </basefont>";
                }

            }
            ?>
        </p>
    </div>
    <div class="scripts">
        <?
        echo "<pre>";
        echo "<b>" . "Задача №1." . "</b>" . "</br>";
        echo "<i>" . "Задача №1 реализована на примере блоков \"Обо мне\" и \"О занятиях\"." . "</i>". "</br>";
        echo "</pre>";
        echo "<pre>";
        echo "<b>" . "Задача №2." . "</b>" . "</br>";
        $a_1 = mb_substr_count($a, 'а') + mb_substr_count($b, 'а');
        $a_2 = mb_substr_count($a, 'е') + mb_substr_count($b, 'е');
        $a_3 = mb_substr_count($a, 'и') + mb_substr_count($b, 'и');
        $a_4 = mb_substr_count($a, 'о') + mb_substr_count($b, 'о');
        $a_5 = mb_substr_count($a, 'у') + mb_substr_count($b, 'у');
        $a_6 = mb_substr_count($a, 'ы') + mb_substr_count($b, 'ы');
        $a_7 = mb_substr_count($a, 'э') + mb_substr_count($b, 'э');
        $a_8 = mb_substr_count($a, 'ю') + mb_substr_count($b, 'ю');
        $a_9 = mb_substr_count($a, 'я') + mb_substr_count($b, 'я');
        echo "<u>" . "Число повторений гласных для блоков \"Обо мне\" и \"О занятиях:\"" . "</u>". "</br>";
        echo "Гласная 'а' повторяется " . "$a_1 " . "раз." . "</br>";
        echo "Гласная 'е' повторяется " . "$a_2 " . "раза." . "</br>";
        echo "Гласная 'и' повторяется " . "$a_3 " . "раз." . "</br>";
        echo "Гласная 'о' повторяется " . "$a_4 " . "раз." . "</br>";
        echo "Гласная 'у' повторяется " . "$a_5 " . "раз." . "</br>";
        echo "Гласная 'ы' повторяется " . "$a_6 " . "раза." . "</br>";
        echo "Гласная 'э' повторяется " . "$a_7 " . "раз." . "</br>";
        echo "Гласная 'ю' повторяется " . "$a_8 " . "раз." . "</br>";
        echo "Гласная 'я' повторяется " . "$a_9 " . "раза." . "</br>";
        echo "</pre>";
        echo "<pre>";
        echo "<b>" . "Задача №3." . "</b>" . "</br>";
        echo "<u>" . "Количество слов в блоках \"Обо мне\" и \"О занятиях\" равно:" . "</u>". "</br>";
        echo str_word_count($a) + str_word_count($b) . " слова." . "</br>";
        echo "</pre>";
        echo "<pre>";
        echo "<b>" . "Задача №4." . "</b>" . "</br>";
        /*$date_1 = new DateTime("1990-06-06");
        $date_2 = new DateTime("2021-12-10");
        $date_3 = $date_2->diff($date_1)->format("%a");
        echo "$date_3"  . "</br>";*/ //Неточно считает. Добавляет лишние дни (около 50 дней).
        $date_now = time("2021-12-10");
        $date_start = strtotime("1990-06-06");
        $datediff = $date_now - $date_start;
        //echo floor($datediff / (60 * 60 * 24));
        echo "С 06.06.1990 по  12.10.2021 прошел " . floor($datediff / (60 * 60 * 24)) . " день.";
        echo "</pre>";
        echo "<pre>";
        echo "<b>" . "Задача №5." . "</b>" . "</br>";
        echo "<i>" . "Дана строка. Проверьте, что она заканчивается на \".png\". Если это так, выведите \"да\", если не так - \"нет\"." . "</i>>" . "</br>";
        echo "<b>" . "Ответ:" . "</b>" . "</br>";
        $f = "Данная папка содержит файлы с расширением .png";
        if (strpos($f, ".png") !== false) {
            echo "Да, содержит.";
        }
        elseif (strpos($f, ".png") == false){
            echo "Нет, не содержит.";
        }
        echo "</pre>";
        echo "<pre>";
        echo "<b>" . "Задача №6." . "</b>" . "</br>";
        $g = "HTML CSS PHP";
        echo mb_substr($g, 0, 4) . "</br>";
        echo mb_substr($g, 5, 7) . "</br>";
        echo mb_substr($g, 9, 11) . "</br>";
        //Почему-то возвращает PHP дважды. Ошибку найти самостоятельно не удалось((
        echo "</pre>";



        ?>
    </div>
</main>

<div class="container">
    <div class="Augustus">
        <a href="https://ru.wikipedia.org/wiki/%D0%9E%D0%BA%D1%82%D0%B0%D0%B2%D0%B8%D0%B0%D0%BD_%D0%90%D0%B2%D0%B3%D1%83%D1%81%D1%82" target="_blank"><img class="A"  src="../Images/Augustus.jpg"></a>
        <div class="nomen1">Gaius Iulius Caesar Octavianus</div>
    </div>
    <div class="Tiberius">
        <a href="https://ru.wikipedia.org/wiki/%D0%A2%D0%B8%D0%B1%D0%B5%D1%80%D0%B8%D0%B9" target="_blank"><img class="B" src="../Images/Tiberius.jpg"></a>
        <div class="nomen2">Tiberius Iulius Caesar Augustus</div>
    </div>
    <div class="Caligula">
        <a href="https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D0%BB%D0%B8%D0%B3%D1%83%D0%BB%D0%B0" target="_blank"><img class="C" src="../Images/Caligula.jpg"></a>
        <div class="nomen3">Gaius Iulius Caesar Augustus Germanicus</div>
    </div>
    <div class="Claudius">
        <a href="https://ru.wikipedia.org/wiki/%D0%9A%D0%BB%D0%B0%D0%B2%D0%B4%D0%B8%D0%B9" target="_blank"><img class="D" src="../Images/Claudius.jpg"></a>
        <div class="nomen4">Tiberius Claudius Caesar Augustus Germanicus</div>
    </div>
</div>
<div class="grid">
    <div class="Nero">
        <a href="https://ru.wikipedia.org/wiki/%D0%9D%D0%B5%D1%80%D0%BE%D0%BD" target="_blank"><img class="E" src="../Images/Nero.jpg"></a>
        <div class="nomen5">Nero Claudius Caesar Augustus Germanicus</div>
    </div>
    <div class="Galba">
        <a href="https://ru.wikipedia.org/wiki/%D0%93%D0%B0%D0%BB%D1%8C%D0%B1%D0%B0" target="_blank"><img class="F" src="../Images/Galba.jpg" height="500" width="400"></a>
        <div class="nomen6">Servius Sulpicius Galba</div>
    </div>
    <div class="Otho">
        <a href="https://ru.wikipedia.org/wiki/%D0%9E%D1%82%D0%BE%D0%BD" target="_blank"><img class="G" src="../Images/Otho.jpg"></a>
        <div class="nomen7">Marcus Salvius Otho</div>
    </div>
    <div class="Vitellius">
        <a href="https://ru.wikipedia.org/wiki/%D0%90%D0%B2%D0%BB_%D0%92%D0%B8%D1%82%D0%B5%D0%BB%D0%BB%D0%B8%D0%B9" target="_blank"><img CLASS="H" src="../Images/Vitellius.jpg"></a>
        <div class="nomen8">Aulus Vitellius</div>
    </div>
</div>
<footer class="down">
    <div>г.Оренбург <br>Контактный телефон: 8-987-770-18-06<br>E-mail: iulius_severus@mail.ru</div>
</footer>
</body>
</html>
