<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/splashscreenpage.css">
    <title>Ec-Clean Water System Corp.</title>
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
