
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="main.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> The Alien Tech</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
    <?php require 'partials/_nav.php' ?>

    <?php require 'partials/_dbconnect.php' ?>
    <section class="hello">
        <h1>Top Processors</h1>
    </section>
    <?php


        $sql = "SELECT * FROM pro ";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data)){
            $cat = $row['namee'];
            $dog = $row['dest'];
            $bir = $row['price'];
            $kat = $row['imag'];
            echo '<section class= "play">
            <div class="card" style="width: 70rem;">
            <img class="card-img-top" src="images/' . $kat . '" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">' . $cat . '</h5>
                <p class="card-text">' . $dog . '</p> 
                <a href="/techwebsite/tran.php" class="btn btn-primary"> BUY NOW :' . $bir . ' </a>
            </div>
            </div>
    </section>';
        }
        mysqli_close($conn);
    ?>
    <section class="pages">
    
    <?php require 'partials/_footer.php' ?>
</body>

</html>


<style>
.play {
    padding-top: 40px;
    background-color:black;
    background-size: cover;
    background-repeat: no-repeat;
    padding-bottom: 150px;
    padding-left: 200px;
    padding-right: 50px;
}

.card {
    width: 70%
}

.hello {
    padding-top: 80px;
    padding-bottom: 80px;
    background-color:black;
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
}

.hello h1 {
    color: white;
    padding-left: 620px;
    text-decoration: underline;
}

