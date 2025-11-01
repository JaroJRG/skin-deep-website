<?php
$productKey = $_GET['product'] ?? ''; // toma el producto de la URL

$products = [
    'lavender-ink' => [
        'name' => 'Lavender Ink',
        'price' => 123.00,
        'desc' => 'Eternal Ink Lavender – Tinta profesional para tatuajes',
        'images' => [
        'img/eternal/lavender-ink.jpeg',
        'img/eternal/lavender-bottle.jpeg'
        ]
    ],
    'sepia-dark-ink' => [
        'name' => 'Sepia Dark Ink',
        'price' => 123.00,
        'desc' => 'Eternal Ink Sepia Dark – Tinta profesional para tatuajes',
        'images' => ['img/eternal/sepia-dark-ink.jpeg']
    ],
    'wine-berry-ink' => [
        'name' => 'Wine Berry Ink',
        'price' => 123.00,
        'desc' => 'Eternal Ink Wine Berry – Tinta profesional para tatuajes',
        'images' => ['img/eternal/wine-berry-ink.jpeg']
    ],
    'mint-green-ink' => [
        'name' => 'Mint Green Ink',
        'price' => 123.00,
        'desc' => 'Eternal Ink Mint Green – Tinta profesional para tatuajes',
        'images' => [
        'img/eternal/mint-green-ink.jpeg',
        'img/eternal/mint-green-bottle.jpeg']
    ]
];

