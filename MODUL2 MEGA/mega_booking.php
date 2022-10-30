<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Sewa Mobil Megan</title>
    <style>
        
    </style>
</head>
<body>
    <body style="background-color:#550531;">
    <nav class="navbar-dark bg-secondary ">
      <ul class="nav justify-content-center">

        <li class="nav-item ">
            <h6 style="text-align: center;color:#c6a7b8;">
          <a class="nav-link active text-light" href="mega_home.php">
            Home
          </a>
            </h6>
        </li>
        <li class="nav-item ">
            <h6 style="text-align: center;color:#c6a7b8;">
          <a class="nav-link active text-light" href="mega_booking.php">
            Booking
          </a>
          </h6>
        </li>
      </ul>
    </nav>
    <br>
    <br>
    <br>

            <div class = "container style="text-align: center; padding-top: 0.2cm;">
            <br>
            <div class="class text-left mb-5 text-light">
            <p class="bg-secondary" style="text-align:center;color:#c6a7b8;">
            <b>
                Reserve your venue now!
            </b> 
            </p>
            </div>

            <div class="container mt-7" style="padding-left: 10%; padding-right:10%" width=100%>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="brio.jfif"  width="200" style="margin-top: 3cm; margin-bottom:3cm; margin-left:1cm;">
                    </div>
                    <div class="col-md-8">
                    <div class="container mt-5 ">
                    </div>
            
                <div class="row no-gutters">
                <div class="col-md-5">
                    <from action="mega_mybooking.php" method="GET">
                        <div class="form-group">
                            <label for="formGroupExampleInput">
                                <b>
                                    Name
                                </b>
                            </label>

                            <input type="text" class="form-control" name="Name" value="Mega_1202200003" readonly>
                        </div>

                        <div class="form-group"> 
                            <label for= "date" >
                                <b>
                                    Book Date:
                                </b>
                            </label>
                            
                            <input type= "date" class= "form-control" name="date" value="mm/dd/yyyy">
                        </div>

                        <div class="form-group">
                            
                            <label for="start">
                                <b>
                                    Start Time
                                </b>
                            </label>
                            <input type= "start" class= "form-control" name="start" value="">
                        </div>

                        <div class="form-group">
                            <label for="Duration">
                                <b>
                                    Duration (Days):
                                </b>
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="buildtype">
                                <b>
                                    Car Type
                                </b>
                            </label>

                            <select class="custom-select mr-sm-2" name="Duration">
                                <option value="1">
                                    Brio
                                </option>
                                
                                <option value="2">
                                    Ertiga
                                </option>
                                
                                <option value="3">
                                    Rush
                                </option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="phonenumber">
                                <b>
                                    Phone Number
                                </b>
                            </label>

                            <input type= "phonenumber" class= "form-control" name="phonenumber" value="Enter Your Phone Number">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Membutuhkan Supir ?</label>
                            <div>
                                <input type="checkbox" name="supir" value="ya" id="radio-ya" />
                                <label for="radio-ya">Health protocol /Rp15.000</label>
                                <br>
                                <input type="checkbox" name="supir" value="ya" id="radio-ya" />
                                <label for="radio-ya">Driver /Rp75.000</label>
                                <br>
                                <input type="checkbox" name="supir" value="ya" id="radio-ya" />
                                <label for="radio-ya">Full filled /Rp150.000</label>
                                <br>
                
                            </div>  
                        </div>
                        

                        <form action="mega_mybooking.php" method="POST">
                          <button type="submit" class="btn btn-primary" style="padding-left: 3%; padding-right: 3%; width: 100%">
                          <a class="nav-link active text-light" href="mega_mybooking.php">
                                BOOK
                            </a>
                        </button>
                        </form>
                </div>
                </div>
                <br>
                <br>
                <br>

<footer class="bg-light text-center text-lg-start fixed-bottom">
  <div class="text-center p-2" style="background-color:#395B64">
  <h6 style="text-align: center;color:#c6a7b8;">
    Created by Mega_1202200003
  </div>
</footer>
</body>
</html>