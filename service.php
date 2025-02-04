<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$includesDir = __DIR__ . '/components/';
		$pageTitle = "Elite Service Engineering";
		$metaDescription = "Elite Engineering Service: Expert solutions in engineering, construction, and project management.";
		$metaKeywords = "Elite Engineering, engineering solutions, construction, project management";
		$thumbnail = "https://example.com/path-to-thumbnail.jpg"; // Optional
		$canonicalUrl = "https://eliteengineeingservice.com/homepage";
		require $includesDir . 'metaData.php';
	?>
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    body {
      font-family: 'Exo 2', sans-serif;
    }
  </style>
  <style>
        .hero-section1 {
            position: relative;
            background-image: url('Assets/img/service/Banner.png'); /* Replace with actual image URL */
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
</head>
<body>

<?php
	require $includesDir . 'header.php';
?>

<div class="w-full">
  <div class="bg-white w-full py-16">
    <div class="container mx-auto max-w-7xl flex flex-col lg:flex-row items-center px-6">
      <!-- Left Content -->
      <div class="lg:w-1/2">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Always On Time And<br> Never Delay A Service</h1>
        <p class="text-gray-600 leading-relaxed">
        Always on time, delivering services without delay, ensuring quality,<br> reliability, and customer satisfaction every time.
        </p>
        <ul class="py-4">
            <li class="mb-2">-> Timely delivery is our topmost priority always.</li>
            <li class="mb-2">-> High-quality services ensure customer satisfaction guaranteed.</li>
            <li class="mb-2">-> Reliable solutions tailored to meet your unique needs.</li>
        </ul>
      </div>
      <!-- Right Image -->
      <div class="lg:w-1/2 flex justify-center mt-8 lg:mt-0">
        <div class="relative w-full  h-96">
          <!-- Green Background -->
          <div class="absolute inset-0 bg-green-500 rounded-lg translate-x-4 -translate-y-4 w-11/12 md:w-full"></div>
          <!-- Foreground Image -->
          <img src="Assets/img/Service/Maskgroup-5.png" alt="Technician" class="relative z-10 rounded-lg w-11/12 md:w-full h-full object-cover">
        </div>
      </div>
    </div>
  </div>

<div class=" py-10">
  <div class="container mx-auto max-w-7xl"> <!-- Increased max-width to 5xl -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
      
      <!-- Card 1 -->
      <div class="p-6 bg-green-500 text-white rounded-lg shadow">
        <div class="flex items-center space-x-4">
          <div class="bg-white text-green-500 p-2 rounded-full">
            <!-- Shield Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.89 1.577 5.5 2.577 7.5 3 0 5.01-2.99 9.865-7.5 11.25-4.51-1.385-7.5-6.24-7.5-11.25 2-0.423 4.61-1.423 7.5-3z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 10.5l2 2 4-4" />
            </svg>
          </div>
          <h2 class="text-xl font-bold">Experienced Professionals</h2>
        </div>
        <p class="mt-4 text-sm">
          Our team is composed of experienced cleaning professionals who know how to make your home sparkle.
        </p>
      </div>

      <!-- Card 2 -->
      <div class="p-6 bg-white text-gray-700 rounded-lg shadow">
        <div class="flex items-center space-x-4">
          <div class="bg-gray-100 text-gray-500 p-2 rounded-full">
            <!-- Handshake Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 11l2.5 2.5a1.5 1.5 0 002.12-2.12L12 6.5m-1 5.5L8.5 14.5a1.5 1.5 0 01-2.12-2.12L11 9m5 6h3m-3 0v3m0-3h-6a1.5 1.5 0 01-1.5-1.5v-3.75A1.5 1.5 0 0110.5 9H12" />
            </svg>
          </div>
          <h2 class="text-xl font-bold">Reliable and Trustworthy</h2>
        </div>
        <p class="mt-4 text-sm">
          Our clients can count on us to show up on time and provide consistent, high-quality repair services.
        </p>
      </div>

      <!-- Card 3 -->
      <div class="p-6 bg-white text-gray-700 rounded-lg shadow">
        <div class="flex items-center space-x-4">
          <div class="bg-gray-100 text-gray-500 p-2 rounded-full">
            <!-- Growth Arrow Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l4.5 4.5L15 7m6-2v6m0 0h-6" />
            </svg>
          </div>
          <h2 class="text-xl font-bold">Proven Track Record</h2>
        </div>
        <p class="mt-4 text-sm">
          We have a proven track record of delivering exceptional repair services that our clients love.
        </p>
      </div>

      <!-- Card 4 -->
      <div class="p-6 bg-white text-gray-700 rounded-lg shadow">
        <div class="flex items-center space-x-4">
          <div class="bg-gray-100 text-gray-500 p-2 rounded-full">
            <!-- Ribbon Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9.75c1.243 0 2.25-1.007 2.25-2.25s-1.007-2.25-2.25-2.25-2.25 1.007-2.25 2.25 1.007 2.25 2.25 2.25zM7.5 7.5C8.74 11.25 12 14.25 12 14.25s3.26-3 4.5-6.75m-9 8.25h9" />
            </svg>
          </div>
          <h2 class="text-xl font-bold">Satisfaction Guaranteed</h2>
        </div>
        <p class="mt-4 text-sm">
          Your satisfaction is our top priority. We strive to exceed your expectations and offer a guarantee.
        </p>
      </div>

    </div>
  </div>
  </div>
  <div class="container max-w-7xl py-5">
    <h2 class="text-2xl text-center mb-4">Best service ever in industry</h2>
    <h2 class="text-4xl font-bold text-center mb-4">We Services Provided Best Offer</h2>
    <p class=" text-center mb-5">With a strong reputation for reliability and expertise, we specialize in servicing a wide range of home<br> appliances, from refrigerators and washing machines to air conditioners and microwaves.</p>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <!-- Card 1 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="Assets/img/6.png" class="card-img-top" alt="Unmatched Quality">
          <div class="card-body">
            <h5 class="card-title">A/C Repair Services</h5>
            <p class="card-text">Our expert technicians are here to fix any cooling issues, ensuring your system runs smoothly.</p>
            <a href="contact.php" class="view-details">Contact Us →</a>
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
            <a href="contact.php" class="view-details">Contact Us →</a>
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
            <a href="contact.php" class="view-details">Contact Us →</a>
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
            <a href="contact.php" class="view-details">Contact Us →</a>
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
            <a href="contact.php" class="view-details">Contact Us →</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container my-5 max-w-7xl mx-auto">
    <!-- Hero Section -->
    <div class="hero-section1">
        <div class="hero-content px-3">
            <h1 class="fw-bold fs-6 ">Revitalize Your Equipment with Our Expert Repair Services</h1>
            <p class="mt-2">Let us help you elevate your service capabilities.</p><br>
            <a href="contact.php" class="text-decoration-none btn-custom mt-3">Contact us</a>
        </div>
    </div>
</div>
</div>



<?php
	require $includesDir . 'footer.php';
?>
</body>
</html>
