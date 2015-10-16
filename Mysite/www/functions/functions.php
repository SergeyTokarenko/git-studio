<?php
    require_once "connect.php";

    function getNews ($limit) {
        global $mysqli;
        connectDB();
        
        $result = $mysqli->query("SELECT * FROM `news`  ORDER BY `id` DESC LIMIT $limit"); //ORDER BY `id` DESC - сортировка по убыванию (новые в верху, старые в низу)
        closeDB();
        return resultToArray ($result);
    }

    function resultToArray ($result) {
        $array = array();
        while (($row = $result->fetch_assoc()) != false)
            $array[] = $row;
        return $array;
    }
    
?>