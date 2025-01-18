<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elite Service Engineering</title>
  <!-- Import Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Import Exo 2 Font -->
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome for the phone icon -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  
  <style>
    body {
      font-family: 'Exo 2', sans-serif;
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
</head>
<body>
  <div class="bg-white w-full py-16">
    <div class="container mx-auto max-w-5xl flex flex-col lg:flex-row items-center px-6">
      <!-- Left Content -->
      <div class="lg:w-1/2">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to Elite Service Engineering!</h1>
        <p class="text-gray-600 leading-relaxed">
          Elite Service Engineering, based in Madurai, provides expert repair and maintenance for refrigerators, washing machines, air conditioners, and more. Our skilled technicians ensure efficient, reliable service, prioritizing customer satisfaction for smooth and hassle-free home appliance performance.
        </p>
      </div>
      <!-- Right Image -->
      <div class="lg:w-1/2 flex justify-center mt-8 lg:mt-0">
        <div class="relative w-96 h-96">
          <!-- Green Background -->
          <div class="absolute inset-0 bg-green-500 rounded-lg translate-x-4 -translate-y-4"></div>
          <!-- Foreground Image -->
          <img src="Assets/img/about/Maskgroup.png" alt="Technician" class="relative z-10 rounded-lg w-full h-full object-cover">
        </div>
      </div>
    </div>
  </div>

  <div class="container mx-auto py-12 max-w-5xl">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Card 1 -->
    <div class="bg-white shadow-md rounded-lg p-6 flex items-start">
      <div class="flex items-center justify-center bg-green-500 text-white rounded-full w-16 h- mr-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
        </svg>
      </div>
      <div>
        <h3 class="text-lg font-bold text-gray-800 mb-2">Custom-Tailored Solutions</h3>
        <p class="text-gray-600">We design and manufacture products specifically to meet your unique needs.</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-white shadow-md rounded-lg p-6 flex items-start">
      <div class="flex items-center justify-center bg-green-500 text-white rounded-full w-16 h-7 mr-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
        </svg>
      </div>
      <div>
        <h3 class="text-lg font-bold text-gray-800 mb-2">Precision and Quality Assurance</h3>
        <p class="text-gray-600">We guarantee that every product meets the highest standards of precision.</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-white shadow-md rounded-lg p-6 flex items-start">
      <div class="flex items-center justify-center bg-green-500 text-white rounded-full w-16 h-7 mr-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
        </svg>
      </div>
      <div>
        <h3 class="text-lg font-bold text-gray-800 mb-2">On-Time Delivery and Flexibility</h3>
        <p class="text-gray-600">We prioritize timely delivery and offer flexible solutions to adapt to you.</p>
      </div>
    </div>
  </div>
</div>
<div class="flex items-center justify-center py-3 ">
  <div class="w-full max-w-6xl px-4">
    <div class="flex flex-col md:flex-row items-center md:items-start justify-around">
      <!-- Left Section -->
      <div class="mb-6 md:mb-0">
        <h1 class="text-2xl font-semibold text-gray-800">
          Why Choose Us for Your <br> Appliance Repair Needs?
        </h1>
      </div>

      <!-- Right Section -->
      <div class="flex items-center justify-center gap-10">
        <!-- Customer Satisfaction -->
        <div class="text-center">
          <p class="text-4xl font-bold text-green-600">98%</p>
          <p class="text-sm text-gray-600">Customer Satisfaction</p>
        </div>
        <!-- Divider -->
        <div class="h-10 w-px bg-gray-300"></div>
        <!-- Total Services -->
        <div class="text-center">
          <p class="text-4xl font-bold text-green-600">9812+</p>
          <p class="text-sm text-gray-600">Total Services</p>
        </div>
        <!-- Divider -->
        <div class="h-10 w-px bg-gray-300"></div>
        <!-- Years of Experience -->
        <div class="text-center">
          <p class="text-4xl font-bold text-green-600">15+</p>
          <p class="text-sm text-gray-600">Years of Experience</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=" py-10">
  <div class="container mx-auto max-w-5xl"> <!-- Increased max-width to 5xl -->
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
  <div class="max-w-5xl mx-auto p-6 bg-white ">
    <h2 class="text-center text-xl font-semibold text-gray-800">Best service ever in industry</h2>
    <h1 class="text-center text-3xl font-bold mt-2 text-gray-900">We Services provided best offer</h1>

    <p class="text-center mt-4 text-gray-600">
      With a strong reputation for reliability and expertise, we specialize in servicing a wide range of home
      appliances, from refrigerators and washing machines to air conditioners and microwaves.
    </p>

    <div class="flex flex-col md:flex-row items-center mt-6 gap-6 py-3">
    <div class="lg:w-1/2 flex justify-center mt-8 lg:mt-0 ">
        <div class="relative w-96">
          <!-- Green Background -->
          <div class="absolute inset-0 bg-green-500 rounded-lg -translate-x-4 -translate-y-4"></div>
          <!-- Foreground Image -->
          <img src="Assets/img/about/Maskgroup-1.png" alt="Technician" class="relative z-10 rounded-lg w-full object-cover">
        </div>
      </div>
      <div class="w-full md:w-1/2">
        <p class="text-gray-800 text-lg mb-4">
          Expert appliance repair with unbeatable offers! Skilled technicians ensure efficient, reliable service for all your home appliance needs.
        </p>
        <ul class="list-disc list-inside text-gray-700 space-y-2">
          <li><span class="font-semibold">Affordable Pricing</span><br> Quality service at the best rates.</li>
          <li><span class="font-semibold">Quick Turnaround</span><br> Fast and reliable solutions every time.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container my-5 max-w-5xl mx-auto">
    <!-- Hero Section -->
    <div class="hero-section1">
        <div class="hero-content">
            <h1 class="fw-bold fs-3">Revitalize Your Equipment with Our Expert Repair Services</h1>
            <p class="mt-2">Let us help you elevate your service capabilities.</p><br>
            <a href="contact.php" class="text-decoration-none btn-custom mt-3">Contact us</a>
        </div>
    </div>
</div>

</body>
</html>
