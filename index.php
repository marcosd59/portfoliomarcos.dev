<?php

// require "../../../version.php";
// require '../../functions/apicalls.php';
// require "../../functions/apiserver.php";

$token = '95f615967ef747e897ec0ecb6b18b3eb9fa';

// $SECCIONES = get_secciones($token);

$view = isset($_REQUEST["view"]) ? $_REQUEST["view"] : "";
$dos_niveles = array("articulo", "producto");

$ref_rel = "./";
$view = isset($_REQUEST["view"]) ? $_REQUEST["view"] : "";

// if(in_array($_REQUEST["view"], $dos_niveles))
// {
//     $ref_rel = "../";
// }

$opts_post = [
    "http" => [
        "method" => "GET",
        "header" =>
            "token: " . $token . " \r\n"
    ]
];

$context_post = stream_context_create($opts_post);

?>

<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Marcos - Web & App developer</title>
    <script src="<?=$ref_rel;?>assets/js/vendors/color-modes-1.js"></script>
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="<?=$ref_rel;?>assets/imgs/template/favicon-1.svg">
    <!-- Libs CSS -->
    <link rel="stylesheet" href="<?=$ref_rel;?>assets/css/vendors/bootstrap.min-1.css">
    <link rel="stylesheet" href="<?=$ref_rel;?>assets/css/vendors/swiper-bundle.min-1.css">
    <link rel="stylesheet" href="<?=$ref_rel;?>assets/css/vendors/aos-1.css">
    <link rel="stylesheet" href="<?=$ref_rel;?>assets/css/vendors/odometer-1.css">
    <link rel="stylesheet" href="<?=$ref_rel;?>assets/css/vendors/carouselTicker-1.css">
    <link rel="stylesheet" href="<?=$ref_rel;?>assets/css/vendors/magnific-popup-1.css">
    <link rel="stylesheet" href="<?=$ref_rel;?>assets/fonts/remixicon/remixicon-1.css">
    <link rel="stylesheet" href="<?=$ref_rel;?>assets/fonts/satoshi/satoshi-1.css">
    <!-- Fonts -->
    <link rel="preconnect" href="<?=$ref_rel;?>https://fonts.googleapis.com">
    <link rel="preconnect" href="<?=$ref_rel;?>https://fonts.gstatic.com" crossorigin="">
    <link href="<?=$ref_rel;?>assets/css/css2-1" rel="stylesheet">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?=$ref_rel;?>assets/css/main-1.css">

    <!-- VARIABLES KODARI-->

    <!-- <script src="<?php echo $global_sitio_server; ?>/functions/vue.js"></script> -->
    <!-- <script src="<?php echo $global_sitio_server; ?>/functions/axios.min.js"></script> -->
    <!-- <script src="<?php echo $global_sitio_server; ?>/functions/apiserver.js"></script> -->
    <!-- <script src="<?php echo $global_sitio_server; ?>/functions/sweetalert2.all.min.js"></script> -->
    <!-- <script><?php echo 'let global_token = "'.$token.'";'; ?></script> -->

    <!-- <script type="text/javascript">
        const GLOBAL_TOKEN = '<?php echo($_SESSION["token"])?>';
        const GLOBAL_SESION = '<?php echo($_SESSION["sesion"])?>';
        const GLOBAL_ID = '<?php echo($_SESSION["id_usuario"])?>';
        <?php echo 'var global_public_repo = "'.$global_public_repo.'";'; ?>
	</script> -->

    <!-- <script src="<?php echo $global_sitio_server; ?>/functions/nodum.js"></script> -->
</head>

<body>

    <?php
        require_once("header.php");

        if($_REQUEST["view"] == "")
        {
            echo '<script type="text/javascript">window.location.replace("./inicio");</script>';
        }
        else if (file_exists("modules/" . $_REQUEST["view"] . ".php"))
        {
            include_once "modules/" . $_REQUEST["view"] . ".php";
        }
        else
        {
            echo '<script type="text/javascript">window.location.replace("./inicio");</script>';
        }
        if(file_exists("modules/" . $_REQUEST["view"] . ".js"))
        {
            echo '<script type="text/javascript" src="./assets/js/credentials.js"></script>';
            echo '<script type="text/javascript" src="' . $ref_rel . 'modules/' . $_REQUEST["view"] . '.js"></script>';
        }

        require_once("footer.php");
    ?>

    <!-- Libs JS -->
    <script src="<?=$ref_rel;?>assets/js/vendors/jquery-3.7.1.min-1.js"></script>
    <script src="<?=$ref_rel;?>assets/js/vendors/bootstrap.bundle.min-1.js"></script>
    <script src="<?=$ref_rel;?>assets/js/vendors/swiper-bundle.min-1.js"></script>
    <script src="<?=$ref_rel;?>assets/js/vendors/aos-1.js"></script>
    <script src="<?=$ref_rel;?>assets/js/vendors/wow.min-1.js"></script>
    <script src="<?=$ref_rel;?>assets/js/vendors/headhesive.min-1.js"></script>
    <script src="<?=$ref_rel;?>assets/js/vendors/smart-stick-nav-1.js"></script>
    <script src="<?=$ref_rel;?>assets/js/vendors/jquery.magnific-popup.min-1.js"></script>
    <script src="<?=$ref_rel;?>assets/js/vendors/gsap.min-1.js"></script>
    <script src="<?=$ref_rel;?>assets/js/vendors/imagesloaded.pkgd.min-1.js"></script>
    <script src="<?=$ref_rel;?>assets/js/vendors/isotope.pkgd.min-1.js"></script>
    <script src="<?=$ref_rel;?>assets/js/vendors/ScrollToPlugin.min-1.js"></script>
    <script src="<?=$ref_rel;?>assets/js/vendors/ScrollTrigger.min-1.js"></script>
    <script src="<?=$ref_rel;?>assets/js/vendors/jquery.carouselTicker.min-1.js"></script>
    <script src="<?=$ref_rel;?>assets/js/vendors/jquery.odometer.min-1.js"></script>
    <script src="<?=$ref_rel;?>assets/js/vendors/jquery.appear-1.js"></script>
    <script src="<?=$ref_rel;?>assets/js/vendors/gsap-custom-1.js"></script>
    <script src="<?=$ref_rel;?>assets/js/imageRevealHover-1.js"></script>
    <script src="<?=$ref_rel;?>assets/js/vendors/aat.min-1.js"></script>
    <!-- Theme JS -->
    <script src="<?=$ref_rel;?>assets/js/main-1.js"></script>
</body>

</html>