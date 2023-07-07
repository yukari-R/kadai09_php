<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- データを登録するページ -->
    <meta charset="UTF-8">
    <title>画像一覧</title>
    <link href="css/style.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
            <div class="header">
                <div class="heåader_post"><a class="header_post_link" href="post.php">追加する</a></div>
                <a class="cart_link" href="cart.php"><img src="サイドテーブルアイコン.png"></a>
            </div>
    </header>
    <!-- Head[End] -->


    <!-- Main[Start] -->
    
    
    <?php include("getDatas_cart.php");
    ?>

<table class="cartList">
    <tr>
    <th>種類</th>
    <th>選んだもの</th>
    <th>削除</th>
    </tr>
    <tr>
    <?php foreach($data as $image){ ?>
    <th><?=htmlspecialchars($image["type"]) ?></th>
    <th>
            <img src="images/<?php echo $image["filename"]; ?>" alt="選んだ画像"></a>
    </th>
    <th><button class="delete" onclick="location.href='deleteImage_cart.php?id=<?php echo $image["id"]; ?>';">削除</button></th></tr>
            <?php };?>
</table>

    <!-- Main[End] -->


</body>

</html>
