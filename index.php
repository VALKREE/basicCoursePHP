<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Урок 4. Работа с файлами</title>
    <link rel="stylesheet" href="./CSS/index.css">
</head>
<body class="body">
    <div class="wrapper">
        <header class="header">
                <a href="#">Link</a>
                <a href="#">Link</a>
                <a href="#">Link</a>
                <a href="#">Link</a>
                <a href="#">Link</a>
            </header>
            <main class="main">
                <div class="gallery">
                    <form class="gallery-form" action="upload.php" method="post" enctype="multipart/form-data">
                        <label class="gallery-heading">Выберите файл</label>
                        <input class="gallery-file" type="file" accept="image/*" name="image" />
                        <input class="gallery-submit" type="submit" value="Загрузить" />
                    </form>
                    <div class="gallery-items">
                        <?php
                            include "scan.php";
                        ?>
                    <div>
                    <div class="gallery-modal">
                        <span class="gallery-close">&#9747;</span>
                        <img class="gallery-fullImage" src="" alt="">
                    </div>
                </div>
            </main>
            <footer class="footer">
                <a href="#">Link</a>
                <a href="#">Link</a>
                <a href="#">Link</a>
                <a href="#">Link</a>
                <a href="#">Link</a>
            </footer>
        </div>
    <script>
        let galleryModal = document.querySelector('.gallery-modal');
        let galleryImages = document.querySelectorAll('.gallery-item');
        let galleryFullImage = document.querySelector('.gallery-fullImage');
        let siteBody = document.querySelector('.body');
        galleryImages.forEach(elem => {
            elem.addEventListener('click', () => {
                galleryModal.style.display = "flex";
                siteBody.style.overflow = "hidden"
                let galleryImageSrc = elem.currentSrc;
                galleryFullImage.src = elem.currentSrc;
            })
        })
        let galleryModalClose = document.querySelector('.gallery-close');
        galleryModalClose.addEventListener('click', () => {
            galleryModal.style.display = "none";
            siteBody.style.overflow = "auto"
        });
        galleryModal.addEventListener('click', () => {
            galleryModal.style.display = "none";
            siteBody.style.overflow = "auto"
        });
    </script>
</body>
</html>