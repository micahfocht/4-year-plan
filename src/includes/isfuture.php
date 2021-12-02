<?php
function isFuture($semester): bool
{
    if(!isset($year)) $year = date("Y");
    if(!isset($month)) $month = date("m");
    if ($month < 7){
        $curr = "SP";
    }else{
        $curr = "FA";
    }
    if($semester == 'TRANSFER') return true;
    else if(str_ends_with($semester, "SU")){
        if(intval(substr($semester, 0,4)) > $year){
            return true;
        }else if(intval(substr($semester, 0,4)) == $year && $curr == "SP"){
            return true;
        }else{
            return false;
        }
    }else if(str_ends_with($semester, "WI")){
        if(intval(substr($semester, 0,4)) == $year && $curr == "SP"){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}