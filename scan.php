<?PHP
    include "config.php";
    $sql = "SELECT * FROM images";
    $res = mysqli_query($connect,$sql);
    /*
        $data - ассоциативный массив. key = td.
    */
    while($data = mysqli_fetch_assoc($res)){
        echo "
            <a
                class='gallery-link'
                href='
                    full_image.php?
                        file={$data['id']}&
                        title={$data['title']}&
                        description={$data['description']}
                '>
                <img
                    class='gallery-item'
                    src='./images/{$data['src']}'
                    alt='{$data['title']}'
                />
            </a>
        ";
    };
?>