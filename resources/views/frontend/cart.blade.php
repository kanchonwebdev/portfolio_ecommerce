<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commerce - Homepage</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    <!-- nav section -->
    <div class="nav-section">
        <div class="grid">
            <div class="col">
                <a href="" class="logo">New Shop</a>
            </div>
            <div class="col">
                <div class="inline">
                    <a href="">About</a>
                    <a href="">Menu</a>
                    <a href="">SHop</a>
                    <a href="">Cotact</a>
                </div>
            </div>
            <div class="col">
                <div class="inline">
                    <a href="">search</a>
                    <a href="">cart <sup>04</sup></a>
                </div>
            </div>
        </div>
    </div>

    <!-- hero section -->
    <div class="hero-section">
        <div class="grid">
            <div class="col">
                <div class="img">
                    <img src="img/1.jpg" alt="">
                </div>
                <div class="text-block">
                    <p class="m-title">A unique experience</p>
                    <h1 class="title">Checkout</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- checkout section -->
    <div class="checkout-section">
        <div class="grid">
            <div class="col">
                <div class="card">
                    <div class="inline">
                        <p class="text">items in order</p>
                    </div>
                    <div class="block">
                        <div class="grid-2 border">
                            <div class="card-inline">
                                <div class="img">
                                    <img src="img/2.png" alt="">
                                </div>
                                <div class="text-block">
                                    <h3 class="title">Polo Shirt</h3>
                                    <p class="text">size: <b>medium</b></p>
                                </div>
                            </div>
                            <div class="card-inline ml-100">
                                <p class="price">&dollar; 13.23 USD</p>
                                <input type="text" name="" id="quantity" value="1">
                                <button type="submit" class="remove">remove</button>
                            </div>
                        </div>
                        <br>
                        <div class="grid-2 border">
                            <div class="card-inline">
                                <div class="img">
                                    <img src="img/2.png" alt="">
                                </div>
                                <div class="text-block">
                                    <h3 class="title">Polo Shirt</h3>
                                    <p class="text">size: <b>medium</b></p>
                                </div>
                            </div>
                            <div class="card-inline ml-100">
                                <p class="price">&dollar; 13.23 USD</p>
                                <input type="text" name="" id="quantity" value="1">
                                <button type="submit" class="remove">remove</button>
                            </div>
                        </div>
                        <br>
                        <div class="grid-2 border">
                            <div class="card-inline">
                                <div class="img">
                                    <img src="img/2.png" alt="">
                                </div>
                                <div class="text-block">
                                    <h3 class="title">Polo Shirt</h3>
                                    <p class="text">size: <b>medium</b></p>
                                </div>
                            </div>
                            <div class="card-inline ml-100">
                                <p class="price">&dollar; 13.23 USD</p>
                                <input type="text" name="" id="quantity" value="1">
                                <button type="submit" class="remove">remove</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="inline">
                        <p class="text">Order Summary</p>
                    </div>
                    <div class="block">
                        <div class="grid-2">
                            <div class="card-inline">
                                <p class="text">Sub Total</p>
                            </div>
                            <div class="card-inline">
                                <p class="text">&dollar; 200 usd</p>
                            </div>
                        </div>
                        <br>
                        <div class="grid-2">
                            <div class="card-inline">
                                <p class="text">Total</p>
                            </div>
                            <div class="card-inline">
                                <p class="text">&dollar; 250 usd</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="block">
                        <button type="submit">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer section -->
    <div class="footer-section">
        <div class="grid">
            <div class="col">
                <div class="card">
                    <h3 class="title">Navigation</h3>

                    <div class="inline">
                        <a href="" data-text="About">About</a>
                        <a href="" data-text="Menu">Menu</a>
                        <a href="" data-text="Contact">Contact</a>
                        <a href="" data-text="Shop">Shop</a>
                        <a href="" data-text="Checkout">Checkout</a>
                        <a href="" data-text="Cart">Cart</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h3 class="title">Services</h3>

                    <div class="inline">
                        <a href="">Privacy & Policy</a>
                        <a href="">Terms of use</a>
                        <a href="">Syle guide</a>
                        <a href="">Licence</a>
                        <a href="">Search</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h3 class="title">Contact</h3>

                    <div class="inline">
                        <a href="">000 000 000 00</a>
                        <a href="">info@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h3 class="title">Social</h3>

                    <div class="inline">
                        <a href="">facebook</a>
                        <a href="">instagram</a>
                        <a href="">twitter</a>
                        <a href="">linkedin</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h3 class="title">Get the latest from New Shop</h3>

                    <p class="text">Don't miss our news about glamorous products and sparkling events</p>

                    <form method="post" class="form">
                        <input type="email" placeholder="Enter your email" name="" id="">
                        <input type="submit" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
