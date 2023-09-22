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

<!----------contact us form -------------->
    <div class="container-fluid contact">

            <div class="col-lg-6 contactus text-black">
                <h1>Contact Us</h1>
                <hr>

                <form action="/action_page.php">
                    <div class="mb-3 mt-3">
                        <label for="fullname">Full Name:</label>
                        <input type="fullname" class="form-control" id="fullname" placeholder="Enter Fullname"
                            name="fullname">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="MobileNumber">Mobile Number:</label>
                        <input type="tel" id="MobileNumber" class="form-control" placeholder="Phone Number" />
                    </div>


                    <div class="mb-3">
                        <label class="form-label" for="form3Example3c">E-mail Id: </label>
                        <input type="E-mailId " id="form3Example3c" class="form-control" placeholder="E-mail Id " />
                    </div>

                    <div class="mb-3">
                        <label for="comment">Message:</label>
                        <textarea class="form-control" rows="3" id="comment" name="text"
                            placeholder="Message"></textarea>
                    </div>

                    <div class="button">
                        <button type="Submit" class="btn btn-primary">Submit
                    </div>
                </form>

            </div>
            </div>

           <!----------- footer ----------------->

           <?php include('footer.php'); ?>
</body>

</html>