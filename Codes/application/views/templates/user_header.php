<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title; ?></title>
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/user_style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"> 
        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
        <script src="<?= base_url(); ?>assets/js/main.js">
        </script>
    </head>
    <body>
        <header>
            <!-- Fixed navbar -->
            <nav class="navbar navbar-expand fixed-top border-bottom px-5 py-2">
                <!-- add fixed-top -->
                <div class="container-fluid">
                    <a href="<?= base_url(); ?>products/category/all" class="align-items-center text-decoration-none"><span class="text-white fs-4 text-primary">BrighTech</span></a>
                    <div>
                        <ul class="navbar-nav">
                            <li class=""><a href="<?= base_url(); ?>carts" id="cart_quantity" class="btn btn-danger ms-2">Shopping Cart (<?= $cart_quantity == null || 0 ? 0 : $cart_quantity; ?>)</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>