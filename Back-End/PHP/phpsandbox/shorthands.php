<?php

    $loggedIn = true;

    $arr = [1,2,3,4,5,6,7,8,9];

    // if($loggedIn){
    //     echo 'You are logged in';
    // } else {
    //     echo 'You are not logged in';
    // }

    // echo ($loggedIn) ? 'You are logged in' : 'You are not logged in' ;


    $registered = ($loggedIn == true) ? true : false;

    // echo $registered;

    $age = 7;
    $score = 15;

    // echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average': 'Exceptional 1'):  ($age > 10 ? 'Horrible':'Average'))  ;

?>

<div>
    <?php if($loggedIn) { ?>
        <h1>Welcome User</h1>
    <?php } else {?>
        <h1>Welcome Guest</h1>
    <?php } ?>
</div>

<!-- Doing the same if else above in diff way -->

<div>
    <?php if($loggedIn): ?>
        <h1>Welcome User</h1>
    <?php else: ?>
        <h1>Welcome Guest</h1>

    <?php endif; ?>         
     <!-- 'endif' is necessary  in this way -->
</div>


<!-- Loops -->
<div>
    <?php foreach( $arr as $val): ?>

        <?php echo $val; ?>

        <?php endforeach; ?>
</div>


<!-- For loop -->
<div>
    <?php for( $i = 0; $i<10; $i++): ?>

        <li> <?php echo $i; ?> </li>

        <?php endfor; ?>
</div>