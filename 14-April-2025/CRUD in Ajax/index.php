<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD in Ajax</title>
    <style>
        body {
            background-color: #f4f4f4;
        }
        h1 {
            color:rgb(46, 103, 163);
            font-size: 2.5em;
            border-radius: 5px;
            width: 50%;
            background-color: rgb(220, 229, 238);
            margin: 0 auto;
        }
        fieldset {
            border: 2px solid #007BFF;
            padding: 20px;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 50%;
            font-size: 1.1em;
            margin: 0 auto;
        }
        legend{
            font-weight: bold;
            color: #007BFF;
        }
        table {
            width: 100%;
            margin-top: 10px;
            background-color: #fff;
        }
        th {
            background-color: #007BFF;
            color: white;
            padding: 10px;
        }
        td {
           padding: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        textarea{
            width: 100%;
            padding: 10px;
            height: 100px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        #addBtn{
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            width: 100px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            cursor: pointer;
        }
        #cancelBtn{
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            width: 100px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            cursor: pointer;
        }
        #editBtn{
            background-color: green;
            padding: auto;
            color: white;
            padding: 10px 20px;
            border: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            cursor: pointer;
        }
        #deleteBtn{
            background-color: red;
            padding: auto;
            color: white;
            padding: 10px 20px;
            border: none;
            box-sizing: border-box;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            cursor: pointer;
        }
        #searchBtn{
            background-color: orange;
            color: white;
            padding: 10px 20px;
            border: none;
            width: 100px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            cursor: pointer;
        }
        #message{
            font-size: 1.2em;
            margin-bottom: 20px;
            border-radius: 5px;
            background-color: #f8f9fa;
        }
        hr{
            border: 1px solid #007BFF;
            margin: 20px auto;
        }

        p{
            font-size: 1.2em;
            line-height: 1.5;
            color: #333;
            margin: 20px auto;
        }
    </style>
    <script>
        addPostForm();
        
        function addPostForm() {
            
            ajax_request = null;
            
            if(window.XMLHttpRequest) {
                ajax_request = new XMLHttpRequest;
            } else {
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }
            ajax_request.onreadystatechange = function() {

                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    document.getElementById("form").innerHTML = ajax_request.responseText;      
                    showPost();             
                }
            }

            ajax_request.open("GET", "ajax_process.php?action=addPostForm");
            ajax_request.send();
        }
        
        function showPost() {
            
            ajax_request = null;
            
            if(window.XMLHttpRequest) {
                ajax_request = new XMLHttpRequest;
            } else {
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }
            ajax_request.onreadystatechange = function() {

                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    document.getElementById("posts").innerHTML = ajax_request.responseText;
                }
            }

            ajax_request.open("GET", "ajax_process.php?action=showPost");
            ajax_request.send();
        }

        function searchPost() {
            
            search = document.getElementById("search").value;
            
            ajax_request = null;
            
            if(window.XMLHttpRequest) {
                ajax_request = new XMLHttpRequest;
            } else {
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }
            ajax_request.onreadystatechange = function() {

                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    document.getElementById("posts").innerHTML = ajax_request.responseText; 
                }
            }

            ajax_request.open("POST", "ajax_process.php");
            ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax_request.send("action=showPost&search="+search);
        }

        function addUser() {
            title = document.getElementById("title").value;
            summary = document.getElementById("summary").value;
            description = document.getElementById("description").value;
            
            ajax_request = null;
            
            if(window.XMLHttpRequest) {
                ajax_request = new XMLHttpRequest;
            } else {
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }
            ajax_request.onreadystatechange = function() {

                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                
                    document.getElementById("message").innerHTML = ajax_request.responseText; 
                    showPost();             
                }
            }

            ajax_request.open("POST", "ajax_process.php");
            ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax_request.send("action=addPost&title="+title+"&summary="+summary+"&description="+description);
        }

        function editPostForm(post_id) {
            
            ajax_request = null;
            
            if(window.XMLHttpRequest) {
                ajax_request = new XMLHttpRequest;
            } else {
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }
            ajax_request.onreadystatechange = function() {

                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    document.getElementById("form").innerHTML = ajax_request.responseText; 
                }
            }

            ajax_request.open("POST", "ajax_process.php");
            ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax_request.send("action=editPostForm&post_id="+post_id);
        }

        function updatePost(){
            post_id = document.getElementById("post_id").value;
            title = document.getElementById("title").value;
            summary = document.getElementById("summary").value;
            description = document.getElementById("description").value;
            
            ajax_request = null;
            
            if(window.XMLHttpRequest) {
                ajax_request = new XMLHttpRequest;
            } else {
                ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
            }
            ajax_request.onreadystatechange = function() {

                if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                
                    document.getElementById("message").innerHTML = ajax_request.responseText;
                    addPostForm();
                }
            }

            ajax_request.open("POST", "ajax_process.php");
            ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax_request.send("action=updatePost&post_id="+post_id+"&title="+title+"&summary="+summary+"&description="+description);
        }

        function deletePost(post_id){
            if(confirm("Are you sure to delete this post (id:"+post_id+") ?...")){
                ajax_request = null;
                
                if(window.XMLHttpRequest) {
                    ajax_request = new XMLHttpRequest;
                } else {
                    ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
                }
                ajax_request.onreadystatechange = function() {

                    if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                    
                        document.getElementById("message").innerHTML = ajax_request.responseText; 
                        showPost();             
                    }
                }

                ajax_request.open("POST", "ajax_process.php");
                ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax_request.send("action=deletePost&post_id="+post_id);
            }
        }

        function cancel(){
            document.getElementById("title").value = "";
            document.getElementById("summary").value = "";
            document.getElementById("description").value = "";
            addPostForm();
        }
        

        </script>
</head>
<body>
    <h1 align="center">AJAX CRUD APPLICATION</h1>
    <hr />
    <div id="message" align="center">
    </div>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
        when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        

    <div id="form" align="center"></div>
    
    <hr />

    <div>
        <fieldset>
            <legend>Search Post!...</legend>
                <table>
                    <tr>
                        <td><b>Search:</b></td>
                        <td><input type="text" name="search" id="search"></td>
                    </tr>
                    <tr align="center">
                        <td colspan="2">
                            <button id="searchBtn" onclick="searchPost()">Search</button>
                        </td>
                    </tr>
                </table>
        </fieldset>
    </div>

    <hr>
    <br>

    <div id="posts" align="center"></div>
  
</body>
</html>