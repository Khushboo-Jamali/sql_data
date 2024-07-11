<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<style>
    form {
        width: 40%;
        border-radius: 30px;

    }

    .div {
        display: block;
        height: 100%;
        width: 90%;
        margin-top: 100px;
        /* justify-items: center;
        align-items: center; */
        margin-left: 10%;
    }
</style>

<body>

    <div class="div">
        <form class="row g-3 p-4  bg-secondary text-white" action="form.php" method="post">
            <div class="col-md-6 offset-1">
                <label for="inputEmail4" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name">
            </div>
            <div class="col-md-6 offset-1">
                <label for="inputPassword4" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>
            <div class="col-md-6 offset-1">
                <label for="inputAddress" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password">
            </div>

            <div class="col-md-6 offset-1">
                <label for="inputCity" class="form-label">Address</label>
                <input type="text" class="form-control" name="location" placeholder="Enter your Address">
            </div>

            <div class="form-check col-md-6 offset-1">
                <input class=" form-check-input" type="radio" name="gender" id="" value="Male" />
                <label class="form-check-label" for="">Male </label>
            </div>
            <div class="form-check col-md-6 offset-1">
                <input class=" form-check-input" type="radio" name="gender" id="" value="Female" />
                <label class="form-check-label" for="">Female </label>
            </div>




            <div class="col-md-6 offset-1">
                <button type="submit" name="btn" class="btn btn-primary  bg-white text-secondary ">Sign in</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>