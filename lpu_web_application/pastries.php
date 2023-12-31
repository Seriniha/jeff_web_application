<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body style="background:black url(images/desimg/wave.jpg); background-size: contain; background-repeat: no-repeat;">
    <div class="d-flex">
        <div class="vh-100 sticky-top" style="width: 280px;">
            <h1 class="text-white fs-5 text-center my-5">Jeff's Choice Enterprise</h1>
            <ul class="nav flex-column mb-auto">
                <li class="">
                <a href="admin.php" class="nav-link text-white mb-4">
                        Home
                    </a>
                </li>
                <li>
                    <a href="registration.php" class="nav-link text-white mb-4">
                        Employee Registration
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white mb-4">
                        Employee Report
                    </a>
                </li>
                <li>
                    <a href="payroll.php" class="nav-link text-white mb-4">
                        Payroll
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white  mb-4">
                        Payroll Report
                    </a>
                </li>
                <li>
                    <a href="burgers.php" class="nav-link text-white mb-4">
                        POS
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white mb-4">
                        POS Sales Report
                    </a>
                </li>
                <li>
                    <a href="user.php" class="nav-link text-white mb-4">
                        User Account
                    </a>
                </li>
                <li>
                    <a href="login.php" class="nav-link text-white  mb-4">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex-grow-1 w-100">
            <main class="container border bg-white">

                <div class="">
                    <!-- dropdown -->
                    <div class="px-3">
                        <div class="btn-group d-flex justify-content-center align-items-center">
                            <div>
                                <button class="btn btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Products
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="burgers.php">Burgers</a></li>
                                    <li><a class="dropdown-item" href="pastries.php">Pastry</a></li>
                                    <li><a class="dropdown-item" href="soda.php">Soda</a></li>
                                    <li><a class="dropdown-item" href="appliances.php">Appliances</a></li>
                                    <li><a class="dropdown-item" href="peripherals.php">Peripherals</a></li>
                                </ul>
                            </div>
                            <div class="mx-auto my-2">
                                <h1 class="text-center">Jeff's Choice store</h1>
                            </div>
                        </div>
                    </div>
                    <!-- cards -->
                    <div class="row mx-auto row-cols-5">
                        <?php
                        require_once('prices.php');
                        for ($i = 1; $i < 21; $i++) {
                            $label = "Pastry $i";
                            $price = "$Pastries_prices[$i]";
                            echo "
                            <div class='col' onclick='handleItems(\"$label\", \"$price\")' role='button'>
                                <div class='card mb-3 mx-3 ' style='max-width: 300px;'>
                                    <div class='row g-0'>
                                        <img src='images/pastry_images/$i.png' class='card-img-top rounded-start' alt='...' height='100'/>
                                        <div class='form-check d-flex justify-content-center align-items-center'>
                                            <label class='form-check-label px-3' for='checkbox$i'>
                                                $label - <span style='font-weight:bold;'>₱$price</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
                        }
                        ?>
                    </div>
                    <!-- inputs -->
                    <div class="row">
                        <div class="col-6 d-flex">
                            <ul class="list-group">
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6" style="white-space:nowrap;">
                                            Name of an Item:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="ItemName">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Quantity:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" id="Quantity" min="1">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Price:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="ItemPrice">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6" style="white-space:nowrap;">
                                            Discount Amount:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="Discount">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Discounted Amount:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="Discounted">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-group">
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Total Quantity:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="totalQuantity">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6" style="white-space:nowrap;">
                                            Total Discount Given:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="totalDiscount">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Total Discounted Amount:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="totalDiscounted">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Cash Given:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="Cash">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Change:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="Change">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- calculator -->
                        <div class="col-6">
                            <!-- radio -->
                            <div>
                                <ul class="list-group list-group-horizontal gap-5">
                                    <li class="" style="list-style-type: none;">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="senior" onclick="handleDiscounts(0.30)">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Senior Citizen
                                        </label>
                                    </li>
                                    <li class="" style="list-style-type: none;"> <input class="form-check-input" type="radio" name="flexRadioDefault" id="discountCard" onclick="handleDiscounts(0.20)">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            With Disc. Card
                                        </label>
                                    </li>
                                    <li class="" style="list-style-type: none;"> <input class="form-check-input" type="radio" name="flexRadioDefault" id="employee" onclick="handleDiscounts(0.15)">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Employee Disc.
                                        </label>
                                    </li>
                                    <li class="" style="list-style-type: none;"> <input class="form-check-input" type="radio" name="flexRadioDefault" id="noDiscount" onclick="handleDiscounts(0)">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            No Disc.
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- buttons -->
                            <div class="my-3 w-100">
                                <div class="row row-cols-4 mb-3">
                                    <div class="col">
                                        <button type="button" class="btn btn-primary " style="white-space:nowrap" onclick="handleChange()">Calculate Change</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-danger w-100" onclick="handleNew()">New</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-warning w-100">Save</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-dark w-100">Update</button>
                                    </div>
                                </div>
                                <div class="row row-cols-5">
                                    <div class="col-3">
                                        <button type="button" class="btn btn-primary h-100 w-100" onclick="handleCalculator()">Enter</button>
                                    </div>
                                    <div class="col-9">
                                        <div class="row row-cols-3">
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '/'">/</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '*'">*</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '-'">-</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '+'">+</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '9'">9</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '8'">8</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '7'">7</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '6'">6</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '5'">5</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '4'">4</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '3'">3</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '2'">2</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '1'">1</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '0'">0</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '.'">.</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script>
        totalQuantity = 0
        totalDiscount = 0
        totalDiscounted = 0
    </script>
    <script src="js/calculator.js" defer></script>
    <script src="js/change.js" defer></script>
    <script src="js/new.js" defer></script>
    <script src="js/discounts.js" defer></script>
    <script src="js/items.js" defer></script>

</body>
</html>