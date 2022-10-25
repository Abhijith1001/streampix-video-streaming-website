<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streampix India - Watch TV Shows Online, Watch Movies Online</title>
    <link rel="icon" type="image/x-icon" href="android-chrome-512x512.png">
</head>
<style>
    body {
        background-color: rgb(252, 5, 5);
        display: flex;
        justify-content: center;
        margin-top: 10%;
    }

    .splash {
        height: 400px;
        width: 400px;
        border-radius: 50%;
    }


    #cog {
        -webkit-animation: cog 2s infinite;
        -moz-animation: cog 2s infinite;
        -ms-animation: cog 2s infinite;
        animation: cog 2s infinite;
        -webkit-animation-timing-function: linear;
        -moz-animation-timing-function: linear;
        -ms-animation-timing-function: linear;
        animation-timing-function: linear
    }

    @keyframes cog {
        10% {
            transform: rotate(50deg);
        }

        20% {
            transform: rotate(290deg);
        }

        60% {
            transform: rotate(360deg);
        }
    }
</style>

<body>
    <div class="splas">
        <img class="splash" id="cog" src="img/Elegant Minimal Letter S Photography Initials Logo.png" alt="splash screen">
    </div>
    <script>
        let timeout;

        timeout = setTimeout(alertFunc, 3000);


        function alertFunc() {
            window.open("index1.php", "_self");
        }
    </script>
</body>

</html>