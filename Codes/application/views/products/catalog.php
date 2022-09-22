        <main class="mt-5">
            <!-- Product Side Bar -->
            <div class="search d-inline-block p-3 mt-5 mx-5 border shadow rounded-3">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <form action="/products/search" method="post">
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                            <input type="text" name="name" placeholder="Product name" class="search-product" />
                            <input type="submit" class="search-button" value="" />
                        </form>
                    </li>
                    <li class="nav-item mt-1 mb-2">Categories</li>
<?php               foreach ($categories as $category) { ?>
                    <li class="w-50 ms-4"><a href="<?= base_url() . "products/category/" . $category['id']; ?>" class="nav-link link-dark my-2 p-0"><?= $category['name'] . " (" . $category['products_per_category'] . ")"; ?></a></li>
<?php               } ?>
                    <li class="w-50 ms-4"><a href="<?= base_url() . "products/category/" ?>all" class="nav-link link-dark my-2 fst-italic p-0">Show All</a></li>
                </ul>
            </div>
            <!-- Products -->
            <div class="products d-inline-block align-top p-4 my-5 border shadow rounded-3">
                <div>
                    <h2 class="d-inline-block"><?= $page_name; ?></h2>
                    <ul class="navbar-nav d-inline-block float-end">
                        <li class="d-inline-block mx-2"><a href="<?= $filter."1"; ?>" class="nav-link">first</a></li>|
                        <li class="d-inline-block mx-2"><a href="<?= $page == 1 ? $filter."1" : $filter.($page - 1); ?>" class="nav-link">prev</a></li>|
                        <li class="d-inline-block mx-2"><?= $page; ?></li>|
                        <li class="d-inline-block mx-2"><a href="<?= $page == $pages ? $filter.$pages : $filter.($page + 1); ?>" class="nav-link">next</a></li>
                    </ul>
                </div>
                <div class="my-1">
                    <ul class="sort navbar-nav d-inline-block mb-0">
                        <li>
                            <!-- Sort Product -->
                            <form action="<?= $filter ?>" method="get" class="sort">
                                <label for="sort">Sort by:</label>
                                <select name="sort" id="sort">
                                    <option>Sort By</option>
                                    <option value="price" <?= $sort == "price" ? "Selected" : ""; ?>>Price</option>
                                    <option value="popular"  <?= $sort == "popular" ? "Selected" : ""; ?>>Most Popular</option>
                                </select>
                            </form>
                        </li>
                    </ul>
                </div>
<?php           foreach ($products as $product) { ?>
                    <div class="product d-inline-block mx-3 my-2">
                        <a href="/products/show/<?= $product['id']; ?>" class="link-dark text-decoration-none">
                            <img src="<?= base_url(); ?>assets/img/img2.png" class="card-img-top" alt="monitor">
                            <p class="price">$<?= $product['price']; ?></p>
                            <p class="mt-2"><?= $product['name']; ?></p>
                        </a>
                    </div>
<?php           } ?>
                <nav aria-label="Page navigation" class="my-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="<?= $page == 1 ? $filter."1" : $filter.($page - 1); ?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
<?php               for($i = 1; $i <= $pages; $i++)
                    {?>
                        <li class="page-item"><a class="page-link" href="<?= $filter.$i; ?>"><?= $i; ?></a></li>
<?php               }?>
                        <li class="page-item"><a class="page-link" href="<?= $page == $pages ? $filter.$pages : $filter.($page + 1); ?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                    </ul>
                </nav>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>