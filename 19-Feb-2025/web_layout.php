<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid-View</title>
    <link rel="stylesheet" type="text/css" href="grid_view.css">
    <style>
        #header{
            background-color:red;
            color:white;
            font-size: 50px;
            font-family: Arial;
        }

        #nav-bar{
            background-color:blue;
        }

        #nav-bar a{
            color:white;
            text-decoration:none;
            margin: 30px;
            font-size:20px;
        }

        #sidebar{
            border: 3px solid black;
            height: 300px;
            overflow: auto;
        }

        #footer{
            background-color:grey;
            color:white;
        }
    

    </style>
</head>
<body>
    <div class="row" id="header" >
        <div class="col-12">
            <h2>Site name</h2>
        </div>
    </div>

    <div class="row" id="nav-bar">
        <div class="col-12">
            <a href="#">Link</a>
            <a href="#">Link</a>
            <a href="#">Link</a>
            <a href="#">Link</a>
            <a href="#">Link</a>
            <a href="#">Link</a>
        </div>
    </div>

    <div class="row" style="margin: 20px;" >
        <div class="col-10">
            <h1>Heading</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur doloribus nihil iste enim reiciendis quas, 
                ullam consectetur sed in nulla itaque, quia unde culpa recusandae quod sapiente ratione aspernatur autem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur doloribus nihil iste enim reiciendis quas, 
                ullam consectetur sed in nulla itaque, quia unde culpa recusandae quod sapiente ratione aspernatur autem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur doloribus nihil iste enim reiciendis quas, 
                ullam consectetur sed in nulla itaque, quia unde culpa recusandae quod sapiente ratione aspernatur autem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur doloribus nihil iste enim reiciendis quas, 
                ullam consectetur sed in nulla itaque, quia unde culpa recusandae quod sapiente ratione aspernatur autem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur doloribus nihil iste enim reiciendis quas, 
                ullam consectetur sed in nulla itaque, quia unde culpa recusandae quod sapiente ratione aspernatur autem?</p>

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur doloribus nihil iste enim reiciendis quas, 
                ullam consectetur sed in nulla itaque, quia unde culpa recusandae quod sapiente ratione aspernatur autem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur doloribus nihil iste enim reiciendis quas, 
                ullam consectetur sed in nulla itaque, quia unde culpa recusandae quod sapiente ratione aspernatur autem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur doloribus nihil iste enim reiciendis quas, 
                ullam consectetur sed in nulla itaque, quia unde culpa recusandae quod sapiente ratione aspernatur autem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur doloribus nihil iste enim reiciendis quas, 
                ullam consectetur sed in nulla itaque, quia unde culpa recusandae quod sapiente ratione aspernatur autem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur doloribus nihil iste enim reiciendis quas, 
                ullam consectetur sed in nulla itaque, quia unde culpa recusandae quod sapiente ratione aspernatur autem?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum dolorem odit numquam unde fuga tempora magni, natus totam, 
                tempore delectus ipsam in modi corporis dolor suscipit consequuntur vero ex necessitatibus!</p>
            
        
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur doloribus nihil iste enim reiciendis quas, 
                ullam consectetur sed in nulla itaque, quia unde culpa recusandae quod sapiente ratione aspernatur autem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur doloribus nihil iste enim reiciendis quas, 
                ullam consectetur sed in nulla itaque, quia unde culpa recusandae quod sapiente ratione aspernatur autem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur doloribus nihil iste enim reiciendis quas, 
                ullam consectetur sed in nulla itaque, quia unde culpa recusandae quod sapiente ratione aspernatur autem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur doloribus nihil iste enim reiciendis quas, 
                ullam consectetur sed in nulla itaque, quia unde culpa recusandae quod sapiente ratione aspernatur autem?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur doloribus nihil iste enim reiciendis quas, 
                ullam consectetur sed in nulla itaque, quia unde culpa recusandae quod sapiente ratione aspernatur autem?</p>
        </div>
        <div class="col-2" id="sidebar">
            <h2>Block header</h2>
            <ul>
                <li>Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
                <li>Item 4</li>
                <li>Item 5</li>
                <li>Item 6</li>
                <li>Item 7</li>
                <li>Item 8</li>
                <li>Item 9</li>
                <li>Item 10</li>
            </ul>
        </div>
    </div>

    <div class="row" id="footer">
        <div class="col-12">
                Copyright somerandomsite 2010
        </div>
    </div>

</body>
</html>