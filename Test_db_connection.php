<!DOCTYPE html>
<html>
<head>

</head>

<body>
<?php
    $servername = 'localhost';
    $root = 'root';
    $password = '';

    //$connection =  my_sql($servername, $root, $password);
    if(!$connection){
        echo '<p> Errore nella connessione al server </p>';
    }
    function test_global_local_scope(){
        global $serverNAME;
        echo '<p>'.$serverNAME.'</p>';
        
    }
    test_global_local_scope();
?>
</body>
</html>