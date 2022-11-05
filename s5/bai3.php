<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bai 3</title>
</head>
<body>
<div class="container">
    <h1>Bảng Cửu Chương | Case 2</h1>
    <?php
    $i = 1;
    for ($n=1; $n<11; $n++):
        if ($n == 1):
    ?>
            <h2>Bảng số <?= $i ?></h2>
        <?php endif; ?>
        <ul>
            <li><?= $i ?> x <?= $n ?> = <?= $i*$n ?></li>
        </ul>
        <?php if ($n == 10):?>
            <hr>
            <?php
            if ($i != 9) $n = 0;
            $i++;
            ?>
        <?php endif; ?>
    <?php endfor; ?>
</div>
</body>
</html>