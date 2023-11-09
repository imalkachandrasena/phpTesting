<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?php echo"Imalka_c"; ?>
    </title>
    <style>
        #a_tag{
            font-size: 45px;
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php
        echo"Hello world"; //use echo keyword because it's compile time faster than print keyword
        echo "1362124";
        echo 45+5;

        print("Hello world from print keyword.");
    ?>
    <h1>
        <?php 
            echo "Imalka_c";
        ?>
    </h1>
    <a href="www.google.com" id="a_tag">
        <?php 
            echo "Imalka_c";
        ?>
        <br>
    </a>
</body>
</html>