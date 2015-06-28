<?php

    //This Block will execute always to list all news
    $dbQuery = "SELECT * FROM page";
    $resultQuery = mysql_query($dbQuery);
    $resultCount = mysql_num_rows($resultQuery);
    $rows = Array();
    if($resultCount > 0) {
        while($row = mysql_fetch_array($resultQuery)){
            array_push($rows, $row);
        }
    }
    //End Select all news block
   
        
    
?>