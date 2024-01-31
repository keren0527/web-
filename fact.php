<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST"action=""align="center">
        <fieldset>
            <legend align="left">FACTORIAL </LEGEND>
     <b>input any number:</b><input type="number"name="nbr"><BR><br>

     <input type="submit"name="send"value="send">
    </fieldset>
</form>
</body>
</html>
<?php
if(isset($_POST['send'])){
    $nbr=$_POST['nbr'];

    function fact($nbr){
        $fact=1;

    if($nbr>=1){
        for($i=1;$i<=$nbr;$i++){
            $fact*=$i;
        }
        echo" the factorial:$fact";
    }
    }
    fact($nbr);

}

?>