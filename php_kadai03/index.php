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
                <div class="header_post"><a class="header_post_link" href="post.php">追加する</a>
                <a class="cart_link" href="cart.php"><img src="サイドテーブルアイコン.png"></a>
            </div>
            </div>
    </header>
    <!-- Head[End] -->


    <!-- Main[Start] -->
    <?php include("getDatas.php") ?>
    <div class="imageList">
        <?php foreach($data as $image){ ?>
            <a href="Details.php?id=<?php echo $image["id"]; ?>"><img src="images/<?php echo $image["filename"]; ?>" alt="投稿画像"></a>
            <?php };?>
    <!-- Main[End] -->


</body>

</html>
