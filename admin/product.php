<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý đơn hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.10/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/home.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery.3.4.1.js"></script>
    <script src="../assets/js/product.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.10/sweetalert2.min.js"></script>
</head>
<body>
    <div class="sidebar">
        <a href="./admin.php"><i class="fas fa-home mx-1"></i>Trang chủ</a>
        <a href="./order.php"><i class="fas fa-luggage-cart mx-1"></i>Quản lý đơn hàng</a>
        <a class="active" href="./product.php"><i class="fas fa-shopping-bag mx-1"></i>Quản lý sản phẩm</a>
        <a href="./customer.php"><i class="fas fa-user-friends mx-1"></i>Quản lý khách hàng</a>
    </div>
    <div class="content container-fluid">
        <div class="row mt-2">
            <div class="col-md-3">
                <input id="searchName" type="text" class="form-control" placeholder="Tìm kiếm..." name="searchName">
            </div>
            <div class="col-sm-3">
                <button class="btn btn-primary" type="button" onclick="searchProduct()"><i class="fa fa-search"></i> Tìm kiếm</button>
                <button class="btn btn-success" onclick="createProduct();"><i class="fa fa-plus"></i> Thêm mới</button>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-10 mx-3">
                <table class="table table-striped">
                    <thead>
                        <tr style="background-color: #255aa5; color: #ffffff;">
                            <th scope="col">STT</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col" class="text-center">Giá nhập</th>
                            <th scope="col" class="text-center">Giá bán</th>
                            <th scope="col" class="text-center">Số lượng</th>
                            <th scope="col" class="text-center">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody id="tblCustomer">
                        <?php
                            include '../config.php';
                            $sql = $sql = "select * from product";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result) > 0){ 
                                    $stt = 1;
                                    while($results = mysqli_fetch_array($result)){
                                        echo "<tr><td>".$stt."</td>";
                                        echo '<td><img height=60 width=60 class="img-fluid border-2" src="'.$results['image'].'"/></td>';
                                        echo '<td>'.$results['name'].'</td>';
                                        echo '<td class="text-center">'.$results['importPrice'].'</td>';
                                        echo '<td class="text-center">'.$results['price'].'</td>';
                                        echo '<td class="text-center">'.$results['quantity'].'</td>';
                                        echo '<td class="text-center">';
                                        echo '<i class="fas fa-edit mx-1" style="color: #FDA24F;" onclick="editProduct(';
                                        echo $results['id'];
                                        echo ')"></i>';
                                        echo '<i class="fas fa-minus-circle mx-1" style="color: #E14B67"; onclick="confirmDeleteProduct(';
                                        echo $results['id'];
                                        echo ')"></i>';
                                        echo "</td>";
                                        echo "</tr>";
                                        $stt += 1;
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
       
    </div>
     <!-- Modal create product -->
     <div class="modal fade" id="createProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Thêm sản phẩm mới</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" id="formCreateProduct">
                <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                    <label for="">Tên sản phẩm</label>
                    </div>
                    <div class="col-md-8">
                    <input type="text" name="name" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                    <label for="">Giá nhập</label>
                    </div>
                    <div class="col-md-8">
                    <input type="text" name="importPrice" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                    <label for="">Giá bán</label>
                    </div>
                    <div class="col-md-8">
                    <input type="text" name="price" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                    <label for="">Loại</label>
                    </div>
                    <div class="col-md-8">
                    <input type="text" name="type" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                    <label for="">Số lượng</label>
                    </div>
                    <div class="col-md-8">
                    <input type="text" name="quantity" class="form-control">
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button id = "btnSave" type="submit" class="btn btn-primary" onclick="saveCreate()">Thêm mới</button>
                </div>
            </form>
            </div>
        </div>
    </div>


    <!-- Modal edit customer -->
    <div class="modal fade" id="productEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Chỉnh sửa thông tin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" id="formUpdateProduct">
                <div class="modal-body">
                <div class="row">
                    <input type="text" name="id" id="productId" style="display: none;">
                    <div class="col-md-4">
                    <label for="">Tên sản phẩm</label>
                    </div>
                    <div class="col-md-8">
                    <input type="text" name="name" id="productName" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                    <label for="">Giá nhập</label>
                    </div>
                    <div class="col-md-8">
                    <input type="text" name="importPrice" id="productImportPrice" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                    <label for="">Giá bán</label>
                    </div>
                    <div class="col-md-8">
                    <input type="text" name="price" id="productPrice" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                    <label for="">Số lượng</label>
                    </div>
                    <div class="col-md-8">
                    <input type="text" name="quantity" id="productQuantity" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" onclick="updateProduct()" class="btn btn-primary">Lưu</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    
</body>
</html>
