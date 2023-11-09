<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $variable_name = "Imalka_c";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $variable_name; ?></title>
</head>
<body>
    <h1>
        <?php
            $variable_name = "Chandrasena"; 
            echo $variable_name."<br>";
            $myArray = array('imalka','chandrasena','it',1);
            print($myArray[3])."<br>";
            //object,resource,int,float,string,array data types 
        ?>

        <?php 
        //use pre-defined functions
            print(strlen("Imalka chandrasena")."<br>");
            print(str_word_count("Imalka Chandrasena")."<br>");
            print($myFloat = 10.25);
        ?>
    </h1>
</body>
</html>