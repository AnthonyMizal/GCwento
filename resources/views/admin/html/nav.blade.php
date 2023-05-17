<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GCwento - Admin</title>
    <link rel="icon" type="icon" href="../assets/General/GCwento_purple_logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/admin_nav.css">
    <link rel="stylesheet" href="../css/assets.css">
    <link rel="stylesheet" href="../css/admin_panel.css">
  </head>

  <body>
    <div class="container-fluid">

      <div class="row">

        <div class="col-xl-2 col-xxl-2 nav_container">

            <nav>
              <div class="nav" id="nav-tab" role="tablist">
 
                <div class="header_container">
                  <a class="header_index_link" href="../html/admin_index.html"><img class="header_logo" src="../assets/General/GCwento_purple_logo.png" alt=""></a>
                </div>

                <div class="tabs_list_container">

                  <h3 class="management_header"> MANAGEMENT </h3>
          
                  <a href="../html/admin_index.html" class="nav_item_button"> <i class='bx bxs-dashboard tab_icon'></i> PANEL </a>
                  <a href="../html/admin_users.html" class="nav_item_button"> <i class='bx bxs-user tab_icon'></i> USERS </a>
                  <a href="../html/admin_stories.html" class="nav_item_button"> <i class='bx bxs-book tab_icon'></i> STORIES </a>
                  <a href="../html/admin_banning.html" class="nav_item_button"> <i class='bx bxs-hand tab_icon'></i> BANNING </a>
                </div>
              </div>
            </nav>

            <div class="logout_container">
              <button class="logout_icon_button"><i class='bx bxs-exit logout_icon'></i></button>
            </div>
        </div>
        
          
        

      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html> 