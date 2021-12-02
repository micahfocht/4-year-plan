<?php
function isFuture($semester){
    if(!isset($year)) $year = date("Y");
    if(!isset($month)) $month = date("m");
    if ($month < 7){
        $curr = "SP";
    }else{
        $curr = "FA";
    }
    if($semester == 'TRANSFER') return true;
    else if(substr($semester, -2) == "SU"){
        if(intval(substr($semester, 0,4)) > $year){
            return true;
        }else if(intval(substr($semester, 0,4)) == $year && $curr == "SP"){
            return true;
        }else{
            return false;
        }
    }else if(substr($semester, -2) == "WI"){
        if(intval(substr($semester, 0,4)) == $year && $curr == "SP"){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}