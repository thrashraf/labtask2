<?php

    $formatMarkah = array("Voice", "Pronoun", "Timing", "Stage Presence", "Mastery lyrics");

    $totalmark = 0;
    if (isset($_POST['btnCalculate'])) {
        $mark = $_POST['mark'];

        print_r($mark);
        foreach($mark as $markah) {
            $totalmark += $markah;
        }

        echo $totalmark;
    }


?>


<html>

<head>

</head>

<body>
    <caption>SK Batu 7 Competition</caption>

    <form action="" method="POST">
        <table>
            <?php
             
                foreach($formatMarkah as $x => $val) {         
            ?>

            <tr>
                <td><?php echo $formatMarkah[$x] ?></td>
                <td><input type="number" name="mark[<?php echo $formatMarkah[$x] ?>]"></td>
            </tr>

            <?php } ?>


            <tr>
                <td></td>
                <td><input type="submit" value="calculate" name="btnCalculate"></td>
            </tr>
        </table>
    </form>
</body>

</html>