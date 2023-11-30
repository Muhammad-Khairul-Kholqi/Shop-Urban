    
    <?php
session_start();
if(isset($_SESSION['type'])) {
    header("location: signin-admin.php");
    exit;
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop Urban Outfitters</title>
        <link rel="website icon" href="img/logoshop.png" type="png">
        <link rel="stylesheet" href="css/styleadmin.css">
        <!-- link bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="admin-page">
            <div class="sidebar">
                <div class="header">
                    <img src="img/logoshop.png" alt="">
                    <p><span class="span-title">Shop</span><br>Urban Outfitters</p>
                </div>
                <div class="menu">
                    <div class="menu-link">
                        <a href=""><img src="img/dash.png" alt="" title="Dashboard"></a>
                        <a href=""><p>Dashboard</p></a>
                    </div>
                    <div class="menu-link">
                        <a href=""><img src="img/folder.png" alt="" title="Categories"></a>
                        <a href=""><p>Categories</p></a>
                    </div>
                    <div class="menu-link">
                        <a href=""><img src="img/list.png" alt="" title="Orders"></a>
                        <a href=""><p class="title-link">Orders</p></a>
                    </div>
                </div>
                <div class="tombol-keluar">
                    <center>
                    <a href="">
                        <img src="img/logout.png" title="LogOut">
                        <p>LogOut</p>
                    </a>
                    </center>
                </div>
            </div>
            <div class="main-content">
                <div class="search-user">
                    <div class="search-content">
                        <form action="" method="post">
                            <div class="input-group">
                                <input type="text" placeholder="Type" autocomplate="off">
                            </div>
                            <button type="button">Search</button>
                        </form>
                    </div>
                    <div class="user">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, consectetur.</p>
                    </div>
                </div>
                <div class="content">

                </div>
            </div>
        </div>
    </body>
    </html>