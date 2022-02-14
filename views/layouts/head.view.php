<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $_ENV['APP_NAME'] ?></title>

    <link rel="icon" href="/public/images/favicon.svg" sizes="32x32">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">

    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

    <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/node_modules/vue/dist/vue.min.js"></script>
    <script src="/node_modules/axios/dist/axios.min.js"></script>
    
    <script src="/public/js/components/cart.js"></script>
    <script src="/public/js/components/products.js"></script>
    <script src="/public/js/components/cigar.js"></script>
    <script src="/public/js/components/footer.js"></script>
    <!-- <script src="/public/js/components/login.js"></script> -->
    <script src="/public/js/components/freeSending.js"></script>
    <script src="/public/js/components/carousel.js"></script>
    <script src="/public/js/components/intern.js"></script>
    <script src="/public/js/components/intern2.js"></script>

    <!-- <link rel="stylesheet" href="/public/css/main.css" /> -->
    <link rel="stylesheet" href="/public/css/cart.css" /> 

    <link rel="stylesheet" href="/public/css/navbar.css">
    <link rel="stylesheet" href="/public/css/btn.css">
    <link rel="stylesheet" href="/public/css/products.css">
    <link rel="stylesheet" href="/public/css/login.css">
    <link rel="stylesheet" href="/public/css/register.css">
    <link rel="stylesheet" href="/public/css/form.css">
    <link rel="stylesheet" href="/public/css/show.css">
    <link rel="stylesheet" href="/public/css/sending.css">
    <link rel="stylesheet" href="/public/css/carousel.css">
    <link rel="stylesheet" href="/public/css/intern.css">
    <link rel="stylesheet" href="/public/css/intern2.css">
    <link rel="stylesheet" href="/public/css/footer.css">
   
</head>
<body>    
    <main id="app" class="content">
        <div class="layer" @click="closeShoppingCart"></div>
        <div class="container-fluid p-0">
            