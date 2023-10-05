<?php
include('header.php');
?>
   <section class="hero-section d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12 mx-auto">
                            <form class="custom-form login-form" role="form" method="post">
                                <h2 class="hero-title text-center mb-4 pb-2">Login</h2>

                                <div class="form-floating mb-4 p-0">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">

                                    <label for="email">Email address</label>
                                </div>

                                <div class="form-floating p-0">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">

                                    <label for="password">Password</label>
                                </div>

                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                  
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Remember me
                                    </label>
                                </div>

                                <div class="row justify-content-center align-items-center">
                                    <div class="col-lg-5 col-12">
                                        <button type="submit" class="form-control">Login</button>
                                    </div>

                                    <div class="col-lg-5 col-12">
                                        <a href="reg" class="btn custom-btn custom-border-btn">Register</a>
                                    </div>
                                </div>

                            </form>
                            
                        </div>
                    </div>
                </div>

<?php
include('footer.php');
?>