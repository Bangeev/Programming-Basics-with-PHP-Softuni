<?php
   
        $examHour = intval(readline());
        $examMinutes = intval(readline());
        $arriveHour = intval(readline());
        $arriveMinutes = intval(readline());

    $totalExam = $examHour * 60 + $examMinutes;
    $totalArrive = $arriveHour * 60 + $arriveMinutes;
 
        if($totalArrive > $totalExam){
            printf("Late" . PHP_EOL);
            if($totalArrive - $totalExam < 60){
                printf("%d minutes after the start", $totalArrive - $totalExam);
            }else{
                $lateHour = ($totalArrive - $totalExam) / 60;
              $lateMinute = ($totalArrive - $totalExam) % 60;
                printf("%d:%02d hours after the start",$lateHour,$lateMinute);
            }
 
        }else if($totalArrive == $totalExam || $totalExam - $totalArrive <= 30){
            printf("On time" . PHP_EOL);
            if($totalExam - $totalArrive <= 30 && $totalExam - $totalArrive != 0){
                printf("%d minutes before the start",$totalExam - $totalArrive);
            }
 
        }else if($totalExam - $totalArrive > 30){
            printf("Early" . PHP_EOL);
            if($totalExam - $totalArrive < 60){
                printf("%d minutes before the start", $totalExam - $totalArrive);
            }else {
                $earlyHour = ($totalExam - $totalArrive) / 60;
                 $earlyMinute = ($totalExam - $totalArrive) % 60;
                printf("%d:%02d hours before the start",$earlyHour,$earlyMinute );
            }
        }