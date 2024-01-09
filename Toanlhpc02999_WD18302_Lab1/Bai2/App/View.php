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