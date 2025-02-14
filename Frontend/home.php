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

<!-- Featured Section -->
<section class="featured" id="featured">
    <h1 class="heading"> <span>featured books</span></h1>
    <div class="swiper featured-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('The Goose Girl', 'well loved tales', 'img/b13.jpg', '$9', 'The Goose Girl by Shannon Hale is a fantasy novel about a princess who must disguise herself as a goose girl after being betrayed and usurped. As she struggles to reclaim her rightful place, she discovers her own strength and courage.')"></a>
                </div>
                <div class="image">
                    <img src="img/b13.jpg" alt="" onclick="showBookDetails('The Goose Girl', 'well loved tales', 'img/b13.jpg', '$9', 'The Goose Girl by Shannon Hale is a fantasy novel about a princess who must disguise herself as a goose girl after being betrayed and usurped. As she struggles to reclaim her rightful place, she discovers her own strength and courage.')">
                </div>
                <div class="content">
                    <h3>The Goose Girl</h3>
                    <div class="price">$9</div>
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('Murder at the happy home for the Aged', 'Bulbul sharma', 'img/b14.jpg', '$7', 'Murder at the Happy Home for the Aged is a mystery novel featuring a murder investigation set in a retirement home.')"></a>
                </div>
                <div class="image">
                    <img src="img/b14.jpg" alt="" onclick="showBookDetails('Murder at the happy home for the Aged', 'Bulbul sharma', 'img/b14.jpg', '$7', 'Murder at the Happy Home for the Aged is a mystery novel featuring a murder investigation set in a retirement home.')">
                </div>
                <div class="content">
                    <h3>Murder at the happy home for the Aged</h3>
                    <div class="price">$7</div>
                   
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('Treasure Island', 'Robert Louis Stevenson', 'img/b16.jpg', '$10', 'Treasure Island by Robert Louis Stevenson is a classic adventure novel about young Jim Hawkins quest for buried treasure.')"></a>
                </div>
                <div class="image">
                    <img src="img/b16.jpg" alt="" onclick="showBookDetails('Treasure Island', 'Robert Louis Stevenson', 'img/b16.jpg', '$10', 'Treasure Island by Robert Louis Stevenson is a classic adventure novel about young Jim Hawkins quest for buried treasure.')">
                </div>
                <div class="content">
                    <h3>Treasure Island</h3>
                    <div class="price">$10</div>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('Pilgrimage', 'IRA Singh', 'img/b25.jpg', '$16', 'Pilgrimage by Annie Ernaux is a reflective memoir about the authors journey of self-discovery and personal growth through travel and experiences.')"></a>
                </div>
                <div class="image">
                    <img src="img/b25.jpg" alt="" onclick="showBookDetails('Pilgrimage', 'IRA Singh', 'img/b25.jpg', '$16', 'Pilgrimage by Annie Ernaux is a reflective memoir about the authors journey of self-discovery and personal growth through travel and experiences.')">
                </div>
                <div class="content">
                    <h3>Pilgrimage</h3>
                    <div class="price">$16</div>
                   
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('Catherin Cookson', 'Tilly Trotter Windowed', 'img/b26.jpg', '$7', 'Catherine Cookson is a collection of novels by the renowned author Catherine Cookson, known for her compelling stories of romance and hardship set in early 20th-century England')"></a>
                </div>
                <div class="image">
                    <img src="img/b26.jpg" alt="" onclick="showBookDetails('Catherin Cookson', 'Tilly Trotter Windowed', 'img/b26.jpg', '$7', 'Catherine Cookson is a collection of novels by the renowned author Catherine Cookson, known for her compelling stories of romance and hardship set in early 20th-century England')">
                </div>
                <div class="content">
                    <h3>Catherin Cookson</h3>
                    <div class="price">$7</div>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('Erase The Ego', 'Sri Ramana Maharshi', 'img/b19.jpg', '$13', 'Erase the Ego explores the journey of self-discovery and personal growth by challenging and overcoming one’s ego. The book provides insights and practical advice for achieving a more fulfilled and authentic life.')"></a>
                </div>
                <div class="image">
                    <img src="img/b19.jpg" alt="" onclick="showBookDetails('Erase The Ego', 'Sri Ramana Maharshi', 'img/b19.jpg', '$13', 'Erase the Ego explores the journey of self-discovery and personal growth by challenging and overcoming one’s ego. The book provides insights and practical advice for achieving a more fulfilled and authentic life.')">
                </div>
                <div class="content">
                    <h3>Erase The Ego</h3>
                    <div class="price">$13</div>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('PackUp Your Troubles', 'Anne Bennett', 'img/b40.jpg', '$6.29', 'Pack Up Your Troubles by Pam Weaver follows Connie and Eva two women from feuding families who become close friends during their nurses training despite their families bitter past.')"></a>
                </div>
                <div class="image">
                    <img src="img/b40.jpg" alt="" onclick="showBookDetails('PackUp Your Troubles', 'Anne Bennett', 'img/b40.jpg', '$6.29', 'Pack Up Your Troubles by Pam Weaver follows Connie and Eva two women from feuding families who become close friends during their nurses training despite their families bitter past.')">
                </div>
                <div class="content">
                    <h3>PackUp Your Troubles</h3>
                    <div class="price">$6.29</div>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('Harry and the Wrinklies', 'Alan Temperley', 'img/b21.jpg', '$4.99', 'Harry and the Wrinklies follows young Harry as he moves in with his seemingly boring aunts, only to discover they lead an exciting double life as a crime-fighting gang. The story is filled with fun, adventure, and heartwarming moments.')"></a>
                </div>
                <div class="image">
                    <img src="img/b21.jpg" alt="" onclick="showBookDetails('Harry and the Wrinklies', 'Alan Temperley', 'img/b21.jpg', '$4.99', 'Harry and the Wrinklies follows young Harry as he moves in with his seemingly boring aunts, only to discover they lead an exciting double life as a crime-fighting gang. The story is filled with fun, adventure, and heartwarming moments.')">
                </div>
                <div class="content">
                    <h3>Harry and the Wrinklies</h3>
                    <div class="price">$4.99</div>
                   
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('Naishapur and Babylon', 'Keki N.Daruwall', 'img/b22.jpg', '$7.99', 'Naishapur and Babylon by Joyce Carol Oates is a compelling novella that explores the themes of obsession, desire, and the complexities of human relationships.')"></a>
                </div>
                <div class="image">
                    <img src="img/b22.jpg" alt="" onclick="showBookDetails('Naishapur and Babylon', 'Keki N.Daruwall', 'img/b22.jpg', '$7.99', 'Naishapur and Babylon by Joyce Carol Oates is a compelling novella that explores the themes of obsession, desire, and the complexities of human relationships.')">
                </div>
                <div class="content">
                    <h3>Naishapur and Babylon</h3>
                    <div class="price">$7.99 </div>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('The Tilburry Poppies', 'Sue Wilsher', 'img/b23.jpg', '$4.99', 'The Tilbury Poppies by Sue Wilsher is a historical novel set during World War I. It follows the lives of women in the working-class town of Tilbury, England, who take on factory jobs to support the war effort.')"></a>
                </div>
                <div class="image">
                    <img src="img/b23.jpg" alt="" onclick="showBookDetails('The Tilburry Poppies', 'Sue Wilsher', 'img/b23.jpg', '$4.99', 'The Tilbury Poppies by Sue Wilsher is a historical novel set during World War I. It follows the lives of women in the working-class town of Tilbury, England, who take on factory jobs to support the war effort.')">
                </div>
                <div class="content">
                    <h3>The Tilburry Poppies</h3>
                    <div class="price">$4.99</div>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('Twice upon a time', 'Payal Kapadia', 'img/b24.jpg', '$3.99 ', 'Twice Upon a Time by James Norcliffe is a fantasy novel that follows the adventures of a boy named Vincent, who finds himself in a parallel world where magic exists, and everything seems strangely familiar yet different')"></a>
                </div>
                <div class="image">
                    <img src="img/b24.jpg" alt="" onclick="showBookDetails('Twice upon a time', 'Payal Kapadia', 'img/b24.jpg', '$3.99 ', 'Twice Upon a Time by James Norcliffe is a fantasy novel that follows the adventures of a boy named Vincent, who finds himself in a parallel world where magic exists, and everything seems strangely familiar yet different')">
                </div>
                <div class="content">
                    <h3>Twice upon a time</h3>
                    <div class="price">$3.99</div>
                    
                </div>
            </div>
            
            <!-- Add more swiper slides here -->
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
        <div class="swiper-scrollbar"></div>
    </div>
