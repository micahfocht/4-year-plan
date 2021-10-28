<?php
if(!isset($year)) $year = date("Y");
if(!isset($month)) $month = date("m");
$semester = $year;
if ($month < 7){
    $nextsemester = $semester . "FA";
    $semester = $semester . "SP";
}else{
    $nextsemester = $semester + 1;
    $nextsemester = $nextsemester . "SP";
    $semester = $semester . "FA";
}