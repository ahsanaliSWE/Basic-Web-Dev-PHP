<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid-View</title>
    <link rel="stylesheet" type="text/css" href="grid_view.css">
    <style>
       .links {
            color: white;
            text-decoration: none;
            padding: 50px;
            font-style: italic;
        }
        #header {
            direction: rtl;
            background-color:black;
        }
        #logo {
            color: black;
            font-style: italic;
        }

        #cards{
            padding: 70px;
            text-align: center;
            margin: 50px;
        }

        #services {
            display: flex;
            justify-content: center;
        }

        #footer{
            padding: 10px;
            text-align: center;
            margin: 50px;
            color: white;

        }

        .footer-links{
            color:white;
            text-decoration:none;
        }

    </style>
</head>
<body>
    <div class="row" id="header" >
        <div class="col-12">
            <a href="#" class="links">Feedback</a>
            <a href="#" class="links">Login</a>
        </div>
    </div>

    <div class="row" >
        <div class="col-12" style="background-color:black;" >
            <div class="col-12" style="background-color:white;" >
                <h1 id="logo">LOGO Here</h1>
            </div>
        </div>
    </div>

    <div class="row" >
        <div class="col-12" >
            <h1 style="text-align:center;">Services</h1>
        </div>
    </div>

    <div class="row" id="services" >  
        <div class="col-3" id="cards" style="border:1px solid black;">
        </div>
        <div class="col-3" id="cards" style="border:1px solid black;">
        </div>
        <div class="col-3" id="cards" style="border:1px solid black;">
        </div>
    </div>

    <div class="row" >
        <div class="col-12" >
            <h1 style="text-align:center;">Product</h1>
        </div>
    </div>

    <div class="row" id="services"" >  
        <div class="col-3" id="cards" style="border:1px solid black;">
        </div>
        <div class="col-3"id="cards" style="border:1px solid black;">
        </div>
        <div class="col-3" id="cards" style="border:1px solid black;">
        </div>
    </div>

    <div class="row" style="background-color:black;">
            <div class="col-3" id="footer" >
                <h2>Company</h2>

                <a href="#" class="footer-links"><h4>Product</h4></a>
                <a href="#" class="footer-links"> <h4>Vendors</h4></a>
                <a href="#" class="footer-links"><h4>Shipping</h4></a>
            </div>
            <div class="col-3" id="footer">
                <h2>Services</h2>

                <a href="#" class="footer-links"><h4>Product</h4></a>
                <a href="#" class="footer-links"><h4>Quality</h4></a>
                <a href="#" class="footer-links"><h4>Shipping</h4></a>
            </div>
            <div class="col-3" id="footer" >
                <h2>Contact</h2>

                <a href="#" class="footer-links"><h4>Address Here</h4></a>
                <a href="#" class="footer-links"><h4>Phone No</h4></a>
                <a href="#" class="footer-links"><h4>Facebook Links</h4></a>

            </div>
    </div>

</body>
</html>