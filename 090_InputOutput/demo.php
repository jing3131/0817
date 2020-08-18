<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fail{
            color: red;
        }
    </style>
</head>
<body>
    
    <?php $scoreList = Array(99,87,69,53,74); ?>

    <ul>
        <?php for($i = 1; $i <= 3; $i++){ ?>        <!-- 可以用php包住html -->
            <li><?= $i ?></li>                      <!-- = < ?php echo $i ?> -->
        <?php } ?>
    </ul>

    <hr>

    <ul>
        <?php for($i = 1; $i <= 3; $i++){
                echo "<li>1</li>";
            } 
        ?>                    
    </ul>

    <hr>
    
    1.
    <ul>
        <?php foreach($scoreList as $score){   ?>
            <?php if($score <60) { ?>
                <li class="fail"><?= $score ?></li>   
            <?php } else {?>
                <li><?= $score ?></li>           
            <?php } ?>
        <?php } ?>
    </ul>

    <hr>
    
    2.
    <ul>
        <?php foreach($scoreList as $score){   ?>  
            <li class="<?= (($score < 60) ? "fail" : "") ?>">
                <?= $score ?>
            </li>  
        <?php } ?>
    </ul>

    
    <hr>
    <h1>demo</h1>
    <p>...</p>
    <img src="IO_9.php">        <!-- img src裡也可以放.php -->

</body>
</html>