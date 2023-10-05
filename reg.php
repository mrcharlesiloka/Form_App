<?php
include('header.php');
?>
  <section class="hero-section d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mx-auto">
                            <form class="custom-form" role="form" method="post">
                                <h2 class="hero-title text-center mb-4 pb-2">Create an account</h2>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="full-name" id="full-name" class="form-control" placeholder="Full Name" required="">
                                            
                                            <label for="floatingInput">Full Name</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating mb-4 p-0">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">

                                            <label for="email">Email address</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating p-0">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">

                                            <label for="password">Password</label>
                                        </div>

                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                          
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I agree to the Terms of Service and Privacy Policy.
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-lg-5 col-md-5 col-5 ms-auto">
                                            <button type="submit" class="form-control">Submit</button>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-7">
                                            <p class="mb-0">Already have an account? <a href="index" class="ms-2">Login</a></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>

<?php
include('footer.php');
?>