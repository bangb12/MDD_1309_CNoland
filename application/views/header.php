    <!---- Header of the website ---->
        <?
                session_start();
        ?>
        <header class="nav-header">
            <h1 class=".text-center">Image Base</h1>
            <!---- Navigation including links ---->
            <div class="nav">
                <a href="<? echo base_url() ?>?action=home">Home</a>
                <?
                        if($this->session->userdata('logged_in')){
                                echo('<a href="http://localhost:8888/MDD_1309_CNoland/index.php/login/logout/">Logout</a>');
                        }else{
                                echo('<a href="http://localhost:8888/MDD_1309_CNoland/index.php/login/view/">Log-in</a>');
                                
                                echo('<a href="http://localhost:8888/MDD_1309_CNoland/index.php/signup/view/">Sign-up</a>');
                        }
                ?>
            </div>
        </header>