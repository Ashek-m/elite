<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Details</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="bg-gray-50 flex items-center justify-center min-h-screen">
  <div class="container mx-auto px-6 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-white p-8 rounded-lg shadow-lg">
      <!-- Contact Details Section -->
      <div>
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Contact Detail</h2>
        <p class="text-gray-600 mb-6">
          If you need any help and prefer to reach out directly, feel free to do it via phone or email.
        </p>
        <div class="space-y-6">
          <!-- Location -->
          <div class="flex items-start">
            <div class="text-green-500 mr-4">
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.05 5.05a7 7 0 0113.9 0 7 7 0 01-13.9 0zM12 9a3 3 0 100-6 3 3 0 000 6z"/>
              </svg>
            </div>
            <div>
              <h3 class="font-bold text-gray-800">Location</h3>
              <p class="text-gray-600">
                Customer Care Helpline Support<br>
                No 3111, Office Road, TNHB Colony,<br>
                Madurai - 625012, Tamil Nadu.
              </p>
            </div>
          </div>
          <!-- Phone -->
          <div class="flex items-center">
            <div class="text-green-500 mr-4">
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10l9-9m12 0l-9 9m12-3v5m0 0v5m-2 3a6 6 0 01-6 6h-6a6 6 0 01-6-6v-5h12a6 6 0 016-6z"/>
              </svg>
            </div>
            <div>
              <h3 class="font-bold text-gray-800">Phone</h3>
              <p class="text-gray-600">8807224263</p>
            </div>
          </div>
          <!-- Mail -->
          <div class="flex items-center">
            <div class="text-green-500 mr-4">
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a3 3 0 003.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
            </div>
            <div>
              <h3 class="font-bold text-gray-800">Mail</h3>
              <p class="text-gray-600">eliteserviceengineering@gmail.com</p>
            </div>
          </div>
          <!-- Website -->
          <div class="flex items-center">
            <div class="text-green-500 mr-4">
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 16H3a3 3 0 013-3m6 6a3 3 0 01-3 3m6-6a3 3 0 013 3m-3-6h6m0 6a3 3 0 01-3 3m0-6V9m0-3a3 3 0 01-3-3m3 3h-6a3 3 0 01-3-3m6 6a3 3 0 013 3m-6-3H3"/>
              </svg>
            </div>
            <div>
              <h3 class="font-bold text-gray-800">Website</h3>
              <p class="text-gray-600">www.tncustomercaresupport.in</p>
            </div>
          </div>
          <!-- Social Icons -->
        </div>
      </div>
      <!-- Message Form -->
      <div>
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Drop Us A Message</h2>
        <form action="#" class="space-y-4">
          <input type="text" placeholder="Name" class="w-full border border-green-500 rounded-md p-3">
          <input type="email" placeholder="Email" class="w-full border border-green-500 rounded-md p-3">
          <input type="text" placeholder="Subject" class="w-full border border-green-500 rounded-md p-3">
          <textarea placeholder="Message" rows="4" class="w-full border border-green-500 rounded-md p-3"></textarea>
          <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-md font-bold hover:bg-green-600">
            SEND MESSAGE
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
