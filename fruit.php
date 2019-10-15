<?php
    $fruit = $_GET['fruit'];
    if($fruit == 'apple') {
        echo 'https://i5.walmartimages.ca/images/Large/094/514/6000200094514.jpg';
    } else if($fruit == 'banana') {
        echo 'https://i5.walmartimages.ca/images/Large/580/6_r/875806_R.jpg';
    } else {
        echo 'https://pbs.twimg.com/profile_images/924668207780323328/tUnP-NZa_400x400.jpg';
    }
?>