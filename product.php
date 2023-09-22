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

    <!---------- product cart -------->

    <div class="container mt-3 p-5">
        <div class="product-cart">
        <div class="row m-2">

                <div class="col-lg-6">
                    <div class="product-box">

                            <div class="main-images">

                                <img src="../images/lts.png" id="imagebox">

                            </div>
                    </div>
                </div>

                <div class="col-lg-6 text1">
                    <div class="text-1 mt-5">

                        <div class="content">
                            <p class="brand">It Ends With Us: A Novel: Volume 1
                            </p>
                            <s data-compare-price="" style="font-size:16px;margin-top:6px;">Rs. 499.00</s>
                            <span class="" data-price=""
                                style="color:#E77633;font-size:22px;font-weight:650 !important;">Rs. 399.20 </span><br>

                            <div class="review">
                                <span>(5.2)</span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>

                        <div class="product-information">
                            <p>Publisher: Simon & Schuster</p>
                        </div>

                        <div class="product-information">
                            <p>Author: Colleen Hoover</p>
                        </div>

                        <div class="product-information">
                            <p>Language: ENGLISH</p>
                        </div>

                        <div class="product-information">
                            <p>Binding Type: Paperback</p>
                        </div>

                        <p>Quntity <input type="text" value="1" class="quntity"></p>

                        <button class="btn-1">
                            <span class="fa fa-shooping-cart">
                            </span>
                            <a href="">Add to cart</a>
                        </button>

                        <button class="btn-2">
                            <span class="fa fa-shooping-cart">
                            </span>
                            <a href=""> Buy now</a>
                        </button>

                    </div>
                </div>
            
        </div>
        </div>
    </div>

    <!----------- Product cart end ----------------->

    <!----------- footer start ----------------->

    <?php include('footer.php'); ?>

    <!----------- footer end ----------------->





</body>

</html>