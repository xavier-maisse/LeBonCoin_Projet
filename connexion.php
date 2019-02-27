<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LeBonCoin</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/style.css" rel="stylesheet">

</head>

<body>
  

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">LeBonCoin</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">DEPOSER UNE ANNONCE
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">OFFRES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">DEMANDES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">MES FAVORIS</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="#">MESSAGES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="connexion.php">Se connecter</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <!--page content-->
  <div class="container">
    <div class="text-center">
    <h1>Connexion</h1>
    <br/>
    <br/>
    <form id="connexion_form">
      <label>Nom utilisateur :</label>
      <input type="text" name="pseudo" id="pseudo" placeholder="Nom">
      <br/>
      <br/>

      <label>Mot de passe :</label>
      <input type="password" name="password" id="password">
      <br/>
      <br/>
      <br/>

      <input type="submit" class="btn btn-primary btn-lg" value="Me connecter">
    </form>
    <br/>
    <br/>
    <br/>
    <div class="alert alert-warning" id="id_incorrect" style="display: none;"role="alert">
      
    </div>
  </div>
  </div>
  

  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>



  <!--footer-->
  <footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
    <div class="container">
      <div class="row row-30">
        <div class="col-md-4 col-xl-5">
          <div class="pr-xl-4"><a class="brand" href="index.php"></a>
            <p>Ce site est une parodie du site Leboncoin. Son seul but est éducatif. Il entre dans un projet scolaire, module Js.</p>
            <!-- Rights-->
            <p class="rights"><span>©  </span><span class="copyright-year">2019</span><span> </span><span>Xavier Maisse</span><span>. </span><span>All Rights Reserved.</span></p>
          </div>
        </div>
        <div class="col-md-4">
          <h5>Contacts</h5>
          <dl class="contact-list">
            <dt>Address:</dt>
            <dd>IUT Info Aix-Marseille</dd>
            <dd>France</dd>
          </dl>
          <dl class="contact-list">
            <dt>Email:</dt>
            <dd><a href="mailto:#">xaviermais@live.fr</a></dd>
          </dl>
          <dl class="contact-list">
            <dt>Tel:</dt>
            <dd><a href="tel:#">+33 767571269</a>
            </dd>
          </dl>
        </div>
        <div class="col-md-4 col-xl-3">
          <h5>Links</h5>
          <ul class="nav-list">
            <li><a href="https://github.com/xavier-maisse/LeBonCoin_Projet">About</a></li>
            <li><a href="https://github.com/xavier-maisse/LeBonCoin_Projet">Projects</a></li>
            <li><a href="https://www.linkedin.com/in/xavier-maisse-782ba2179/">LinkedIn</a></li>
            <li><a href="https://www.linkedin.com/in/xavier-maisse-782ba2179/">Contacts</a></li>

          </ul>
        </div>
      </div>
    </div>
    <div class="row no-gutters social-container">
      <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
      <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
      <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
      <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
    </div>
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Script qui gere la connexion -->
  <script src="vendor/bootstrap/js/gestion_connexion.js"></script>

</body>

</html>