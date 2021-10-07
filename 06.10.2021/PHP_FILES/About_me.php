<?php
/*date_default_timezone_set('America/New_York');*/
date_default_timezone_set('Asia/Tokyo');
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
    <div class="students">
        <b>Студенты Факт.Школы</b>
    </div>
    <div class="menu">
        <nav>
            <ol>
                <a href="Table_of_Mendeleev.html" target="_blank"><span class="nav_text">Таблица. Решение.</span></a>
                <a href="Hamster.html" target="_blank"><span>Хомяк.Решение</span></a>
            </ol>
        </nav>
    </div>
</header>
<main>
    <div class="foto"> <img class="picture" src="../Images/sever.jpeg" alt="foto"> </div>
    <div class="name">  <b><i>Юлий Александрович Север</i></b> </div>
    <div class="about_me"><u>Обо мне</u>
        <p class="text">Я - Юлий Север. Мне 31 год. Имею законченное высшее образование
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
            в Факт.Школу? Для того, чтобы начать карьеру web-разработчика. И не в отдаленной перспективе, а в реальные обозримые сроки.:)
        </p>
    </div>
    <div class="about_lessons"><u>О занятиях</u>
        <p class="text">Говоря о занятиях, в первую очередь хотел бы отметить хорошое качество подаваемого
            материала. Лекции изложены чётко, понятно, имеют последовательную структуру, что способствует
            лёгкому усвоению. Темп занятий, форма подачи нового материала никаких нареканий не вызывают.
            Хорошо видно стремление преподавателя донести до студентов суть и передать необходимые навыки.
            В том, что касается оптимизации учебного процесса, имею следующее предложение. Предложение касается первых
            занятий, посвященных настройке IDE PHPStorm. В связи с тем, что студенты используют разные версии ПО
            (как IDE, так и OpenServer'а) некоторое их число сталкивается с проблемами настройки отладчика,
            из-за чего эти студенты отстают от группы, отвлекают преподавателя. Поэтому хотел бы предложить, если это возможно,
            при наборе последующих групп заранее размещать на GooglDisc определенную версию IDE и OpenServer'a.
        </p>
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