</section>
<!--featured section ends-->

<!--nesletter section start-->
<section class="newsletter">
    <form action="">
        <h3>subscribe for latest updates</h3>
        <input type="email" name="" placeholder="enter your email" id="" class="box">
        <input type="submit" value="submit" class="btn">
    </form>
</section>

<!--nesletter section start-->

<!--Arrivals section end-->
<section class="arrivals" id="arrivals">
    <h1 class="heading"><span>new arrivals</span></h1>
    <div class="swiper arrivals-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('East End Angel', 'Carol River', 'img/b43.jpg', '$4.99 ', 'East End Angel by Carol Rivers is a heartwarming historical novel set in Londons East End during World War II.  As Pearl grows stronger amidst the hardships.')"></a>
                </div>
                <div class="image">
                    <img src="img/b43.jpg" alt="" onclick="showBookDetails('East End Angel', 'Carol River', 'img/b43.jpg', '$4.99 ', 'East End Angel by Carol Rivers is a heartwarming historical novel set in Londons East End during World War II.  As Pearl grows stronger amidst the hardships.')">
                </div>
                <div class="content">
                    <h3>East End Angel</h3>
                    <div class="price">$4.99</div>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('No Greater Love', 'Danielle Steel', 'img/b50.jpg', ' $4.99', 'No Greater Love by Danielle Steel is a dramatic tale of love, loss, and resilience. It centers around Edwina Winfield, who survives the Titanic disaster but loses her parents and fiancé.')"></a>
                </div>
                <div class="image">
                    <img src="img/b50.jpg" alt="" onclick="showBookDetails('No Greater Love', 'Danielle Steel', 'img/b50.jpg', ' $4.99', 'No Greater Love by Danielle Steel is a dramatic tale of love, loss, and resilience. It centers around Edwina Winfield, who survives the Titanic disaster but loses her parents and fiancé.')">
                </div>
                <div class="content">
                    <h3>No Greater Love</h3>
                    <div class="price"> $4.99</div>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('The Appeal', 'John Grisham', 'img/b51.jpg', '$7.99', 'The Appeal by John Grisham is a legal thriller that delves into the corrupt world of corporate influence on the judicial system. The story follows a chemical company guilty of dumping toxic waste, leading to a massive lawsuit')"></a>
                </div>
                <div class="image">
                    <img src="img/b51.jpg" alt="" onclick="showBookDetails('The Appeal', 'John Grisham', 'img/b51.jpg', '$7.99', 'The Appeal by John Grisham is a legal thriller that delves into the corrupt world of corporate influence on the judicial system. The story follows a chemical company guilty of dumping toxic waste, leading to a massive lawsuit')">
                </div>
                <div class="content">
                    <h3>The Appeal</h3>
                    <div class="price">$7.99</div>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('Beach Party', 'R.L Stine', 'img/b52.jpg', '$5.99', 'Beach Party by R.L. Stine is a teen thriller from the Fear Street series. The story follows Karen, who joins a group of friends for a summer of fun at the beach. ')"></a>
                </div>
                <div class="image">
                    <img src="img/b52.jpg" alt="" onclick="showBookDetails('Beach Party', 'R.L Stine', 'img/b52.jpg', '$5.99', 'Beach Party by R.L. Stine is a teen thriller from the Fear Street series. The story follows Karen, who joins a group of friends for a summer of fun at the beach. ')">
                </div>
                <div class="content">
                    <h3>Beach Party</h3>
                    <div class="price">$5.99</div>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('Love in Another Town', 'Barbara Taylor Bradford', 'img/b54.jpg', '$$4.99', 'Love in Another Town by Mary Higgins Clark is a romantic suspense novel about a young woman named Lacey who discovers a series of letters revealing a past romance involving her family.')"></a>
                </div>
                <div class="image">
                    <img src="img/b54.jpg" alt="" onclick="showBookDetails('Love in Another Town', 'Barbara Taylor Bradford', 'img/b54.jpg', '$4.99', 'Love in Another Town by Mary Higgins Clark is a romantic suspense novel about a young woman named Lacey who discovers a series of letters revealing a past romance involving her family.')">
                </div>
                <div class="content">
                    <h3>Love in Another Town</h3>
                    <div class="price">$4.99</div>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('Juniors', 'Dr.B.R.Kishore', 'img/b35.jpg', '$3.99', 'Juniors by K.A. Applegate is a young adult novel that explores the lives of high school students navigating the complexities of adolescence.')"></a>
                </div>
                <div class="image">
                    <img src="img/b35.jpg" alt="" onclick="showBookDetails('Juniors', 'Dr.B.R.Kishore', 'img/b35.jpg', '$3.99', 'Juniors by K.A. Applegate is a young adult novel that explores the lives of high school students navigating the complexities of adolescence.')">
                </div>
                <div class="content">
                    <h3>Juniors</h3>
                    <div class="price">$3.99</div>
                   
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('The Daevinci Code', 'Dan Brown', 'img/b56.jpg', '$8.99', 'The Da Vinci Code by Dan Brown is a bestselling thriller that follows Robert Langdon, a Harvard symbologist, and Sophie Neveu, a French cryptologist, as they unravel a series of clues related to a murder in the Louvre. ')"></a>
                </div>
                <div class="image">
                    <img src="img/b56.jpg" alt="" onclick="showBookDetails('The Daevinci Code', 'Dan Brown', 'img/b56.jpg', '$8.99', 'The Da Vinci Code by Dan Brown is a bestselling thriller that follows Robert Langdon, a Harvard symbologist, and Sophie Neveu, a French cryptologist, as they unravel a series of clues related to a murder in the Louvre. ')">
                </div>
                <div class="content">
                    <h3>The Daevinci Code</h3>
                    <div class="price">$8.99</div>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('The edge of Reason', 'Bridget Jones', 'img/b37.jpg', '$4.99', 'The Edge of Reason by Helen Fielding is a sequel to Bridget Jones Diary. It continues the humorous and relatable journey of Bridget Jones as she navigates the ups and downs of her love life, career, and personal growth.')"></a>
                </div>
                <div class="image">
                    <img src="img/b37.jpg" alt="" onclick="showBookDetails('The edge of Reason', 'Bridget Jones', 'img/b37.jpg', '$4.99', 'The Edge of Reason by Helen Fielding is a sequel to Bridget Jones Diary. It continues the humorous and relatable journey of Bridget Jones as she navigates the ups and downs of her love life, career, and personal growth.')">
                </div>
                <div class="content">
                    <h3>The edge of Reason</h3>
                    <div class="price">$4.99</div>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('Catherine Cookson', 'Tilly Trotter Windowed', 'img/b38.jpg', '$6.99', 'Catherine Cookson wrote numerous novels, so I’d need to know the specific title to provide a precise summary. However, her books often focus on themes of social struggle, romance, and personal resilience set in historical or working-class settings')"></a>
                </div>
                <div class="image">
                    <img src="img/b38.jpg" alt="" onclick="showBookDetails('Catherine Cookson', 'Tilly Trotter Windowed', 'img/b38.jpg', '$6.99', 'Catherine Cookson wrote numerous novels, so I’d need to know the specific title to provide a precise summary. However, her books often focus on themes of social struggle, romance, and personal resilience set in historical or working-class settings')">
                </div>
                <div class="content">
                    <h3>Catherine Cookson</h3>
                    <div class="price">$6.99</div>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('A Christmas Cracker', 'Trisha Ashley', 'img/b39.jpg', '$4', 'A Christmas Cracker is a festive novel by the renowned author, whose charming storytelling focuses on the holiday seasons magic and cheer. ')"></a>
                </div>
                <div class="image">
                    <img src="img/b39.jpg" alt="" onclick="showBookDetails('A Christmas Cracker', 'Trisha Ashley', 'img/b39.jpg', '$4', 'A Christmas Cracker is a festive novel by the renowned author, whose charming storytelling focuses on the holiday seasons magic and cheer. ')">
                </div>
                <div class="content">
                    <h3>A Christmas Cracker</h3>
                    <div class="price">$4</div>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart" onclick="toggleLike(this)"></a>
                    <span class="like-count">0</span>
                    <a href="#" class="fas fa-eye" onclick="showBookDetails('Pack up your Troubles', 'Anne Bennett', 'img/b40.jpg', '$5', 'Pack Up Your Troubles is a novel set during World War II, focusing on the lives of characters affected by the war. The story often highlights themes of resilience, camaraderie, and personal struggles as people cope with the challenges of wartime.')"></a>
                </div>
                <div class="image">
                    <img src="img/b40.jpg" alt="" onclick="showBookDetails('Pack up your Troubles', 'Anne Bennett', 'img/b40.jpg', '$5', 'Pack Up Your Troubles is a novel set during World War II, focusing on the lives of characters affected by the war. The story often highlights themes of resilience, camaraderie, and personal struggles as people cope with the challenges of wartime.')">
                </div>
                <div class="content">
                    <h3>Pack up your Troubles</h3>
                    <div class="price">$5</div>
                    
                </div>
            </div>
            
            <!-- Add more swiper slides here -->
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
        <div class="swiper-scrollbar"></div>
    </div>
