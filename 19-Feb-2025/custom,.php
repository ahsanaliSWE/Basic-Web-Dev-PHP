<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samsung - Innovating the Future</title>
    <link rel="stylesheet" href="grid_view.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #004e92;
            color: white;
        }
        .header {
            text-align: center;
            padding: 50px;
            background: rgba(0, 0, 0, 0.3);
        }
        .header h1 {
            font-size: 3em;
        }
        .nav {
            display: flex;
            justify-content: center;
            background: rgba(0, 0, 0, 0.5);
            padding: 10px;
        }
        .nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-size: 1.2em;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .card {
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .product-img {
            width: 100%;
            border-radius: 10px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to Samsung</h1>
        <p>Innovating the Future</p>
    </div>
    <div class="nav">
        <a href="#">Home</a>
        <a href="#">Products</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src="https://img.global.news.samsung.com/global/wp-content/uploads/2025/01/Samsung-TVs-and-Displays-CES-2025-Samsung-Vision-AI-and-Display-Lineups_main1.jpg" alt="Vision" class="product-img">
                    <h2>Our Vision</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate maxime dicta dolorem dolorum cumque fugit, totam repudiandae autem culpa, earum odio pariatur voluptatum vero non cum aliquid, iste quae doloremque.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="https://img.global.news.samsung.com/in/wp-content/uploads/2022/03/11271-Galaxy-A53-5G-3000x2000.jpg" alt="Products" class="product-img">
                    <h2>Our Products</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In eius nobis placeat ex impedit eos ratione commodi, laudantium repellendus rem, autem porro, natus est aliquid molestias aspernatur excepturi praesentium? Laboriosam?</p>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="https://amateurphotographer.com/wp-content/uploads/sites/7/2024/03/Samsung_S24_02.jpeg" alt="Quality" class="product-img">
                    <h2>Why Samsung?</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugit deserunt quaerat! Error sapiente perferendis maiores nihil recusandae tenetur corporis odit blanditiis? Fuga doloremque hic quas, aliquid aspernatur quis atque?</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <img src="https://images.samsung.com/is/image/samsung/assets/pk/mobile/25_01/Galaxy_S25_Ultra_Main-KV_1440x640_normalKV_pc.jpg?imwidth=1366" alt="About Samsung" class="product-img">
                    <h2>About Samsung</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae non eveniet ea, vel dolorum quibusdam, sunt quisquam deserunt autem eaque natus,
                         impedit architecto qui cum ipsum sit doloribus placeat neque! Lorem ipsum dolor sit amet consectetur adipisicing elit. I
                         llo exercitationem adipisci quos ab distinctio quam, tempora dignissimos eius libero quia dolorum debitis nemo numquam 
                         maiores rem quidem beatae iste nisi.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>@ 2025 Samsung | All Rights Reserved</p>
    </div>
</body>
</html>