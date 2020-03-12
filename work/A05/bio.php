<?php

include('view/header.php');
$currentPage ='bio';

?>
    <meta charset="utf-8" />
    <title>AbOUT</title>
</head>
<body>

<body>

    <img class="image1"src="..\pngfiles\download.png" alt="Avatar" align="right">


    <div class="About">
        <h1> DA377B VT20 COURSE BLOG </h1>
        <img src="..\pngfiles\unnamed.jpg" align="middle">





        <h2> About Me:</h2>



        <p>
            Hello My name is Martin Jjooga 25yr , Born and raised in Uganda, Moved to sweden at the Age of 17 <br />
            Studied my highschool at Thorilsplan Gymnasiet 3yr doing an IT introductory programme majoring in Cissco <br />
            networking, Did my practice with Hauwei in Kista.<br />
            In 2017 i decided to take further step within the IT sector and thus i applied for Software Development Course at HKR<br />
            Its one of the best decisions that have ever come my way since it has given me deeper knowledge and understanding of how <br />
            everything is working out in IT industry and am hoping to build a better career from this Path.<br />

        <p>
            I got A few hobbies i always enjoy during freetime besides schools and these are:<br />
            1. Partying ( A little fan does no Harm)<br />
            2. Watch Movies (Not A fan of Horrors though)<br />
            3. Listening to Music<br />
            4. Swimming  <br />


        </p>


       
    </div>

    





    <style>
        img{    
            width:400px;
            height: 300px;
            padding-left:400px;
            

        }
        .image1 {
            border-radius: 60%;
            width: 100px;
            height: 100px;
        }

        .sidenav {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }


            .sidenav a {
                display: block;
                color: black;
                padding: 16px;
                text-decoration: none;
            }


                .sidenav a.active {
                    background-color: #4CAF50;
                    color: white;
                }


                .sidenav a:hover:not(.active) {
                    background-color: #555;
                    color: white;
                }






        body {
            background-color:cadetblue;
        }

        h2 {
            display: block;
            font-size: 1.5em;
            font-weight: bold;
            text-align: center;
        }

        p{
            text-align:center;
        }

         h1 {
            display: block;
            font-size: 1.5em;
            font-weight: bold;
            text-align: center;
            padding-left:400px;

        }
    </style>

    



<footer>

<?php

include('view/footer.php');

?>
</footer>
</body>
</html>
