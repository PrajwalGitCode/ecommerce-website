<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}




echo '<nav class="navbar navbar-dark " style="background-color: black ;">
<div  class="sidebar">';    
    echo '

	   <button class="openbtn" onclick="openNav()"> <img src="https://img.icons8.com/material-outlined/50/000000/black-jaguar.png"/> </button>
    </div>

   
     <a class="navbar-brand" href="#">The Alien Tech</a>
   
   
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/techwebsite/comment.php">Discussion</a>
          </li>

            <li class="nav-item">
            <a class="nav-link" href="/techwebsite/acc.php">Accssories</a>
        </li>
            <li class="nav-item">
            <a class="nav-link" href="/techwebsite/mob.php">Mobile Phones</a>
        </li>


        <li class="nav-item">
        <a class="nav-link" href="/techwebsite/grap.php">Graphic Cards</a>
    </li>

            <li class="nav-item">
                <a class="nav-link" href="/techwebsite/lap.php">Laptops</a>
              </li>


              <li class="nav-item">
              <a class="nav-link" href="/techwebsite/pro.php">Processors</a>
            </li>';




              if(!$loggedin){
                echo '<li class="nav-item"><a class="nav-link" href="/Techwebsite/login.php">Login Here</button></a></li>
                <li class="nav-item"><a class="nav-link" href="/Techwebsite/signup.php"><button type="button">Signup Here</button></a></li>';
                }
                if($loggedin){
                echo '
                <li class="nav-item"><a class="nav-link" href="/Techwebsite/logout.php"><button type="button">LogOut Here</button></a></li>';
                    
                }
        





          echo'  </ul>
            <span class="navbar-text"> The Alien Tech </span>
        </div>
    </nav>';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>♪ The Alien Tech ♪</title>

</head>

<body>


    <script src="main.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>

<script>




//-----------------------------slides-----------------------------------------------------------------------//
document.addEventListener('DOMContentLoaded', function() {

    var slideImages = document.querySelectorAll('.slide'),
        dirRight = document.getElementById('dir-control-right'),
        dirLeft = document.getElementById('dir-control-left'),
        current = 0;
    //if javascript is on apply styling
    function jsActive() {
        for (var i = 0; i < slideImages.length; i++) {
            slideImages[i].classList.add('slider-active');
        }
    }
    // Clear images
    function reset() {
        for (var i = 0; i < slideImages.length; i++) {
            slideImages[i].classList.remove('slide-is-active');
        }
    }
    //init slider
    function startSlide() {
        reset();
        slideImages[0].classList.add('slide-is-active');
        setTimeout(function() {
            for (var i = 0; i < slideImages.length; i++) {
                slideImages[i].classList.add('slide-transition');
            }
        }, 20);


    }

    //slide lft
    function slideLeft() {
        reset();
        slideImages[current - 1].classList.add('slide-is-active');
        current--;
    }
    //slide right
    function slideRight() {
        reset();
        slideImages[current + 1].classList.add('slide-is-active');
        current++;
    }

    dirLeft.addEventListener('click', function() {
        if (current === 0) {
            current = slideImages.length;
        }
        slideLeft();
    })

    dirRight.addEventListener('click', function() {
        if (current === slideImages.length - 1) {
            current = -1;
        }
        slideRight();
    })
    //apply styling
    jsActive();
    startSlide();


});
//-----------------------------slides------------=-------------------------------------------------------------------------------//
</script>
<style>
.navbar {
    width: 100%;
    position: fixed;
    z-index: 10;

}

body {
    width: 100%;

}

/*------------------------------------------------- The sidebar menu --------------------------------------------------------*/


.sidebar img {
    background-color: white;
    margin-top: 5px;
    margin-left: 0px;
}


</style>