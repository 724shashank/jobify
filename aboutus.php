<?php include("hnav.php"); ?>
<br>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>About Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <style type="text/css">
            @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap');

*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
body{
    font-family: Arial Black;
    display: grid;
    background-color: #232F3E;
    align-content: center;
    min-height: 100vh;
    background-repeat: no-repeat;
    background-size: 1920px 1965px;
}
section{
    display: grid;
    grid-template-columns: 1fr 1fr;
    min-height: 90vh;
    width: 85vw;
    margin: 0 auto;
}
.image{
    background: url("images/student4.jpg") center/cover no-repeat;
}
.content{
    background:lightgrey;
    color: black;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
}
.content h2{
    text-transform: uppercase;
    font-size: 36px;
    letter-spacing: 6px;
    opacity: 0.9;
}
.content span{
    height: 0.5px;
    width: 80px;
    background: #777;
    margin: 30px 0;
}
.content p{
    padding-bottom: 15px;
    font-weight: 300;
    opacity: 0.7;
    width: 60%;
    text-align: center;
    margin: 0 auto;
    line-height: 1.7;
}
.links{
    margin: 15px 0;
}
.links li{
    border: 0.5px solid #777;
    list-style: none;
    border-radius: 5px;
    padding: 10px 15px;
    width: 160px;
    text-align: center;
}
.links li a{
    text-transform: uppercase;
    color: #777;
    text-decoration: none;
}
.links li:hover{
    border-color: #FF9900;
}
.links li:hover a{
    color :#FF9900;
}
.vertical-line{
    height: 30px;
    width: 0.5px;
    background: #777;
    margin: 0 auto;
}
.icons{
    display: flex;
    padding: 15px 0;
}
.icons li{
    display: block;
    padding: 5px;
    margin: 5px;
}
.icons li i{
    font-size: 26px;
    opacity: 0.8;
}
.icons li i:hover{
    color: #FF9900;
}


/*****************/

@media(max-width: 992px){
    section{
        grid-template-columns: 1fr;
        width: 100%;
    }
    .image{
        height: 100vh;
    }
    .content{
        height: 100vh;
    }
    .content h2{
        font-size: 20px;
        margin-top: 50px;
    }
    .content span{
        margin: 20px 0;
    }
    .content p{
        font-size: 14px;
    }
    .links li a{
        font-size: 14px;
    }
    .links{
        margin: 5px 0;
    }
    .links li{
        padding: 6px 10px;
    }
    .icons li i{
        font-size: 15px;
    }
}
        </style>
    </head>
    <body>
        <section>
            <div class = "image">
                <!-- image here -->
            </div>

            <div class = "content">
                <h2>About Us</h2>
                <span><!-- line here --></span>

                <p>This Job Site is For Those Who Wants To Get Placed in Their Dream Organizaztion Right Just After Their College .</p>

                <ul class = "links">
                    

                    
                    <li><a href = "contactus.php">contact</a></li>
                </ul>

                <ul class = "icons">
                    <li>
                        <i class = "fa fa-twitter"></i>
                    </li>
                    <li>
                        <i class = "fa fa-facebook"></i>
                    </li>
                    <li>
                        <i class = "fa fa-github"></i>
                    </li>
                    <li>
                        <i class = "fa fa-pinterest"></i>
                    </li>
                </ul>
            </div>
        </section>
        <div class="footer"> 
<h1>Blogging Point&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
    </body>
</html>