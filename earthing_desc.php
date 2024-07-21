<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Skytrans Electrical Private Limited - Product Description</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    .product-description {
      padding: 40px 0;
      background: #fff;
    }

    .product-title {
      font-size: 36px;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .product-image img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .product-details {
      font-size: 18px;
      line-height: 1.6;
      color: #666;
    }

    .product-details ul {
      list-style: none;
      padding-left: 0;
    }

    .product-details ul li {
      margin-bottom: 10px;
      padding-left: 20px;
      position: relative;
    }

    .product-details ul li::before {
      content: '\f058';
      font-family: 'Font Awesome 5 Free';
      font-weight: 900;
      color: #ff4a17;
      position: absolute;
      left: 0;
      top: 0;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include "includes/header.php"; ?>
  <!-- End Header -->
  <!--Main part-->
  <main id="main" style="padding-top: 20px;">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2 style="font-size: 24px;">Product Description</h2>
          <ol style="margin: 0; padding: 0; list-style: none; display: flex;">
            <li><a href="index.php" style="font-size: 18px;">Home</a></li>
            <li style="font-size: 18px;">Product Description</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- Product Description Section -->
    <section class="product-description">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 product-image" data-aos="fade-right" data-aos-delay="100" style="margin-bottom: 20px;">
            <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
              <img src="assets/img/earthing.jpeg" alt="distribution" style="width: 100%; height: auto; margin-bottom: -5px;">
            </div>
          </div>
          <div class="col-lg-6">
            <section class="features-specifications" style="padding-top: 40px;">
              <div class="container" data-aos="fade-up">
                <div class="section-title" style="text-align: center; margin-bottom: 10px;">
                  <h2 style="font-weight: bold; color: #333; font-size: 24px;">Features and Specifications</h2>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div id="tabButtonsContainer">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="features-tab" data-bs-toggle="tab" data-bs-target="#features" type="button" role="tab" aria-controls="features" aria-selected="true" onclick="toggleTab(this)" style="font-size: 20px; font-weight: bold; color: #ffffff; border: none; border-bottom: 2px solid #555; background-color: #ff4a17;">Features</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="specifications-tab" data-bs-toggle="tab" data-bs-target="#specifications" type="button" role="tab" aria-controls="specifications" aria-selected="false" onclick="toggleTab(this)" style="font-size: 20px; font-weight: bold; color: #000000; border: none; border-bottom: 2px solid #555;">Specifications</button>
                        </li>
                      </ul>
                    </div>



                    <script>
                      document.addEventListener("DOMContentLoaded", function() {
                        // Set the text color of the non-selected tabs to black
                        var tabButtons = document.querySelectorAll('#tabButtonsContainer .nav-link');
                        tabButtons.forEach(function(button) {
                          if (!button.classList.contains('active')) {
                            button.style.color = '#000000';
                          }
                        });
                      });

                      function toggleTab(button) {
                        var tabButtons = document.querySelectorAll('#tabButtonsContainer .nav-link');
                        tabButtons.forEach(function(btn) {
                          btn.style.backgroundColor = ''; // Reset background color for all buttons
                          btn.style.color = '#000000'; // Set text color of all buttons to black
                        });
                        button.style.backgroundColor = '#ff4a17'; // Set background color for the clicked button
                        button.style.color = '#ffffff'; // Set text color for the clicked button to white
                      }
                    </script>
                    <div class="tab-content" id="myTabContent" style="padding-top: 20px;">
                      <div class="tab-pane fade show active" id="features" role="tabpanel" aria-labelledby="features-tab">
                        <!-- Features content -->

                        <ul style="list-style: none; padding: 0;">
                          <li style="margin-bottom: 10px; font-size: 20px;"><i class="bi bi-check-circle" style="color: #ff8800; margin-right: 8px; font-size: 24px;"></i>Provides earth fault protection for ungrounded system</li>

                        </ul>
                      </div>
                      <div class="tab-pane fade" id="specifications" role="tabpanel" aria-labelledby="specifications-tab">
                        <!-- Specifications content -->

                        <table class="table table-bordered" style="color: #555; border:1px;">
                          <tbody>
                            <tr>
                              <th scope="row" style="background-color: #f8f9fa; font-size: 20px;">Equivalent Rating </th>
                              <td style="font-size: 20px;">Up to 20 MVA  </td>
                            </tr>
                            <tr>
                              <th scope="row" style="background-color: #f8f9fa; font-size: 20px;">Voltage Class </th>
                              <td style="font-size: 20px;">	Up to 33 kV </td>
                            </tr>
                            <tr>
                              <th scope="row" style="background-color: #f8f9fa; font-size: 20px;">Neutral Fault Current & fault duration</th>
                              <td style="font-size: 20px;">	As per customer requirement </td>
                            </tr>
                            <tr>
                              <th scope="row" style="background-color: #f8f9fa; font-size: 20px;">Auxiliary Load winding
                              </th>
                              <td style="font-size: 20px;">	Up to 630 kVA as per customer requirement</td>
                            </tr>
                            <tr>
                              <th scope="row" style="background-color: #f8f9fa; font-size: 20px;">Continuous Neutral Current 
                              <td style="font-size: 20px;">	As per customer requirement</td>
                            </tr>
                            <tr>
                              <th scope="row" style="background-color: #f8f9fa; font-size: 20px;">Frequency 	
                              </th>
                              <td style="font-size: 20px;">50/60 Hz 

                              </td>
                            </tr>
                            <tr>
                              <th scope="row" style="background-color: #f8f9fa; font-size: 20px;">Cooling
                              </th>
                              <td style="font-size: 20px;">ONAN/AN

                              </td>
                            </tr>
                            <tr>
                              <th scope="row" style="background-color: #f8f9fa; font-size: 20px;">Vector Group	
                              </th>
                              <td style="font-size: 20px;"> 	ZN0, ZNyn1 or ZNyn11
                              </td>
                            </tr>
                            <tr>
                              <th scope="row" style="background-color: #f8f9fa; font-size: 20px;">Winding Material	 
                              </th>
                              <td style="font-size: 20px;"> Cu / Al  </td>
                            </tr>
                            <tr>
                              <th scope="row" style="background-color: #f8f9fa; font-size: 20px;">Tapping
                              </th>
                              <td style="font-size: 20px;"> Off circuit links/switch
                              </td>
                            </tr>
                            <tr>
                              <th scope="row" style="background-color: #f8f9fa; font-size: 20px;">Insulating Medium	
                              </th>
                              <td style="font-size: 20px;">	Mineral Oil, Esters, Resin/Varnish
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>

    <!-- End Product Description Section -->
    <section class="features-specifications" style="padding-top: 40px;">
      <div class="container" data-aos="fade-up">
        <div class="section-title" style="text-align: left; margin-bottom: 40px;">
          <h2 style="font-weight: bold; color: #333; font-size: 24px;">Technical Specifications</h2>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <table class="table table-bordered" style="color: #555; border:1px">
              <thead>
                <tr>
                  <th style="background-color: #ff4a17; font-size: 20px; color:#fff;">Parameter</th>
                  <th style="background-color: #ff4a17; font-size: 20px; color:#fff;">Value</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td  style="background-color: #f8f9fa; font-size: 20px;">Special purpose transformer with zigzag or interconnected star winding </td>
                  <td  style="background-color: #f8f9fa; font-size: 20px;"></td>

                </tr>
                <tr>
                  <td  style="background-color: #f8f9fa; font-size: 20px;">Provides ground fault protection in 3-Phase, 3 wire system 
                  </td>
                  <td  style="background-color: #f8f9fa; font-size: 20px;">
                  </td>
                </tr>
                <tr>
                  <td  style="background-color: #f8f9fa; font-size: 20px;">With or without auxiliary winding for supplying local loads 
                  </td>
                  <td  style="background-color: #f8f9fa; font-size: 20px;">
                  </td>
                </tr>
                <tr>
                  <td rowspan="2" style="background-color: #f8f9fa; font-size: 20px;">Supply segments  
                  </td>
                  <td  style="background-color: #f8f9fa; font-size: 20px;">Industries
                  </td>
                </tr>
                <tr>
                  
                  <td  style="background-color: #f8f9fa; font-size: 20px;"> EHV Substations 

                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>


  </main>






  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



  <!-- ======= Footer ======= -->
  <?php include "includes/footer.php"; ?>
  <!-- End Footer -->
  <div id="preloader">
    <i class="fas fa-bolt"></i>
    <i class="fas fa-bolt" style="position: absolute; top: -20px; left: 15px;"></i>
  </div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>