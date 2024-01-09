<?php

echo "PC02999 - Lab 1.2 <br>";

$courses =[
    's1' => 'Lập trình PHP',
    's2' => 'Lập trình PHP2',
    's3' => 'Lập trình PHP3',
];

/**
 * 
 *Hàm này dùng để lấy ra mảng tuần tự
 * @return array
 */
function get_courses(){
    global $courses;

    return array_values($courses);
}
var_dump(get_courses());

/**
 * Undocumented function
 *
 * Hàm này kiểm tra khóa học
 * 
 * @return string
 */
function find_by_block($s1){
    global $courses;

    return array_key_exists($s1, $courses)? $courses[$s1]: "Invalid Course";
}
?>