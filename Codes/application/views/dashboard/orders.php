        <main class="my-5">
            <div class="orders">
                <form action="" method="get" class="d-inline-block w-50">
                    <input type="text" name="name" placeholder="Search" class="rounded-pill px-2 my-3 w-100" />
                </form>
                <select class="d-inline-block float-end mt-2 sort">
                    <option value="shipped">Order in Process</option>
                    <option value="shipped" selected>Shipped</option>
                    <option value="shipped">Cancelled</option>
                </select>
                <form action="post" class="update-status">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Billing Address</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="/orders/show">100</a></td>
                                <td>Bob</td>
                                <td>8/3/2022</td>
                                <td>123 Dojo way Bellevue WA 98133</td>
                                <td>₱58100</td>
                                <td>
                                    <select name="status" id="">
                                        <option value="shipped">Order in Process</option>
                                        <option value="shipped" selected>Shipped</option>
                                        <option value="shipped">Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">99</a></td>
                                <td>Craig</td>
                                <td>8/3/2022</td>
                                <td>123 Dojo way Bellevue WA 98005</td>
                                <td>₱25000</td>
                                <td>
                                    <select name="status" id="">
                                        <option value="shipped">Order in Process</option>
                                        <option value="shipped">Shipped</option>
                                        <option value="shipped">Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">98</a></td>
                                <td>Craig</td>
                                <td>8/3/2022</td>
                                <td>123 Dojo way Bellevue WA 98005</td>
                                <td>₱25000</td>
                                <td>
                                    <select name="status" id="">
                                        <option value="shipped">Order in Process</option>
                                        <option value="shipped" selected>Shipped</option>
                                        <option value="shipped">Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">97</a></td>
                                <td>Craig</td>
                                <td>8/3/2022</td>
                                <td>123 Dojo way Bellevue WA 98005</td>
                                <td>₱25000</td>
                                <td>
                                    <select name="status" id="">
                                        <option value="shipped">Order in Process</option>
                                        <option value="shipped">Shipped</option>
                                        <option value="shipped">Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">96</a></td>
                                <td>Craig</td>
                                <td>8/3/2022</td>
                                <td>123 Dojo way Bellevue WA 98005</td>
                                <td>₱25000</td>
                                <td>
                                    <select name="status" id="">
                                        <option value="shipped">Order in Process</option>
                                        <option value="shipped" selected>Shipped</option>
                                        <option value="shipped">Cancelled</option>
                                    </select>
                                </td>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>