<?php
    $link = pg_connect("host=localhost port=5432 dbname=yourDB user=yourUser password=yourPassword");
    if (!$link){
        die("Can't connect to : " . pg_last_error());  
    }  
    else{
        echo "Connect";
    }

    $query = "SELECT * FROM table";
    $question = pg_query($link, $query);
    if($question){
        if(pg_num_rows($question)>0){
            echo "<p>Id:<br />";
            echo "---------------------------------</p>";
            while($obj = pg_fetch_object($question)){
                echo $obj->id."<br />";
            }  
        }
    }
?>
