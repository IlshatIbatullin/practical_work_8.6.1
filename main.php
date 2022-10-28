<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP web page</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       

        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  
                    echo '<img src="/img/php_label.jpg">'; 
                    ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут
                    <?php echo $name, ' ', $surname . '<br>'; 
		                  echo 'город', ' ', $city; ?>                                      
                    </p> 

                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>

                    <p> Мы изучили основы языка PHP: </p>
	                <p1> синтаксис; типы данных; </p1>
                    <p1> переменные и константы; </p1><br>
                    <p1> как создавать переменные; </p1>
                    <p1> выполнение простых операций с переменными. </p1>
                    		  
                </div>
            </div>
           
            <br>

            <div class="knowledge">
                <div>
                    <?php include("knowledge.inc.php"); ?>
                    <?php
                    echo $a, ' ', $b, ' ', $c;
                    ?> <br>

                    <?php
                        $a = 10;
                        $b = 8;
                        $c = $a + $b;
                        echo $c;
                    ?>  <br>
                     <?php
                        echo $d;
                    ?>
                    <br>
                    <br>
                    <?php
                     $a = 20;
                     echo "Оценка за задание 8.6: $a баллов";
                    ?>


                </div>
            </div>

            <br>
            
            <div class="calendar">
                <p class="text">
                    Здесь вы можете проверить количество полных дней между любой датой и сегодняшним днем:
                </p><br>
                <form action="action_page.php" method="POST">
                    <label for="appt">Выберите день в календаре или наберите вручную:</label>
                    <input type="date" id="appt" name="appt">
                    <input name="submit" type="submit" value="РАССЧИТАТЬ">
                </form>

            </div>

            <div class="article">
                <p class="text">
                Lorem ipsum. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, <br>
                quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. 
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>

</body>
</html>