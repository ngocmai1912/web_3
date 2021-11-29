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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/home.css">
</head>
<body>
    <p><?php echo $_SESSION["fullname"]; ?></p>
    <div class="sidebar">
        <a class="active" href="./admin.php"><i class="fas fa-home mx-1"></i>Trang chủ</a>
        <a href="./order.php"><i class="fas fa-luggage-cart mx-1"></i>Quản lý đơn hàng</a>
        <a href="./product.php"><i class="fas fa-shopping-bag mx-1"></i>Quản lý sản phẩm</a>
        <a href="./customer.php"><i class="fas fa-user-friends mx-1"></i>Quản lý khách hàng</a>
    </div>

    <div class="content">
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
    <div class="container wrap-section mb-5">
      <div class="row mb-5">
        <h1 class="a text-center text-color"><strong>SẢN PHẨM BÁN CHẠY</strong></h1>
      </div>
      <div class="row g-5 text-center">
          <div class="col-md-4">
            <div class="card shadow rounded border-0 position-relative wrap-card">
              <img src="img/qa.jpg" class="card-img-top product-img" alt="...">
              <div class="card-body">
                <h5 class="mt-4"><a href="#" class="text-decoration-none text-color">Quần áo</a></h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow rounded border-0 position-relative wrap-card">
              <img src="img/pk.png" class="card-img-top product-img" alt="...">
              <div class="card-body">
                <h5 class="mt-4"><a href="#" class="text-decoration-none text-color">Phụ kiện</a></h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow rounded border-0 position-relative wrap-card">
              <img src="img/giay.jpg" class="card-img-top product-img" alt="...">
              <div class="card-body">
                <h5 class="mt-4"><a href="#" class="text-decoration-none text-color">Giày dép</a></h5>
              </div>
            </div>
            
          </div>
      </div>
    </div>
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
</body>
</html>
