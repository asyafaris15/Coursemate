<?php
    session_start();
    include 'koneksi.php';
?>

<!DOCTYPE html><html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>login page</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

<body>
    <section class="d-lg-flex login-dark">
        <form id="form_log" method="post">
            <h2 class="visually-hidden">Login Form</h2>
            <?php
                if(isset($_GET['msg'])){
                    echo "<div class='alert alert-error'>".$_GET['msg']."</div>";
                }
            ?>
            <div class="form-logo">
                <img id="logo" src="img/new_logo_coursemate1.png" />
            </div>
            <div class="mb-3" id="mail">
                <input class="form-control" type="email" name="email" placeholder="Email" />
            </div>
            <div class="mb-3" id="pass">
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary d-block w-100" type="submit" name="submit">Log In</button>
            </div>
            <a class="forgot" href="#">Forgot your email or password?</a>
            <p id="output">
                <?php
                    if(isset($_POST['submit'])){
                        $email = mysqli_real_escape_string($connect, $_POST['email']);
                        $pass =  mysqli_real_escape_string($connect, $_POST['password']);

                        $cek = mysqli_query($connect, "SELECT * FROM tb_user WHERE email = '".$email."' ");
                        if(mysqli_num_rows($cek) > 0){
                            $a = mysqli_fetch_object($cek);
                            if($pass == $a->password){

                                $_SESSION['status'] = true;
                                $_SESSION['uid']    = $a->id;
                                $_SESSION['unama']  = $a->nama;
                                $_SESSION['ulevel'] = $a->level;
                                $_SESSION['uuser']  = $a->username;

                                echo "<script>window.location = '../dashboard/dashboard.php'</script>";
                            }
                            else{
                                echo "Password salah";
                            }
                        }
                        else{
                            echo 'email tidak ada';
                        }
                    }
                    
                ?>
            </p>
        </form>
    </section>
</body>
    <script src="js/bootstrap.min.js"></script>    
</html>