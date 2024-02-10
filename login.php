<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <section class="vh-100" style="background-color: #279EFF;">
        <form action="cek-login.php" method="POST">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5">
                  <h3 class="mb-5 text-center">LOGIN DASHBOARD</h3>
                  <div class="form-outline mb-3">
                    <label class="form-label text-start">Username</label>
                    <input type="text" name="user" id="user" class="form-control form-control-lg" />
                  </div>
                  <div class="form-outline mb-5">
                    <label class="form-label text-start">Password</label>
                    <input type="password" name="pass" id="user" class="form-control form-control-lg" />
                  </div>
                  <button class="btn btn-primary btn-lg btn-block mb-4" type="submit" name="submit">Login</button>
                </div>
              </div> 
            </div>
          </div>
        </div>
        </form>
    </section>
</body>
</html>