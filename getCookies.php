<?php
        $array = array();
        if (!isset($_COOKIE["count_all"])){
            echo json_encode([]);
        }
        else{
            if(!isset($_COOKIE["all_companies_visited_pages"])) {
                echo json_encode([]);
            }
            else{
                $count_all=$_COOKIE["count_all"];
                $temp=0;
                while($count_all>0){
                    $array[$temp] = $_COOKIE["all_companies_visited_pages"][$count_all];
                    $temp=$temp+1;
                    $count_all=$count_all-1;
                    }
                }
        }
	echo json_encode($array);
    ?>