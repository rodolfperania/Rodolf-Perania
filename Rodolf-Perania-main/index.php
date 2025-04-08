<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="OIP.jpg".jpg" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another Action</a></li>
                            <li><a class="dropdown-item" href="#">Something Else Where</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <a href="#" class="btn btn-custom">Get Started</a>
            </div>
        </div>
    </nav>

    <div class="banner">
        <div class="overlay">
            <div class="container text-center">
                <h1>Welcome</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse explicabo error reprehenderit
                    obcaecati amet, unde nobis maxime sed deserunt exercitationem!</p>
                <a href="#" class="btn btn-custom">Explore More</a>
            </div>
        </div>
    </div>
    <?php include 'about.php'; ?> 

    <section>
        <section id="services">
            <div class="container">
                <h2>Services</h2>
                <div class="row">
                    <div class="col d-flow justify-content-center">
                        <div class="card" style="width: 24rem;">
                            <img src="confident.png" class="card-img-top mx-auto" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flow justify-contetnt-center">
                        <div class="card" style="width: 24rem;">
                            <img src="confident.png" class="card-img-top mx-auto" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div><div class="col d-flow justify-contetnt-center">
                        <div class="card" style="width: 24rem;">
                            <img src="confident.png" class="card-img-top mx-auto" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div><div class="col d-flow justify-contetnt-center">
                        <div class="card" style="width: 24rem;">
                            <img src="confident.png" class="card-img-top mx-auto" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div><div class="col d-flow justify-contetnt-center">
                        <div class="card" style="width: 24rem;">
                            <img src="confident.png" class="card-img-top mx-auto" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div><div class="col d-flow justify-contetnt-center">
                        <div class="card" style="width: 24rem;">
                            <img src="confident.png" class="card-img-top mx-auto" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section id="reviews">
        <div class="container text-light">
            <h2>REVIEWS</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur sint aliquid, optio, aspernatur dignissimos mollitia illo vel quo odio dicta quae culpa aliquam recusandae magnam! Ex velit quia fugit excepturi.</p>
        </div>
        <!--row starts here-->

        <div class="row row-cols-lg-4">
            <div class="col">
                <div class="testimonial">
                    <div class="d-flex">
                        <img src="r3.jpeg" alt="">
                        <div class="text-light ms-3">
                            <h5> client name</h5>
                            <h6>@clientname</h6>
                        </div>
                    </div>
                    <p class="text-light mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis similique recusandae eius! Dolorum neque minus quo enim minima tempore cum saepe ut voluptatem optio, voluptate eos animi voluptates aspernatur iusto.</p>
                </div>
            </div>
            <div class="col">
                <div class="testimonial">
                    <div class="d-flex">
                        <img src="r3.jpeg" alt="">
                        <div class="text-light ms-3">
                            <h5> client name</h5>
                            <h6>@clientname</h6>
                        </div>
                    </div>
                    <p class="text-light mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis similique recusandae eius! Dolorum neque minus quo enim minima tempore cum saepe ut voluptatem optio, voluptate eos animi voluptates aspernatur iusto.</p>
                </div>
            </div>
            <div class="col">
                <div class="testimonial">
                    <div class="d-flex">
                        <img src="r3.jpeg" alt="">
                        <div class="text-light ms-3">
                            <h5> client name</h5>
                            <h6>@clientname</h6>
                        </div>
                    </div>
                    <p class="text-light mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis similique recusandae eius! Dolorum neque minus quo enim minima tempore cum saepe ut voluptatem optio, voluptate eos animi voluptates aspernatur iusto.</p>
                </div>
            </div>
            <div class="col">
                <div class="testimonial">
                    <div class="d-flex">
                        <img src="r3.jpeg" alt="">
                        <div class="text-light ms-3">
                            <h5> client name</h5>
                            <h6>@clientname</h6>
                        </div>
                    </div>
                    <p class="text-light mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis similique recusandae eius! Dolorum neque minus quo enim minima tempore cum saepe ut voluptatem optio, voluptate eos animi voluptates aspernatur iusto.</p>
                </div>
            </div>
            <div class="col">
                <div class="testimonial">
                    <div class="d-flex">
                        <img src="r3.jpeg" alt="">
                        <div class="text-light ms-3">
                            <h5> client name</h5>
                            <h6>@clientname</h6>
                        </div>
                    </div>
                    <p class="text-light mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis similique recusandae eius! Dolorum neque minus quo enim minima tempore cum saepe ut voluptatem optio, voluptate eos animi voluptates aspernatur iusto.</p>
                </div>
            </div>
            <div class="col">
                <div class="testimonial">
                    <div class="d-flex">
                        <img src="r3.jpeg" alt="">
                        <div class="text-light ms-3">
                            <h5> client name</h5>
                            <h6>@clientname</h6>
                        </div>
                    </div>
                    <p class="text-light mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis similique recusandae eius! Dolorum neque minus quo enim minima tempore cum saepe ut voluptatem optio, voluptate eos animi voluptates aspernatur iusto.</p>
                </div>
            </div>
            <div class="col">
                <div class="testimonial">
                    <div class="d-flex">
                        <img src="r3.jpeg" alt="">
                        <div class="text-light ms-3">
                            <h5> client name</h5>
                            <h6>@clientname</h6>
                        </div>
                    </div>
                    <p class="text-light mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis similique recusandae eius! Dolorum neque minus quo enim minima tempore cum saepe ut voluptatem optio, voluptate eos animi voluptates aspernatur iusto.</p>
                </div>
            </div>
            <div class="col">
                <div class="testimonial">
                    <div class="d-flex">
                        <img src="r3.jpeg" alt="">
                        <div class="text-light ms-3">
                            <h5> client name</h5>
                            <h6>@clientname</h6>
                        </div>
                    </div>
                    <p class="text-light mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis similique recusandae eius! Dolorum neque minus quo enim minima tempore cum saepe ut voluptatem optio, voluptate eos animi voluptates aspernatur iusto.</p>
                </div>
            </div>
        </div>
     </section>
     <!--faq-->
     <section id="faq">
        <div class="container">
            <h2 class="text-center">Frequently Asked Questions</h2>
            <div class="faq-section">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          Accordion Item #1
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Accordion Item #2
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          Accordion Item #3
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
     </section>
     <!--footer-->
     <!--FOOTER -->
    <footer class="footer text-white" id="footer">
        <div class="container">
            <div class="row al">
                <div class="col-md-3 col-sm-6 text-lg-start text-center">
                    <a class="navbar-brand" href="#">
                        <img src="r4.jpeg" alt="Logo" height="60px">
                    </a>
                    <h5 class="mt-4">About Us</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</p>
                </div>
                <div class="col-md-3 col-sm-6 text-lg-start ps-lg-5 ps-0 text-center ">
                    <h5>Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Service 1</a></li>
                        <li><a href="#">Service 2</a></li>
                        <li><a href="#">Service 3</a></li>
                        <li><a href="#">Service 4</a></li>
                        <li><a href="#">Service 5</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 text-lg-start text-center">
                    <h5>Contact Us</h5>
                    <p>123 Street Name,<br>City, Country</p>
                    <p>Email: example@example.com<br>Phone: +1234567890</p>
                </div>
                <div class="col-md-3 col-sm-6 text-lg-start  text-center">
                    <h5>Newsletter</h5>
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" style="border-radius: 1px;" placeholder="Email"
                                aria-label="email" aria-describedby="button-addon2">
                            <button class="btn btn-outline-light" type="button" id="button-addon2">Subscribe</button>
                        </div>
                    </form>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                </div>
            </div>
        </div>
    </footer>



</body>

</html>
