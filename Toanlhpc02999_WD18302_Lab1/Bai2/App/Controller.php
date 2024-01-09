<?php
include 'model.php';
$list_of_courses = get_courses();

$s1 = (!empty($_GET['s1'])) ? $_GET['s1']:'';

$courses_name = find_by_block($s1);
include 'view.php'
?>