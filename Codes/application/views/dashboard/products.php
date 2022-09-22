        <main class="my-5">
            <div class="products">
                <form action="" method="get" class="d-inline-block w-50">
                    <input type="text" name="name" placeholder="Search" class="rounded-pill px-2 my-3 w-100" />
                </form>
                <button type="button" class="btn btn-primary d-inline-block float-end mt-2" data-bs-toggle="modal" data-bs-target="#addModal">Add new product</button>
                <form action="post" class="update-status">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Picture</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Inventory Count</th>
                                <th>Quantity Sold</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="<?= base_url(); ?>assets/img/img2.png" alt=""></td>
                                <td>1</td>
                                <td>Monitor 144hz 24"</td>
                                <td>15</td>
                                <td>5</td>
                                <td><button type="button" class="btn btn-primary d-inline-block" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button><a href="#" class="btn btn-danger ms-4" onclick="confirm('Delete Product?')">Delete</a></td>
                            </tr>
                            <tr>
                                <td><img src="<?= base_url(); ?>assets/img/img2.png" alt=""></td>
                                <td>2</td>
                                <td>Monitor 75hz 24"</td>
                                <td>15</td>
                                <td>5</td>
                                <td><button type="button" class="btn btn-primary d-inline-block" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button><a href="#" class="btn btn-danger ms-4" onclick="confirm('Delete Product?')">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                <nav aria-label="Page navigation" class="my-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                    </ul>
                </nav>
            </div>
        </main>
        <!-- Add Modal -->
        <div class="modal fade" id="addModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Product</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" class="add-product">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" />
                            <label for="description">Description:</label>
                            <textarea name="description" id="description"></textarea>
                            <label for="category">Category:</label>
                            <ul class="categories list-unstyled">
                                <li class="init">Choose Catagory</li>
                                <li><input type="text" name="category" id="category" value="Monitor" disabled readonly><span class="category-action"><i class="bi bi-pencil" id="edit"></i><a href="#" class="bi bi-trash ms-2" id="trash" onclick="confirm('Delete Category?')"></a></span></li>
                                <li><input type="text" name="category" id="category" value="Mouse" disabled readonly><span class="category-action"><i class="bi bi-pencil" id="edit"></i><a href="#" class="bi bi-trash ms-2" id="trash" onclick="confirm('Delete Category?')"></a></span></li>
                                <li><input type="text" name="category" id="category" value="Keyboard" disabled readonly><span class="category-action"><i class="bi bi-pencil" id="edit"></i><a href="#" class="bi bi-trash ms-2" id="trash" onclick="confirm('Delete Category?')"></a></span></li>
                            </ul>
                            <label for="new_category">or add a new categories:</label>
                            <input type="text" name="new_category" id="new_category" />
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" value="Upload" />
                            <ul id="addSortable">
                                <!-- <li><i class="bi bi-list"></i><img src="<?= base_url(); ?>assets/img/img2.png" alt="monitor">img2.png<a href="#" class="bi bi-trash"></a> <span><input type="checkbox" name="main" id="">main</span></li> -->
                            </ul>
                            <div class="actions">
                                <button type="button" class="btn btn-danger cancel" data-bs-dismiss="modal">Cancel</button>
                                <a href="item.html" class="btn btn-success">Preview</a>
                                <input type="submit" class="btn btn-primary" data-bs-dismiss="modal" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Edit Modal -->
        <div class="modal fade" id="editModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Product - ID 2</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" class="edit-product">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" />
                            <label for="description">Description:</label>
                            <textarea name="description" id="description"></textarea>
                            <label for="category">Category:</label>
                            <ul class="categories list-unstyled">
                                <li class="init">Choose Catagory</li>
                                <li><input type="text" name="category" id="category" value="Monitor" disabled readonly><span class="category-action"><i class="bi bi-pencil" id="edit"></i><a href="#" class="bi bi-trash ms-2" id="trash" onclick="confirm('Delete Category?')"></a></span></li>
                                <li><input type="text" name="category" id="category" value="Mouse" disabled readonly><span class="category-action"><i class="bi bi-pencil" id="edit"></i><a href="#" class="bi bi-trash ms-2" id="trash" onclick="confirm('Delete Category?')"></a></span></li>
                                <li><input type="text" name="category" id="category" value="Keyboard" disabled readonly><span class="category-action"><i class="bi bi-pencil" id="edit"></i><a href="#" class="bi bi-trash ms-2" id="trash" onclick="confirm('Delete Category?')"></a></span></li>
                            </ul>
                            <label for="new_category">or add a new categories:</label>
                            <input type="text" name="new_category" id="new_category" />
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" value="Upload"/>
                            <ul id="editSortable">
                                <li><i class="bi bi-list"></i><img src="<?= base_url(); ?>assets/img/img2.png" alt="monitor">img2.png<a href="#" class="bi bi-trash"></a> <span><input type="checkbox" name="main">main</span></li>
                                <li><i class="bi bi-list"></i><img src="<?= base_url(); ?>assets/img/img2.png" alt="monitor">img2.png<a href="#" class="bi bi-trash"></a> <span><input type="checkbox" name="main" disabled>main</span></li>
                                <li><i class="bi bi-list"></i><img src="<?= base_url(); ?>assets/img/img2.png" alt="monitor">img2.png<a href="#" class="bi bi-trash"></a> <span><input type="checkbox" name="main" disabled>main</span></li>
                                <li><i class="bi bi-list"></i><img src="<?= base_url(); ?>assets/img/img2.png" alt="monitor">img2.png<a href="#" class="bi bi-trash"></a> <span><input type="checkbox" name="main" disabled>main</span></li>
                                <li><i class="bi bi-list"></i><img src="<?= base_url(); ?>assets/img/img2.png" alt="monitor">img2.png<a href="#" class="bi bi-trash"></a> <span><input type="checkbox" name="main" disabled>main</span></li>
                            </ul>
                            <div class="actions">
                                <button type="button" class="btn btn-danger cancel" data-bs-dismiss="modal">Cancel</button>
                                <a href="/products/show/1" class="btn btn-success">Preview</a>
                                <input type="submit" class="btn btn-primary" data-bs-dismiss="modal"value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="overlay">
            <div class="cv-spinner">
              <span class="spinner"></span>
            </div>
          </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>