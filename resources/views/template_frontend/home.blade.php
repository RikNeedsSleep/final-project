<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>@yield('title', 'Pemesanan  Makanan Online')</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
   <!-- icon link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('user/css/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('user/css/flaticon.css') }}" />
	<link rel="stylesheet" href="{{ asset('user/css/slicknav.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('user/css/jquery-ui.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('user/css/owl.carousel.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('user/css/animate.css') }}" />
	<link rel="stylesheet" href="{{ asset('user/css/style.css') }}" />

	@yield('css')

	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>

<body>
	<!-- css fitur hubungi kami -->
<style>
        /* Floating Button */
        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 2px 2px 3px #999;
            display: flex;
            align-items: center;
        }

        /* Popup Container */
        #whatsapp-popup {
            position: fixed;
            bottom: 100px;
            right: 20px;
            width: 300px;
            background-color: white;
            box-shadow: 0px 0px 10px 0px #000;
            border-radius: 10px;
            z-index: 1000;
            display: none;
        }

        /* Popup Content */
        .whatsapp-popup-content {
            padding: 20px;
            text-align: center;
        }

        /* Close Button */
        .whatsapp-popup-content .close {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #000;
            font-size: 20px;
            cursor: pointer;
        }

        /* WhatsApp Button */
        .whatsapp-button {
            display: inline-block;
            margin-top: 10px;
            background-color: #25D366;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>

	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

  	@include('template_frontend.navbar')

	@yield('content')

  	@include('template_frontend.footer')

 <!-- WhatsApp Popup Button -->
 <div id="whatsapp-popup">
        <div class="whatsapp-popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <p>Hubungi kami sekarang di WhatsApp!</p>
            <a href="https://wa.me/+6287844193959" target="_blank" class="whatsapp-button">
                <i class="fab fa-whatsapp"></i> Hubungi Sekarang
            </a>
        </div>
    </div>

    <!-- WhatsApp Floating Button -->
    <button class="whatsapp-float" onclick="openPopup()">
        <i class="fab fa-whatsapp"></i> Hubungi Kami
    </button>

    <script>
        function openPopup() {
            document.getElementById('whatsapp-popup').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('whatsapp-popup').style.display = 'none';
        }

        // Optional: Auto-close popup after 10 seconds
        setTimeout(function() {
            document.getElementById('whatsapp-popup').style.display = 'none';
        }, 10000);
    </script>
