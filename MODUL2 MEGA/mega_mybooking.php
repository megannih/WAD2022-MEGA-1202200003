<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Sewa Mobil Megan</title>
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

        <div class = "container style="text-align: center; padding-top: 0.5cm;">

            <div class="class text-center mb-5 text-light">
                <p style="text-align: center;color:#c6a7b8;">
                <b>
                   Thank You Mega_1202200003 for Reserving
                   <br>
                   Please double check your reservation details
                  </b>
                  </p> 
                  </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">
          <b>
              Booking Number
          </b>
      </th>
      <th scope="col">
          <b>
              Name
          </b>
      </th>
      <th scope="col">
          <b>
              Check-in
          </b>
      </th>
      <th scope="col">
          <b>
                Check-out
          </b>
      </th>

      <th scope="col">
          <b>
                Car Type
          </b>
      </th>

      <th scope="col">
          <b>
                Phone Number
          </b>
      </th>

      <th scope="col">
          <b>
                Service(s)
          </b>
      </th>

      <th scope="col">
          <b>
                Total Price
          </b>
      </th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
          <?php 
          echo rand();
          ?></th>
      <td>Mega Ayu Natalia</td>
      <td>24-05-2022 10:00:00</td>
      <td>25-05-2022 10:00:00</td>
      <td>Brio</td>
      <td>081908763015</td>
      <td>- Health protocol
        <br>
        - Full Filled
      </td>
      <td>Rp 350.000</td>
    </tr>
<br>
<br>
<br>
  </tbody>
</table>
<footer class="bg-light text-center text-lg-start fixed-bottom">
  <div class="text-center p-2" style="background-color:#395B64">
  <h6 style="text-align: center;color:#c6a7b8;">
    Created by Mega_1202200003
  </div>
</footer>
</footer>
</body>
</html>