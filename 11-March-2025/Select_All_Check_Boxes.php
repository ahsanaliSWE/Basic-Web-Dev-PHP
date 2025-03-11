<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select All Check Boxes </title>
</head>
<body>
    <center>

        <h1>Select All Check Boxes</h1>
        <hr />
        <label><input type="checkbox" id="select_all" onclick="selectAll()"> Select All</label>
        <br /><br />
        <?php
            for($i=1; $i<=5; $i++){
        ?>
                <label><input type="checkbox" class="checkbox" name="checkbox_<?=$i?>" onclick="check()"> Checkbox <?=$i?></label><br />
        <?php   
            }
        ?>

        <script>
            function selectAll(){
                var checkboxes = document.querySelectorAll(".checkbox");
                for(var i=0; i<checkboxes.length; i++){
                    checkboxes[i].checked = select_all.checked;
                }
            }

            function check(){
                var checkboxes = document.querySelectorAll(".checkbox");
                var select_all = document.getElementById("select_all");
                var flag = true;
                for(var i=0; i<checkboxes.length; i++){
                    if(checkboxes[i].checked == false){
                        flag= false;
                        break;
                    }
                }
                if(flag){
                    select_all.checked = true;
                }else{
                    select_all.checked = false;
                }
            }

        </script>


    </center>
    
</body>
</html>