<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Book Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500&family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">

</head>

<body>
    <!--------------- Header -------------------->

    <?php include('header.php'); ?>

    <!--------------- carrousel -------------------->

    <div class="bg-light">
        <div class="container-fluid  carrousel g-0">

            <div class="carousel slide" id="carousel1" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images/1F.jpg" class="d-block w-100 h-100">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/2F.jpg" class="d-block w-100 h-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide=prev>
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide=next>
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

    <!------------------ Category ----------------->

    <div class="container-fluid">
        <div class="row middle">
            <div class="col-lg-3 category-col">
                <h1>Category</h1>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="../architecture.php/">Architecture</a></li>
                    <li class="list-group-item"><a href="../Biography.php/">Biography</a></li>
                    <li class="list-group-item"><a href="../Business.php/">Business</a></li>
                    <li class="list-group-item"><a href="../Comics.php/">Comics</a></li>
                    <li class="list-group-item"><a href="../Competaitive.php/">Competaitive Exam</a></li>
                    <li class="list-group-item"><a href="../Detective.php/">Detective</a></li>
                    <li class="list-group-item"><a href="../Programming.php/">Programming</a></li>
                    <li class="list-group-item"><a href="../Romantic.php/">Romantic</a></li>
                    <li class="list-group-item"><a href="../Sports.php/">Sports</a></li>
                    <li class="list-group-item"><a href="../School.php/">School Books</a></li>
                    <li class="list-group-item"><a href="../Webdesign.php/">Web Design</a></li>
                </ul>
            </div>

            <!-------------------- latest images ---------------->

            <div class="col-lg-9">
                <h1>Latest Books</h1>
                <hr>
                <div class="shell">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img">
                                        <a href="../product.php/"><img src="../images/lts.png" alt="Product"
                                                class="img-responsive" /></a>
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <a href="../product.php/"><span>View</span></a>
                                        </div>
                                        <!-- <div class="title-product">
                                            <h3>My face not my heart</h3>
                                        </div> -->
                                        <div class="description-prod">
                                            <p>It Ends With Us: A Novel</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">Rs. 399.20</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img">
                                        <a href="../product.php/"> <img src="../images/lts2.png" alt="Product"
                                                class="img-responsive" /></a>
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <a href="../product.php/"><span>View</span></a>
                                        </div>
                                        <!-- <div class="title-product">
                                            <h3>My face not my heart</h3>
                                        </div> -->
                                        <div class="description-prod">
                                            <p>Shatter Me(9 Book Set)</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">Rs. 3,399.15</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img">
                                        <img src="../images/lts3.png" alt="Product" class="img-responsive" />
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <a href="../product.php/"><span> View</span></a>
                                        </div>
                                        <!-- <div class="title-product">
                                            <h3>My face not my heart</h3>
                                        </div> -->
                                        <div class="description-prod">
                                            <p>It Start With Us</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">Rs. 594.15</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img"><img src="../images/lts4.png" alt="Product"
                                            class="img-responsive" /></div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <a href="../product.php/"><span>View</span></a>
                                        </div>
                                        <!-- <div class="title-product">
                                            <h3>My face not my heart cvf ggf gfg g</h3>
                                        </div> -->
                                        <div class="description-prod">
                                            <p>Mrs.funny bones</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">Rs. 239.20</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="shell">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img">
                                        <img src="../images/lts5.png" alt="Product" class="img-responsive" />
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <a href="../product.php/"><span>View</span></a>

                                        </div>
                                        <!-- <div class="title-product">
                                            <h3>Measurment & Kinematics</h3>
                                        </div> -->
                                        <div class="description-prod">
                                            <p>Measurment & Kinematics</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">Rs.500.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img"><img src="../images/lts6.png" alt="Product"
                                            class="img-responsive" /></div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <a href="../product.php/"><span>View</span></a>
                                        </div>
                                        <!-- <div class="title-product">
                                            <h3>My face not my heart</h3>
                                        </div> -->
                                        <div class="description-prod">
                                            <p>JEE Main Chemistry Master Resource Book For</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">Rs. 550.00</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img"><img src="../images/lts7.png" alt="Product"
                                            class="img-responsive" /></div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <a href="../product.php/"><span>View</span></a>
                                        </div>
                                        <!-- <div class="title-product">
                                            <h3>My face not my heart</h3>
                                        </div> -->
                                        <div class="description-prod">
                                            <p>JEE Main Chemistry Master Resource</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">Rs. 400.00</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img"><img src="../images/lts8.png" alt="Product"
                                            class="img-responsive" /></div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <a href="../product.php/"><span>View</span></a>
                                        </div>
                                        <!-- <div class="title-product">
                                            <h3>My face not my heart cvf ggf gfg g</h3>
                                        </div> -->
                                        <div class="description-prod">
                                            <p>Strange world</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">Rs. 399.20</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </div>
    </div>

    <!----------- footer start ----------------->

    <?php include('footer.php'); ?>

    <!----------- footer end ------------->

    <script>
        function clickimg(smallImg) {
            var fullImg = document.getElementById("imagebox");
            fullImg.src = smallImg.src
        }

    </script>
</body>

</html>