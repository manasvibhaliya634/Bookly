const books = [
    {
        title: "Let The Snog Fest Begin",
        author: "Louise Rennison",
        image: "img/b2.jpg",
        price: "$6",
        description: "Let the Snog Fest Begin! by Louise Rennison is a humorous novel about Georgia Nicolson's comedic trials with teenage romance and friendship."
    },
    {
        title: "The Captains Treasure",
        author: "Ruth Nilthon Moore",
        image: "img/b3.jpg",
        price: "$10",
        description: "The Captains Treasure follows a daring captain and their crew on an adventurous quest for hidden treasure, facing challenges and uncovering secrets along the way."
    },
    {
        title: "Lizzie of Langley Street",
        author: "Carol Rivers",
        image: "img/b4.jpg",
        price: "$10",
        description: "Lizzie of Langley Street is a heartwarming story about a young girl named Lizzie who navigates life's challenges and personal growth in her quaint neighborhood."
    },
    {
        title: "The Goose Girl",
        author: "Shannon Hale",
        image: "img/b13.jpg",
        price: "$9",
        description: "The Goose Girl by Shannon Hale is a fantasy novel about a princess who must disguise herself as a goose girl after being betrayed and usurped. As she struggles to reclaim her rightful place, she discovers her own strength and courage."
    },
    {
        title: "Murder at the Happy Home for the Aged",
        author: "Bulbul Sharma",
        image: "img/b14.jpg",
        price: "$7",
        description: "Murder at the Happy Home for the Aged is a mystery novel featuring a murder investigation set in a retirement home."
    },
    {
        title: "Treasure Island",
        author: "Robert Louis Stevenson",
        image: "img/b16.jpg",
        price: "$10",
        description: "Treasure Island by Robert Louis Stevenson is a classic adventure novel about young Jim Hawkins' quest for buried treasure."
    },
    {
        title: "Pilgrimage",
        author: "IRA Singh",
        image: "img/b25.jpg",
        price: "$16",
        description: "Pilgrimage by Annie Ernaux is a reflective memoir about the author's journey of self-discovery and personal growth through travel and experiences."
    },
    {
        title: "Catherine Cookson",
        author: "Tilly Trotter Windowed",
        image: "img/b26.jpg",
        price: "$7",
        description: "Catherine Cookson is a collection of novels by the renowned author Catherine Cookson, known for her compelling stories of romance and hardship set in early 20th-century England."
    },
    {
        title: "Erase The Ego",
        author: "Sri Ramana Maharshi",
        image: "img/b19.jpg",
        price: "$13",
        description: "Erase the Ego explores the journey of self-discovery and personal growth by challenging and overcoming one’s ego. The book provides insights and practical advice for achieving a more fulfilled and authentic life."
    },
    {
        title: "Pack Up Your Troubles",
        author: "Anne Bennett",
        image: "img/b40.jpg",
        price: "$6.29",
        description: "Pack Up Your Troubles by Pam Weaver follows Connie and Eva, two women from feuding families who become close friends during their nurses training despite their families' bitter past."
    },
    {
        title: "Harry and the Wrinklies",
        author: "Alan Temperley",
        image: "img/b21.jpg",
        price: "$4.99",
        description: "Harry and the Wrinklies follows young Harry as he moves in with his seemingly boring aunts, only to discover they lead an exciting double life as a crime-fighting gang. The story is filled with fun, adventure, and heartwarming moments."
    },
    {
        title: "Naishapur and Babylon",
        author: "Keki N. Daruwalla",
        image: "img/b22.jpg",
        price: "$7.99",
        description: "Naishapur and Babylon by Joyce Carol Oates is a compelling novella that explores the themes of obsession, desire, and the complexities of human relationships."
    },
    {
        title: "The Tilbury Poppies",
        author: "Sue Wilsher",
        image: "img/b23.jpg",
        price: "$4.99",
        description: "The Tilbury Poppies by Sue Wilsher is a historical novel set during World War I. It follows the lives of women in the working-class town of Tilbury, England, who take on factory jobs to support the war effort."
    },
    {
        title: "Twice Upon a Time",
        author: "Payal Kapadia",
        image: "img/b24.jpg",
        price: "$3.99",
        description: "Twice Upon a Time by James Norcliffe is a fantasy novel that follows the adventures of a boy named Vincent, who finds himself in a parallel world where magic exists, and everything seems strangely familiar yet different."
    },
    {
        title: 'Let The Snog Fest Begin',
        author: 'Louise Rennison',
        image: 'img/b2.jpg',
        price: '$6',
        summary: 'Let the Snog Fest Begin! by Louise Rennison is a humorous novel about Georgia Nicolsons comedic trials with teenage romance and friendship.'
    },
    {
        title: 'The Captains Treasure',
        author: 'Ruth Nilthon Moore',
        image: 'img/b3.jpg',
        price: '$10',
        summary: 'The Captains Treasure follows a daring captain and their crew on an adventurous quest for hidden treasure, facing challenges and uncovering secrets along the way.'
    },
    {
        title: 'Lizzie of Langley Street',
        author: 'Carol Rivers',
        image: 'img/b4.jpg',
        price: '$10',
        summary: 'Lizzie of Langley Street is a heartwarming story about a young girl named Lizzie who navigates life’s challenges and personal growth in her quaint neighborhood.'
    },
    {
        title: 'East End Angel',
        author: 'Carol River',
        image: 'img/b43.jpg',
        price: '$4.99',
        summary: 'East End Angel by Carol Rivers is a heartwarming historical novel set in London’s East End during World War II. As Pearl grows stronger amidst the hardships.'
    },
    {
        title: 'No Greater Love',
        author: 'Danielle Steel',
        image: 'img/b50.jpg',
        price: '$4.99',
        summary: 'No Greater Love by Danielle Steel is a dramatic tale of love, loss, and resilience. It centers around Edwina Winfield, who survives the Titanic disaster but loses her parents and fiancé.'
    },
    {
        title: 'The Appeal',
        author: 'John Grisham',
        image: 'img/b51.jpg',
        price: '$7.99',
        summary: 'The Appeal by John Grisham is a legal thriller that delves into the corrupt world of corporate influence on the judicial system. The story follows a chemical company guilty of dumping toxic waste, leading to a massive lawsuit.'
    },
    {
        title: 'Beach Party',
        author: 'R.L Stine',
        image: 'img/b52.jpg',
        price: '$5.99',
        summary: 'Beach Party by R.L. Stine is a teen thriller from the Fear Street series. The story follows Karen, who joins a group of friends for a summer of fun at the beach.'
    },
    {
        title: 'Love in Another Town',
        author: 'Barbara Taylor Bradford',
        image: 'img/b54.jpg',
        price: '$4.99',
        summary: 'Love in Another Town by Mary Higgins Clark is a romantic suspense novel about a young woman named Lacey who discovers a series of letters revealing a past romance involving her family.'
    },
    {
        title: 'Juniors',
        author: 'Dr.B.R.Kishore',
        image: 'img/b35.jpg',
        price: '$3.99',
        summary: 'Juniors by K.A. Applegate is a young adult novel that explores the lives of high school students navigating the complexities of adolescence.'
    },
    {
        title: 'The Daevinci Code',
        author: 'Dan Brown',
        image: 'img/b56.jpg',
        price: '$8.99',
        summary: 'The Da Vinci Code by Dan Brown is a bestselling thriller that follows Robert Langdon, a Harvard symbologist, and Sophie Neveu, a French cryptologist, as they unravel a series of clues related to a murder in the Louvre.'
    },
    {
        title: 'The Edge of Reason',
        author: 'Bridget Jones',
        image: 'img/b37.jpg',
        price: '$4.99',
        summary: 'The Edge of Reason by Helen Fielding is a sequel to Bridget Jones Diary. It continues the humorous and relatable journey of Bridget Jones as she navigates the ups and downs of her love life, career, and personal growth.'
    },
    {
        title: 'Catherine Cookson',
        author: 'Tilly Trotter Windowed',
        image: 'img/b38.jpg',
        price: '$6.99',
        summary: 'Catherine Cookson wrote numerous novels, so I’d need to know the specific title to provide a precise summary. However, her books often focus on themes of social struggle, romance, and personal resilience set in historical or working-class settings.'
    },
    {
        title: 'A Christmas Cracker',
        author: 'Trisha Ashley',
        image: 'img/b39.jpg',
        price: '$4',
        summary: 'A Christmas Cracker is a festive novel by the renowned author, whose charming storytelling focuses on the holiday season’s magic and cheer.'
    },
    {
        title: 'Pack up your Troubles',
        author: 'Anne Bennett',
        image: 'img/b40.jpg',
        price: '$5',
        summary: 'Pack Up Your Troubles is a novel set during World War II, focusing on the lives of characters affected by the war. The story often highlights themes of resilience, camaraderie, and personal struggles as people cope with the challenges of wartime.'
    }
];

