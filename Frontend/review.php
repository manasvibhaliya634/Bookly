<?php
session_start(); // Start the session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookly</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    
    <link rel="stylesheet" href="style.css">
    

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');
    </style>
</head>
<body>
    <!--header section start-->
    <header class="header"> 
    <div class="header-1">
        <a href="#" class="logo"> <i class="fas fa-book"></i>Bookly</a>
        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box" autocomplete="off">
            <label for="search-box" class="fas fa-search" onclick="searchBooks()"></label>
            <ul id="suggestions" class="suggestions-list"></ul> <!-- For displaying suggestions -->
        </form>
        <div class="icons">
             
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-shopping-cart" id="cart-icon">
                <span id="cart-count">0</span>
            </a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="profile.php" class="fas fa-user-circle" id="profile-btn"></a>
                <a href="logout.php" class="fas fa-sign-out-alt" id="logout-btn"></a>
            <?php else: ?>
                <a href="login.php" class="fas fa-user" id="login-btn"></a>
            <?php endif; ?>
        </div>
        
    </div>
<!-- Your additional content here -->


 
    <!-- Cart Page (hidden by default) -->
<section class="cart" id="cart" style="display: none;">
    <span id="close-cart-btn" class="close-btn">&times;</span> <!-- Close button (X) -->
    <h1 class="heading">Your Cart</h1>
    <div class="cart-container">
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Book Image</th>
                    <th>Book Title</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody id="cart-items"></tbody>
        </table>
        <div class="cart-summary">
            <h3>Total: $<span id="total-price">0</span></h3>
            <a href="pay.html" class="btn" id="proceed-to-payment">Proceed to Payment</a>
        </div>
    </div>
</section>

        <div class="header-2">
            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="features.php">Features</a>
                <a href="arrival.php">Arrivals</a>
                <a href="review.php">Review</a>
                <a href="blog.php">Blogs</a>
            </nav>        
        </div>
    </header>
    <!--header section end-->
    <!-- Login/Signup Modal -->
<div id="signup-modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="document.getElementById('signup-modal').style.display='none'">&times;</span>
        <div id="login-form">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
                <p>Don't have an account? <a href="#" id="switch-to-signup">Sign Up</a></p>
            </form>
        </div>
        <div id="signup-form" style="display: none;">
            <h2>Sign Up</h2>
            <form action="signup.php" method="POST">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Sign Up</button>
                <p>Already have an account? <a href="#" id="switch-to-login">Login</a></p>
            </form>
        </div>
    </div>
</div>
    
    <!--bottom navbar-->
    <nav class="bottom-navbar">
        <a href="home.php" class="fas fa-home"></a>
        <a href="features.php" class="fas fa-list"></a>
        <a href="arrival.php" class="fas fa-tags"></a>
        <a href="review.php" class="fas fa-comments"></a> <!-- Corrected icon name -->
        <a href="blog.php" class="fas fa-blog"></a> <!-- Corrected icon name -->
    </nav>



<div class="hideable-content">

<!--home section starts-->

<section class="Home" id="home">
    <div class="row">
        <div class="content">
            <h3>upto 50% off</h3>
            <h2>Welcome to Bookly!</h2>
            <p>We're building a place for book lovers to find great second-hand books. Whether you want 
                a classic, a new bestseller, or something unique, we've got it all at great prices. 
                The website is 50% complete, and we'reworking to make your shopping easy.
                 Stay tuned for more updates and happy reading!</p>
            <a href="features.php" class="btn"> shop now</a>
        </div>
        <div class=" swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide" onclick="showBookDetails('Let The Snog Fest Begin', 'Louise Rennison', 'img/b2.jpg', '$6', 'Let the Snog Fest Begin! by Louise Rennison is a humorous novel about Georgia Nicolsons comedic trials with teenage romance and friendship.')">
                    <img src="img/b2.jpg" alt="Book Image">
                </a>
                <a href="#" class="swiper-slide" onclick="showBookDetails('The Captains Treasure', 'Ruth Nilthon Moore', 'img/b3.jpg', '$10', 'The Captains Treasure follows a daring captain and their crew on an adventurous quest for hidden treasure, facing challenges and uncovering secrets along the way')">
                    <img src="img/b3.jpg" alt="Book Image">
                </a>
                <a href="#" class="swiper-slide" onclick="showBookDetails('Lizzie of Langley Street', 'Carol Rivers', 'img/b4.jpg', '$10', 'Lizzie of Langley Street is a heartwarming story about a young girl named Lizzie who navigates lifes challenges and personal growth in her quaint neighborhood. ')">
                    <img src="img/b4.jpg" alt="Book Image">
                </a>
            </div>
            

            

            
            
        </div>
    </div>
