<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background-image: url('https://newsroom.porsche.com/.imaging/mte/porsche-templating-theme/image_1080x624/dam/pnr/2024/Products/992-II/0840_nevada_coupe_u-crane_AKOS0607_edit_V03-sky.jpg/jcr:content/0840_nevada_coupe_u-crane_AKOS0607_edit_V03-sky.jpg');
            background-size: auto;
        }
        nav {
            background-color: black;
            padding: 10px;
            display: flex;
            justify-content: space-around;
            border-radius: 5px;
            align-items: center;
        }
        nav h2{
            color:white;
        }
        nav img {
            width: 50px;
            height: 70px;
            display: inline-block;
            align-items: left;
        }
        #brand-name {
            font-size: 1.5em;
            margin: 0;
            padding: 0;
            display: inline-block;
            text-align: left;
        }
        nav a {
            color: white;
            text-decoration: none;
            text-align: right;
            font-size: 1.2em;
            left: 20px;
            position: relative;
            padding: 10px;
        }
        .main-content {
            text-align: center;
            padding: 20px;
        }

        #home{
            background-color: rgba(0, 0, 0, 0.5);
            font-size: 1.2em;
            color: white;
            padding: 50px;
            margin-top: 50px;
            margin-bottom: 50px;
            border-radius: 10px;
        }

        #home a {
            color: white;
            text-decoration: none;
            background-color: #f29f58;
            padding: 10px 20px;
            border-radius: 5px;
        }

        #about-us {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 50px;
            margin-bottom: 50px;
            border-radius: 10px;
        }

        #explore {
            background-color: #f29f58;
            color: white;
            padding: 50px;
            border-radius: 10px;
        }

        .cars {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .cars img {
            width: 500px;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }

        #explore a{
            color: white;
            text-decoration: none;
            background-color: black;
            padding: 10px 20px;
            border-radius: 5px;
        }

        #services {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 50px;
            margin-top: 50px;
            margin-bottom: 50px;
            border-radius: 10px;
        }

        .services {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .service {
            width: 30%;
            padding: 20px;
            border-radius: 10px;
            background-color: #f29f58;
        }

        #testimonials {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 50px;
            margin-top: 50px;
            margin-bottom: 50px;
            border-radius: 10px;
        }

        .testimonial {
            padding: 20px;
            border-radius: 10px;
            background-color: #f29f58;
            margin-top: 20px;
        }

        #contact {
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.8);
            width: 50%;
            margin: auto;
            border-radius: 10px;
            font-family: Arial;
        }

        #contact h2{
            color: white;
            font-weight: bold;
            font-size: 40px
        }

        input, textarea {
            width: 80%;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
        }
        
        #btn {
            background-color: #f29f58;
            color: white;
            width: 200px;
            font-weight:bold;
            font: size 20px;
        }

        footer {
            background: rgba(0, 0, 0, 0.5);
            color:white;
            text-align: center;
            padding: 50px;
            margin-top: 50px;
            border-radius: 10px;
        }



        

         
    </style>
</head>
<body>
   <header>
    <nav>
        <img src="https://companieslogo.com/img/orig/P911.DE-94013588.png?t=1720244493" alt="Logo">
        <h2 id="brand-name">Porsche</h2>
        <a href="#home">Home</a>
        <a href="#about-us">About Us</a>
        <a href="#explore">Explore</a>
        <a href="#contact">Contact</a>
    </nav>
    </header>
    <div class="main-content">
        <div id="home">
            <h1>Porsche</h1>
            <p>Experience the thrill of ultimate performance and luxury.</p>
            <a href="#explore">Explore Now</a>
        </div>
        <div id="about-us">
            <h2>About Us</h2>
            <p>Porsche has been delivering the ultimate driving experience for decades. 
                With a commitment to innovation and performance, we continue to push the boundaries of automotive engineering. 
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis, minus aliquam? Maiores commodi delectus qui mollitia recusandae in dignissimos voluptates sunt, 
                tempora repudiandae sint exercitationem ut odit voluptatibus, quidem rerum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et totam aperiam culpa. Incidunt error itaque voluptatibus, veritatis delectus rem commodi, expedita, 
                recusandae illo similique doloremque accusantium nobis hic perspiciatis officia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores voluptates ullam eaque, dolorem nihil nostrum quos molestiae quae officiis perferendis blanditiis repudiandae deleniti vitae reprehenderit magnam, pariatur, amet debitis. Necessitatibus.</p>
        </div>
        <div id="explore">
            <h2>Unleash Performance</h2>
            <p>Porsche vehicles are designed with precision, speed, and innovation. Explore our lineup and discover your dream car.</p>
            <div class="cars">
                <img src="https://images-porsche.imgix.net/-/media/82470245156B451B8FD447D14D61BA0A_E69C7CC81D9F479389C8BEC579073718_panamera-model-intro?w=2560&h=697&q=45&crop=faces%2Centropy%2Cedges&auto=format" alt="Panamera">
                <img src="https://files.porsche.com/filestore/image/multimedia/none/911-tus-modelimage-sideshot/model/930894f1-6214-11ea-80c8-005056bbdc38/porsche-model.png" alt="911">
                <img src="https://images-porsche.imgix.net/-/media/C6E8E6F007FC47DB85F4E92224493EB9_731C29114F384F0AB026CA2FFFF36263_cayenne-e-hybrid-coupe-side?w=2560&h=811&q=45&crop=faces%2Centropy%2Cedges&auto=format" alt="Cayenne">
            </div>
            <br/>
            <a href="#">View All Models</a>
        </div>
        <div id="services">
            <h2>Our Services</h2>
            <div class="services">
                <div class="service">
                    <h3>Car Customization</h3>
                    <p>Personalize your Porsche with custom features and colors.</p>
                </div>
                <div class="service">
                    <h3>Performance Upgrades</h3>
                    <p>Enhance the speed and performance of your Porsche.</p>
                </div>
                <div class="service">
                    <h3>Luxury Interiors</h3>
                    <p>Upgrade to premium leather, carbon fiber, and more.</p>
                </div>
            </div>
        </div>
        <div id="testimonials">
            <h2>Customer Reviews</h2>
            <div class="testimonial">
                <p>"Porsche delivers an unmatched driving experience. I love my new 911!" - John Doe</p>
            </div>
            <div class="testimonial">
                <p>"Luxury and performance combined. Porsche is the best in the game!" - Jane Smith</p>
            </div>
        </div>
        
        <div id="contact">
            <h2>Contact Us</h2>
            <form>
                <input type="text" placeholder="Your Name">
                <input type="email" placeholder="Your Email">
                <textarea placeholder="Your Message" rows="5"></textarea>
                <input type="submit" value="Send Message" id="btn">
            </form>
        </div>
 
        <footer>
            <p>© 2025 Porsche. All rights reserved.</p>
       </footer>
    </div>
</body>
</html>