const searchBox = document.getElementById('search-box');
const suggestionsList = document.getElementById('suggestions');
const recommendationsList = document.getElementById('recommendations');
const contentToHide = document.querySelectorAll('.hideable-content');
const navbar = document.querySelector('.navbar');

// Event listener for input in the search box
searchBox.addEventListener('input', function () {
    const query = searchBox.value.toLowerCase();
    const suggestions = books.filter(book => book.title.toLowerCase().includes(query));

    // Hide all content below navbar
    contentToHide.forEach(element => element.style.display = 'none');

    // Clear previous suggestions
    suggestionsList.innerHTML = '';

    if (suggestions.length > 0 && query !== '') {
        suggestions.forEach(book => {
            const bookCard = document.createElement('div');
            bookCard.className = 'book-card';

            bookCard.innerHTML = `
                <img src="${book.image}" alt="${book.title}" class="book-image">
                <h3>${book.title}</h3>
                <p>${book.author}</p>
                <p>${book.price}</p>
            `;

            suggestionsList.appendChild(bookCard);
        });

        // Place the suggestions list below the navbar
        navbar.insertAdjacentElement('afterend', suggestionsList);
        suggestionsList.style.display = 'block';
        recommendationsList.style.display = 'none';
    } else {
        suggestionsList.style.display = 'none'; // Hide if no match
        displayRecommendations(); // Show recommendations if no results
    }
});

