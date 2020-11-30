<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bethany Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  @include('customer.template.section.link')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('customer.template.section.header')

  <main id="main">
		@yield('content')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 	@include('customer.template.section.footer')

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  @include('customer.template.section.script')

</body>

</html>