<?php
include('header.php');
?>
  <section class="hero-section d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12 mx-auto">
                            <form class="custom-form" role="form" method="post">
                                <h2 class="hero-title text-center mb-4 pb-2">Reset Password</h2>

                                <div class="form-floating mt-4">
                                    <input type="password" name="password" id="password" pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Password" required="">

                                    <label for="password">New Password</label>
                                </div>

                                <div class="form-floating">
                                    <input type="password" name="confirm_password" id="confirm_password" pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Password" required="">

                                    <label for="confirm_password">Confirm Password</label>
                                </div>

                                <div class="row">
                                    <div class="col-lg-5 col-12 mx-auto">
                                        <button type="submit" class="form-control">Submit</button>
                                    </div>
                                </div>

                            </form>
                            
                        </div>
                    </div>
                </div>

<?php
include('footer.php');
?>