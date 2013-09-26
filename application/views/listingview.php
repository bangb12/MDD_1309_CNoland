<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Images - ImageBase</title>
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet"></script>
</head>

<body>
    <!---- Div containing main content ---->
    <div class="container">
        <?
            $this->load->view('header')
        ?>
        <!---- Section Containing current images on page ---->
        <section>
            <div class="container-fluid">
                <h2>Image Name</h2>
                <img class="img-rounded" src="images/image1.png"/>
                <p>Short description of image</p>
                <p><a href="http://localhost:8888/MDD_1309_CNoland/index.php/pages/details/detail1">More Details...</a></p>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <h2>Image Name</h2>
                <img class="img-rounded" src="images/image2.jpg"/>
                <p>Short description of image</p>
                <p><a href="http://localhost:8888/MDD_1309_CNoland/index.php/pages/details/2">More Details...</a></p>
            </div>
        </section>
    <?
        $this->load->view('footer')
    ?>
    </div>

</body>

</html>