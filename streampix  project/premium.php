<?php
session_start();

include("connection.php");
include("functions.php");
$user_data = check_login($con);

// if($_SESSION["role"]==1){
// header('Location:premium.php');

// }else{
//     echo "<script>
//     alert('Only premium users can access it byee fool!!!');
//     window.location.href='page2.php';
    //</script>";
//}

//if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	
   // echo "<script>
   // alert('Only premium users can access it byee fool!!!');
   // window.location.href='page2.php';
   // </script>";
   //header('location:page2.php');
	//die();
//}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streampix India - Watch TV Shows Online, Watch Movies Online</title>
    <link rel="icon" type="image/x-icon" href="android-chrome-512x512.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="full">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index1.php"><img class="img" src="imgg/Xfinity-Streampix-Logotype-696x392-removebg-preview.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="page2.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tv.php">TV shows</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="movie.php">Movies</a>
                        </li>
                        <li>
                            <a class="nav-link active" href="premium.php">Premium</a>
                        </li>
                        <li>
                            <a class="nav-link" href="search.php">Search</a>
                        </li>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                        </svg>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="account.php"><button class="details"><img class="img2" src="img7/perfil-alison.png" alt="account details">&nbsp;<?php echo $user_data['user_name']; ?></button></a>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <div class="name">Hello, <?php echo $user_data['user_name']; ?></div>

        <br>
        <h3 class="text">Top Picks</h3>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <a href="page3.php?id=1"><img src="img/c1.jpg" class="imgtras" alt=""></a>
            </div>
            <div class="item">
                <a href="page3.php?id=2"> <img src="img/c2.jpg" class="imgtras" alt=""></a>
            </div>
            <div class="item">
                <a href="page3.php?id=3"> <img src="img/c3.jpg" class="imgtras" alt=""></a>
            </div>
            <div class="item">
                <a href="page3.php?id=4"> <img src="img/c4.jpg" class="imgtras" alt=""></a>
            </div>
            <div class="item">
                <a href="page3.php?id=5"> <img src="img/c5.jpg" class="imgtras" alt=""></a>
            </div>
            <div class="item">
                <a href="page3.php?id=6"> <img src="img/c6.jpg" class="imgtras" alt=""></a>
            </div>
            <div class="item">
                <a href="page3.php?id=7"> <img src="img/c7.jpg" class="imgtras" alt=""></a>
            </div>
        </div>
        <br>
        <h3 class="text">Treanding Now</h3>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <a href="page3.php?id=8"><img src="img/c11.jpg" class="imgtras" alt=""></a>
            </div>
            <div class="item">
                <a href="page3.php?id=9"> <img src="img/c12.jpg" class="imgtras" alt=""></a>
            </div>
            <div class="item">
                <a href="page3.php?id=10"> <img src="img/c13.jpg" class="imgtras" alt=""></a>
            </div>
            <div class="item">
                <a href="page3.php?id=11"> <img src="img/c14.jpg" class="imgtras" alt=""></a>
            </div>
            <div class="item">
                <a href="page3.php?id=12"> <img src="img/c15.jpg" class="imgtras" alt=""></a>
            </div>
            <div class="item">
                <a href="page3.php?id=13"> <img src="img/c16.jpg" class="imgtras" alt=""></a>
            </div>
            <div class="item">
                <a href="page3.php?id=14"> <img src="img/c17.jpg" class="imgtras" alt=""></a>
            </div>
        </div>
        <br>
        <h3 class="text">New Releases</h3>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <a href="page3.php?id=15"><img src="img/c21.jpg" class="imgtras" alt=""></a>
            </div>
            <div class="item">
                <a href="page3.php?id=16"> <img src="img/c22.jpg" class="imgtras" alt=""></a>
            </div>
            <div class="item">
                <a href="page3.php?id=5"> <img src="img/c23.jpg" class="imgtras" alt=""></a>
            </div>
            <div class="item">
                <a href="page3.php?id=18"> <img src="img/c24.jpg" class="imgtras" alt=""></a>
            </div>
            <div class="item">
                <a href="page3.php?id=19"> <img src="img/c25.jpg" class="imgtras" alt=""></a>
            </div>
            <div class="item">
                <a href="page3.php?id=20"> <img src="img/c26.jpg" class="imgtras" alt=""></a>
            </div>
            <div class="item">
                <a href="page3.php?id=4"> <img src="img/c27.jpg" class="imgtras" alt=""></a>
            </div>
        </div>
        <br>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 2000,
                stagePadding: 50,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        </script>
    </div>
</body>

</html>