<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gita & Rizaldy Wedding</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="./css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <main>
        <div id="content">
            <div class="landing-page" style="margin-top:100px;">
                <div class="landpage-caption text-center pt-3 overflow-x-hidden" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1300">
                    <img src="https://raw.githubusercontent.com/KikiAbdullah/repo-asset-gita-rizaldy/main/name.png" alt="" style="max-width: 40%; margin-bottom: 100px;">
                    <br><br>
                    <p class="text-secondary text font-italic">Kepada Bapak/Ibu Saudara/i :</p>
                    <h1 class="font-alexBrush text-center"><?php echo ucwords(@$_GET['to']) ?></h1>
                    <div class="m-auto d-flex justify-content-center">
                        <a href="main.php" class="btn btn-brown slide">Buka Undangan</a>
                    </div>
                    <br><br><br>
                </div> <!-- end landpage-caption -->
            </div> <!-- end landing-page -->

        </div> <!-- end #content -->
    </main>
    <footer>
        <div class="text-center">
            <img src="https://raw.githubusercontent.com/KikiAbdullah/repo-asset-gita-rizaldy/main/logo.png" alt="Tower Barat Creative" style="max-width: 50%;">
        </div>
    </footer>
    <script>
        // window.addEventListener('scroll', () => {
        //     let scrolled = window.scrollY //mengetahui brp pixel yang ke scroll
        //     console.log(scrolled)
        //     var iHeight = $("#wish-room").height();
        //     console.log(iHeight)
        // })
    </script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/lightbox-plus-jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>