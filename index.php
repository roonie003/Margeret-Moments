<?php
include 'db.php';
$result = mysqli_query($link,"SELECT * FROM mm_content");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Margaret Moments</title>
</head>

<body>
    <img src="/images/coffeecup.jpeg" class="logo" />

    <div>
        </ <?php
        $i=0;
        while($row = mysqli_fetch_array($result)){
            ?> <h1><?php echo $row["text"]; ?></h1>

        <?php
            $i++;
        }
        ?>


    </div>
</body>

</html>