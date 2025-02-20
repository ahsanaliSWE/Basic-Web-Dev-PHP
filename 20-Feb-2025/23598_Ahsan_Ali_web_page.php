<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple - Innovation Redefined</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f7;
        }
        ul {
            list-style: none;
            background: #333;
            padding: 10px;
            text-align: center;
            position: sticky;
            top: 0;
        }
        ul li {
            position: relative;
            display: inline-block;
        }
        ul li a {
            display: block;
            padding: 15px;
            color: white;
            text-decoration: none;
        }
        ul li:hover > a {
            background: #444;
        }
        ul ul {
            position: absolute;
            left: 0;
            top: 100%;
            background: #444;
            display: none;
        }
        ul ul ul {
            left: 100%;
            top: 0;
        }
        ul li:hover > ul {
            display: block;
        }
        ul ul li {
            display: block;
            width: 200px;
        }
        .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 20px;
        }
        .card {
            background: white;
            width: 300px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
        }

        .card img:hover{
            transform: scale(1.1);
            transition: transform 0.5s;
        }

        .card img {
            width: 100%;
            height: auto;
        }
        .card h3 {
            padding: 15px;
            font-size: 20px;
        }
        .card p {
            padding: 0 15px 15px;
            font-size: 16px;
            color: #666;
        }

        .message {
            background: #333;
            color: white;
            text-align: center;
            padding: 20px;
            width: 100px; 
            position: fixed;
            bottom: 0;
        }

    </style>
</head>
<body>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Products</a>
            <ul>
                <li><a href="#">iPhone</a></li>
                <li><a href="#">Mac</a></li>
                <li><a href="#">iPad</a></li>
                <li><a href="#">Watch</a></li>
            </ul>
        </li>
        <li><a href="#">Support</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    <div class="container">
        <div class="card">
            <img src="https://www.imagineonline.store/cdn/shop/files/iPhone_15_Green_PDP_Image_Position-1__en-IN_a957365d-0aa2-43da-88b1-fcaa9b0be4cf.jpg?v=1694606789&width=823" alt="iPhone">
            <h3>iPhone</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam nihil nulla, perspiciatis earum eum, sit, laborum corporis nemo possimus fugit officia. Odio dolore omnis error, corrupti facilis itaque animi culpa.</p>
        </div>
        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSF8prToOAG2CCro17HpuQAz2jbLlSR0YeYNA&s" alt="MacBook">
            <h3>MacBook</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, voluptas, officia fuga laboriosam quam voluptatibus, ipsum fugit consequatur dicta cum nulla ea sapiente labore praesentium reiciendis quis possimus perspiciatis? Placeat.</p>
        </div>
        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJlF9wfogKzi9uCzRX5eAeOas0m90pc9YpFA&s" alt="iPad">
            <h3>iPad</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam quod minus itaque similique eius nesciunt, amet eligendi dolorum porro placeat labore molestias fugit blanditiis temporibus dicta dolor quo incidunt quisquam.</p>
        </div>
        <div class="card">
            <img src="https://www.imagineonline.store/cdn/shop/files/iPhone_15_Green_PDP_Image_Position-1__en-IN_a957365d-0aa2-43da-88b1-fcaa9b0be4cf.jpg?v=1694606789&width=823" alt="iPhone">
            <h3>iPhone</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam nihil nulla, perspiciatis earum eum, sit, laborum corporis nemo possimus fugit officia. Odio dolore omnis error, corrupti facilis itaque animi culpa.</p>
        </div>
        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSF8prToOAG2CCro17HpuQAz2jbLlSR0YeYNA&s" alt="MacBook">
            <h3>MacBook</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, voluptas, officia fuga laboriosam quam voluptatibus, ipsum fugit consequatur dicta cum nulla ea sapiente labore praesentium reiciendis quis possimus perspiciatis? Placeat.</p>
        </div>
        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJlF9wfogKzi9uCzRX5eAeOas0m90pc9YpFA&s" alt="iPad">
            <h3>iPad</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam quod minus itaque similique eius nesciunt, amet eligendi dolorum porro placeat labore molestias fugit blanditiis temporibus dicta dolor quo incidunt quisquam.</p>
        </div>
        <div class="card">
            <img src="https://www.imagineonline.store/cdn/shop/files/iPhone_15_Green_PDP_Image_Position-1__en-IN_a957365d-0aa2-43da-88b1-fcaa9b0be4cf.jpg?v=1694606789&width=823" alt="iPhone">
            <h3>iPhone</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam nihil nulla, perspiciatis earum eum, sit, laborum corporis nemo possimus fugit officia. Odio dolore omnis error, corrupti facilis itaque animi culpa.</p>
        </div>
        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSF8prToOAG2CCro17HpuQAz2jbLlSR0YeYNA&s" alt="MacBook">
            <h3>MacBook</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, voluptas, officia fuga laboriosam quam voluptatibus, ipsum fugit consequatur dicta cum nulla ea sapiente labore praesentium reiciendis quis possimus perspiciatis? Placeat.</p>
        </div>
        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJlF9wfogKzi9uCzRX5eAeOas0m90pc9YpFA&s" alt="iPad">
            <h3>iPad</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam quod minus itaque similique eius nesciunt, amet eligendi dolorum porro placeat labore molestias fugit blanditiis temporibus dicta dolor quo incidunt quisquam.</p>
        </div>
        <div class="card">
            <img src="https://www.imagineonline.store/cdn/shop/files/iPhone_15_Green_PDP_Image_Position-1__en-IN_a957365d-0aa2-43da-88b1-fcaa9b0be4cf.jpg?v=1694606789&width=823" alt="iPhone">
            <h3>iPhone</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam nihil nulla, perspiciatis earum eum, sit, laborum corporis nemo possimus fugit officia. Odio dolore omnis error, corrupti facilis itaque animi culpa.</p>
        </div>
        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSF8prToOAG2CCro17HpuQAz2jbLlSR0YeYNA&s" alt="MacBook">
            <h3>MacBook</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, voluptas, officia fuga laboriosam quam voluptatibus, ipsum fugit consequatur dicta cum nulla ea sapiente labore praesentium reiciendis quis possimus perspiciatis? Placeat.</p>
        </div>
        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJlF9wfogKzi9uCzRX5eAeOas0m90pc9YpFA&s" alt="iPad">
            <h3>iPad</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam quod minus itaque similique eius nesciunt, amet eligendi dolorum porro placeat labore molestias fugit blanditiis temporibus dicta dolor quo incidunt quisquam.</p>
        </div>
    </div>

    <div class="message">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
</body>
</html>