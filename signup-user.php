<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">gampang kok daftarnya</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                    <select class="form-control" name="kelamin" aria-label="Default select example">
                            <option selected>Jenis Kelamin</option>
                            <option value="1">Laki-Laki</option>
                            <option value="2">Perempuan</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="telp" name="telp" placeholder="masukkan nomor Hp"  onkeypress="return hanyaAngka(event)"required>
                     <script>
                function hanyaAngka(evt) {
		            var charCode = (evt.which) ? evt.which : event.keyCode
		            if (charCode > 31 && (charCode < 48 || charCode > 57))
		            return false;
		            return true;
		        }
                     </script>
                     <div class="form-group">
                        <label class="date">Tanggal Lahir</label>
                        <input class="form-control" type="date" name="date" placeholder="Tanggal lahir" required value="<?php echo $date ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Apakah sudah mempunyai akun? <a href="login-user.php">Login disini</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>