</section>

<!--icons section starts-->
<section class="icons-container">
    <div class="icons">
        <i class="fas fa-plane"></i>
        <div class="content">
        <h3>free shippings</h3>
        <p>order over $100</p>
        </div>
    </div>
    <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
        <h3>secure payment</h3>
        <p>100 secure payment</p>
        </div>
    </div>
    <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
        <h3>easy return</h3>
        <p>10 days returns</p>
        </div>
    </div>
    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
        <h3>24/7 support</h3>
        <p>call us anytime</p>
        </div>
    </div>
    
</section>

<!--icons section ends-->

<!-- Book Details Modal -->
<div id="book-details-modal" class="modal">
    <div class="modal-content">
        <span id="close-modal-btn" class="close-btn">&times;</span>
        <img id="book-image" src="img/b2.jpg" alt="Book Image">
        <div class="book-details-content">
            <h2 id="book-title"></h2>
            <p id="book-author"></p>
            <p id="book-price"></p>
            <p id="book-summary"></p>
            <div id="book-reviews"></div>
            <button id="add-to-cart-btn" class="btn add-to-cart">Add to Cart</button>
            <button id="buy-now-btn" class="btn">Buy Now</button>
        </div>
    </div>
</div>

<!--reviews section start-->
<section class="reviews" id="reviews">
    <h1 class="heading"><span> client's reviews</span></h1>
    <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <img src="img/p1.jpeg" alt="">
                <h3>Liam</h3>
                <p>"Amazing selection of gently used books at unbeatable prices. 
                    I found all the titles I was looking for!"</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="img/p2.jpeg" alt="">
                <h3>Max</h3>
                <p>"Great service and fast delivery! The books I ordered were in excellent condition."</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="img/p3.jpeg" alt="">
                <h3>john deo</h3>
                <p>"I love how easy it is to navigate the website and find the perfect book. 
                    Plus, the deals are fantastic!"</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="img/p4.jpeg" alt="">
                <h3>Jax</h3>
                <p>"A budget-friendly way to build my book collection. I’ll definitely be a returning customer."

                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="img/p5.jpeg" alt="">
                <h3>Leo</h3>
                <p>"Impressed with the variety and quality of second-hand books available.
                     Highly recommended!"
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="img/p6.jpeg" alt="">
                <h3>Sam</h3>
                <p>"The website is user-friendly, and the prices for second-hand books are simply unbeatable!"</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="img/p7.jpeg" alt="">
                <h3>Ella</h3>
                <p>"I was surprised by how many rare and hard-to-find books I could get at such affordable rates."</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="img/p8.jpeg" alt="">
                <h3>Mia</h3>
                <p>"The book descriptions and condition details are accurate, making it easy to shop with confidence."</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="img/p9.jpeg" alt="">
                <h3>Zoe</h3>
                <p>"Quick shipping and well-packaged books. A fantastic experience for any book lover!"</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="img/p10.jpeg" alt="">
                <h3>Eli</h3>
                <p>"I’ve saved so much money by purchasing second-hand books here. 
                    Great for both my wallet and my bookshelf!"</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!--reviews section end-->

<!--footer section start-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>pure location</h3>
            <a href="https://www.google.com/search?q=india+location"><i class="fas fa-map-marker-alt"></i>india</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-arrow-right"></i>home</a>
            <a href="features.php"><i class="fas fa-arrow-right"></i>featured</a>
            <a href="arrival.php"><i class="fas fa-arrow-right"></i>arrivals</a>
            <a href="review.php"><i class="fas fa-arrow-right"></i>reviews</a>
            <a href="blog.php"><i class="fas fa-arrow-right"></i>blogs</a>
        </div>
       
        <div class="box">
            <h3>extra links</h3>
            <a href="profile.php"><i class="fas fa-arrow-right"></i>account info</a>
            <a href="privacy-policy.html"><i class="fas fa-arrow-right"></i>privacy policy</a>
            <a href="order.html"><i class="fas fa-arrow-right"></i>orderd item</a>
            <a href="pay.html"><i class="fas fa-arrow-right"></i>payment</a>
            <a href="service.html"><i class="fas fa-arrow-right"></i>our services</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i>+111-222-3333</a>
            <a href="#"><i class="fas fa-envelope"></i>support@bookly.com</a>

            
        </div>
       
        
    </div>
</section>

<!--footer section end-->



</div>
<!--home section ends-->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="script.js"></script> 
</body>
</html>
