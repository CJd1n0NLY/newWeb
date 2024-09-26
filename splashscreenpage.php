<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/splashstyle.css">
    <title>Splash Screen</title>
    <style>
        .fade-out {
            animation: fadeOut 1s ease-in forwards;
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }
            to {
                opacity: 0.3;
            }
        }
    </style>
</head>

<body>
    <div class="splash-screen">
        <div class="logo">
            <img src="img/ec-clean-white.svg" alt="Logo" />
        </div>
    </div>

    <script>
        setTimeout(() => {
            document.body.classList.add('fade-out'); 
            setTimeout(() => {
                window.location.href = 'get-startedpage.php'; 
            }, 1000);
        }, 2000);
    </script>
</body>

</html>
