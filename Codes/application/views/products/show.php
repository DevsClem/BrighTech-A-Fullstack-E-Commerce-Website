        <main class="mt-5">
            <!-- Images -->
            <div class="item d-inline-block">
                <a href="<?= base_url();?>products/category/all" class="mb-3 d-inline-block">Go Back</a>
                <h4 class="mb-3"><?= $product['name']; ?></h4>
                <img src="<?= base_url(); ?>assets/img/img2.png" class="chosen-product" alt="monitor">
                <div class="other-images">
                    <img src="<?= base_url(); ?>assets/img/img2.png" alt="monitor" class="img-thumbnail">
                    <img src="<?= base_url(); ?>assets/img/img2.png" alt="monitor" class="img-thumbnail">
                    <img src="<?= base_url(); ?>assets/img/img2.png" alt="monitor" class="img-thumbnail">
                    <img src="<?= base_url(); ?>assets/img/img2.png" alt="monitor" class="img-thumbnail">
                    <img src="<?= base_url(); ?>assets/img/img2.png" alt="monitor" class="img-thumbnail">
                </div>
            </div>
            <!-- Descirption and Form -->
            <div class="item-description d-inline-block align-top">
                <p><?= $product['description']; ?></p>
                <form action="/carts/add_to_cart" method="post" id="add_to_cart" class="float-end w-50">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                    <input type="hidden" name="product_id" value="<?= $product['id']; ?>">
                    <input type="submit" value="Buy" class="btn btn-success px-3">
                    <select name="quantity" class="w-75 py-1 align-middle">
<?php               for($i = 1; $i <= 10; $i++)
                    { ?>
                       <option value="<?= $i; ?>"><?= $i." ($".$i*$product['price'].")"; ?></option>
<?php               } ?>
                    </select>
                    <p class="success">Item added to the cart</p>
                </form>
            </div>
            <!-- Similar Items -->
            <div class="similar-items">
                <h2>Similar Items</h2>
<?php           foreach($products as $product)
                { ?>
                <div class="product d-inline-block mx-3 my-2">
                    <a href="/products/show/<?= $product['id']; ?>" class="link-dark text-decoration-none">
                        <img src="<?= base_url(); ?>assets/img/img2.png" class="card-img-top" alt="monitor">
                        <p class="price"><?= $product['price']; ?></p>
                        <p class="mt-2"><?= $product['name']; ?></p>
                    </a>
                </div>
<?php           } ?>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
<!-- 
    Features
        Dont forget to add images;
 -->