        <main class="my-5">
            <div class="cart-items">
                <table class="table table-striped border">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
<?php               foreach($items as $item)
                    { ?>
                        <tr>
                            <td><?= $item['name']; ?></td>
                            <td>$<?=  $item['price']; ?></td>
                            <td><?=  $item['quantity']; ?> <a href="products/show/<?= $item['product_id']; ?>" class="actions">Update</a><a href="/carts/delete_cart_item/<?= $item['product_id']; ?>" class="bi bi-trash"></a></td>
                            <td>$<?=  $item['quantity']*$item['price']; ?></td>
                        </tr>
<?php               } ?>                   
                    </tbody>
                </table>
                <div class="d-block float-end">
                    <h5 class="">Total: $<?= $total_price; ?></h5>
                    <a href="<?= base_url()?>products/category/all" class="btn btn-success">Continue Shopping</a>
                </div>
            </div>
            <div class="infomation-forms">
                <form role="form" action="<?= base_url()?>/carts/add_order" method="post" class="form-validation" data-cc-on-file="false" data-stripe-publishable-key="<?php echo $this->config->item('stripe_key') ?>" id="payment-form">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                    <?= $this->session->flashdata('errors'); ?>
                    <?= $this->session->flashdata('success'); ?>
                    <h3>Shipping Information</h3>
                    <label for="shipping_first_name">First Name:</label>
                    <input type="text" name="shipping_first_name" id="shipping_first_name"/>
                    <label for="shipping_last_name">Last Name:</label>
                    <input type="text" name="shipping_last_name" id="shipping_last_name"/>
                    <label for="shipping_address">Address:</label>
                    <input type="text" name="shipping_address" id="shipping_address"/>
                    <label for="shipping_address2">Address2:</label>
                    <input type="text" name="shipping_address2" id="shipping_address2/">
                    <label for="shipping_city">City:</label>
                    <input type="text" name="shipping_city" id="shipping_city"/>
                    <label for="shipping_state">State:</label>
                    <input type="text" name="shipping_state" id="shipping_state"/>
                    <label for="shipping_zip_code">Zipcode:</label>
                    <input type="text" name="shipping_zip_code" id="shipping_zip_code"/>
                    <h3>Billing Information</h3>
                    <label id="same">
                        <input type="checkbox" name="same" id="same">Same as Shipping
                    </label>
                    <label for="billing_first_name">First Name:</label>
                    <input type="text" name="billing_first_name" id="billing_first_name" />
                    <label for="billing_last_name">Last Name:</label>
                    <input type="text" name="billing_last_name" id="billing_last_name" />
                    <label for="billing_address">Address:</label>
                    <input type="text" name="billing_address" id="billing_address" />
                    <label for="billing_address2">Address2:</label>
                    <input type="text" name="billing_address2" id="billing_address2" />
                    <label for="billing_city">City:</label>
                    <input type="text" name="billing_city" id="billing_city" />
                    <label for="billing_state">State:</label>
                    <input type="text" name="billing_state" id="billing_state" />
                    <label for="billing_zip_code">Zipcode:</label>
                    <input type="text" name="billing_zip_code" id="billing_zip_code" />
                    <label for="card">Card:</label>
                    <input type="text" id="card" class="card-number"/>
                    <label for="security">Security:</label>
                    <input type="text" id="security" class="card-cvc'"/>
                    <label>Expiration:</label>
                    <input type="text" placeholder="(mm)" id="month" class="card-expiry-month"/>/<input type="text" placeholder="(year)" id="year" class="card-expiry-year"/>
                    <input type="hidden" name="stripeToken" id="stripeToken" value="">
                    <input type="submit" value="Pay" class="btn btn-primary">
                </form>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>