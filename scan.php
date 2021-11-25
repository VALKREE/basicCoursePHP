<?php
    $images = scandir("images");
    for($i = 2; $i < count($images); $i++){
?>
    <!--
    /*<a class="gallery-link" href="full_image.php?file=<?= $images[$i]?>">
        <img class="gallery-item" src="images/<?= $images[$i] ?>" alt="<?= $images[$i] ?>">
    </a>*/
    -->
    <img class="gallery-item" src="images/<?= $images[$i] ?>" alt="<?= $images[$i] ?>">
<?php
    }
?>