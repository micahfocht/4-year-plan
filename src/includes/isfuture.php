<?php
include "./includes/calculatesemester.php";
function isFuture($semester){
    if($semester == 'TRANSFER') return true;
    else if(substr($semester, -2) == "SU"){
        if(intval(substr($semester, 4)) >= $year){
            return true;
        }
    }
}