// Function to display recommendations
function displayRecommendations() {
    recommendationsList.innerHTML = ''; // Clear previous recommendations

    // Get a random selection of books for recommendations
    const shuffledBooks = books.sort(() => 0.5 - Math.random());
    const recommendations = shuffledBooks.slice(0, 5); // Take the first 5 books as recommendations

    recommendations.forEach(book => {
        const recommendationCard = document.createElement('div');
        recommendationCard.className = 'book-card';

        recommendationCard.innerHTML = `
            <img src="${book.image}" alt="${book.title}" class="book-image">
            <h3>${book.title}</h3>
            <p>${book.author}</p>
            <p>${book.price}</p>
            <button onclick="showBookDetails('${book.title}', '${book.author}', '${book.image}', '${book.price}', '${book.description}')">View Details</button>
        `;

        recommendationsList.appendChild(recommendationCard);
    });

    recommendationsList.style.display = 'block'; // Show recommendations
}

// Call this function to initialize recommendations
function initializeRecommendations() {
    displayRecommendations();
}

// Call initializeRecommendations on page load
window.onload = initializeRecommendations;

// Function to show book details in the modal
function showBookDetails(title, author, image, price, summary) {
    console.log("Book details:", title, author, image, price, summary); // Debugging log
    document.getElementById('book-title').textContent = title;
    document.getElementById('book-author').textContent = author;
    document.getElementById('book-price').textContent = price;
    document.getElementById('book-summary').textContent = summary;
    document.getElementById('book-image').src = image;

    // Show the modal
    document.getElementById('book-details-modal').style.display = 'block';
}

