<?php  
$errname = $erremail = $errmbl = $errgender = "";
$gender = $name = $email = $mbl = $comment = "";
            

if ($_SERVER['REQUEST_METHOD']== "POST") {

    if(empty($_POST["name"])){
        $errname = "<span style = 'color:red'>Name is required.</span>";
    }
    else {
        $name = validation($_POST["name"]);
    }

    if(empty($_POST["email"])){
        $erremail = "<span style = 'color:red'>Email is required.</span>";
    }
    elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
       $erremail = "<span style = 'color:red'>Email is Invalid.</span>";
    }
    else {
        $email = validation($_POST["email"]);
    }

    if(empty($_POST["mbl"])){
        $errmbl = "<span style = 'color:red'>Mobile number is required.</span>";
    }
    else {
        $mbl = validation($_POST["mbl"]);
    }

    if(empty($_POST["gender"])){
        $errgender = "<span style = 'color:red'>Gender is required.</span>";
    }
    else {
        $gender = validation($_POST["gender"]);
    }

    $comment = validation($_POST["comment"]);


    

}
function validation($data){
    $data1 = trim($data);
    $data2 = stripcslashes($data1);
    $datafinal = htmlspecialchars($data2);

    return $datafinal;
}

?>

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
                <hr>Topics-> Form Validation:<hr>
        </section>

        <section>
        <form method= "post" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

<table>
<p style = "color:red"> Required field </p>
    <tr>
        <th>Name:</th>
        <td><input type="text" name="name"  />*<?php echo $errname; ?></td>
    </tr>
    <tr>
        <th>Email:</th>
        <td><input type="text" name="email"  />*<?php echo $erremail; ?></td>
    </tr>
    <tr>
        <th>Phone Number:</th>
        <td><input type="text" name="mbl"  />*<?php echo $errmbl; ?></td>
    </tr>
    <tr>
        <th>Comment:</th>
        <td><textarea name="comment" rows="5" cols="40" ></textarea></td>
    </tr>
    <tr>
        <th>Gender:</th>
        <td>
            <input type="radio" name="gender" value= "male" /> Male
            <input type="radio" name="gender" value= "female" /> Female
            *<?php echo $errgender; ?>
        </td>
    </tr>
    <tr>
        
        <td>
            <input type="submit" name="submit" value= "submit"/>
            
        </td>
    </tr>
</table>
</form>     
        <?php
            echo "Name: ". $name . "</br>";
            echo "Email: ". $email . "</br>";
            echo "Mobile Number: ". $mbl . "</br>";
            echo "Comment: ". $comment . "</br>";
            echo "Gender: ". $gender;
            
        ?>
        </section>
        </section>
        <section class="footer">
            <h2>This is Footer</h2>
        </section>
    </div>
</body>

</html>