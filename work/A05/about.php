<?php

include('view/header.php');

$currentPage ='about';

?>
<title>about</title>
<body>
    <article>
    <img class="webProgramming"src="..\pngfiles\image.jpg" height = "350px" width="500px"align="center">
<h2 align="center">About:</h2>
    <p align="center">
        This website is part of the course websoft Software Development for the Web.<br>
    The aim of this course is to enable the student develop skills in advanced web programming and<br>
     software development.<br>

    </p>

    







    <p align="center">
    The course content covers:<br>
    </p>

    <p align="center">------------------------</p>


    <ol align="center">
<li>Introduction to web application development with ASP.NET.</li>
<li>Mark up languages such as HTML and XML.</li>
<li>User interface development for interactive web applications.</li>
<li>Database access in web applications.</li>
<li>Introduction to script languages such as Javascript and PHP</li>
<li>Client side programming with Ajax and jQuery</li>
<li>Distributed web applications and web servicves</li>
<li>Web application security.</li>
<li> Design patterns for web applications</li>
</ol>







   


     

        

    </p>
    </article>

    <style>

article {
    display: block;
}
        body{
            background-color:cadetblue;
        }

        li {
    display: list-item;
    text-align: -webkit-match-parent;
        }

        ol {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
    list-style-type: disc;
    font-family:'Alata', sans-serif;
    font-size: 18px;

    
}
p{
    font-family:'Alata', sans-serif;
    font-size: 18px;

}

   



    </style>





</body>

<?php

include('view/footer.php');

?>

</html>
