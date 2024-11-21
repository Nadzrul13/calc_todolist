<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taste Love</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">Taste Love</div>
        <nav class="nav-content">
            <ul>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#feedback">Feedback</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <section class="welcome-section">
            <h1>Welcome to Taste Love</h1>
            <p>
                Discover the perfect blend of flavors and passion at <strong>Taste Love</strong>!  
                We bring you a delightful selection of <strong>food, beverages, and drinks</strong> crafted to satisfy your cravings and elevate your dining experience.  
                Whether you're seeking a quick bite, a refreshing drink, or a moment of indulgence, we’re here to serve you with love and taste in every bite and sip.  
            </p>
            <p><strong>Taste the love, savor the moment.</strong></p>
            <p>Start your journey with us today!</p>
        </section>

        <!-- Menu Section -->
        <section id="menu" class="menu-section">
            <h2 class="judul-menu">Menu</h2>
            <div class="menu-list">
                <div class="menu-item">
                    <img src="images/burger.jpg" alt="Burger">
                    <h3>Burger</h3>
                    <p>IDR 25,000</p>
                    <a href="#" class="buy-button" data-id="1" data-name="Burger" data-price="25000">Buy</a>

                </div>
                <div class="menu-item">
                    <img src="images/pizza.jpg" alt="Pizza">
                    <h3>Pizza</h3>
                    <p>IDR 30,000</p>
                    <a href="#" class="buy-button" data-id="2" data-name="Pizza" data-price="30000">Buy</a>

                </div>
                <div class="menu-item">
                    <img src="images/pasta.jpg" alt="Pasta">
                    <h3>Pasta</h3>
                    <p>IDR 20,000</p>
                    <a href="#" class="buy-button" data-id="3" data-name="Pasta" data-price="20000">Buy</a>

                </div>
                <div class="menu-item">
                    <img src="images/chicken_steak.jpg" alt="Chicken Steak">
                    <h3>Chicken Steak</h3>
                    <p>IDR 25,000</p>
                    <a href="#" class="buy-button" data-id="4" data-name="Chicken Steak" data-price="25000">Buy</a>

                </div>
                <div class="menu-item">
                    <img src="images/beef_steak.jpg" alt="Beef Steak">
                    <h3>Beef Steak</h3>
                    <p>IDR 35,000</p>
                    <a href="">Buy</a>
                </div>
                <div class="menu-item">
                    <img src="images/tea.jpg" alt="Tea">
                    <h3>Tea</h3>
                    <p>IDR 5,000</p>
                    <a href="">Buy</a>
                </div>
                <div class="menu-item">
                    <img src="images/lychee_tea.jpg" alt="Lychee Tea">
                    <h3>Lychee Tea</h3>
                    <p>IDR 6,000</p>
                    <a href="">Buy</a>
                </div>
                <div class="menu-item">
                    <img src="images/orange_juice.jpg" alt="Orange Juice">
                    <h3>Orange Juice</h3>
                    <p>IDR 7,000</p>
                    <a href="">Buy</a>
                </div>
            </div>
        </section>

        <!-- Feedback Section -->
        <section id="feedback" class="feedback-section">
            <h2 class="kritik">Feedback and Suggestions</h2>
            <form action="submit_feedback.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Feedback and Suggestions:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                
                <button type="submit">Kirim</button>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer id="contact">
        <p>Follow us:</p>
        <p>
            <a href="https://instagram.com" target="_blank"><img src="images/ig.png" alt=""></a> | 
            <a href="https://wa.me" target="_blank"><img src="images/wa.png" alt=""></a> | 
            <a href="https://facebook.com" target="_blank">"<img src="images/fb.png" alt=""></a>
        </p>
        <p>© 2024 Taste Love | Developed by Taste Studio</p>
        <p>Contact: 123-456-7890</p>
    </footer>
</body>
</html>
