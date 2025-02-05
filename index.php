<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link rel="stylesheet" href="./sass/main.css">
    <script src="https://kit.fontawesome.com/56b56de47f.js" crossorigin="anonymous"></script>
    <script src="./scripts/script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&family=Satisfy&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="nav">
        <a href="#">
            <h1 class="logo">OnlineStore</h1>
        </a>
        <div class="nav-container">
            <div class="nav-links">
                <!-- <a href="#categories">Categories</a>
                <a href="#onsale">On Sale</a>
                <a href="#contactus">Contact Us</a> -->
            </div>
            <div class="nav-icons">
                <a href="form.html"><i class="fa-sharp fa-solid fa-user"></i></a>
                <a href="bag.html"><i class="fa-solid fa-basket-shopping"></i></a>
                <i class="fa-solid fa-magnifying-glass magnifier" onclick="toggleInput()"></i>
                <!-- <a href="favourite"></a> -->
            </div>
            <input class="input-serch" id="input-serch" type="text">
        </div>
    </nav>
    <header>
        <div class="slide-box">
            <div class="slide slide-one">
                <h3>Lorem, ipsum.</h3>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>
            <!-- <div class="slide slide-two">
                <h3>Lorem, ipsum.</h3>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>
            <div class="slide slide-three">
                <h3>Lorem, ipsum.</h3>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div> -->
        </div>
    </header>
    <section class="newproducts wrapper" id="newproducts">
        <h2>New Products</h2>
        <div class="products-container">
            <div class="product-box">
                <div class="product-img"></div>
                <div class="product-info">
                    <h4 class="product-name">iSzmata</h4>
                    <p class="product-price">125$</p>
                </div>
            </div>
            <div class="product-box">
                <div class="product-img"></div>
                <div class="product-info">
                    <h4 class="product-name">iSzmata</h4>
                    <p class="product-price">125$</p>
                </div>
            </div>
            <div class="product-box">
                <div class="product-img"></div>
                <div class="product-info">
                    <h4 class="product-name">iSzmata</h4>
                    <p class="product-price">125$</p>
                </div>
            </div>
            <div class="product-box no-display">
                <div class="product-img"></div>
                <div class="product-info">
                    <h4 class="product-name">iSzmata</h4>
                    <p class="product-price">125$</p>
                </div>
            </div>
            <div class="product-box no-display">
                <div class="product-img"></div>
                <div class="product-info">
                    <h4 class="product-name">iSzmata</h4>
                    <p class="product-price">125$</p>
                </div>
            </div>
            <div class="product-box no-display">
                <div class="product-img"></div>
                <div class="product-info">
                    <h4 class="product-name">iSzmata</h4>
                    <p class="product-price">125$</p>
                </div>
            </div>
        </div>
    </section>

    <section id="newsletter" class="wrapper"></section>
    <section id="contactus" class="wrapper"></section>
    <footer>
        <p> &copy; 2023 | OnlineStore
            <span class="icon-box">
                <a href=""><i class="fa-brands fa-square-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
            </span>
        </p>
    </footer>
</body>

</html>