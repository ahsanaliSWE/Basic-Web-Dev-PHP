<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <style>
        button{
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        button{
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover{
            background-color: #f1f1f1;

        }
        img:hover{
            background-color: #f1f1f1;
            border-radius: 10px 10px 10px 10px;
            border: 2px solid rgb(240, 13, 13);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <center>
        <h1>Image Slider</h1>
        <hr />
        <img src="https://assets.nuuvem.com/image/upload/t_product_sharing_banner/v1/products/65e8b6f485c94d0016610795/sharing_images/zufrvvv3uy9e7oqglom5.jpg" 
            id="sliderImage" width="1000" height="500" 
            onmouseover="pauseOnHover()" onmouseout="resumeOnHover()"
        />

        <br /><br />
        <button onclick="startSlider()">Start</button>
        <button onclick="stopSlider()">Stop</button>
        <button onclick="prev()">Previous</button>
        <button onclick="next()">Next</button>

        <script>
            var images = [
                "https://assets.nuuvem.com/image/upload/t_product_sharing_banner/v1/products/65e8b6f485c94d0016610795/sharing_images/zufrvvv3uy9e7oqglom5.jpg", 
                "https://images.alphacoders.com/109/1090800.jpg", 
                "https://wallpapers.com/images/featured/uncharted-y5wt54otbfmw8wxy.jpg", 
                "https://wallpapers.com/images/hd/days-gone-zombie-strike-poster-808vz2axmhw4zege.jpg", 
                "https://1a-1791.com/video/s8/1/k/R/H/F/kRHFn.qR4e-small-Marvels-Spider-Man-2-Main-M.jpg"
            ];
            
            var index = 0;
            var sliderImage = document.getElementById("sliderImage");
            var interval = null; 
            var isRunning = false; 

            function next(){
                index++; 
                if (index >= images.length) {
                    index = 0;
                }
                sliderImage.src = images[index];
            }

            function prev(){
                index--;
                if (index < 0) {
                    index = images.length - 1;
                }
                sliderImage.src = images[index];
            }

            function startSlider(){
                if (!isRunning) {
                    interval = setInterval(next, 2000); 
                    isRunning = true;
                }
            }

            function stopSlider(){
                clearInterval(interval);
                isRunning = false;
            }

            function pauseOnHover(){
                if (isRunning) {
                    clearInterval(interval);
                }
            }

            function resumeOnHover(){
                if (isRunning) {
                    interval = setInterval(next, 2000);
                }
            }
        </script>
    </center>
</body>
</html>
