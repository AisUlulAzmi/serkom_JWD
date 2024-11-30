<!--koneksi ke database dan melakukan pemanggilan data-->
<?php
include('konekgrapik.php');
$data_beasiswa = mysqli_query($connect, "SELECT beasiswa FROM beasiswa GROUP BY beasiswa");
$pendaftar = mysqli_query($connect,"SELECT COUNT(ipk) AS MasukanNama FROM beasiswa GROUP BY beasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--header-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik Jumlah Pendaftar Beasiswa</title>

    <!-- Highcharts Library -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

   <!-- Bootstrap CSS -->
   <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/css/style.css" />

</head>
<body>
    
    <div class="p-1" style="background-color: rgb(220, 220, 220)">
    <p class="text-right mr-5 m-1 text-nama" style="color: rgb(100, 100, 100)">
      By Ais Ulul Azmi
      </p>
    </div>

    <!-- nav & Hero -->
    <div class="container">
      <div class="card custom-card my-4 navbar-dark bg-danger">
        <!-- nav -->
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand ml-3 text-brand" href="index.html">Beasiswa</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarsExample10"
            aria-controls="navbarsExample10"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div
            class="collapse navbar-collapse justify-content-md-center"
            id="navbarsExample10"
          >
            <ul class="navbar-nav text-menu">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="daftar.php">Daftar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="showdata.php">Hasil</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="grafik.php">Chart</a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- And nav -->
      </div>
    </div>
    <!-- And nav & Hero -->


    <!-- Grafik -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card custom-card bg-white my-5">
                    <div class="card-body">
                        <canvas id="pendaftarChart" width="800" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- And Grafik -->


    <!-- Footer -->
    <footer class="text-center bg-danger text-white p-2 mt-5">
      <h5 class="mt-3">&copy; 2024 november</h5>
    </footer>
    <!-- And Footer -->

    <script>
    document.addEventListener('DOMContentLoaded', function() {
    var ctx = document.getElementById("pendaftarChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
                    labels: [<?php while($row = mysqli_fetch_array($data_beasiswa)){echo '"'.$row['beasiswa'].'",';}?>],
                    datasets: [{
                        label: 'Jumlah Pendaftar',
                        data: [<?php while($row = mysqli_fetch_array($pendaftar)){echo $row['MasukanNama'].',';}?>],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.7)',
                            'rgba(54, 162, 235, 0.7)',
                            'rgba(255, 206, 86, 0.7)',
                            'rgba(75, 192, 192, 0.7)',
                            'rgba(153, 102, 255, 0.7)',
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                            stepSize: 1
                        }
                    },
                    responsive: true,
                    maintainAspectRatio: false,
                    aspectRatio: 3,
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        });
    </script>

<script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
</body>
</html>
