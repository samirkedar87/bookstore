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
    
    <!------------ cart middle -------->
    <div class="container-fluid cart-head justify-content-center">
        <div class="row cart-table">
            <h1>Shopping Cart</h1>
            <hr>
            <table>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Rate</th>
                    <th>Remove</th>
                </tr>
                <tr>
                    <td>Total</td>
                </tr>
                <tr>
                    <td>Rs.</td>
                </tr>
            </table>

        </div>
    </div>

    <!----------- footer ----------------->

    <?php include('footer.php'); ?>

</body>

</html>