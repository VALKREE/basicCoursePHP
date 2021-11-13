<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <? include './components/header.php'; ?>
    <main>
        <?php
            $heading1 = "<h1>Heading 1</h1>";
            $title = "<p>Title</p>";
            $date = "<p>".date("Y")."</p>";
            echo $heading1;
            echo $title;
            echo $date;
        ?>
    </main>
    <? include './components/footer.php'; ?>
</body>
</html>