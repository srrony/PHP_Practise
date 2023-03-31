<!doctype html>
<html>
<head>
    <title>PHP Syntax</title>
        <style>
            .phpcode{ width:900px; margin: 0 auto; background:#ddd;} 
            .header, .footer{background:lightblue; text-align:center;padding: 5px; }
            .header h2{color:Green;}
            .maincontent{min-height:400px;padding:20px;}
            .contentHeading{font-weight:bold;text-align: left;}
            p{margin:0}
     </style>
</head>

<body>
    <div class="phpcode">
        <section class="header">
            <h2>By the name of Allah</h2>
      </section>

        <section class="maincontent">
        <section class= "contentHeading">
                <hr>Topics->Date and Time :<hr>
        </section>

        <section>
            <?php
            echo "Time is ". date("h:i:sa") . "</br>";
            date_default_timezone_set('Asia/Dhaka');
            echo "Today is " . date("d-m-Y"). "</br>";
            echo "Time is ". date("h:i:sa"). "</br>" ;

            echo date_default_timezone_get();
             
           
             
            ?>

        </section>
        </section>
        <section class="footer">
            <p> &copy; <?php echo date("Y");?> Samiur Rahman Rony</p>
            <h2>This is Footer</h2>
        </section>
    </div>
</body>

</html>