<?php
    $link = pg_connect("host=localhost port=5432 dbname=pruebatest user=postgres password=good");
    if (!$link){
        die("Can't connect to : " . pg_last_error());  
    }  
    else{
        echo "Connect";
    }

    $query = "SELECT * FROM probando";
    $question = pg_query($link, $query);
    if($question){
        if(pg_num_rows($question)>0){
            echo "<p>Id:<br />";
            echo "---------------------------------</p>";
            while($obj = pg_fetch_object($question)){
                echo $obj->Name."<br />";
            }  
        }
    }
?>