<!doctype html>
<html>
<head>
    <title>PHP Syntax</title>
        <style>
            .phpcode{ width:900px; margin: 0 auto; background:#ddd;}
            .header, .footer{background:lightblue; text-align:center; padding: 5px;}
            .header h2{color:Green;}
            .maincontent{min-height:400px;padding:20px;}
            .contentHeading{font-weight:bold;text-align: left;}
     </style>
</head>

<body>
    <div class="phpcode">
        <section class="header">
            <h2>By the name of Allah</h2>
      </section>

        <section class="maincontent">
        <section class= "contentHeading">
                <hr>Topics-> Super GLOBALS :<hr>
        </section>

        <section>
            <?php

            $x= 5;
            $y= 50;
            
            function sum(){
                $GLOBALS['z']= $GLOBALS['x'] + $GLOBALS['y'];           //Example of Super global
                //echo "The sum is= ". $GLOBALS['z'];            
            }

            Sum();
            echo "The sum is= ". $z;
            ?>

        </section>
        <section class= "contentHeading">
                <hr>Topics-> $_SERVER:<hr>
        </section>

        <section>
            <?php
            echo "File Location is --".$_SERVER['PHP_SELF'];          //File Location
            echo "<br/>";
            echo "Site name is --".$_SERVER['SERVER_NAME'];       //Site Name
            echo "<br/>";
            echo "File path is --".$_SERVER['SCRIPT_NAME'];       //File Path
            echo "<br/>";
            echo "Browser name is --".$_SERVER['HTTP_USER_AGENT'];   //Browser Name
            echo "<br/>";
            echo "IP address is --".$_SERVER['SERVER_ADDR'];          // IP Address


            ?>

        </section>
        <section class= "contentHeading">
                <hr>Topics-> $_REQUEST:<hr>
        </section>
        <form action= "<?php echo $_SERVER['PHP_SELF']?>" method= "post"> 
            username: <input type= "text" name= "username"/>
            <input type="submit" name= "submit"/>
        </form>

        <section>
            <?php
            if ($_SERVER["REQUEST_METHOD"]== "POST") {
                $name = $_REQUEST["username"];      //REQUEST method work for get , post, cookie method in HTML input form. less secure.
                if (empty($name)) {
                    echo "Insert Username!";
                }
                else {
                    echo "Submitted";
                }
            }
        
            ?>

        </section>
        <section class= "contentHeading">
                <hr>Topics-> $_POST:<hr>
        </section>
        <form action= "<?php echo $_SERVER['PHP_SELF']?>" method= "post"> 
            username: <input type= "text" name= "username"/>
            <input type="submit" name= "submit"/>
        </form>

        <section>
            <?php
            if ($_SERVER["REQUEST_METHOD"]== "POST") {
                $name = $_POST["username"];      //POST method only work when we use post method in HTML Input Form. Most Secure.
                if (empty($name)) {
                    echo "Insert Username!";
                }
                else {
                    echo "Submitted";
                }
            }
        
            ?>

        </section>

        <section class= "contentHeading">
                <hr>Topics-> $_GET:<hr>
        </section>
        
        <a href="text.php?msg=I am Samiur Rahman Rony&value=MVP">Send Data</a>

        <section>
            <?php
                    
            ?>

        </section>

        </section>
        <section class="footer">
            <h2>This is Footer</h2>
        </section>
    </div>
</body>

</html>