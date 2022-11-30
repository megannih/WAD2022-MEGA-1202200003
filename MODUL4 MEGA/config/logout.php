    <?php
    session_start();

    session_start();    
    $_SESSION['success'] = "Berhasil logout";
                    header("Location: ../index.php", true, 301);
                    exit();