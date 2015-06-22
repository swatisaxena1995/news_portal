<?php
    //To Add News in Database
    if(isset($_POST["title"]) 
        && isset($_POST["content"]) 
        && isset($_POST["location"])
        && isset($_POST["create_date"])
        && isset($_POST["tags"]) 
        && !isset($_POST["id"])) {

        $thumb = $_FILES['thumb'] ;

        $fileName = $_FILES["thumb"]["name"]; 
        $fileTmpLoc = $_FILES["thumb"]["tmp_name"];
        // Path and file name
        $pathAndName = "./images/".$fileName;
        // Run the move_uploaded_file() function here
        $moveResult = move_uploaded_file($fileTmpLoc,$pathAndName);

        $query ="INSERT INTO news 
            (title, content, create_date, thumbnails, location,tags) VALUES ('".$_POST['title']."', '".$_POST['content']."', '".$_POST['create_date']."','".$pathAndName."','".$_POST['location']."' ,'".$_POST['tags']."')";
        $result = mysql_query($query) or die(mysql_error());
    }

    //EDIT NEWS in DB 
    if(isset($_POST["title"]) 
        && isset($_POST["content"]) 
        && isset($_POST["location"])
        && isset($_POST["create_date"])
        && isset($_POST["tags"])
        && isset($_POST["id"])) {

            $dbQuery = "UPDATE news SET title='".$_POST["title"]."', content='".$_POST["content"]."', location='".$_POST["location"]."'  WHERE id='".$_POST["id"]."'";
            $resultQuery = mysql_query($dbQuery);
            if(!$resultQuery) {
                $error="some error occured";
            } else {
                $success = "Record Updated Successfully";
            }
        }
    //EDIT NEWS in DB end

    //Delete News Block Start
    if(isset($_GET["page"]) 
        && isset($_GET["id"])
        && $_GET["page"] == "delete_news") {
        // sql to delete a record
        $sql = "DELETE FROM news WHERE id=".$_GET["id"];
        $res = mysql_query($sql);
        if(!$res) {
            $error = "Some Error Occured in deleting record with id".$_GET["id"];
        } 
    }
    //Delete News block end

    //Edit News Block Start
    if(isset($_GET["page"]) 
        && isset($_GET["id"])
        && $_GET["page"] == "edit_news") {
        $editableNews = "SELECT * FROM news WHERE id=".$_GET["id"];
        $editQuery = mysql_query($editableNews);
        $editCount = mysql_num_rows($editQuery);
        $editAble = Array();
        if($editCount > 0) {
            while($rowEdit = mysql_fetch_array($editQuery)){
                array_push($editAble, $rowEdit);
            }
        }
    }
    //Edit News block end

    //This Block will execute always to list all news
    $dbQuery = "SELECT * FROM news";
    if(isset($_GET["tag"])) {
        $dbQuery .= " WHERE tags='".$_GET["tag"]."'";
    }
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