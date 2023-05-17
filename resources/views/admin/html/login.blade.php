<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GCwento Admin - Login</title>
    <link rel="icon" type="icon" href="../assets/General/GCwento_purple_logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/admin_login.css">
    <link rel="stylesheet" href="../css/assets.css">
    </head>
  <body>
    <div class="container-fluid">

      <div class="row">

        <div class="col-lg-6 col-xl-7 col-xxl-5 image_container">
          <img class="login_image" src="../assets/Admin/Login/Login_icon.png" >
        </div>

        <div class="col-lg-5 col-xl-4 col-xxl-3 admin_login_form_container">
            <div class="header_container">
              <img class="form_logo" src="../assets/General/GCwento_purple_logo.png">
              <h3 class="bpurple_highlighter"> ADMIN <span class="purple_highlighter"> LOGIN</span> </h3>
            </div>
            <div class="form_container">
              <form>
                <div class="input_container">
                  <i class='bx bxs-user input_icon'></i>
                  <input type="email" id="admin_email" class="form-control form-control-lg form_input" placeholder="Admin Email" />
                </div>
                <div class="input_container">
                  <i class='bx bxs-lock-alt input_icon'></i>
                  <input type="email" id="admin_password" class="form-control form-control-lg form_input" placeholder="Admin Password" />
                </div>

                <button type="button" class="btn btn-primary admin_login_button"> LOGIN </button>
                <p class="version_num"> GCwento Admin - v1.0</p>
      
              </form>
            </div>
        </div>

      </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html> 