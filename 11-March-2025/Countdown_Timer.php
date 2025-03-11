<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown Timer</title>
    <style>
        input{
            padding: 10px 20px;
            font-size: 16px;
        }
        input:hover{
            background-color: #f1f1f1;

        }
        input:hover{
            background-color: #f1f1f1;
            border-radius: 10px 10px 10px 10px;
            border: 2px solid rgb(240, 13, 13);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        button{
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover{
            background-color: #f1f1f1;

        }
    </style>
</head>
<body>
    <center>
        <h1>Countdown Timer</h1>
        <hr />
        <input type="text" id="countdown_timer" readonly/>

        <button onclick="startTimer()" id="start_btn">Start</button>
        <button onclick="stopTimer()" id="stop_btn">Stop</button>

        <script>
            var hours, minutes, seconds;
            var timerInterval;
            var isRunning = false;

            var Countdown = document.getElementById("countdown_timer");
            var startBtn = document.getElementById("start_btn");
            var stopBtn = document.getElementById("stop_btn");

            initializeTimer();

            function initializeTimer() {
                hours = parseInt(prompt("Enter hours in 00 format:", "00"));
                minutes = parseInt(prompt("Enter minutes in 00 format:", "00"));
                seconds = parseInt(prompt("Enter seconds in 00 format:", "00")) ;

                if (hours < 0 || minutes < 0 || seconds < 0) {
                    alert("Invalid input! Time cannot be negative.");
                    return;
                }

                updateDisplay();
            }

            function startTimer() {
                startBtn.disabled = true;
                stopBtn.disabled = false;
                timerInterval = setInterval(function(){
                    if (hours === 0 && minutes === 0 && seconds === 0) {
                        clearInterval(timerInterval);
                        alert("Countdown Timer Finished!");
                        return;
                    }

                    if (seconds === 0) {
                        seconds = 59;
                        if (minutes === 0) {
                            minutes = 59;
                            if (hours > 0) {
                                hours--;
                            }
                        } else {
                            minutes--;
                        }
                    } else {
                        seconds--;
                    }

                    updateDisplay();
                }, 1000);
            }

            function updateDisplay() {
                Countdown.value = (hours < 10 ? "0" : "") + hours + " : " +   (minutes < 10 ? "0" : "") + minutes + " : " + (seconds < 10 ? "0" : "") + seconds;
            }

            
            function stopTimer() {
                stopBtn.disabled = true;
                startBtn.disabled = false;
                clearInterval(timerInterval);
            }

        </script>
    </center>
</body>
</html>