<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-white">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav mx-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active text-color" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-color" href="#">Admin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-color" href="#">Category</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-color" href="#">Food</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-color" href="#">Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-color" href="#">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <body>
        <div class="container">
            <div class="row bg-cuatoi">
                <div class="col-md-12">
                    <h2 class="title ml-cuatoi my-5">Manage Food</h2>
                </div>
            </div>

            <div class="row bg-cuatoi">
                <button type="button" class="btn btn-primary width-fit ml-cuatoi">Add Food</button>
            </div>

            <div class="row bg-cuatoi">
                <div class="col-md-12">
                    <table class="table ml-cuatoi width-table my-3 ">
                        <thead>
                            <tr>
                                <th scope="col ">S.N</th>
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Image</th>
                                <th scope="col">Featured</th>
                                <th scope="col">Active</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Dumplings Specials</td>
                                <td>$5.00</td>
                                <td>
                                    <img src="images/menu-momo.jpg" alt="" class="img-food width-img">
                                </td>
                                <td>Yes</td>
                                <td>Yes</td>
                                <td>
                                    <button type="button" class="btn btn-success">Update Food</button>
                                    <button type="button" class="btn btn-danger">Delete Food</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Best Burger</td>
                                <td>$4.00</td>
                                <td>
                                    <img src="images/menu-burger.jpg" alt="" class="img-food width-img">
                                </td>
                                <td>Yes</td>
                                <td>Yes</td>
                                <td>
                                    <button type="button" class="btn btn-success">Update Food</button>
                                    <button type="button" class="btn btn-danger">Delete Food</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Smoky BBQ Pizza</td>
                                <td>$6.00</td>
                                <td>
                                    <img src="images/menu-pizza.jpg" alt="" class="img-food width-img">
                                </td>
                                <td>No</td>
                                <td>Yes</td>
                                <td>
                                    <button type="button" class="btn btn-success">Update Food</button>
                                    <button type="button" class="btn btn-danger">Delete Food</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Sadeko Momo</td>
                                <td>$6.00</td>
                                <td>
                                    <img src="images/menu-momo.jpg" alt="" class="img-food width-img">
                                </td>
                                <td>Yes</td>
                                <td>Yes</td>
                                <td>
                                    <button type="button" class="btn btn-success">Update Food</button>
                                    <button type="button" class="btn btn-danger">Delete Food</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Mixed Pizza</td>
                                <td>$10.00</td>
                                <td>
                                    <img src="images/menu-pizza.jpg" alt="" class="img-food width-img">
                                </td>
                                <td>Yes</td>
                                <td>Yes</td>
                                <td>
                                    <button type="button" class="btn btn-success">Update Food</button>
                                    <button type="button" class="btn btn-danger">Delete Food</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Sed ipsum cillum in</td>
                                <td>$52.00</td>
                                <td>
                                    <img src="images/safe_imag.jfif" alt="Image not Added" class="img-food width-img text-color ">
                                </td>
                                <td>No</td>
                                <td>No</td>
                                <td>
                                    <button type="button" class="btn btn-success">Update Food</button>
                                    <button type="button" class="btn btn-danger">Delete Food</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>

    <footer>
        <div class="container">
            <div class="row bg-footer-cuatoi ">
                <p class="footer-title text-center mt-sm-3">2020 All rights reserved. Foods House. Developed By - <span
                        class="span footer-text-color"> CSE485</span></p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>

</html>