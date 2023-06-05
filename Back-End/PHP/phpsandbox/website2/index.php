<?php include 'server-info.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>System Info</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Server & File info</h1>
        <?php if($server): ?>
            <ul class="list-group" >
                <?php foreach($server as $key => $value):?>
                    <li class="list-group-item" >
                        <strong> <?php echo $key; ?>: </strong>
                        <?php echo $value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <h1>Client info</h1>
        <?php if($client): ?>
            <ul class="list-group" >
                <?php foreach($client as $key => $value):?>
                    <li class="list-group-item" >
                        <strong> <?php echo $key; ?>: </strong>
                        <?php echo $value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>