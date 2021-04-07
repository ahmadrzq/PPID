
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>403 &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('admin/assets/css/error/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/css/error/all.min.css')}}">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('admin/assets/css/error/style.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/css/error/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="page-error">
          <div class="page-inner">
            <h1>403</h1>
            <div class="page-description">
            	Anda tidak memiliki akses ke halaman ini
            </div>
            <div class="page-search">
              <div class="mt-3">
                <a href="{{ url()->previous() }}">Kembali halaman sebelumnya</a>
              </div>
            </div>
          </div>
        </div>
        <div class="simple-footer mt-5">
          PPID Kota Probolinggo 2021
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('admin/assets/css/error/modul/jquery.min.js')}}"></script>
  <script src="{{asset('admin/assets/css/error/modul/popper.js')}}"></script>
  <script src="{{asset('admin/assets/css/error/modul/tooltip.js')}}"></script>
  <script src="{{asset('admin/assets/css/error/modul/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/assets/css/error/modul/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('admin/assets/css/error/modul/moment.min.js')}}"></script>
  <script src="{{asset('admin/assets/css/error/modul/stisla.js')}}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{asset('admin/assets/css/error/js/scripts.js')}}"></script>
  <script src="{{asset('admin/assets/css/error/js/custom.js')}}"></script>
</body>
</html>