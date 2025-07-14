<?php
/* $sum=0;
$num=null;
while(true){
   $num=(int)readline("son:");//readline kiritish uchun
   if($num==0){break;}
   $sum+=$num;
}
echo "yigindi : $sum";

for($i=1;$i<=100;$i++){
    if($i % 3 == 0){
        echo "$i ";
    }
}

$sonlar = [12, 5, 78, 34, 91, 4, 56];
$max=0;
foreach($sonlar as $son){
    if($max < $son){
        $max=$son;
    }
}
echo "kattasi : $max";  */


$kitoblar=["otkan kunlar","jinoyat va jazo","anna karenina","ufq","o'g'ri"];
foreach($kitoblar as $kitob){
    echo " $kitob";
}
$kitoblar[1]="vaqt";
foreach($kitoblar as $kitob){
    echo " $kitob ,";
}
?>