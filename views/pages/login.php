
    <main class=" d-flex justify-content-center align-items-center ">
        <form class="pt-5 form_login_gral" method="post">
            <legend>Login</legend>
            <div class="container_form_login">
                <div class="p-3 form_login ">
                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login_email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="login_password">
                    </div>
                    <?php 
                        //session_start();
                        require_once('./controllers/formsControllers.php');
                        $login = new FormsController;
                        $login -> ctrLogin();
                    ?>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </main>

