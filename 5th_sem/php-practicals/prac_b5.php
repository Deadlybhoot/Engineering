<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h2>String operations...</h2>
    <form action="" method="POST">
        <input type="text" name="string"><br>
        <input type="submit">
    </form>
    <button class="strlen">string-length</button>
    <button class="strev">string-reverse</button>
    <button class="strlow">string-toLowercase</button>
    <button class="strhigh">string-toHighercase</button>

</body>
</html>

<?php
    $str = $_POST['string'];
    if(isset($_POST['strlen'])){
        echo "String Length is:- " . strlen($string);
    }


?>

<script>
    function myfunc(){
        console.log();;
    }
</script>