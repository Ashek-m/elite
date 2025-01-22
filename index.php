<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$includesDir = __DIR__ . '/components/';
		$pageTitle = "Customer Care Helpline";
		$metaDescription = "Elite Engineering Service: Expert solutions in engineering, construction, and project management.";
		$metaKeywords = "Elite Engineering, engineering solutions, construction, project management";
		$thumbnail = "https://example.com/path-to-thumbnail.jpg"; // Optional
		$canonicalUrl = "https://eliteengineeingservice.com/homepage";
		require $includesDir . 'metaData.php';
	?>
	
	<style>
	        body {
            font-family: 'Exo 2', sans-serif;
        }
	</style>
</head>
<body>

<?php
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
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>