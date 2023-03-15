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
                <hr>Data Type-> Swtich Statement:<hr>
        </section>

        <section>
            <?php
            echo " Switch Statement: </br>";
           $coding = "java";
           switch ($coding) {
            case 'html':
               echo "I love html";
                break;
                case 'java':
                    echo "I love java";
                     break;
                     case 'php':
                        echo "I love php";
                         break;
            
            default:
                echo "I love coding"; 
                break;
           }
            ?>

        </section> 
        <section class= "contentHeading">
                <hr>Data Type-> while loop:<hr>
        </section>

        <section>
            <?php
            $a=1;
            while ($a <= 3) {
                //first check condition and then print.
                echo"the number is :$a<br/>";
                $a++;
            }

            $b=3;
            do {
                //first print then check condition.
                echo"The number is : $b<br/>";
                $b--;
            } while ($b >= 1);
             
           
            ?>

        </section> 

        <section class= "contentHeading">
                <hr>Data Type-> For loop:<hr>
        </section>

        <section>
            <?php
            
             for($i=0;$i<3;$i++){
                echo "The number is $i<br/>";
             }
           
            ?>

        </section>
        <section class= "contentHeading">
                <hr>Data Type-> Foreach loop:<hr>
        </section>
 
        <section>
            <?php
            
            $flowers= array("Rose", "Beli", "Tulip");
             foreach ($flowers as $flower) {
                echo $flower . "<br/>";
             }
            ?>

        </section>

        <section class= "contentHeading">
                <hr>Topics-> Test loops : Rombus making by star pattern<hr>
        </section>
        <section>
            <?php 
               $star="*";
               $space=" ";
                for ($row=4; $row >=0 ; $row--) {  //looping rows .
                    
                    for ($space=0; $space<=$row-1; $space++) {    //looping space.
                        echo $space;
                    }
                    
                        for ($col=0; $col<=4 ; $col++) { //looping stars.
                            echo $star;
                        }
                        echo "<br/>";
                         
                    }
            ?>

        </section>
     
 </section>
 
 <section class="footer">
            <h2>This is Footer</h2>
        </section>
    </div>
</body>

</html>