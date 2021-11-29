<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/login.css">
</head>
<html>
    <body>
        <div class="vh-100" style="background-color: #659DBD;">
            <div class="container py-5">
              <div class="row d-flex justify-content-center align-items-center h-200">
                <div class="col col-xl-10">
                  <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                      <div class="col-md-6 col-lg-5 d-none d-md-block mt-5">
                        <img
                          src="https://i.pinimg.com/564x/42/7d/73/427d733018f72d7d1d6003443dd03013.jpg"
                          alt="login form"
                          class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
                        />
                      </div>
                      <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
          
                          <form action="./handle/loginHandle.php" method="POST">
                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Đăng nhập</h5>
          
                            <div class="form-outline mb-4">
                              <input type="text"  class="form-control form-control-lg " name="username" required="true" placeholder="Username"/>
                            </div>
          
                            <div class="form-outline mb-4">
                              <input type="password" class="form-control form-control-lg" name="password" required="true" placeholder="Password"/>
                            </div>
                            <div class="row mt-3">
                                <?php if (isset($_GET['error'])) { ?>
                                    <p class="text-danger">
                                        <?php echo $_GET['error']; ?></p>
                                <?php } ?>
                            </div>
                            <div class="pt-1 mb-4">
                              <button class= "btn btn-primary btn-lg btn-block" type="submit">Đăng nhập</button>
                            </div>
          
                            <a class="small text-muted" href="#!">Quên mật khẩu?</a>
                            <p class="mb-5 pb-lg-2" style="color: #393f81;">Chưa có tài khoản? <a href="./register.php" style="color: #393f81;">Đăng ký ngay</a></p>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </body>
</html>