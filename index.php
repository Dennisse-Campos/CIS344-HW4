<?php 
// Include the header file, which contains the opening HTML tags,
// site branding (logo/title), and the navigation menu.
require('header.php'); 
?>

<!DOCTYPE html>
<html>
     <!-- Main content wrapper -->
    <div class="main-content">

    <!-- Hero section with welcome message and primary calls to action -->
        <section class="hero">
            <h2>Welcome to La Bella!</h2>
            <p class="tagline">Experience the authentic taste of Italy in the heart of the city.</p>
            <a href="menu.php" class="button">View Our Menu</a>
            <a href="reservations.php" class="button primary">Make a Reservation</a>
        </section>

        <!-- About Us section providing background on the restaurant -->
        <section class="about-us">
            <h3>Our Story</h3>
            <p>La Bella Restaurant was founded in 2025 by Dennisse Campos with a passion for bringing traditional Italian recipes to New York City. We pride ourselves on using fresh, locally sourced ingredients whenever possible to create dishes that are both authentic and bursting with flavor. Our warm and inviting atmosphere makes us the perfect place for a romantic dinner, a family gathering, or a casual meal with friends.</p>
            <p>Come and experience the true taste of Italy at La Bella!</p>
        </section>

         <!-- Featured Dishes section highlighting popular menu items -->
        <section class="featured-dishes">
            <h3>Featured Dishes</h3>
            <div class="dish-grid">
                <div class="dish">
                    <img src="spaghetti_carbonara.jpg" alt="Spaghetti Carbonara">
                    <h4>Spaghetti Carbonara</h4>
                    <p class="description">Classic Roman pasta dish with eggs, Pecorino Romano cheese, guanciale, and black pepper.</p>
                    <span class="price">$16.99</span>
                </div>
                <div class="dish">
                    <img src="margherita_pizza.jpg" alt="Margherita Pizza">
                    <h4>Margherita Pizza</h4>
                    <p class="description">Simple yet delicious pizza with San Marzano tomatoes, fresh mozzarella, basil, and olive oil.</p>
                    <span class="price">$14.99</span>
                </div>
                <div class="dish">
                    <img src="tiramisu.webp" alt="Tiramisu">
                    <h4>Tiramisu</h4>
                    <p class="description">Traditional Italian dessert made with ladyfingers dipped in coffee, layered with mascarpone cream, and dusted with cocoa powder.</p>
                    <span class="price">$8.99</span>
                </div>
            </div>
        </section>

         <!-- Customer Testimonials section -->
        <section class="testimonials">
            <h3>What Our Customers Say</h3>
            <div class="testimonial-grid">
                <div class="testimonial">
                    <p>"The pasta was incredible! So authentic and flavorful. The service was also top-notch." - John D.</p>
                </div>
                <div class="testimonial">
                    <p>"Best pizza I've had outside of Italy! The ingredients were so fresh." - Sarah M.</p>
                </div>
                <div class="testimonial">
                    <p>"A truly delightful dining experience. The ambiance was perfect for our anniversary dinner." - Emily R.</p>
                </div>
            </div>
        </section>

         <!-- Call to Action section encouraging reservations -->
        <section class="call-to-action">
            <h3>Ready to Dine with Us?</h3>
            <p>Book your table today and savor the flavors of La Bella!</p>
            <a href="reservations.php" class="button primary large">Make a Reservation</a>
        </section>
    </div>
</html>

<?php 
// Include the footer file, which contains the closing HTML tags and any footer content.
require('footer.php'); 
?>
