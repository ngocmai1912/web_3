<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
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
    <script src="../assets/js/customer.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.10/sweetalert2.min.js"></script>
</head>
<body>
    <div class="sidebar">
        <a href="./admin.php"><i class="fas fa-home mx-1"></i>Trang chủ</a>
        <a href="./order.php"><i class="fas fa-luggage-cart mx-1"></i>Quản lý đơn hàng</a>
        <a  href="./product.php"><i class="fas fa-shopping-bag mx-1"></i>Quản lý sản phẩm</a>
        <a class="active"><i class="fas fa-user-friends mx-1"></i>Quản lý khách hàng</a>
    </div>
    <div class="content container-fluid">
        <div class="row mt-2">
            <div class="col-md-3">
                <input id="searchName" type="text" class="form-control" placeholder="Tìm kiếm..." name="searchName">
            </div>
            <div class="col-sm-3">
                <button id = "btnSearch" type = "button" class="btn btn-primary"><i class="fa fa-search"></i> Tìm kiếm</button>
                <button id = "btnCreate" type = "button" class="btn btn-success" onclick="createCustomer()"><i class="fa fa-plus"></i> Thêm mới</button>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-10 mx-3">
                <table class="table table-striped">
                    <thead>
                        <tr style="background-color: #255aa5; color: #ffffff;">
                            <th scope="col">STT</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col" class="text-center">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody id="tblCustomer">
                        <?php
                            include '../config.php';
                            $sql = $sql = "select * from customer";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result) > 0){ 
                                $stt = 1;
                                while($results = mysqli_fetch_array($result)){
                                    echo "<tr><td>".$stt."</td>";
                                    echo "<td>".$results['fullname']."</td>";
                                    echo "<td>".$results['address']."</td>";
                                    echo "<td>".$results['phone']."</td>";
                                    echo '<td class="text-center">';
                                    echo '<i class="fas fa-edit mx-1" style="color: #FDA24F;" onclick="editCustomer(';
                                    echo $results['id'];
                                    echo ')"></i>';
                                    echo '<i class="fas fa-minus-circle mx-1" style="color: #E14B67"; onclick="confirmDeleteCustomer(';
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
    <!-- Modal create customer -->
    <div class="modal fade" id="createCustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm khách hàng mới</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" id="formCreateCustomer">
                <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                    <label for="">Họ và tên</label>
                    </div>
                    <div class="col-md-8">
                    <input type="text" name="name" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                    <label for="">Địa chỉ</label>
                    </div>
                    <div class="col-md-8">
                    <input type="text" name="address" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                    <label for="">Số điện thoại</label>
                    </div>
                    <div class="col-md-8">
                    <input type="text" name="phone" class="form-control">
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
    <div class="modal fade" id="customerEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa thông tin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" id="formUpdateCustomer">
                <div class="modal-body">
                <div class="row">
                    <input type="text" name="id" id="customerId" style="display: none;">
                    <div class="col-md-4">
                    <label for="">Họ và tên</label>
                    </div>
                    <div class="col-md-8">
                    <input type="text" name="name" id="customerFullname" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                    <label for="">Số điện thoại</label>
                    </div>
                    <div class="col-md-8">
                    <input type="text" name="phone" id="customerPhone" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                    <label for="">Địa chỉ</label>
                    </div>
                    <div class="col-md-8">
                    <input type="text" name="address" id="customerAddress" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" onclick="updateCustomer()" class="btn btn-primary">Lưu</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    
</body>
</html>