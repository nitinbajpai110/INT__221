<!DOCTYPE html>
<head>
        <link rel="stylesheet" href="..\css\bootstrap.min.css">
    
        <link href='..\css\post.css' rel='stylesheet' type='text/css'>
        <link href='..\css\header.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="..\font-awesome-4.7.0/css/font-awesome.min.css">
        <link href='..\css\font.css' rel='stylesheet' type='text/css'>
    <style>        
    </style>     
</head>
<body>
        
    
       
    
    <div class="blogContent">
        <div id="blogTitle" class="blogTite">
        <h id="blogTitleNew">//blog title</h>
    </div>

<div class="blogAuthor">

    <!-- Insert code for Edit/Save button and  -->
    <button id="post" onclick="post()"><i class="fa fa-edit" id="editicon">post</i></button>

    <p></p>
</div>

<div class="blogText">
    <p id="blogBody">
           //your blog here
    </p>
</div>

    
    <script src="..\js/jquery.js"></script>
    <script src="..\js/popper.min.js"></script>
    <script src="..\js/bootstrap.min.js"></script>
    <script src="..\js\header.js">             
    </script>
    <script>
    document.getElementById("blogBody").setAttribute("contentEditable","true");
    document.getElementById("blogTitleNew").setAttribute("contentEditable","true");
    document.getElementById("editicon").setAttribute("class","fa fa-save");
    document.getElementById("blogBody").setAttribute("style","border:1px solid blue");
    document.getElementById("blogTitleNew").setAttribute("style","border:1px solid red");
    </script>
    
</body>
