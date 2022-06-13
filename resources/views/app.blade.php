<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<meta property="og:site_name" content="Libro di Mormon Alta Voce" />
	    <meta property="og:title" content="Libro di Mormon Alta Voce" />
	    <meta property="og:description" content="Il Libro di Mormon letto dai membri italiani della Chiesa di Gesù Cristo dei Santi degli Ultimi Giorni." />
	    <meta property="og:image" itemprop="image" content="https://www.ldmaltavoce.com/img/christus.jpg/" />
		<meta property="og:url" content="https://www.ldmaltavoce.com/" />
		<meta property="og:type" content="website" />
	    <meta property="og:image:width" content="300">
	    <meta property="og:image:height" content="300">
		<meta property="fb:app_id" content="375423224454196"/>

        <title inertia></title>
        <!-- <title inertia>{{ config('app.name', 'Laravel') }}</title> -->

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia

        @env ('local')
            <!-- <script src="http://localhost:8080/js/bundle.js"></script> -->
        @endenv
		
		<link itemprop="thumbnailUrl" href="https://www.ldmaltavoce.com/img/christus.jpg">

		<span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
		<link itemprop="url" href="https://www.ldmaltavoce.com/img/christus.jpg">
		</span>
		
    </body>
</html>


