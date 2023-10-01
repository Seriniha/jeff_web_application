<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body style="background:black url(images/desimg/wave.jpg) ; background-size: contain; background-repeat: no-repeat;">
        
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
        <div class="flex-grow-1">
            <div class="container text-white">
                <h1 class="text-center my-3">Jeff's Choice Enterprise</h1>
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://images.unsplash.com/photo-1606131731446-5568d87113aa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1964&q=80" class="d-block w-100" alt="..." height="800">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="fw-bold">Burgers</h1>
                                <p>Taste our super class burgers that even burger king bowed down to us.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1585219644870-54859de47db9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="d-block w-100" alt="..." height="800">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="fw-bold">Pastries</h1>
                                <p>French pastries that makes you say oui oui.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1596803244618-8dbee441d70b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" class="d-block w-100" alt="..." height="800">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="fw-bold">Soda</h1>
                                <p>Famous branded Sodas.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1626143508000-4b5904e5e84a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="d-block w-100" alt="..." height="800">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="fw-bold">Appliances</h1>
                                <p>Durable Appliances.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1632365086223-cb3d38789f2b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1931&q=80" class="d-block w-100" alt="..." height="800">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="fw-bold">Peripherals</h1>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon " aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- list and cards -->
                <div>
                    <h1 class="text-center my-5 pt-5">Preview</h1>
                    <ul class="nav d-flex gap-5 justify-content-center align-items-center mb-4" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active text-white" id="Burgers" data-bs-toggle="tab" data-bs-target="#Burgers-pane" type="button" role="tab" aria-controls="Burgers-pane" aria-selected="true">Burgers</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-white" id="Pastry-tab" data-bs-toggle="tab" data-bs-target="#Pastries-tab-pane" type="button" role="tab" aria-controls="Pastries-tab-pane" aria-selected="false">Pastries</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-white" id="Soda-tab" data-bs-toggle="tab" data-bs-target="#Soda-tab-pane" type="button" role="tab" aria-controls="Soda-tab-pane" aria-selected="false">Soda</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-white" id="Appliances-tab" data-bs-toggle="tab" data-bs-target="#Appliances-tab-pane" type="button" role="tab" aria-controls="Appliances-tab-pane" aria-selected="false">Appliances</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-white" id="Peripherals" data-bs-toggle="tab" data-bs-target="#Peripherals-pane" type="button" role="tab" aria-controls="Peripherals-pane" aria-selected="false">Perfume</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Burgers-pane" role="tabpanel" aria-labelledby="Burgers" tabindex="0">
                            <div class="row container mx-auto">
                                <?php
                                for ($i = 1; $i < 9; $i++) {
                                    echo "
                                <div class='col mb-4'>
                                    <div class='card' style='width: 18rem;'>
                                        <img src='images/burger_images/$i.png' class='card-img-top' alt='...' height='200'>
                                        <div class='card-body'>
                                            <h5 class='card-title text-center'>Burger Preview</h5>
                                            <p class='card-text'>Click our point of sale link to view.</p>
                                        </div>
                                    </div>
                                </div>
                                ";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Pastries-tab-pane" role="tabpanel" aria-labelledby="Pastries-tab" tabindex="0">
                            <div class="row container mx-auto">
                                <?php
                                for ($i = 1; $i < 9; $i++) {
                                    echo "
                                <div class='col mb-4'>
                                    <div class='card' style='width: 18rem;'>
                                        <img src='images/pastry_images/$i.png' class='card-img-top' alt='...' height='200'>
                                        <div class='card-body'>
                                            <h5 class='card-title text-center'>Pastry Preview</h5>
                                            <p class='card-text'>Click our point of sale link to view.</p>
                                            
                                        </div>
                                    </div>
                                </div>
                                ";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Soda-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                            <div class="row container mx-auto">
                                <?php
                                for ($i = 1; $i < 9; $i++) {
                                    echo "
                                <div class='col mb-4'>
                                    <div class='card' style='width: 18rem;'>
                                        <img src='images/soda_images/$i.png' class='card-img-top' alt='...' height='200'>
                                        <div class='card-body'>
                                            <h5 class='card-title text-center'>Soda Preview</h5>
                                            <p class='card-text'>Click our point of sale link to view.</p>
                                        </div>
                                    </div>
                                </div>
                                ";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Appliances-tab-pane" role="tabpanel" aria-labelledby="Appliances-tab" tabindex="0">
                            <div class="row container mx-auto">
                                <?php
                                for ($i = 1; $i < 9; $i++) {
                                    echo "
                                <div class='col mb-4'>
                                    <div class='card' style='width: 18rem;'>
                                        <img src='images/appliance_images/$i.png' class='card-img-top' alt='...' height='200'>
                                        <div class='card-body'>
                                            <h5 class='card-title text-center'>Appliances Preview</h5>
                                            <p class='card-text'>Click our point of sale link to view.</p>
                                        </div>
                                    </div>
                                </div>
                                ";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Peripherals-pane" role="tabpanel" aria-labelledby="Peripherals" tabindex="0">
                            <div class="row container mx-auto">
                                <?php
                                for ($i = 1; $i < 9; $i++) {
                                    echo "
                                <div class='col mb-4'>
                                    <div class='card' style='width: 18rem;'>
                                        <img src='images/peripheral_images/$i.png' class='card-img-top' alt='...' height='200'>
                                        <div class='card-body'>
                                            <h5 class='card-title text-center'>Peripherals Preview</h5>
                                            <p class='card-text'>Click our point of sale link to view.</p>
                                        </div>
                                    </div>
                                </div>
                                ";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h1 class="text-center my-5 pt-5">Recommended items</h1>
                    <div class="card-group mx-4 my-5">
                        <div class="card">
                            <img src="images/burger_images/9.png" class="card-img-top" alt="..." height="300">
                            <div class="card-body">
                                <h5 class="card-title">Burger9</h5>
                                <p class="card-text">Best seller burger with fries and drinks on side.</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="images/pastry_images/4.png" class="card-img-top" alt="..." height="300">
                            <div class="card-body">
                                <h5 class="card-title">Croissant</h5>
                                <p class="card-text">Best seller french pastry.</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="images/soda_images/11.png" class="card-img-top" alt="..." height="300">
                            <div class="card-body">
                                <h5 class="card-title">IRN BRU</h5>
                                <p class="card-text">Fresh taste of IRN BRU.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer -->
                <div class="container">
                    <footer class="d-flex  justify-content-between align-items-center py-3 my-4">
                        <p class="col-md-4 mb-0 text-white-50">&copy; 2023 Company, Inc</p>
                        <ul class="nav justify-content-end">
                            <li class="nav-item"><a href="#" class="nav-link px-2 text-white-50">Home</a></li>
                            <li class="nav-item"><a href="#" class="nav-link px-2 text-white-50">Features</a></li>
                            <li class="nav-item"><a href="#" class="nav-link px-2 text-white-50">Pricing</a></li>
                            <li class="nav-item"><a href="#" class="nav-link px-2 text-white-50">FAQs</a></li>
                            <li class="nav-item"><a href="#" class="nav-link px-2 text-white-50">About</a></li>
                        </ul>
                    </footer>
                </div>
            </div>

        </div>
    </div>
    </div>
</body>

</html>