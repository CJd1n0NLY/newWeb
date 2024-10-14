<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/get-startedpage.css">
    <script src="js/get-startedpage.js"></script>
    <title>Ec-Clean Water System Corp.</title>
</head>

<body class="fade-in">
    <div class="card">
        <svg viewBox="0 0 100% 100%" xmlns='http://www.w3.org/2000/svg' class="noise">
            <filter id='noiseFilter'>
                <feTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='6' stitchTiles='stitch' />
            </filter>

            <rect width='100%' height='100%' preserveAspectRatio="xMidYMid meet" filter='url(#noiseFilter)' />
        </svg>
        <div class="content">
            <div class="logo">
                <img src="img/ec-clean-logo-alt.svg" alt="Logo" />
            </div>
            <h1 id="company-title">Ec-Clean Water Systems</h1>
            <button onclick="fadeAndNavigate()">Get Started</button>
        </div>
    </div>
    <div class="gradient-bg">
        <svg viewBox="0 0 100vw 100vw" xmlns='http://www.w3.org/2000/svg' class="noiseBg">
            <filter id='noiseFilterBg'>
                <feTurbulence type='fractalNoise' baseFrequency='0.6' stitchTiles='stitch' />
            </filter>

            <rect width='100%' height='100%' preserveAspectRatio="xMidYMid meet" filter='url(#noiseFilterBg)' />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="svgBlur">
            <defs>
                <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -8" result="goo" />
                    <feBlend in="SourceGraphic" in2="goo" />
                </filter>
            </defs>
        </svg>
        <div class="gradients-container">
            <div class="g1"></div>
            <div class="g2"></div>
            <div class="g3"></div>
            <div class="g4"></div>
            <div class="g5"></div>
            <div class="interactive"></div>
        </div>
    </div>

    <script>
        function fadeAndNavigate() {
            document.body.classList.add('fade-out');
            setTimeout(() => {
                window.location.href = 'landingpage.php';
            }, 1000);
        }

        window.onload = function() {
            document.body.classList.remove('fade-out');
        };

        window.addEventListener('pageshow', function(event) {
            if (event.persisted) {
                document.body.classList.remove('fade-out');
            }
        });
    </script>
</body>

</html>