// Close modal
document.getElementById('close-modal-btn').addEventListener('click', function() {
    document.getElementById('book-details-modal').style.display = 'none';
});

// Close modal when clicking outside
window.onclick = function(event) {
    if (event.target === document.getElementById('book-details-modal')) {
        document.getElementById('book-details-modal').style.display = 'none';
    }
};

// Reset the page when clearing search
searchBox.addEventListener('input', function () {
    if (searchBox.value === '') {
        resetPage(); // Reset the page if search box is cleared
    }
});

// Function to reset the page and show the hidden content again
function resetPage() {
    contentToHide.forEach(element => element.style.display = ''); // Show hidden content
    suggestionsList.style.display = 'none'; // Hide suggestions
    recommendationsList.style.display = 'block'; // Show recommendations
    document.getElementById('book-details-modal').classList.remove('active'); // Hide the modal if open
    searchBox.value = ''; // Clear search input
}


// Initialize Swiper
var swiper = new Swiper('.books-slider', {
    slidesPerView: 3,
    spaceBetween: 10,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});

// Other UI interactions
let searchForm = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
};


window.onscroll = () => {
    searchForm.classList.remove('active');
    if (window.scrollY > 80) {
        document.querySelector('.header .header-2').classList.add('active');
    } else {
        document.querySelector('.header .header-2').classList.remove('active');
    }
};

window.onload = () => {
    if (window.scrollY > 80) {
        document.querySelector('.header .header-2').classList.add('active');
    } else {
        document.querySelector('.header .header-2').classList.remove('active');
    }
    
};



document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper(".featured-slider", {
        loop: false, // Disable loop mode if there are not enough slides
        slidesPerView: 5, // Adjust according to your needs
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        scrollbar: {
            el: ".swiper-scrollbar",
            draggable: true,
        },
    });
});

var swiper = new Swiper(".arrivals-slider", {
    loop: true, // Enable loop for smoother navigation
    spaceBetween: 30,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    scrollbar: {
        el: ".swiper-scrollbar",
        draggable: true,
    },
    breakpoints: {
        320: { slidesPerView: 1 }, // Mobile devices
        640: { slidesPerView: 2 }, // Small tablets
        768: { slidesPerView: 3 }, // Medium devices
        1024: { slidesPerView: 5 }, // Large devices
    },
});

var swiper = new Swiper(".reviews-slider", {
    loop: true, // Enable loop for smoother navigation
    spaceBetween: 30,
    grabCursor:true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    scrollbar: {
        el: ".swiper-scrollbar",
        draggable: true,
    },
    breakpoints: {
        320: { slidesPerView: 1 }, // Mobile devices
        640: { slidesPerView: 2 }, // Small tablets
        768: { slidesPerView: 3 }, // Medium devices
        1024: { slidesPerView: 5 }, // Large devices
    },
});

var swiper = new Swiper(".blogs-slider", {
    loop: true, // Enable loop for smoother navigation
    spaceBetween: 30,
    grabCursor:true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    scrollbar: {
        el: ".swiper-scrollbar",
        draggable: true,
    },
    breakpoints: {
        320: { slidesPerView: 1 }, // Mobile devices
        640: { slidesPerView: 2 }, // Small tablets
        768: { slidesPerView: 3 }, // Medium devices
        1024: { slidesPerView: 5 }, // Large devices
    },
});



let cart = []; // Array to store cart items

// Function to add a book to the cart
function addToCart(book) {
    const existingBook = cart.find(item => item.title === book.title);
    
    if (existingBook) {
        existingBook.quantity++;
    } else {
        cart.push({...book, quantity: 1});
    }
    
    updateCartUI();
}

// Function to remove a book from the cart
function removeFromCart(title) {
    cart = cart.filter(item => item.title !== title);
    updateCartUI();
}

