<?php

$same = "Tutor";

if ($same == "student") {
    echo "your ticket is #500 student discount applied";
}elseif ($same == "Tutor") {
    echo "your ticket is #1000 Tutor discount applied";
}elseif ($same == "non-student") {
    echo "your ticket is #2000 No discount applied";
}else {
    echo "Select Plan";
}


?>