<?php
if(!isset($year)) $year = date("Y"); #If the year and month is already set don't reset it.
if(!isset($month)) $month = date("m");
$semester = $year;#start with the year
if ($month < 7){# If the month is less than july, it's spring and the next is fall
    $nextsemester = $semester . "FA";
    $semester = $semester . "SP";
}else{#If the month is greater than or equal to july, it's fall and the next is next year's spring.
    $nextsemester = $semester + 1;
    $nextsemester = $nextsemester . "SP";
    $semester = $semester . "FA";
}