// Function to update the cart UI and calculate the total
function updateCartUI() {
    const cartItems = document.getElementById('cart-items');
    cartItems.innerHTML = '';
    
    let totalPrice = 0;
    
    cart.forEach(item => {
        const subtotal = item.price * item.quantity;
        totalPrice += subtotal;

        cartItems.innerHTML += `
            <tr>
                <td><img src="${item.image}" alt="${item.title}" width="50"></td>
                <td>${item.title}</td>
                <td>$${item.price}</td>
                <td>
                    <input type="number" value="${item.quantity}" min="1" onchange="updateQuantity('${item.title}', this.value)">
                </td>
                <td>$${subtotal.toFixed(2)}</td>
                <td><button onclick="removeFromCart('${item.title}')">Remove</button></td>
            </tr>
        `;
    });
    
    document.getElementById('total-price').textContent = totalPrice.toFixed(2);

    // Update the cart count in the cart icon
    document.getElementById('cart-count').textContent = cart.reduce((total, item) => total + item.quantity, 0);
}

// Function to update the quantity of a book
function updateQuantity(title, quantity) {
    const book = cart.find(item => item.title === title);
    if (book) {
        book.quantity = parseInt(quantity);
    }
    updateCartUI();
}

// Function to show the book details in the modal
function showBookDetails(title, author, image, price, summary) {
    document.getElementById('book-title').textContent = title;
    document.getElementById('book-author').textContent = author;
    document.getElementById('book-image').src = image;
    document.getElementById('book-price').textContent = price;
    document.getElementById('book-summary').textContent = summary;

    const addToCartBtn = document.getElementById('add-to-cart-btn');
    addToCartBtn.onclick = function() {
        addToCart({
            title: title,
            price: parseFloat(price.replace('$', '')),
            image: image
        });
    };

    // Show the modal
    document.getElementById('book-details-modal').style.display = 'block';
}

// Function to hide the modal
document.getElementById('close-modal-btn').addEventListener('click', function() {
    document.getElementById('book-details-modal').style.display = 'none';
});

// Show the cart when the cart icon is clicked
document.getElementById('cart-icon').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('cart').style.display = 'block';
});

// Hide the cart when the close button is clicked
document.getElementById('close-cart-btn').addEventListener('click', function() {
    document.getElementById('cart').style.display = 'none';
});



// Function to show the cart overlay when the cart icon is clicked
document.getElementById('cart-icon').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default action of the anchor tag

    // Show the cart overlay
    const cartOverlay = document.getElementById('cart-overlay');
    cartOverlay.style.display = 'flex'; // Use flex to center the cart content
});

// Function to hide the cart overlay when the close button (X) is clicked
document.getElementById('close-cart-btn').addEventListener('click', function() {
    const cartOverlay = document.getElementById('cart-overlay');

    // Hide the cart overlay
    cartOverlay.style.display = 'none';
});


document.getElementById('proceed-to-payment').addEventListener('click', function() {
    window.location.href = 'BOOKLY/pay.html'; // Navigate to payment page
});

document.getElementById('proceed-to-payment').addEventListener('click', function() {
    // Redirect to the payment page
    window.location.href = 'pay.html';
});

document.getElementById('buy-now-btn').addEventListener('click', function() {
    window.location.href = 'pay.html';  // Update with the actual path to your payment page
});

function openLoginModal() {
    document.getElementById('signup-modal').style.display = 'block';
}

// Close modal when clicking outside of it
window.onclick = function(event) {
    const modal = document.getElementById('signup-modal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}

// Switch to signup form
document.getElementById('switch-to-signup').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('login-form').style.display = 'none';
    document.getElementById('signup-form').style.display = 'block';
});

// Switch to login form
document.getElementById('switch-to-login').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('signup-form').style.display = 'none';
    document.getElementById('login-form').style.display = 'block';
});

function handleLogout() {
    window.location.href = 'logout.php'; // Redirect to logout script
}

