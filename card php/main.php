<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Визитка</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <?php include 'greeting.inc.php';
    include 'variables.inc.php';
    ?>
</head>

<body class="row">
    <div class="row top">
        <div class="startpic">
            <?php echo '<img src="/my/img/prog.jpg">'; ?>
        </div>
        <div class="col" id="menu.inc">
            <?php include 'menu.inc.php' ?>
            <div>
                <h1>
                    <?php echo $h1  ?>
                    <h1>
            </div>
        </div>
    </div>
    <hr width="1300" size="4" color="#911E42" />
    <div class="col-md-12 mainCol">
        <div id="main">
            <?php include 'picsOfMe.inc.php' ?>
            <div class="mainDiv">
                <h2>
                    <?php echo 'Привет, меня зовут ', $name, '.'  ?>
                </h2>
                <h4>
                    <?php echo 'Я из города ', $city, '.'  ?>
                </h4>
                <p>
                    Усусь программированию. Пытаюсь овладеть языками программирования - <?php echo  $lang  ?>
                </p>
                <div id="phpjs">
                    <?php echo '<img src="/my/img/phpjs.jpg">'; ?>
                </div>
                <div class="knowledge">
                    <h4>
                        Мои знания и навыки:
                    </h4>
                    <p>
                    <?php 
                    include 'knowledge.inc.php';
                    echo 'Python = ', $python ,'<br>'; 
                    echo 'JS = ', $js, '<br>';
                    echo 'PHP = ', $php, '<br>';
                    echo 'web-верста = ', $web, '<br>';
                    ?>
                    (цифры условны)
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 footer">
        <div class="">
            <h2><?php echo $footer  ?></h2>
        </div>
    </div>
</body>

</html>