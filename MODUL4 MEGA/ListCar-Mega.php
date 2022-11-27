<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>
<?php
    include('config/connector.php')
?>
<body>
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Home-Mega.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="ListCar-Mega.php">My Car</a>
                </li>
            </ul>
            <form class="d-flex justify-content-end" action="#">
                <li>
                <a href="Add-Mega.php" class="btn btn-light">Add car</a>
</li>
<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Profile
  </a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="Profile-Mega.php">Profile</a></li>
    <li><a class="dropdown-item" href="config/logout.php">Logout</a></li>
  </ul>
</div>
                
            </form>
            </div>
        </div>
    </nav>

    <!-- end navbar -->

    <!-- card -->
    <div class="container p-5">
        <h2 class="fw-bold">My showroom</h2>
        <p class="fw-light">List showroom </p>
        <!-- read -->
            <div class="row g-2">
            <?php
                $sql = "SELECT * FROM showroom_mega_table ORDER BY id_mobil ASC";
                $query = mysqli_query($conn, $sql);

                //cek kalau error
                if(!$query){
                    die("Error".mysqli_errno($connector));
                }
            
                while($mycar = mysqli_fetch_assoc($query)){
            ?>
                <div class="col-4">
                    <div class="card">
                        <img src="dbimg/<?php echo $mycar['foto_mobil']; ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $mycar['nama_mobil']?></h5>
                            <p class="card-text"><?php echo $mycar['deskripsi']?></p>  
                            <div class="d-flex justify-content-start">
                                <div class="row">
                                    <div class="col">
                                        <a href="Detail-Mega.php?id_mobil=<?php echo $mycar['id_mobil'];?>" class="btn btn-primary rounded-4">Detail</a>
                                    </div>
                                    <div class="col">
                                        <a href="config/delete.php?id_mobil=<?php echo $mycar['id_mobil'];?>" class="btn btn-danger rounded-4">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        <!-- <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="img/mobil.png    " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex justify-content-start">
                        <div class="row g-2">
                            <div class="col">
                                <a href="#" class="btn btn-primary rounded-4">Detail</a>
                            </div>
                            <div class="col">
                                <a href="#" class="btn btn-danger rounded-4">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- end card -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>