<style>
	.contactInfo{
	    display: flex;
		gap: 5px;
		margin-right: 10px;
		padding: 2px 10px;
		background: white;
		border-radius: 50px;
	}

  .text-blue1{
    color: #35A745;
  }

</style>
<style>
  .hero-section {
    position: relative;
    background-image: url('Assets/img/home.png'); /* Correct image path */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: white;
    padding: 100px 20px;
    text-align: center;
    z-index: 1;
  }

  /* Adding Black Overlay */
  .hero-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6); /* Adjust opacity (0.6 = 60% dark) */
    z-index: -1;
  }

  .hero-section h1, 
  .hero-section h3, 
  .hero-section p {
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* Enhances readability */
  }

  @media (max-width: 768px) {
    .hero-section {
      padding: 60px 10px;
    }
  }
</style>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<!-- Top Header -->
<div class="bg-white py-2 border-bottom d-none d-sm-block">
    <div class="container d-flex justify-content-center gap-5 text-muted">
        <a href="contact.php" class="text-decoration-none"><i class="bi bi-geo-alt-fill text-success me-1"></i> Find A Location</a>
        <span><i class="bi bi-telephone-fill text-success me-1"></i> 8807224263</span>
        <span><i class="bi bi-envelope-fill text-success me-1"></i> eliteserviceengineering@gmail.com</span>
    </div>
</div>


<!-- Navigation Bar -->
  <nav class="parentnav" style="background-color: #013642; display: flex;">
	  
	<div class="topnav" id="myTopnav">
		<a class="nav-link text-white navbar-brand text-white fw-bold navTxt" href="./index.php">Elite Service Engineering</a>
		<a class="nav-link text-white" href="./index.php">Home</a>
		<a class="nav-link text-white" href="./about.php">About Us</a>
		<a class="nav-link text-white" href="./service.php">Service</a>
		<a class="nav-link text-white" href="./contact.php">Contact Us</a>
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
		<i class="fa fa-bars"></i>
	  </a>
	</div>
			<!-- Phone Button -->
		<div class="d-none d-lg-flex justify-content-center align-items-center">
			<a href="tel:8807224263" class="contactInfo text-decoration-none">
				<i class="bi bi-telephone-fill text-success"></i><span class="text-success">8807224263</span>
			</a>
		</div>
  </nav>
    <style>
.parentnav{
	padding: 0 5em;
}
.topnav {
  overflow: hidden;
  width: 100%
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 750px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
  
  .parentnav{
	padding: 0 0.3em;
}
}

@media screen and (max-width: 750px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
	
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
            font-family: 'Exo 2', sans-serif !important;
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