// chequea si el producto existe, si no, muestra un mensaje y sale
$product = $products[$productKey] ?? null;
if (!$product) {
    echo "<p>Producto no encontrado.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo htmlspecialchars($product['name']); ?> | Neto Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Free HTML Templates">
    <meta name="description" content="<?php echo htmlspecialchars($product['desc']); ?>">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="index.php" class="text-decoration-none">
                    <img src="img/BigDreamsLogo.png" height="100px" style="margin-left: 15px;" alt="Neto Shop Logo">
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="#" method="get">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <button type="submit" class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0 mb-1">Contáctanos por WhatsApp</p>
                <a href="https://wa.me/525570666253" target="_blank" style="text-decoration: none;">
                    <h5 class="m-0 d-inline-flex align-items-center" style="color: inherit;">
                        <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/whatsapp.svg"
                             alt="WhatsApp" width="20" height="20"
                             style="margin-right: 10px; filter: invert(50%) sepia(100%) saturate(500%) hue-rotate(90deg);" />
                        +52 55 7066 6253
                    </h5>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block position-relative">
            <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse"
                href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h6 class="text-dark m-0">
                    <i class="fa fa-bars mr-2"></i>Categorías
                </h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>

            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                <div class="navbar-nav w-100">
                    <a href="#" class="nav-item nav-link">Máquinas rotativas</a>
                    <a href="#" class="nav-item nav-link">Fuentes y pedales</a>
                    <a href="#" class="nav-item nav-link">Cartuchos y agujas</a>
                    <a href="#" class="nav-item nav-link">Tinta para tatuar</a>
                    <a href="#" class="nav-item nav-link">Anestesia y cuidado</a>
                    <a href="#" class="nav-item nav-link">Higiene y desinfección</a>
                    <a href="#" class="nav-item nav-link">Mobiliario y lámparas</a>
                    <a href="#" class="nav-item nav-link">Transfer e impresoras</a>
                    <a href="#" class="nav-item nav-link">Guantes y consumibles</a>
                    <a href="#" class="nav-item nav-link">Accesorios y extras</a>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="index.php" class="text-decoration-none d-block d-lg-none">
                    <img src="img/BigDreamsLogo.png" height="80px" style="margin-left: 0px;" alt="Neto Shop Logo">
                </a>
                <div class="d-flex flex-column align-items-center" style="margin-right: 40px;">
                    <button type="button" class="navbar-toggler mb-1" data-toggle="collapse"
                        data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <p class="mt-1 mb-0 font-weight-bold text-uppercase" style="font-size: 14px;">MENÚ</p>
                </div>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="index.php" class="nav-item nav-link active" title="Inicio - Neto Shop">Inicio</a>

                        <div class="nav-item dropdown">
                            <a href="shop.php" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                title="Catálogo de productos">
                                Productos <i class="fa fa-angle-down mt-1"></i>
                            </a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="category-tintas.php" class="dropdown-item">Tintas</a>
                                <a href="category-cartuchos.php" class="dropdown-item">Cartuchos</a>
                                <a href="category-maquinas.php" class="dropdown-item">Máquinas</a>
                                <a href="category-anestesia.php" class="dropdown-item">Anestesia</a>
                                <a href="category-guantes.php" class="dropdown-item">Guantes</a>
                                <a href="shop.php" class="dropdown-item font-italic" style="color: #ffffff;">Ver más</a>
                            </div>
                        </div>

                        <a href="contact.php" class="nav-item nav-link" title="Contáctanos para dudas, pedidos o soporte">Contacto</a>
                        <a href="cart.php" class="nav-item nav-link" title="Revisar productos agregados al carrito">
                            <i class="fas fa-shopping-cart mr-2"></i>Carrito
                        </a>
                    </div>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="#" class="btn px-0">
                            <i class="fas fa-heart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle"
                                style="padding-bottom: 2px;">0</span>
                        </a>
                        <a href="#" class="btn px-0 ml-3 snipcart-checkout">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle"
                                style="padding-bottom: 2px;">0</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->

<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="index.php">Home</a>
                <a class="breadcrumb-item text-dark" href="shop.php">Shop</a>
                <span class="breadcrumb-item active"><?php echo htmlspecialchars($product['name']); ?></span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
 
<!-- Shop Detail Start -->
<div class="container-fluid pb-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 mb-30">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner bg-light">
                    <?php foreach ($product['images'] as $index => $img): ?>
                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                            <img class="w-100 h-100" src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-7 h-auto mb-30">
            <div class="h-100 bg-light p-30">
                <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                <br>
               
                <h3 class="font-weight-semi-bold mb-4">$<?php echo number_format($product['price'], 2); ?></h3>
                <p class="mb-4"><?php echo htmlspecialchars($product['desc']); ?></p>

                <!-- Sizes -->
                <div class="d-flex mb-3">
                    <strong class="text-light mr-3">Sizes:</strong>
                    <form>
                        <?php
                        $sizes = ['1/2 Oz','1 Oz','2 Oz'];
                        foreach ($sizes as $i => $size): ?>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-<?php echo $i+1; ?>" name="size">
                                <label class="custom-control-label" for="size-<?php echo $i+1; ?>"><?php echo $size; ?></label>
                            </div>
                        <?php endforeach; ?>
                    </form>
                </div>

                <!-- Colors -->
                <div class="d-flex mb-4">
                    <strong class="text-light mr-3">Options:</strong>
                    <form>
                        <?php
                        $colors = ['op1','op2','op3','op4','op5'];
                        foreach ($colors as $i => $color): ?>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-<?php echo $i+1; ?>" name="color">
                                <label class="custom-control-label" for="color-<?php echo $i+1; ?>"><?php echo $color; ?></label>
                            </div>
                        <?php endforeach; ?>
                    </form>
                </div>

                <!-- Quantity & Add to Cart -->
                <div class="d-flex align-items-center mb-4 pt-2">
                    <div class="input-group quantity mr-3" style="width: 130px;">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-minus">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control bg-secondary border-0 text-center" value="1">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-plus">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs: Description / Info / Reviews -->
    <div class="row px-xl-5">
        <div class="col">
            <div class="bg-light p-30">
                <div class="nav nav-tabs mb-4">
                    <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Description</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Product Description</h4>
                        <p><?php echo htmlspecialchars($product['desc']); ?></p>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <h4 class="mb-3">Additional Information</h4>
                        <p><?php echo htmlspecialchars($product['desc']); ?></p>
                    </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-4">1 review for "<?php echo htmlspecialchars($product['name']); ?>"</h4>
                                    <!-- Static review example -->
                                    <div class="media mb-4">
                                        <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-primary mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-primary">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0">
                                            <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


<!-- Products Start -->
<div class="container-fluid py-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <span class="bg-none pr-3">Podria Interesarte</span>
    </h2>
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel related-carousel">
                <?php foreach ($products as $key => $item): ?>
                    <?php if ($key === $productKey) continue; // no mostrar el producto actual ?>
                    <div class="product-item bg-light">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="<?php echo htmlspecialchars($item['images'][0]); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="detail.php?product=<?php echo urlencode($key); ?>"><i class="fa fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href="#"><i class="far fa-heart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href="#"><i class="fa fa-sync-alt"></i></a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?product=<?php echo urlencode($key); ?>"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?product=<?php echo urlencode($key); ?>">
                                <?php echo htmlspecialchars($item['name']); ?>
                            </a>
                            <br><br>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>$<?php echo number_format($item['price'],2); ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum tempor no vero est magna amet no</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                        <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed
                    by
                    <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>