<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Log in - ImageBase</title>
    <link href="../../../css/bootstrap/css/bootstrap.css" rel="stylesheet"></script>
</head>

<body>
    <!---- Div containing main content ---->
    <div class="container">
        <?
            $this->load->view('header')
        ?>
        <!---- Section containing login form ---->
        <section>
            <div class="container-fluid">
                <form>
                   <label><h3>Username:</h3></label>
                   <input type="text" name="username" class="input-medium" maxlength="20"/>
                   <label><h3>Password:</h3></label>
                   <input type="password" name="password" class="input-medium" maxlength="20"/>
                   <input type="submit" value="submit" />
                </form>
            </div>
        </section>
    </div>
</body>

</html>