<?php 

    
	$formatMarkah = array("Voice", "Pronunciation", "Timing", "Stage Presence", "Mastery Lyrics");
	error_reporting(0);
	if(isset($_POST['btnCalculate'])) {
		
		$index = 0;
		$totalMark = 0;
        $medal;
		$name = $_POST['name'];
		$class = $_POST['class'];
		$date = $_POST['date'];
		$jury = $_POST['juryName'];
		
		$mark = $_POST['mark'];

            foreach($mark as $m) {
                $totalMark += $m;
                $index ++;
            }
            
            // echo "<br>";
            // echo "Total Mark" . $totalMark . "/100";

            if ($totalMark <= 100 && $totalMark >= 80) {
                $medal = 'Gold';
            } else if ($totalMark <= 79 && $totalMark >= 65) {
                $medal = 'Silver';
            } else if ($totalMark <= 64 && $totalMark >= 50) {
                $medal = 'Bronze';
            } else if ($totalMark <= 50) {
                $medal = 'No awards';
            }

            // echo "<br>";
            // echo "Award " . $medal;
	}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <caption>SK BATU 7 SINGING COMPETITION</caption>
    <table>
        <form action="" method="post">
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>Class:</td>
                <td><input type="text" name="class" id="" required></td>
            </tr>
            <tr>
                <td>Date:</td>
                <td><input type="date" name="date" id="" required></td>
            </tr>
            <tr>
                <td>Jury Name:</td>
                <td><input type="text" name="juryName" id="" required></td>
            </tr>
            <?php
                    $index = 0;
                    foreach ($formatMarkah as $x => $val) {

            ?>
            <tr>
                <td>
                    <p><?php echo $formatMarkah[$x]?></p>
                </td>
                <td>

                    <input type="number" name="mark[<?php echo $index?>]" value="">
                    <?php echo '<br>'; $index++?>

                </td>

            </tr>
            <?php
                    }; ?>
            <tr>
                <td>
                </td>
                <td><input type="submit" name="btnCalculate" value="Calculate"></td>
            </tr>



        </form>
    </table>



    <h1> Result </h1>
    <section class='result'>
        <p>Fullname: </p>
        <p><?php echo $name ?></p>
        <p>Class: </p>
        <p><?php echo $class ?></p>
        <p>Date: </p>
        <p><?php echo $date ?></p>

    </section>


    <div>
        <?php
                $index = 0;
                foreach ($mark as $m) {

        ?>
        <section class="result">
            <h1><?php echo $formatMarkah[$index] ?></h1>
            <p><?php echo $m ?></P>
            <?php $index++ ?>
        </section>
        <?php
            }; ?>
    </div>

    <h3>TOTAL MARK <?php echo $totalMark?>/100</h3>
    <h3>Award <?php echo $medal ?></h3>
</body>