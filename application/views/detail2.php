<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Images - ImageBase</title>
    <link href="../../../css/bootstrap/css/bootstrap.css" rel="stylesheet"></script>
</head>

<body>
    <div class="container">
        <?
            $this->load->view('header')
        ?>
        <section>
            <div class="container-fluid">
                <h2>Image Name</h2>
                <img class="img-polaroid" src="../../../images/image2.jpg"/>
                <h3>This will be a much longer description of the image</h3>
            </div>
        </section>
        <?
            $this->load->view('footer')
        ?>
    </div>
</body>

</html>