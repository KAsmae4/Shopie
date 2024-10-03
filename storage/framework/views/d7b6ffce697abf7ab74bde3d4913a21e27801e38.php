<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Ogani Template" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Shopping</title>
    <link style="size: 100px;" rel="icon" type="images/x-icon" href="<?php echo e(asset('frontend/img/log.png')); ?>" />

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/font-awesome.min.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/elegant-icons.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/nice-select.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/jquery-ui.min.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/owl.carousel.min.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/slicknav.min.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>" type="text/css" />
  </head>

  <body>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>

    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="header__logo">
              <a href="/"><img src="<?php echo e(asset('frontend/img/logo.png')); ?>" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header Section End -->

    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer Section Begin -->
    <footer class="footer spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer__about">
              <div class="footer__about__logo">
                <a href="./index.html"><img src="<?php echo e(asset('frontend/img/logo.png')); ?>" alt="" /></a>
              </div>
              <ul>
                <li>Address: 60-49 Road 11378 New York</li>
                <li>Phone: +65 11.188.888</li>
                <li>Email: hello@colorlib.com</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
            <div class="footer__widget">
              <h6>Liens Utiles</h6>
              <ul>
              <li><a href="#">À propos de nous</a></li>
              <li><a href="#">À propos de notre boutique</a></li>
              <li><a href="#">Achat sécurisé</a></li>
              <li><a href="#">Politique de confidentialité</a></li>
            </ul>
            <ul>
              <li><a href="#">Qui nous sommes</a></li>
              <li><a href="#">Nos services</a></li>
              <li><a href="#">Projets</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="footer__widget">
            <h6>Abonnez-vous à notre newsletter dès maintenant</h6>
            <p>Recevez des mises à jour par e-mail sur notre dernière boutique et nos offres spéciales.</p>
            <form action="#">
              <input type="text" placeholder="Entrez votre adresse e-mail" />
              <button type="submit" class="site-btn">S'abonner</button>
            </form>
              <div class="footer__widget__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="footer__copyright">
              <div class="footer__copyright__text">
                <p>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  All rights reserved | This template is made with
                  <i class="fa fa-heart" aria-hidden="true"></i> by
                  <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
              </div>
              <div class="footer__copyright__payment">
                <img src="img/payment-item.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="<?php echo e(asset('frontend/js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/jquery.nice-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/jquery.slicknav.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/mixitup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
  </body>
</html><?php /**PATH C:\Laravel\eco\resources\views/layouts/checkout.blade.php ENDPATH**/ ?>