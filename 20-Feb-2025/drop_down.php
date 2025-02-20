<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drop downt</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        ul {
            list-style: none;
            background: #333;
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
    </style>

</head>
<body>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a>
            <ul>
                <li><a href="#">Web Design</a>
                    <ul>
                        <li><a href="#">HTML</a>
                            <ul>
                                <li><a href="#">HTML 4</a>
                                </li>
                                <li><a href="#">HTML 5</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">CSS</a>
                            <ul>
                                <li><a href="#">CSS 2</a> 
                                </li>
                                <li><a href="#">CSS 3</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">JavaScript</a>
                            <ul>
                                <li><a href="#">ES5</a></li>
                                <li><a href="#">ES6</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Web Development</a>
                    <ul>
                        <li><a href="#">PHP</a>
                            <ul>
                                <li><a href="#">PHP 5</a></li>
                                <li><a href="#">PHP 7</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Python</a>
                            <ul>
                                <li><a href="#">Python 2</a></li>
                                <li><a href="#">Python 3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Ruby</a>
                            <ul>
                                <li><a href="#">Ruby 1</a></li>
                                <li><a href="#">Ruby 2</a></li>
                            </ul>
                        </li>
                    </ul>
                 </li>
                <li><a href="#">SEO</a>
                    <ul>
                        <li><a href="#">On Page</a>
                            <ul>
                                <li><a href="#">Keyword Research</a></li>
                                <li><a href="#">Meta Tag</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Off Page</a>
                            <ul>
                                <li><a href="#">Social Bookmarking</a></li>
                                <li><a href="#">Article Submission</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Link Building</a>
                            <ul>
                                <li><a href="#">Internal Link</a></li>
                                <li><a href="#">External Link</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Galllery</a></li>
        <li><a href="#">Contact</a></li>

    </ul>
    
</body>
</html>