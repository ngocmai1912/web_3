<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/home.css">
    <title>Quản lý đơn hàng</title>
</head>


<body>
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm sticky-top background-red py-2" >
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id = "navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item mx-2 py-2">
            <a class="nav-link" href="#dashboard">Thống kê</a>
          </li>
          <li class="nav-item mx-2 py-2">
            <a class="nav-link" href="#services">Chức năng</a>
          </li>
          <li class="nav-item mx-2 py-2">
            <a class="nav-link" href="#bestSeller">Sản phẩm bán chạy</a>
          </li>
          <li class="nav-item mx-2 py-2">
            <a class="nav-link" href="#versions">Phiên bản</a>
          </li>
          <li class="nav-item mx-2 py-2">
            <a class="nav-link" href="#contact">Liên hệ</a>
          </li>
          <li class="nav-item mx-2 py-2">
            <a class="nav-link btn-info border-0" href="login.php" style="color: #ffffff;">Đăng nhập</a>
              
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section id = "dashboard"class="mt-5 py-5">
    <div class="row">
      <div class="row mb-4">
        <h1 class="a text-center text-color"><strong>THỐNG KÊ DOANH THU</strong></h1>
      </div>
      <div class="col-8 ms-5 px-5">
        <div class="row mb-5">
          <div class="col-4 frame mx-2 ms-4">
            <div class="row border" alt="..." style="background: #D5EBCB;">
              <div class="col">
                <div>
                  <span class="text-amount mt-2 px-4">649</span>
                  <i class="fas fa-calendar-check mt-4 px-4 icon-calendar"></i>
                </div>
              </div>
              <p class="text-des px-4" style="color: #5ed825;">Sản phẩm đã giao</p>
            </div>
          </div>
          <div class="col-4 frame mx-2">
            <div class="row border" alt="..." style="background: #F8E5C8;">
              
              <div class="col">
                <span class="text-amount mt-2 px-4">12</span>
                <i class="fas fa-user-cog mt-4 px-4 icon-refund"></i>
              </div>
              <p class="text-des px-4" style="color: #FDA24F;">Đơn chờ duyệt</p>
            </div>
          </div>
          <div class="col-4 frame mx-2">
            <div class="row border" alt="..." style="background: #F5CAD2;">
              
              <div class="col">
                <span class="text-amount mt-2 px-4">45</span>
                <i class="fas fa-truck mt-4 px-4 icon-deliver"></i>
              </div>
              <p class="text-des px-4" style="color: #E14B67;">Đơn đang giao</p>
            </div>
          </div>
        </div>
        <div id="chart_div" style="width: 90%; height: 300px;"></div>
      </div>
      <div class="col-3" style="background: #F5F8F8;border-color: rgb(167, 165, 165);">
        <div id="curve_chart" style="width: 100%; height: 60%"></div>
        <div class="row border ms-1 mt-3 py-2" style="width: 100%; background-color: white;">
          <div>
            <span style="font-size: 16px;">Tổng doanh thu</span>
            <i class="fas fa-arrow-up ms-1 px-1" style="color: #8ee068;">+23,4%</i>
            
          </div>
          <p class="text-amount mt-2">85,223,000 VNĐ</p>
        </div>
      </div>
    </div>
  </section>
  <section id="services" class="mt-5 py-5">
    <div class="container-fluid text-center" style="background-color: #ffffff;">
      <h2 class="mb-3">CHỨC NĂNG</h2>
      <h4>Cung cấp các chức năng</h4>
      <br>
      <div class="row mt-2">
        <div class="col-sm-4">
          <span class="fas fa-globe icon-small mb-3"></span>
          <h4 class="mb-3">ĐƠN HÀNG</h4>
          <p>Quản lý, theo dõi các đơn hàng</p>
        </div>
        <div class="col-sm-4">
          <span class="far fa-calendar-check icon-small mb-3"></span>
          <h4 class="mb-3">DUYỆT ĐƠN</h4>
          <p>Xác nhận hoặc hủy bỏ đơn đặt hàng</p>
        </div>
        <div class="col-sm-4">
          <span class="fas fa-lock icon-small mb-3"></span>
          <h4 class="mb-3">SẢN PHẨM</h4>
          <p>Quản lý sản phẩm trong kho</p>
        </div>
        </div>
        <br><br>
      <div class="row">
        <div class="col-sm-4">
          <span class="fas fa-user icon-small mb-3"></span>
          <h4 class="mb-3">KHÁCH HÀNG</h4>
          <p>Quản lý thông tin khách hàng đặt đơn</p>
        </div>
        <div class="col-sm-4">
          <span class="fas fa-chart-line icon-small mb-3"></span>
          <h4 class="mb-3">THỐNG KÊ</h4>
          <p>Thuận lợi theo dõi doanh thu</p>
        </div>
        <div class="col-sm-4">
          <span class="fas fa-question-circle icon-small mb-3"></span>
          <h4 class="mb-3">HỖ TRỢ</h4>
          <p>Hỗ trợ khi cho khách hàng mới</p>
        </div>
      </div>
    </div>
    

  </div>
  </section>
  <section id="bestSeller" class="mt-5 py-5">
    <div class="container wrap-section mb-5">
      <div class="row mb-5">
        <h1 class="a text-center text-color"><strong>SẢN PHẨM BÁN CHẠY</strong></h1>
      </div>
      <div class="row g-5 text-center">
          <div class="col-md-4">
            <div class="card shadow rounded border-0 position-relative wrap-card">
              <img src="./assets/image/ao-khoac-form-rong.jpg" class="card-img-top product-img" alt="...">
              <div class="card-body">
                <h5 class="mt-4"><a href="#" class="text-decoration-none text-color">Quần áo</a></h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow rounded border-0 position-relative wrap-card">
              <img src="./assets/image/pk.png" class="card-img-top product-img" alt="...">
              <div class="card-body">
                <h5 class="mt-4"><a href="#" class="text-decoration-none text-color">Phụ kiện</a></h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow rounded border-0 position-relative wrap-card">
              <img src="./assets/image/giay.jpg" class="card-img-top product-img" alt="...">
              <div class="card-body">
                <h5 class="mt-4"><a href="#" class="text-decoration-none text-color">Giày dép</a></h5>
              </div>
            </div>
            
          </div>
      </div>
  </section>
  <section id="versions" class="mt-5 py-5">
    <div class="container-fluid" style="background-color: #ffffff;">
      <div class="row mb-5">
        <h1 class="a text-center text-color"><strong>NÂNG CẤP</strong></h1>
        <h4 class="text-center text-color">Nâng cấp trang web với nhiều chức năng hơn</h4>
      </div>
      <div class="row g-3 justify-content-md-center">
          <div class="col-md-3 mx-3">
            <div class="card shadow rounded border-0 position-relative wrap-card frame-pro">
              <div class="card-img-top background-red text-center">
                <h1 class="b text-center my-3" style="color: #fff;"><strong>CƠ BẢN</strong></h1>
              </div>
              <div class="card-body mt-3">
                <h5 class="text-color "><i class="fas fa-star mx-3" style="color: #FDA24F;"></i>Quản lý đơn hàng</h5>
                <h5 class="text-color mt-3"><i class="fas fa-star mx-3" style="color: #FDA24F;"></i>Duyệt đơn</h5>
                <h5 class="text-color mt-3"><i class="fas fa-star mx-3" style="color: #FDA24F;"></i>Thống kê</h5>
              </div>
              <div class="text-center mb-4">
                <button class="btn-info border-0">DÙNG THỬ</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 mx-3">
            <div class="card shadow rounded border-0 position-relative wrap-card frame-pro">
              <div class="card-img-top background-red text-center">
                <h1 class="b text-center my-3" style="color: #fff;"><strong>CHUYÊN NGHIỆP</strong></h1>
              </div>
              <div class="card-body mt-3">
                <h5 class="text-color "><i class="fas fa-star mx-3" style="color: #FDA24F;"></i>Quản lý đơn hàng</h5>
                <h5 class="text-color mt-3"><i class="fas fa-star mx-3" style="color: #FDA24F;"></i>Quản lý sản phẩm</h5>
                <h5 class="text-color mt-3"><i class="fas fa-star mx-3" style="color: #FDA24F;"></i>Duyệt đơn</h5>
                <h5 class="text-color mt-3"><i class="fas fa-star mx-3" style="color: #FDA24F;"></i>Thống kê</h5>
              </div>
              <div class="text-center mb-4">
                <button class="btn-info border-0">DÙNG THỬ</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 mx-3">
            <div class="card shadow rounded border-0 position-relative wrap-card frame-pro">
              <div class="card-img-top background-red text-center">
                <h1 class="b text-center my-3" style="color: #fff;"><strong>CAO CẤP</strong></h1>
              </div>
              <div class="card-body mt-3">
                <h5 class="text-color "><i class="fas fa-star mx-3" style="color: #FDA24F;"></i>Quản lý đơn hàng</h5>
                <h5 class="text-color mt-3"><i class="fas fa-star mx-3" style="color: #FDA24F;"></i>Quản lý sản phẩm</h5>
                <h5 class="text-color mt-3"><i class="fas fa-star mx-3" style="color: #FDA24F;"></i>Quản lý khách hàng</h5>
                <h5 class="text-color mt-3"><i class="fas fa-star mx-3" style="color: #FDA24F;"></i>Duyệt đơn</h5>
                <h5 class="text-color mt-3"><i class="fas fa-star mx-3" style="color: #FDA24F;"></i>Thống kê</h5>
              </div>
              <div class="text-center mb-4">
                <button class="btn-info border-0">DÙNG THỬ</button>
              </div>
            </div>
          </div>
      </div>
  </section>
  <section id="contact" class="py-5">
    <div class="container wrap-section">
      <div class="row mb-5">
        <h1 class="text-center text-color"><strong>LIÊN HỆ</strong></h1>
      </div>
      <div class="row">
          <div class="col-md text-color">
              <h5 class="fw-bold" >NM SHOP</h5>
              <hr class="bg-white mb-3" style="width: 100px; height: 2px;">
              <p class="my-3">Địa điểm: 122 Hoàng Quốc Việt, Q.Cầu Giấy, Hà Nội.</p>
                  <p class="my-3">Điện thoại: (024) 35577799 - Fax: (024) 35578759</p>
                  <p class="my-3">Email: contactNM@gmail.com</p>          
          </div>
          <div class="col-md">
            <form action="">
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Họ Tên" required="true">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="E-mail" required="true">
                </div>
              </div>
              <div class="row my-3">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Tiêu đề" required="true">
                </div>
              </div>
              <div class="row my-3">
                <div class="col">
                  <textarea name="" cols="30" rows="5" placeholder="Nội dung" class="form-control" required="true"></textarea>
                </div>
              </div>
              <div class="row my-3">
                <div class="col d-flex justify-content-end">
                  <button class="btn btn-info mx-3" >GỬI</button>
                </div>
              </div>
            </form>
          </div>
      </div>
        
    </div>
  </section>
</body>
<?php include "./footer.php" ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Ngày', 'Doanh thu (VNĐ)'],
        ['1/11',  1050000],
        ['2/11',  1500000],
        ['3/11',  650000],
        ['4/11',  917000],
        ['5/11',  2006000],
        ['6/11',  2941000],
        ['7/11',  2312000]
    ]);
    
      
    var options = {
      title: 'Doanh thu theo ngày'
    };

    var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tháng', 'Quần áo', 'Phụ kiện', 'Giày dép'],
          ['6',  650, 400, 124],
          ['7',  300, 123, 40],
          ['8',  430 ,229, 152],
          ['9',  315, 201, 95],
          ['10',  409, 100, 122],
          ['11',  172, 98, 53],
        ]);

        var options = {
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
</html>