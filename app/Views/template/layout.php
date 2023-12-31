<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title><?= isset($title)?$title:'Copywriting Generator' ?></title>
  <!-- Favicon -->
  <link rel="icon" href="/assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="/assets/template/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="/assets/template/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="/assets/css/argon.css?v=1.2.0" type="text/css">

  <?= $this->renderSection('head') ?>
</head>

<body>
  <!-- Navbar -->
  <?php if( logged_in() ): ?>
    <?= $this->include('template/sidebar') ?>
  <?php else: ?>
    <?= $this->include('template/navbar/public') ?>
  <?php endif; ?>

  <!-- Main content -->
  <div class="main-content" id="panel">

    <?php if( logged_in() ): ?>
      <?= $this->include('template/navbar/user') ?>
      <?= $this->include('template/header') ?>
      <div class="container-fluid mt--6">
        <?= $this->renderSection('content') ?>
      </div>
    <?php else: ?>
        <?= $this->renderSection('content') ?>
    <?php endif; ?>


  </div>
  
  <?= $this->include('template/footer') ?>
  <!-- Core -->
  <script src="/assets/template/jquery/distt_/jquery.min.js"></script>
  <script src="/assets/template/bootstrap/distt_/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/template/js-cookie/js.cookie.js"></script>
  <script src="/assets/template/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="/assets/template/jquery-scroll-lock/distt_/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="/assets/js/argon.js?v=1.2.0"></script>
  <script src="/assets/js/my-script.js"></script>
  <?= $this->renderSection('script') ?>
</body>

</html>