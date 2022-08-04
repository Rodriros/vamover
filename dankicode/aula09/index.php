<!DOCTYPE html>
<html>
<head>
    <title>Fomulário</title>
</head>
<body>
<?php
//    if(isset($_GET['acao'])){
//        $nome = $_GET['nome'];
//        $email = $_GET['email'];
//
//        echo $nome;
//        echo '<br />';
//        echo $email;
//    }
//
//    if(isset($_POST['acao'])){
//        $nome = $_POST['nome'];
//        $email = $_POST['email'];
//
//        echo $nome;
//        echo '<br />';
//        echo $email;
//    }

    if(isset($_POST['acao'])){
        echo $_POST['nome'];
        echo '<hr>';
        foreach ($_POST['valor'] as $key => $value) {
            echo $key;
            echo '=>';
            echo $value;
            echo '<br>';
        }
    }
?>
<!--    <form METHOD="get">-->
<!--        Nome<input type="text" name="nome"/><br>-->
<!--        Email<input type="text" name="email">-->
<!--        <input type="submit" name="acao" value="Enviar">-->
<!---->
<!--    </form>-->

    <form METHOD="post">
       <select name="nome">
        <option value="rodrigo">rodrigo</option>
        <option value="rosales">rosales</option>
        <option value="anicama">anicama</option>
       </select>
        <input type="checkbox" name="valor[]" value="10">10
        <input type="checkbox" name="valor[]" value="20">20
        <input type="checkbox" name="valor[]" value="30">30
        <input type="checkbox" name="valor[]" value="40">40
        <input type="submit" name="acao" value="Enviar">

    </form>



</body>
</html>