</section>

<!--Arrivals section end-->

<!--deal section start-->
<section class="deal">
    <div class="content">
        <h3>deal of the day</h3>
        <h1>upto 50%off</h1>
        <p>Dive into your favorite stories and explore new genres at half the price. 
            Don't miss out—grab your next great read today and enjoy unbeatable savings!
        </p>
        <a href="#" class="btn">shop now</a>
    </div>
    <div class="image">
        <img src="img/deal.jpeg" alt="">
    </div>
</section>

<!--deal section endt-->

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

<!--blogs section start-->
<section class="blogs" id="blogs">
    <h1 class="heading"><span>our blogs</span></h1>
    <div class="swiper blogs-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <div class="image">
                    <img src="img/bl1.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Crafting the Perfect Blog Post</h3>
                    <p>Learn the key elements that make a blog post stand out, including attention-grabbing headlines, engaging content, and effective calls to action.</p>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="image">
                    <img src="img/bl2.jpeg"" alt="">
                </div>
                <div class="content">
                    <h3>Staying Motivated in Blogging</h3>
                    <p>Discover strategies to maintain enthusiasm and consistency in blogging, such as setting goals, finding inspiration, and managing your time effectively.</p>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="image">
                    <img src="img/bl3.jpeg"" alt="">
                </div>
                <div class="content">
                    <h3>Blogging for Beginners</h3>
                    <p>A beginner’s guide to starting a blog, covering basics like choosing a platform, setting up your blog, and writing your first post</p>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="image">
                    <img src="img/bl4.jpeg"" alt="">
                </div>
                <div class="content">
                    <h3>Latest Digital Marketing Trends</h3>
                    <p>Explore the most recent trends in digital marketing, including social media developments, SEO changes, and emerging technologies.</p>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="image">
                    <img src="img/bl5.jpeg"" alt="">
                </div>
                <div class="content">
                    <h3>Creating Engaging Content</h3>
                    <p>Tips for writing content that captures and retains readers' attention, focusing on storytelling techniques, visual elements, and interactive features.</p>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="image">
                    <img src="img/bl6.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Blogging for Personal Branding</h3>
                    <p>Learn how to use blogging to build and enhance your personal brand, including defining your niche, establishing credibility, and connecting with your audience.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="image">
                    <img src="img/bl7.jpeg"" alt="">
                </div>
                <div class="content">
                    <h3>Top Blogging Tools</h3>
                    <p>An overview of essential tools for bloggers, such as content management systems, SEO plugins, and social media schedulers, to streamline your blogging process.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="image">
                    <img src="img/bl8.jpeg"" alt="">
                </div>
                <div class="content">
                    <h3>Driving Traffic to Your Blog</h3>
                    <p>Strategies for increasing blog traffic, including SEO optimization, social media promotion, and email marketing.</p>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="image">
                    <img src="img/bl9.jpeg"" alt="">
                </div>
                <div class="content">
                    <h3>The Art of Storytelling</h3>
                    <p>Techniques for crafting compelling stories in your blog posts, focusing on narrative structure, character development, and emotional impact.</p>
                    
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="image">
                    <img src="img/bl10.jpeg"" alt="">
                </div>
                <div class="content">
                    <h3>Avoiding Blogging Mistakes</h3>
                    <p>Common pitfalls in blogging and how to avoid them, including issues like poor content quality, inconsistent posting, and neglecting SEO practices.</p>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!--blogs section end-->

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
