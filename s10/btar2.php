<?php
// include "../source.php";
// include "../source.php";
// include_once '../source.php';
// include_once '../source.php';
require '../source.php';
// require_once '';
/* echo "<pre>";
var_dump($catMap); die;
echo "</pre>"; */
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
        <div class="all-product">
            <h1>Bai Tap 1</h1>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Revenue</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $catMap = [];
                    $contentToShow = '';
                    $listProduct = $productList;
                    foreach ($catList as $catItem) {
                        $catMap[$catItem['id']] = $catItem;
                        
                        // show value on table
                        $count = $totalPrices = 0;
                        foreach ($listProduct as $key => $item) {
                            if ($item['catId'] == $catItem['id']) {
                                $count++;
                                $totalPrices += (float)$item['prices'];
                                unset($listProduct[$key]);
                            }
                        }
                        $showPrice = number_format($totalPrices, 0);
                        $contentToShow .= "<tr>
                        <td>{$catItem['id']}</td>
                        <td>{$catItem['name']}</td>
                        <td>$count</td>
                        <td>\${$showPrice}</td>
                        </tr>";
                    }

                    $totalQty = $totalRevenue = 0;
                    foreach ($productList as $item) :
                        $totalQty += (float)$item['qty'];
                        $revenue = (float)$item['prices'] * (float)$item['qty'];
                        $totalRevenue += $revenue;
                    ?>
                        <tr>
                            <td><?= $item['id'] ?></td>
                            <td><?= $item['name'] ?></td>
                            <td><?= $catMap[$item['catId']]['name'] ?? 'N/A' ?></td>
                            <td class="right">$<?= number_format($item['prices'], 0) ?></td>
                            <td><?= $item['qty'] ?></td>
                            <td class="right">$<?= number_format($revenue, 0) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="3">Total</td>
                        <td><b><?= number_format($totalQty, 0) ?></b></td>
                        <td class="right"><b><?= number_format($totalRevenue, 0) ?></b></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="all-category">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>
                            <!-- <input type="checkbox" name="catSelectedAll" value="all" /> -->
                            ID
                        </th>
                        <th>Category</th>
                        <th>Total Number</th>
                        <th>Total Prices</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        echo $contentToShow;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>