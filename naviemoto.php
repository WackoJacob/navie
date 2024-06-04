<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navie Motorcycle Parts and Accessories</title>
    <link rel="stylesheet" href="stylenavie.css">
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />

<script> 
document.addEventListener("DOMContentLoaded", function() {
    var btn = document.getElementById("btn-nav");
    var additionalInfo = document.getElementById("additional-info");

    btn.addEventListener("click", function(event) {
        event.preventDefault(); // Prevent default link behavior

        if (additionalInfo.classList.contains("show")) {
            // Hide additional info
            additionalInfo.classList.remove("show");
            btn.textContent = "Learn more";
        } else {
            // Show additional info
            additionalInfo.classList.add("show");
            btn.textContent = "Show less";
        }
    });
});

</script>
    
</head>
<body>

<header>
<a href="#home" class="logo">Navie</a>

<nav class="navbar">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#shop">Products</a>
    <a href="#services">Services</a>
    <a href="#contact">Contact</a>
</nav>

<div class="icons">
    <a href="#services"> <i class="lni lni-scooter"></i> </a>
    <a href="#shop"> <i class="lni lni-cart"></i> </a>
    <a href="#contact"> <i class="lni lni-user"></i> </a>
</div>

</header>

<section class="home" id="home">

    <div class="content">

    <h3>Navie Motorcycle Parts and Accessories</h3>
    <span>Where Dreams and Asphalt Meet</span>
    <p>Get ready to fuel your passion for motorcycles like never before. At Navie, we're more than just a store—we're a community united by the love of the open road.
Explore our curated selection of top-quality parts and accessories designed to elevate your biking experience. From stylish helmets to performance-enhancing components, we've got everything you need to customize your ride and make memories that last a lifetime.
So, whether you're here to shop, browse, or connect with fellow riders, we're thrilled to have you along for the journey. Welcome to Navie—where the adventure begins.</p>
<a href="#shop" class="btn">Shop now</a>

    </div>

</section>

<section class="about">

    <h1 class="heading" id="about"> <span> About </span> us</h1>

        <div class="row">
            <div class="video-container">
                <video src="5198958-uhd_4096_2160_25fps.mp4" loop autoplay muted></video>
            </div>
                <div class="content">

                <h3>About Navie</h3>
                <p>Navie Motorcycle Parts and Accessories is your premier destination for top-quality motorcycle services and accessories. With a passion for motorcycles and a commitment to excellence, we strive to provide the best solutions to enhance your riding experience.</p>

                <h4>Our Services</h4>
                <p>At Navie, we offer a comprehensive range of motorcycle services to keep your bike running smoothly and safely: <br>
                    1. Tune Ups: Our expert technicians perform thorough tune ups to ensure optimal performance and reliability of your motorcycle.<br>
                    2. Valve Adjustments: We specialize in precise valve adjustments to maintain the health and efficiency of your engine.<br>
                    3. Motor Wash: Treat your motorcycle to a refreshing wash at our facility, leaving it looking spotless and pristine.</p>

                <h4>Our Commitment</h4>
                <p>
                Quality: We are dedicated to delivering high-quality products and services that meet and exceed your expectations.<br>
                Customer Satisfaction: Your satisfaction is our priority. We strive to provide personalized service and support to each of our valued customers.<br>
                Expertise: With years of experience and expertise in the motorcycle industry, you can trust our team to handle all your motorcycle needs with precision and care.
                </p>

                    <h3>Why choose Navie?</h3>
                    <p>At Navie Motorcycle Parts and Accessories, we offer a complete range of motorcycle services and high-quality parts to keep your bike in top condition. Our services include:
                    Tune Ups for smooth performance
                    Valve Adjustments for optimal engine health
                    Engine Rebuilds to restore peak performance
                    Motorcycle Washes for a spotless finish
                    Brake Services for your safety
                    Our dedicated team provides personalized, expert care for your motorcycle, backed by a trusted reputation in the biking community. Choose Navie for quality, reliability, and a passion for motorcycles that matches your own.
                    </p>

                    <div id="additional-info">
            <p>Navie Motorcycle Parts and Accessories stands out for:
                Experience & Expertise: Our seasoned team delivers top-tier service and maintenance honed by years in the industry.
                Customer Satisfaction: Your needs take precedence. We prioritize personalized service and tailored solutions.
                Quality Products: Partnering with leading brands, we offer premium parts and accessories for your motorcycle.
                Convenience: Strategically located with flexible hours, we ensure accessibility to meet your needs.
                Community Engagement: We actively support the motorcycle community, fostering camaraderie and promoting safe riding practices.
                Continuous Improvement: Staying abreast of the latest technology, we provide cutting-edge solutions for your bike.
                Choose Navie for an unparalleled experience, unmatched expertise, and a shared passion for motorcycles. Let us maintain your bike's peak condition, ensuring you relish every moment the ride.
            </p>

            <h3>Visit Us Today</h3>
            <p>Whether you're in need of routine maintenance, parts, or accessories, Navie Motorcycle Parts and Accessories is your one-stop shop for all things motorcycle-related. Visit us today and experience the difference that passion and expertise can make in your riding journey.</p>

            <h4>Contact Information</h4>
            <p>
