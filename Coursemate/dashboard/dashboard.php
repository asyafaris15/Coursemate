<?php 
    session_start();
    if(isset($_SESSION['status'])){
        echo "<script>window.location = '../login/login.php?msg=Login dulu woy!!!'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>CourseMate</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap">
        <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/styles.min.css">
    </head>
    <body>
        <nav class="navbar navbar-light navbar-expand-md" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="background: url(&quot;assets/img/new_logo_coursemate1.png&quot;) center / cover no-repeat;color: rgba(0,0,0,0);">Brand</a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                    <span class="visually-hidden">Toggle navigation</span>
                    <span class="navbar-toggler-icon">

                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active item_nav" id="a_home" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link item_nav" href="courses.php">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link item_nav" href="assignment.php">Assignment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link item_nav" href="progress.php">Progress</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link item_nav" href="schedule.php">Schedule</a>
                        </li>

                        <?php if($_SESSION['ulevel'] == ('Admin')){?>
                        <li class="nav-item">
                            <a class="nav-link item_nav" href="admin.php">Admin</a>
                        </li>
                        <?php }?> 
                        
                        <?php if($_SESSION['ulevel'] == ('Super Admin' || 'Admin')){ ?>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Upload link</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="input.php">Meet</a>
                                <a class="dropdown-item" href="input.php">Tugas/TO</a>
                                <a class="dropdown-item" href="input.php">materi</a>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: rgb(0,0,0);">
                            <img src="assets/img/akun.png" style="width: 28px;margin-right: 10px;"><?= $_SESSION['uuser']; ?>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Profil</a>
                                <a class="dropdown-item" href="#">Pengaturan</a>
                                <a class="dropdown-item" href="logout.php">Log Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section id="home">
            <h2 id="head1" style="color: rgb(0,0,0);font-weight: bold;">Selamat datang <?= $_SESSION['unama']  ?></h2>
            <h6 id="head2">semoga pengalaman belajarmu menyenangkan</h6>
            <div class="container" id="cont_head"><p style="font-weight: bold;">Status Paket</p>
            <div class="row" id="row_head">
                <div class="col d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-md-start justify-content-lg-start justify-content-xl-start" id="col_head">
                    <img id="status-logo" src="assets/img/course%20asli.png"><p id="p_status">Kamu berlangganan paket Aldebaran 🥳🥳🥳&nbsp;&nbsp;</p>
                    <button class="btn btn-primary" id="btn_course" type="button">Mulai Kelas</button>
                </div>
            </div>
        </div>
        </section>
        <section id="reminder">
        <h5 id="comingup">Coming Up</h5>
        <div class="container" id="contain">
        <div class="row">
            <div class="col-md-4">
        <div class="blog-card blog-card-blog">
            <div class="blog-table">
                <h4 class="blog-card-caption">
                    <a href="#">Try Out Matematika</a>
                </h4>
                <p class="blog-card-description">Semangat temen-temen, kalian pasti bisa!</p>
                <div class="ftr">
                    <div class="stats"> <i class="far fa-clock"></i> 28/02/2022 </div>
                </div>
            </div>
        </div>
        </div>
            
            <div class="col-md-4">
        <div class="blog-card blog-card-blog">
            <div class="blog-table">
                <h4 class="blog-card-caption">
                    <a href="#">Tugas geologi</a>
                </h4>
                <p class="blog-card-description">Hayoo jangan sampe lupa ya, nanti kita bahas di pertemuan selanjutnya</p>
                <div class="ftr">
                    <div class="stats"> <i class="far fa-clock"></i> 25/02/2022 </div>
                </div>
            </div>
        </div>
        </div>
            
            <div class="col-md-4">
        <div class="blog-card blog-card-blog">
            <div class="blog-table">
                <h4 class="blog-card-caption">
                    <a href="#">Tugas persamaan garis</a>
                </h4>
                <p class="blog-card-description">Hayoo jangan sampe lupa ya, nanti kita bahas di pertemuan selanjutnya</p>
                <div class="ftr">
                    <div class="stats"> <i class="far fa-clock"></i> 25/02/2022 </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </section><footer id="footer">
            <div class="container footer-bottom d-flex justify-content-center">
                <div class="copyright">
                © Copyright <strong><span>MDCared</span></strong>. All Rights Reserved
                </div>
            </div>
        </footer><script src="assets/bootstrap/js/bootstrap.min.js"></script><script src="assets/js/script.min.js"></script></body></html>