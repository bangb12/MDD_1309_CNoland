<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>FAQ - ImageBase</title>
    <link href="../../css/bootstrap/css/bootstrap.css" rel="stylesheet"></script>
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
                <h2>What is this website?</h2>
                <p>A place to store various images found on the web, and put a story behind it.</p>
                <h2>Something doesnt work! What do I do?</h2>
                <p>Send an email to <i>bangb12@fullsail.edu</i> and describe your problem</p>
                <h2>How do I get an account?</h2>
                <p>Click the signup link above an fill out the forms and you'll be ready to login!</p>
                <h2>I have more questions involving the website. What can I do to get these answered?</h2>
                <p>Just like above shoot me an email at <i>bangb12@fullsail.edu</i> and I'll get back ASAP</p>
            </div>
        </section>
    <?
        $this->load->view('footer')
    ?>
    </div>

</body>

</html>