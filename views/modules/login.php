
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block pams-login"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome back to PAMS</h1>
                                <h4 class="h6 text-gray-900 mb-4">Pet Adoption Management System</h4>
                            </div>

                            <?php
                              $auth = new ControllerAuthentication();
                              $login = $auth->ctrLogin();

                              if ($login == "locked") {
                                echo '<form role="form" method="post">
                                  <div class="form-group">
                                      <input type="text" class="form-control form-control-user"
                                          id="username" name="username" placeholder="Username" disabled>
                                  </div>
                                  <div class="form-group">
                                      <input type="password" class="form-control form-control-user"
                                          id="password" name="password" placeholder="Password" disabled>
                                  </div>
                                  <button type="submit" class="btn btn-primary btn-user btn-block" disabled>Login</button>
                                  </form>
                                  <br>
                                  <p align="center"><a href="register">Are you a new user?</a></p>
                                  <script src="views/js/restrict.js"></script>
                                  ';
                                }
                              else {
                                echo '<form role="form" method="post">

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="username" name="username" placeholder="Username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" name="password" placeholder="Password" required>
                                    </div>
                                    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
                                        async defer>
                                    </script>
                                    <div class="g-recaptcha" data-sitekey="6Le5RZEeAAAAAKEusa174wCpLJxOChTkd22_L48F">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                </form>
                                <br>
                                <p align="center"><a href="register">Are you a new user?</a></p>';
                              }
                            ?>

                            <div class="copyright text-center my-auto">
                                <span>Powered by </span><img src="views/assets/images/aldebaran-banner.png" width="140px"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
