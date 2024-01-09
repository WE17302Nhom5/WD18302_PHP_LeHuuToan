<?php
echo "PC02999 - Lab 1.1 <br>";

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
$list_of_courses = get_courses();

$s1 = (!empty($_GET['s1'])) ? $_GET['s1']:'';

$courses_name = find_by_block($s1);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1.1</title>
</head>
<body>
<h1> <?= $courses_name?></h1>

    <form action="">
       
        <select name="s1" id="">
           <?php foreach($courses as $key => $value):  ?>
                <option value="<?= $key?>"><?= $value ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Tìm khóa học</button>
    </form>
</body>
</html>