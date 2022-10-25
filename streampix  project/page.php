
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streampix India - Watch TV Shows Online, Watch Movies Online</title>
    <link rel="icon" type="image/x-icon" href="android-chrome-512x512.png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="lp.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="top ">
        <div class="top-left">
            <img id="logo" src="img/Xfinity-Streampix-Logotype-696x392-removebg-preview.png" alt="logo">
        </div>

        <div class="top-right">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    English
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item">Hindi</a></li>
                    </ul>
                </button>

            </div>
            <button type="button" class="btn btn-outline-light" href="#">My list</button>
        </div>
    </div>

    <main>
        <section class="hero ">
            <div style="width: 100%; height: 700px; overflow: hidden; ">
                <video loop="loop" style="width: 100%;" controls autoplay="autoplay">
                    <source src="img/matrix.mp4">
                </video>
            </div>
        </section><br>
        <h3 class="text">Comments</h3>
        <?php

        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "login_sample_db";

        $connect = mysqli_connect($server, $username, $password);
        if ($connect) {
            $select = mysqli_select_db($connect, $database);
        } else {
            echo mysqli_error($con);
        }

        $find_comments = mysqli_query($connect, "SELECT * FROM comments");
        while ($row = mysqli_fetch_assoc($find_comments)) {
            $comment_name = $row['name'];
            $comment = $row['comment'];
            echo "$comment_name-$comment<p>";
        }

        if (isset($_GET['error'])) {
            echo "<p>100 char.limit";
        }
        ?>

        <section>
            <form action="post_comment.php" method="POST">
                <br><br> <input type="text" name="name" value="Name" id="nam"><br><br>
                <textarea name="comment" id="txt" cols="30" rows="10"></textarea><br><br>
                <input type="submit" value="Post" id="bt"> <br><br>
                </div>
        </section><br>
        <br>
        <h3 class="text">Treanding Now</h3>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <a href="page.php"><img src="img/c11.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="page.php"> <img src="img/c12.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="page.php"> <img src="img/c13.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="page.php"> <img src="img/c14.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="page.php"> <img src="img/c15.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="page.php"> <img src="img/c16.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href="page.php"> <img src="img/c17.jpg" alt=""></a>
            </div>
        </div><br>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
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
</body>

</html>