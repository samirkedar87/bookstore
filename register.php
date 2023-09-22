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
    <!------ css file -------->
    <link rel="stylesheet" href="../css/style.css">
    <!----- google fonts ---->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500&family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>

    <!--------------- Header -------------------->

    <?php include('header.php'); ?>
    
    <!------------- Registration form -------------->

    <div class="container-fluid registration">

        <div class="col-lg-6 sidemiddle text-black">
            <h1>User Registration</h1>
            <hr>

            <form action="/action_page.php">
                <div class="mb-3 mt-3">
                    <label for="fullname">Full Name:</label>
                    <input type="text" class="form-control" id="fullname" placeholder="Enter Fullname" name="fullname">
                </div>
                <div class="mb-3">
                    <label for="uname">Username:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter Username" name="username">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                    <input type="mobile" id="phoneNumber" class="form-control form-control"
                        placeholder="Phone Number" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="form3Example3c">Your Email</label>
                    <input type="email" id="form3Example3c" class="form-control" placeholder="Your Email" />
                </div>

                <div class="mb-3">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="password">
                </div>

                <div class="mb-3">
                    <label for="cpwd">Confirm Password:</label>
                    <input type="password" class="form-control" id="cpwd" placeholder="Confirm Password"
                        name="confirm password">
                </div>

                <div class="button">
                    <button class="btn btn-primary">Register
                </div>
                <div class="col">
                    <!-- Simple link -->
                    <p>Allready have account? <a href="../Login.php/">Login</a></p>
                </div>

            </form>
        </div>
    </div>

    <!----------- footer ----------------->

    <?php include('footer.php'); ?>

</body>

</html>