Address: 1234 Daang Amaya, Tanza, Cavite (In front of SM Tanza)
<br>
Telefax: 781-1234
</p>
                    </div>

                    <a href="#" class="btn" id="btn-nav">Learn more</a>
                </div>
        </div>
</section>

<section class="icons-container">

<div class="icons">
    <a><i class="lni lni-delivery"></i></a>
    <div class="info">
        <h3>Free Delivery</h3>
        <span>on all orders</span>
    </div>
</div>

<div class="icons">
    <a><i class="lni lni-revenue"></i></a>
    <div class="info">
        <h3>Special Discounts</h3>
        <span>on all services</span>
    </div>
</div>

<div class="icons">
    <a><i class="lni lni-cog"></i></a>
    <div class="info">
        <h3>Free estimate</h3>
        <span>and free engine check-up</span>
    </div>
</div>
</section>

<section class="products" id="shop">

<h1 class="heading">Latest <span>products</span></h1>

<div class="box-container">

    <div class="box">
        <span class="discount">-15%</span>
        <div class="image">
            <img src="cylinder.jpg" alt="">
            <div class="icons">
                <a href=""><i class="lni lni-heart"></i></a>
                <a href=""><i class="lni lni-shopping-basket"></i></a>
                <a href=""><i class="lni lni-share"></i></a>
            </div>
        </div>
        <div class="content">
            <h3>Cylinder heads</h3>
            <div class="price"> $12.75 <span>$15</span></div>
        </div>
    </div>

    <div class="box">
        <span class="discount">-10%</span>
        <div class="image">
            <img src="exhaust_pipe.jpg" alt="">
            <div class="icons">
                <a href=""><i class="lni lni-heart"></i></a>
                <a href=""><i class="lni lni-shopping-basket"></i></a>
                <a href=""><i class="lni lni-share"></i></a>
            </div>
        </div>
        <div class="content">
            <h3>Exhaust pipe</h3>
            <div class="price"> $22.50 <span>$25</span></div>
        </div>
    </div>

     <div class="box">
        <span class="discount">-5%</span>
        <div class="image">
            <img src="shift_fork.webp" alt="">
            <div class="icons">
                <a href=""><i class="lni lni-heart"></i></a>
                <a href=""><i class="lni lni-shopping-basket"></i></a>
                <a href=""><i class="lni lni-share"></i></a>
            </div>
        </div>
        <div class="content">
            <h3>Shift fork</h3>
            <div class="price"> $14.25 <span>$15</span></div>
        </div>
    </div>

    <div class="box">
        <span class="discount">-15%</span>
        <div class="image">
            <img src="fuel_tank.jpg" alt="">
            <div class="icons">
                <a href=""><i class="lni lni-heart"></i></a>
                <a href=""><i class="lni lni-shopping-basket"></i></a>
                <a href=""><i class="lni lni-share"></i></a>
            </div>
        </div>
        <div class="content">
            <h3>Fuel tank</h3>
            <div class="price"> $34.00 <span>$40</span></div>
        </div>
    </div>

    <div class="box">
        <span class="discount">-5%</span>
        <div class="image">
            <img src="helmet.webp" alt="">
            <div class="icons">
                <a href=""><i class="lni lni-heart"></i></a>
                <a href=""><i class="lni lni-shopping-basket"></i></a>
                <a href=""><i class="lni lni-share"></i></a>
            </div>
        </div>
        <div class="content">
            <h3>Helmet</h3>
            <div class="price"> $14.25 <span>$15</span></div>
        </div>
    </div>

    <div class="box">
        <span class="discount">-5%</span>
        <div class="image">
            <img src="gloves.jpg" alt="">
            <div class="icons">
                <a href=""><i class="lni lni-heart"></i></a>
                <a href=""><i class="lni lni-shopping-basket"></i></a>
                <a href=""><i class="lni lni-share"></i></a>
            </div>
        </div>
        <div class="content">
            <h3>Gloves</h3>
            <div class="price"> $4.75 <span>$5</span></div>
        </div>
    </div>

    <div class="box">
        <span class="discount">-5%</span>
        <div class="image">
            <img src="motor_cover.jpg" alt="">
            <div class="icons">
                <a href=""><i class="lni lni-heart"></i></a>
                <a href=""><i class="lni lni-shopping-basket"></i></a>
                <a href=""><i class="lni lni-share"></i></a>
            </div>
        </div>
        <div class="content">
            <h3>Motor cover</h3>
            <div class="price">  $9.50 <span>$10</span></div>
        </div>
    </div>

    <div class="box">
        <span class="discount">-10%</span>
        <div class="image">
            <img src="wind_deflectors.jpg" alt="">
            <div class="icons">
                <a href=""><i class="lni lni-heart"></i></a>
                <a href=""><i class="lni lni-shopping-basket"></i></a>
                <a href=""><i class="lni lni-share"></i></a>
            </div>
        </div>
        <div class="content">
            <h3>Wind deflectors</h3>
            <div class="price">  $22.50 <span>$25</span></div>
        </div>
    </div>
