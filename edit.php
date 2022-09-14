<!DOCTYPE html>
<html lang="ja">

<?php include_once __DIR__ . '/_head.html' ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tasks</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/ress@3.0.0/dist/ress.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&family=Zen+Maru+Gothic:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <header class="header-task">
            <h1><a href="index.php">My Tasks</a></h1>
        </header>
        <h2 class="update-task-title">タスクの更新</h2>
        <div class="update-task task-form-group">
            <!-- エラーが発生した場合、エラーメッセージを出力 -->
            <ul class="errors">
                <li>タスク名を入力してください</li>
            </ul>
            <form action="" method="post">
                <input type="text" name="title" placeholder="タスクを入力してください">
                <div class="update-btn-group">
                    <button type="submit" class="big-btn update-btn">
                        <span>Update</span>
                        <i class="fa-solid big-icon fa-arrow-rotate-right"></i>
                    </button>
                    <a href="index.php" class="big-btn return-btn">
                        <span>Return</span>
                        <i class="fa-solid big-icon fa-arrow-rotate-left"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
