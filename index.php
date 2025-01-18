<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Care Helpline</title>

    <!-- Google Fonts - Exo 2 -->
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome for the phone icon -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
    .bubble-button {
      position: fixed;
      bottom: 10px;
      right: 10px;
      padding: 15px;
      border-radius: 50%;
      background-color: green; /* Set the background color to green */
      color: white; /* Make the icon white */
      z-index: 9999;
      border: none;
    }
  
  </style>
    
    <style>
        .footer {
            background-color: #0A3642;
            color: #ffffff;
            padding: 40px 0;
            font-size: 14px;
        }
        .footer h5 {
            font-weight: bold;
            margin-bottom: 20px;
        }
        .footer a {
            color: #ffffff;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .footer-icons a {
            color: #ffffff;
            font-size: 18px;
            margin-right: 15px;
        }
        .footer-icons a:hover {
            color: #dddddd;
        }
        .footer-bottom {
            border-top: 1px solid #444444;
            margin-top: 20px;
            padding-top: 10px;
            font-size: 12px;
            text-align: center;
        }
    </style>
    
    <style>
        .card-title {
            /* position: absolute; */
            bottom: 10px;
            left: 10px;
            /* background-color: rgba(0, 0, 0, 0.6); */
            /* color: #fff; */
            padding: 5px 0px;
            border-radius: 5px;
        }
        .high-demand {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 3px 8px;
            border-radius: 5px;
            font-size: 12px;
        }
    </style>
    <style>
    .body1 {
      background-color: #0A3642; /* Dark teal background */
      color: #f8f9fa; /* Light text */
    }
    .section-header h2 {
      font-weight: bold;
      margin-bottom: 10px;
    }
    .section-header p {
      font-size: 1rem;
      color: #e4e7eb;
    }
    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      height: 100%;
    }
    .card img {
      height: 200px;
      object-fit: cover;
    }
    .card-title {
      font-weight: bold;
      color: #102A43;
    }
    .card-text {
      font-size: 0.9rem;
      color: #555;
    }
    .view-details {
      color: #007bff;
      font-weight: bold;
      text-decoration: none;
    }
    .view-details:hover {
      text-decoration: underline;
    }
    .row.g-4 .col-md-4 {
      display: flex;
    }
    .card {
      display: flex;
      flex-direction: column;
    }
  </style>
    <style>
    .image-container {
      position: relative;
      border-radius: 15px;
      overflow: hidden;
      max-width: 400px;
      margin: auto;
    }

    .image-container img {
      width: 100%;
      border-radius: 15px;
    }

    .badge-box {
      position: absolute;
      top: 10px;
      left: 10px;
      background-color: white;
      border-radius: 10px;
      padding: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      font-size: 14px;
      font-weight: bold;
    }

    .call-us {
      position: absolute;
      bottom: 10px;
      left: 10px;
      background-color: white;
      border-radius: 10px;
      padding: 5px 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      font-size: 14px;
      color: #28a745;
      font-weight: bold;
    }

    .call-us a {
      text-decoration: none;
      color: #28a745;
    }

    .highlight-box {
      background-color: #f8f9fa;
      /* Light background for the overlay */
      border-radius: 8px;
      padding: 10px;
      font-size: 14px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .feature-list .icon {
      color: #28a745;
      /* Green check icon color */
      font-size: 20px;
      margin-right: 10px;
    }

    .custom-btn {
      background-color: #28a745;
      color: white;
      font-weight: bold;
    }
  </style>

<style>
        .hero-section1 {
            position: relative;
            background-image: url('Assets/img/1.png'); /* Replace with actual image URL */
            background-size: cover;
            background-position: center;
            height: 400px;
            border-radius: 10px;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .hero-section1::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Adds a dark overlay */
            border-radius: 10px;
            z-index: 1;
        }
        .hero-content {
            position: relative;
            z-index: 2;
        }
        .btn-custom {
            background-color: #0A3642;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }
       
    </style>
    <!-- Custom Style for Font -->
    <style>
        body {
            font-family: 'Exo 2', sans-serif;
        }
        .stat-card {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: -50px;
        }
		
		@media only screen and (max-width: 600px){
			.stat-card{
				transform: scale(0.6);
				top: 1em !important;
				left: -2em !important;
			}
			
			.navTxt{
				font-size: 1em !important;
				margin: 5px !important;
			}
		}

        .hero-image img {
            border-radius: 15px;
            width: 100%;
        }

        .client-satisfaction {
            background: #ffffff;
            border-radius: 15px;
            padding: 10px 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .hero-section {
            position: relative;
        }

        .total-services {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 200px;
        }
    </style>
    <style>
    
    .hero-section {
      text-align: center;
      padding: 4rem 2rem;
    }
    .stat-card {
      width: 14rem;
    }
  </style>
</head>
<body>

<?php
	$includesDir = __DIR__ . '/components/';
	require $includesDir . 'header.php';
?>

  <!-- Hero Section -->
  <div class="hero-section">
    <p class="text-uppercase text-muted fw-bold">Turning Repair Needs Into Reality</p>
    <h1 class="fw-bold display-5">Quick and Reliable Home Appliance Repair Service</h1>
    <p class="text-muted mt-3">
      Professional service that specializes in repairing and maintaining household or commercial appliances.
    </p>
    <div class="d-flex justify-content-center mt-4">
      <a href="https://api.whatsapp.com/send?phone=+918807224263&text=Enquiry" class="btn btn-success me-3"><i class="bi bi-whatsapp me-2"></i>WhatsApp</a>
      <a href="tel:8807224263" class="btn btn-outline-success"><i class="bi bi-telephone-fill me-2"></i>8807224263</a>
    </div>
  </div>



  <div class="container py-5">
        <div class="hero-section">
            <!-- Hero Image -->
            <div class="hero-image">
                <img src="Assets/img/12.png" alt="Technician" class="img-fluid">
            </div>

            <!-- Total Services Card -->
            <div class="total-services stat-card">
                <h6 class="text-muted">Total Services</h6>
                <h1 class="fw-bold text-dark">9,812+</h1>
                <p class="text-success">Increase of 15% this month</p>
            </div>
            <!-- Client Satisfaction Box -->
            <div class="position-absolute bottom-0 end-0 m-4 client-satisfaction">
                    <h6 class="mb-0 fw-bold text-dark">Over 1k clients satisfied</h6>
                    <small class="text-muted fs-7">with our recent work</small>
                </div>

            
        </div>
    </div>

    <div class="container py-5">
    <div class="row align-items-center">
      <!-- Left Section (Image) -->
      <div class="col-md-6">
        <div class="image-container">
          <!-- Image -->
          <img src="Assets/img/11.png" alt="Technician holding tools">

          <!-- Badge -->
          <div class="badge-box">
            <div>15+ Years</div>
            <small>Experience in home appliance repairing service.</small>
          </div>

          <!-- Call Us -->
          <div class="call-us">
            <a href="tel:8807224263">Call Us: 8807224263</a>
          </div>
        </div>
      </div>

      <!-- Right Section (Text) -->
      <div class="col-md-6 py-5">
        <h2 class="fw-bold">About Us</h2>
        <h3 class="fw-bold">Welcome to Elite Service Engineering!</h3>
        <p>
          Most trusted home appliance service and repair solutions. With verified professionals who come to your doorstep across your city.
        </p>
        <ul class="feature-list list-unstyled">
          <!-- Feature 1 -->
          <li class="d-flex align-items-start mb-3">
            <span class="icon">&#10003;</span>
            <div>
              <h5 class="fw-bold mb-1">Custom-Tailored Solutions</h5>
              <p class="mb-0">We design and manufacture products specifically to meet your unique needs.</p>
            </div>
          </li>

          <!-- Feature 2 -->
          <li class="d-flex align-items-start mb-3">
            <span class="icon">&#10003;</span>
            <div>
              <h5 class="fw-bold mb-1">Precision and Quality Assurance</h5>
              <p class="mb-0">We guarantee that every product meets the highest standards of precision.</p>
            </div>
          </li>

          <!-- Feature 3 -->
          <li class="d-flex align-items-start">
            <span class="icon">&#10003;</span>
            <div>
              <h5 class="fw-bold mb-1">On-Time Delivery and Flexibility</h5>
              <p class="mb-0">We prioritize timely delivery and offer flexible solutions to adapt to you.</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
    <div class="body1">
  <div class="container py-5 body1">
    <!-- Section Header -->
    <div class="text-center section-header mb-5">
      <h2>Our Project</h2>
      <h3>We Services provided best offer</h3>
      <p>With a strong reputation for reliability and expertise, we specialize in servicing a wide range of home appliances, from refrigerators and washing machines to air conditioners and microwaves.</p>
    </div>

    <!-- Service Cards -->
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Card Design</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .card-title {
      font-size: 1.25rem;
      font-weight: bold;
      color: #333;
    }
    .card-text {
      font-size: 0.95rem;
      color: #666;
    }
    .view-details {
      font-weight: bold;
      text-decoration: none;
      color: #007bff;
      transition: color 0.3s ease;
    }
    .view-details:hover {
      color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <h2 class="text-center mb-4">Our Services</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <!-- Card 1 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="Assets/img/6.png" class="card-img-top" alt="Unmatched Quality">
          <div class="card-body">
            <h5 class="card-title">Unmatched Quality</h5>
            <p class="card-text">We utilize state-of-the-art technology and industry best practices to deliver products that meet the highest standards of quality and precision.</p>
            <a href="#" class="view-details">View Details →</a>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="Assets/img/7.png" class="card-img-top" alt="Washing Machine Service">
          <div class="card-body">
            <h5 class="card-title">Washing Machine Service</h5>
            <p class="card-text">Our washing machine repair service offers fast, reliable solutions to get your appliance back in perfect working order. Trust our skilled technicians to handle repairs with precision and care.</p>
            <a href="#" class="view-details">View Details →</a>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="Assets/img/8.png" class="card-img-top" alt="TV/LED Repairing Service">
          <div class="card-body">
            <h5 class="card-title">TV/LED Repairing Service</h5>
            <p class="card-text">Our TV repair service offers fast, reliable solutions to get your television back to perfect working condition. Trust our expert technicians for quality repairs at affordable prices.</p>
            <a href="#" class="view-details">View Details →</a>
          </div>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="Assets/img/9.png" class="card-img-top" alt="Micro Oven Repairing Service">
          <div class="card-body">
            <h5 class="card-title">Micro Oven Repairing Service</h5>
            <p class="card-text">Microwave oven repair service offers fast and reliable solutions to get your microwave back to perfect working condition. Trust us to handle repairs with precision and care.</p>
            <a href="#" class="view-details">View Details →</a>
          </div>
        </div>
      </div>
      <!-- Card 5 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="Assets/img/10.png" class="card-img-top" alt="Refrigerator Repairing Service">
          <div class="card-body">
            <h5 class="card-title">Refrigerator Repairing Service</h5>
            <p class="card-text">Our refrigerator repair service offers swift and reliable solutions to keep your fridge running efficiently.</p>
            <a href="#" class="view-details">View Details →</a>
          </div>
        </div>
      </div>
    </div>
  </div>



  </div>
  </div>

  <div class="container py-5">
        <!-- Heading Section -->
        <div class="text-center mb-5">
            <h4 class="text-muted">Our Features</h4>
            <h2 class="fw-bold">Well expert team to check your home appliance.</h2>
            <p class="text-muted">Our skilled technicians are committed to delivering prompt, efficient, and high-quality service, ensuring that your appliances are restored to optimal working condition.</p>
        </div>

        <!-- Services Section -->
        <div class="container py-5">
    <h2 class="text-center mb-4">Our Popular Services</h2>
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-md-3 col-sm-6">
        <div class="card position-relative border-0 shadow h-100">
          <img src="Assets/img/2.png" class="card-img-top" alt="Plumbing Service">
          <div class="high-demand">High Demand</div>
          <div class="card-title px-2">Plumbing Service</div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-3 col-sm-6">
        <div class="card position-relative border-0 shadow h-100">
          <img src="Assets/img/3.png" class="card-img-top" alt="Washing Machine Service">
          <div class="high-demand">High Demand</div>
          <div class="card-title px-2">Washing Machine Service</div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-3 col-sm-6">
        <div class="card position-relative border-0 shadow h-100">
          <img src="Assets/img/4.png" class="card-img-top" alt="Refrigerator Repairing Service">
          <div class="high-demand">High Demand</div>
          <div class="card-title px-2">Refrigerator Repairing Service</div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-3 col-sm-6">
        <div class="card position-relative border-0 shadow h-100">
          <img src="Assets/img/5.png" class="card-img-top" alt="TV/LED Repairing">
          <div class="high-demand">High Demand</div>
          <div class="card-title px-2">TV/LED Repairing</div>
        </div>
      </div>
    </div>
  </div>
    </div>




    <div class="container my-5">
        <!-- Hero Section -->
        <div class="hero-section1">
            <div class="hero-content">
                <h1 class="fw-bold">Revitalize Your Equipment with Our Expert Repair Services</h1>
                <p class="mt-2">Let us help you elevate your service capabilities.</p>
                <a href="contact.php" class="text-decoration-none btn-custom mt-3">Contact us</a>
            </div>
        </div>
    </div>



<?php
	require $includesDir . 'footer.php';
?>
    <a href="tel:8807224263" class="bubble-button d-block d-sm-none">
    <i class="fas fa-phone-alt"></i>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>