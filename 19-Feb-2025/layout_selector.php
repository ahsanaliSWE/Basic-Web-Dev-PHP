<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid-View</title>
    <link rel="stylesheet" type="text/css" href="grid_view.css">
    <style>
        #header {
            border: 2px solid darkblue;
            color: darkblue;
            text-align:center;
        }

        #sidebar{
            border: 2px solid brown;
        }

        #sidebar .col-10{
            text-align:center;
            margin: 20px;
            padding: 30%;
        }

        #right-sidebar{
            border: 2px solid brown;
        }

        #right-sidebar .col-10{
            text-align:center;
            margin: 20px;
        }

        #right-sidebar .col-12{
            text-align:center;
            margin: 3px;
            padding: 0px;
            height: 50px;
        }

        #right-sidebar .col-8{
            text-align:center;
            margin: 3px;
            padding: 0px;
            height: 40px;
        }

        #body-center {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; 
        }


        #body-center .col-12{
            border: 2px solid grey;
            color:grey;
            text-align:center;
            height: 100px;
        }

        #body-center .col-4{
            width: 45%; 
            color: red;
            border: 2px solid red;
            text-align: center;
            margin: 10px;
            padding: 10px;
        }

        #footer{
            border: 2px solid purple;
            color: purple;
            text-align:center;
        }

    </style>
</head>
<body>
        <div class="row" id="header">
            <div class="col-12">
                <h1>Image Here</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-3" id="sidebar">
                <div class="col-10" style="border: 2px solid green; color:green; height: 300px;">
                    <h2>Menu here</h2>
               </div>
               <div class="col-10" style="border: 2px solid purple; color:purple; height: 600px;">
                    <h2>Some content here</h2>
               </div>
            </div>

       
            <div class="col-6" id="body-center" style="border: 2px solid brown;">
                <div class="col-12">
                    <h2>Simple Menu here</h1>
                </div>
         
                <div class="col-4">
                <h2>Image here</h1>
                </div>
           
                <div class="col-4">
                <h2>Image Here</h1>
                 </div>
                 <div class="col-11">
                   
                </div>
                <div class="col-11" style=" color:red; text-align:center;">
                    <h1>Some content in this area</h1>
                </div>
                <div class="col-11">
                 
                </div>
            </div>
       
            <div class="col-3" id="right-sidebar" style="border: 2px solid brown;">
                <div class="col-10" style="border: 2px solid orange; color:blue; height: 300px; justify-content: center;">
                    <h2>Login Form</h2>
                    <div class="col-12" style="border: 2px solid blue; color:blue;">
                        <h3>Username</h3>
                     </div>
                     <div class="col-12" style="border: 2px solid blue; color:blue;">
                        <h3>Username</h3>
                     </div>
                     <div class="col-8" style="border: 2px solid blue; color:blue; align-items: center; ">
                        <p>Submit</p>
                     </div>
               </div>
               <div class="col-10" style="border: 2px solid purple; color:purple; height: 600px;">
                    <h2>Some content here</h2>
               </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12" id="footer">
                <h2>Footer Copyright here</h2>
            </div>
        </div>
  
</body>
</html>