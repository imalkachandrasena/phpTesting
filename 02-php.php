<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?php echo"Imalka_c"; ?>
    </title>
    <style>
        #text_input{
            background-color: lightgray;
            font-size: 20px;
            border-radius: 10px;
            height: 35px;
        }
    </style>
</head>
<body>
    <?php //create variables in php 
        $name = "imalka";
        echo $name," is my name";
    ?>
    <form method="get">
        <input type="text" name="user_input" id="text_input" placeholder="type your name">
        <button type="submit"id="text_input">submit</button>
    </form>
    <?php 
        $user_input = $_GET["user_input"];
        echo $user_input," is your name.";
    ?>

</body>
</html>