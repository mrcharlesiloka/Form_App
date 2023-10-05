<?php
include('header.php');
?>
  <section class="hero-section d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mx-auto">
                            <form class="custom-form contact-form" role="form" method="post">
                                <h2 class="hero-title text-center mb-4 pb-2">Contact Form</h2>

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
                                        <div class="form-floating">
                                            <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
                                            
                                            <label for="floatingTextarea">Message</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-10 mx-auto">
                                        <button type="submit" class="form-control">Send Message</button>
                                    </div>
                                </div>

                            </form>
                            
                        </div>
                    </div>
                </div>


<?php
include('footer.php');
?>