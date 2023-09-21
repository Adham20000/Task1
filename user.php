<?php


@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Athtatic</title>

</head>
<body>
<header>
        <a href="#" class="logo">Athtatic</a>
        <nav class="nav">
            <a href="#gallery">Gallery</a>
            <a href="#explore">explore</a>
            <a href="#upload">Upload</a>
            <a href="logout.php"><button class="login-btn" >Logout</button></a>
        </nav>
    </header>
    <section class="main">
        <div>
            <h2>Hey mother fucker<br /><span><?php echo $_SESSION['user_name']?></span></h2>
            <h3>I`m trying to finish this project</h3>
            <a href="#gallery" class="main-btn">view my work</a>
            <div class="social-icons">
                <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>

    <section class="cards" id="gallery">
        <h2 class="title"><span><?php echo $_SESSION['user_name']?>`s Gallery</span></h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fa fa-btc" aria-hidden="true"></i>
                </div>
                <div class="info">
                    <h3>Title</h3>
                    <p>description</p>
                </div>
            </div>    
                <div class="card">
                    <div class="icon">
                        <i class="fa fa-btc" aria-hidden="true"></i>
                    </div>
                    <div class="info">
                        <h3>Title</h3>
                        <p>description</p>
                    </div>
                </div>
                <div class="card">
                    <div class="icon">
                        <i class="fa fa-btc" aria-hidden="true"></i>
                    </div>
                    <div class="info">
                        <h3>Title</h3>
                        <p>description</p>
                    </div>
                </div> 
        </div>       

    </section>

    
    </section>

    <section class="projects" id="explore">
        <h2 class="title">More to explore</h2>  
        <div class="content">
            <div class="p-card">
                <div class="p-image">
                    <img src="images/orange.jpg" alt="candy">
                </div>
                <div class="p-info"> 
                    <p class="p-category">Sour Candy</p>
                    <strong class="p-title">
                        <span>Dev books</span>
                        <a href="3" class="more-details">more details</a>
                    </strong>
                </div>

            </div>

       

        
            <div class="p-card">
                <div class="p-image">
                    <img src="images/smoothie.jpg" alt="candy">
                </div>
                <div class="P-info"> 
                    <p class="p-category">Sour Candy</p>
                    <strong class="p-title">
                        <span>Dev books</span>
                        <a href="3" class="more-details">more details</a>
                    </strong>
                </div>

            </div>

        

        
            <div class="p-card">
                <div class="p-image">
                    <img src="images/watermelons.jpg" alt="candy">
                </div>
                <div class="P-info"> 
                    <p class="p-category">Sour Candy</p>
                    <strong class="p-title">
                        <span>Dev books</span>
                        <a href="3" class="more-details">more details</a>
                    </strong>
                </div>

            </div>

        </div>

    </section>


    <section class="upload-gallery" id="upload">
        <h2 class="title"> Upload New Post </h2>
        <div class="upload">
            <form action="#" method="post" enctype="multipart/form-data">
                <input type="text" name="filename" placeholder = "File Name..">
                <input type="text" name="filetitle" placeholder = "IMG title..">
                <input type="text" name="bio" placeholder = "IMG describtion..">
                <input type="file" name="file">
                <button type="submit" name="upload">Upload File</button>


            </form>
            
        </div>       
    </section>




    <footer class="footer">
        <p class="footer-title">copyrights @ <span>Adham Sameh</span></p>
        <div class="social-icons">
            <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        </div>


    </footer>
    
</body>
</html>

