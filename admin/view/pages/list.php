<?php
    if(isset($_GET["pagename"])) {
        $dbQuery = "SELECT * FROM page WHERE page_name = '".$_GET["pagename"]."'";
        $resultQuery = mysql_query($dbQuery);
        $existingData = "";
        $resultCount = mysql_num_rows($resultQuery);
        if($resultCount > 0){
            while ($resultArray = mysql_fetch_array($resultQuery)) {
                $existingData = $resultArray['content'];
            }
        }
    }
    //To Add News in Database
    if(isset($_POST["pagename"]) 
        && isset($_POST["content"]) 
       ) {
        $sql = "DELETE FROM page WHERE page_name='".$_POST["pagename"]."'";
        $res = mysql_query($sql);
        if($res) {
            $query ="INSERT INTO page 
                (page_name, content) VALUES ('".$_POST['pagename']."', '".htmlspecialchars($_POST['content'],ENT_QUOTES)."')";
            $result = mysql_query($query) or die(mysql_error());
        }
        $dbQuery = "SELECT * FROM page WHERE page_name = '".$_GET["pagename"]."'";
        $resultQuery = mysql_query($dbQuery);
        $existingData = "";
        $resultCount = mysql_num_rows($resultQuery);
        if($resultCount > 0){
            while ($resultArray = mysql_fetch_array($resultQuery)) {
                $existingData = $resultArray['content'];
            }
        }
        return;
    }

    //Delete News Block Start
    if(isset($_GET["page"]) 
        && isset($_GET["id"])
        && $_GET["page"] == "delete_news") {
        // sql to delete a record
        $sql = "DELETE FROM page WHERE id=".$_GET["id"];
        $res = mysql_query($sql);
        if(!$res) {
            $error = "Some Error Occured in deleting record with id".$_GET["id"];
        } 
    }
    //Delete News block end

    //Edit News Block Start
    if(isset($_GET["page"]) 
        && isset($_GET["id"])
        && $_GET["page"] == "edit_cms") {
        $editableNews = "SELECT * FROM page WHERE id=".$_GET["id"];
        $editQuery = mysql_query($editableNews);
        $editCount = mysql_num_rows($editQuery);
        $edit = Array();
        if($editCount > 0) {
            while($rowEdit = mysql_fetch_array($editQuery)){
                array_push($edit, $rowEdit);
            }
        }
     //Edit News block end
}
    //This Block will execute always to list all news
   //Edit News Block Start

    $dbQuery = "SELECT * FROM page";
    if(isset($_GET["select"])) {
        $dbQuery .= " WHERE select='".$_GET["select"]."'";
    }
    $resultQuery = mysql_query($dbQuery);
    $resultCount = mysql_num_rows($resultQuery);
    $row = Array();
    if($resultCount > 0) {
        while($row = mysql_fetch_array($resultQuery)){
            array_push($row, $row);
        }
    }
    //End Select all news block
    
?>