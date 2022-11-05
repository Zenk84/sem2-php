<?php
$productList = [
    ['id' => 1, 'name' => 'iPhone', 'price' => 1200, 'qty' => 10,],
    ['id' => 5, 'name' => 'Samsung', 'price' => 900, 'qty' => 14,],
    ['id' => 7, 'name' => 'Nokia', 'price' => 650, 'qty' => 7,],
    ['id' => 8, 'name' => 'Oppo', 'price' => 400, 'qty' => 9,],
    ['id' => 9, 'name' => 'Sony', 'price' => 660, 'qty' => 5,],
];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Bai Tap 1</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>    
        <style>
            .right {
                text-align: right;
            }
            th {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Bai Tap 1</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Revenue</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $totalQty = $totalRevenue = 0;
                    foreach ($productList as $item): 
                        $totalQty += (float)$item['qty'];
                        $revenue += (float)$item['price'] * (float)$item['qty'];
                        $totalRevenue += $revenue;
                    ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['name'] ?></td>
                        <td class="right">$<?= number_format($item['price'], 0) ?></td>
                        <td><?= $item['qty'] ?></td>
                        <td class="right">$<?= number_format($revenue, 0) ?></td>
                    </tr>
                    <?php endforeach;?>
                    <tr>
                        <td colspan="3">Total</td>
                        <td><b><?= number_format($totalQty, 0) ?></b></td>
                        <td class="right"><b><?= number_format($totalRevenue, 0) ?></b></td>
                    </tr>
                </tbody>
            </table>
            <!-- <h3><label>Total Qty: <?= number_format($totalQty, 0) ?></label></h3>
            <h3><label>Total Revenue: <?= number_format($totalRevenue, 0) ?></label></h3> -->
        </div>
    </body>
</html>