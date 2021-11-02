<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
    <a href="Finaltest1.php"></a>
        <title></title>
    </head>
    <body>
        <?php
        /* Polly Zueva
         * 12.10.21
         */
          //echo "The person was born on" . "<br />";
      
        $timestamp = mt_rand(1, time());
        //Format that timestamp into a readable date string.
        $randomDate = date("d M Y", $timestamp);
        //Print it out.
        //echo $randomDate;
        $month1 = date("d m Y", $timestamp);
        $month1 = explode(" ", $month1);

            switch ($month1[1]) {
                case 1;
                    $month = "January";
                    break;
                case 2;
                    $month = "February";
                    break;
                case 3;
                    $month = "March";
                    break;
                case 4;
                    $month = "April";
                    break;
                case 5;
                    $month = "May";
                    break;
                case 6;
                    $month = "June";
                    break;
                case 7;
                    $month = "July";
                    break;
                case 8;
                    $month = "August";
                    break;
                case 9;
                    $month = "September";
                    break;
                case 10;
                    $month = "October";
                    break;
                case 11;
                    $month = "November";
                    break;
                case 12;
                    $month = "December";
                    break;
            }
            

            if($month == "January" || $month == "February" || $month == "December"){
                echo $period = " in the winter period";
            }elseif($month == "March" || $month == "April" || $month == "May") {
                echo $period = " in the spring period";
            }elseif($month == "June" || $month == "July" || $month == "August") {
                echo $period = " in the summer period";
            }else {
                $period = "in the autumn period";
            }
       
        echo "This person was born on:" . $randomDate.  $period;
        ?>
    </body>
</html>
