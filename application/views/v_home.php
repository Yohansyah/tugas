<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cek Obat</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="aset/img/favicon.png" rel="icon">
  <link href="aset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="aset/https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="aset/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="aset/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Pratt
    Template URL: https://templatemag.com/pratt-app-landing-page-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

  <!-- Fixed navbar -->
  <div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand smothscroll" href="#home"><b><i>Yoikihans Klinik</i></b></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#home" class="smothscroll">Home</a></li>
          <li><a href="#desc" class="smothscroll">Description</a></li>
          <li><a href="#showcase" class="smothscroll">Showcase</a></li>
          <li><a href="#contact" class="smothscroll">Regristrasi</a></li>
          <li><a href="#cek" class="smothscroll">Jenis Obat</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

<?php $this->load->view('c_home');?>

<?php $this->load->view('c_des');?>

<?php $this->load->view('c_show');?>

<?php $this->load->view('c_reg');?>

<?php $this->load->view('c_cek');?>

  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Pratt</strong>. All Rights Reserved 
      </p>
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/pratt-app-landing-page-template/
          Licensing information: https://templatemag.com/license/
        -->
        Created with Pratt template by <a href="https://templatemag.com/">TemplateMag</a>
      </div>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="aset/lib/jquery/jquery.min.js"></script>
  <script src="aset/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="aset/lib/php-mail-form/validate.js"></script>
  <script src="aset/lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
