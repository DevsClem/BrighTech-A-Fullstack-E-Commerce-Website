<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title; ?></title>
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/admin-style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/admin.js"></script>
    </head>
    <body>
        <header>
            <!-- Fixed navbar -->
            <nav class="navbar navbar-expand fixed-top px-5 py-2">
                <div class="container-fluid">
                    <ul class="navbar-nav">
                        <li><a href="/dashboard/orders" class="text-decoration-none text-white fs-4">Dashboard</a></li>
                        <li class="ms-5"><a href="/dashboard/orders" class="<?= $active == "orders" ? "text-decoration-underline" : "text-decoration-none"; ?> text-white fs-4">Orders</a></li>
                        <li class="ms-3"><a href="/dashboard/products" class="<?= $active == "products" ? "text-decoration-underline" : "text-decoration-none"; ?> text-white fs-4">Products </a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="log-off"><a href="/users/logoff" class="text-decoration-none text-white fs-4">Logoff</a></li>
                    </ul>
                </div>
            </nav>
        </header>