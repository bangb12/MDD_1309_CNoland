<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sign up - ImageBase</title>
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet"></script>
</head>

<body>
    <div class="container">
        <?
            $this->load->view('header')
        ?>
        <section>
            <div class="container-fluid">
                <form>
                   <label><h3>Username:</h3></label>
                   <input type="text" name="username" class="input-medium" maxlength="20"/>
                   <label><h3>Password:</h3></label>
                   <input type="text" name="password" class="input-medium" maxlength="20"/>
                   <label><h3>Confirm Password:</h3></label>
                   <input type="text" name="passwordconfirm" class="input-medium" maxlength="20"/>
                   
                </form>
            </div>
        </section>
    </div>
</body>

</html>