</div>
</section>

<section class="products" id="services">

<h1 class="heading">Services <span>available</span></h1>

<div class="box-container">

    <div class="box">
        <span class="discount">-10%</span>
        <div class="image">
            <img src="tune_up.jpg" alt="">
            <div class="icons">
                <a href=""><i class="lni lni-heart"></i></a>
                <a href=""><i class="lni lni-shopping-basket"></i></a>
                <a href=""><i class="lni lni-share"></i></a>
            </div>
        </div>
        <div class="content">
            <h3>Tune ups</h3>
            <div class="price"> $13.50 <span>$15</span></div>
        </div>
    </div>

    <div class="box">
        <span class="discount">-10%</span>
        <div class="image">
            <img src="valve_adjust.webp" alt="">
            <div class="icons">
                <a href=""><i class="lni lni-heart"></i></a>
                <a href=""><i class="lni lni-shopping-basket"></i></a>
                <a href=""><i class="lni lni-share"></i></a>
            </div>
        </div>
        <div class="content">
            <h3>Valve Adjustments</h3>
            <div class="price"> $22.50 <span>$25</span></div>
        </div>
    </div>

     <div class="box">
        <span class="discount">-15%</span>
        <div class="image">
            <img src="engine_rebuild.jpg" alt="">
            <div class="icons">
                <a href=""><i class="lni lni-heart"></i></a>
                <a href=""><i class="lni lni-shopping-basket"></i></a>
                <a href=""><i class="lni lni-share"></i></a>
            </div>
        </div>
        <div class="content">
            <h3>Engine Rebuilds</h3>
            <div class="price"> $68.00 <span>80$</span></div>
        </div>
    </div>
</section>

<section class="products" id="services">

<h1 class="heading">Other Services <span>available</span></h1>

<div class="box-container">
    <div class="box">
        <span class="discount">-15%</span>
        <div class="image">
            <img src="motorcycle_wash.webp" alt="">
            <div class="icons">
                <a href=""><i class="lni lni-heart"></i></a>
                <a href=""><i class="lni lni-shopping-basket"></i></a>
                <a href=""><i class="lni lni-share"></i></a>
            </div>
        </div>
        <div class="content">
            <h3>Motorcycle wash</h3>
            <div class="price"> $8.50 <span>$10</span></div>
        </div>
    </div>

    <div class="box">
        <span class="discount">-15%</span>
        <div class="image">
            <img src="brakepads.jpg" alt="">
            <div class="icons">
                <a href=""><i class="lni lni-heart"></i></a>
                <a href=""><i class="lni lni-shopping-basket"></i></a>
                <a href=""><i class="lni lni-share"></i></a>
            </div>
        </div>
        <div class="content">
            <h3>Replacement of brakes</h3>
            <div class="price"> $8.50 <span>$10</span></div>
        </div>
    </div>
</section>

<section class="contact" id="contact">

<h1 class="heading"><span> Contact </span> us </h1>

<div class="row">

<form action="" method="post">
    <p>The Company decided to come up with a summer promo of special discounts for clients that will run from April 2024 – May 2024. <br>
1.	Wash over promo with Change Oil - P5,000 <br>
2.	Free estimate and free engine check-up. <br>
3.	Special invitation to the launch party and company blessing on May 15 for the first 50 clients availing of the specialized services of Aristotle Motorcycle Parts & Accessories. <br>
4.	Special discounts on services if clients bring company poster to the shop on the company's launch on May 15 this year. <br>
</p>
    <input type="text" placeholder="Enter Name" class="box" required>
    <input type="email" placeholder="Enter Email Adress" class="box" required>
    <input type="text" placeholder="Enter contact Number" class="box" required>
    <textarea type="text" placeholder="Message" class="box" id="" cols="30" rows="10"></textarea>
    <input type="submit" name="submit" value="Send message" class="btn">
</form>

<?php 
if(isset($_POST['submit'])){
    echo "<script language='JavaScript'>
            alert('Feedback is sent');
            window.location = \"naviemoto.php\";
            </script>";
}
?>

<div class="image">
    <img src="contact.jpg" alt="">
</div>

</div>

</section>



</body>
</html>