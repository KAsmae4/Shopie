<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="Ogani Template" />
  <meta name="keywords" content="Ogani, unica, creative, html" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Shopping.</title>
  <link style="size: 100px;" rel="icon" type="images/x-icon" href="<?php echo e(asset('frontend/img/log.png')); ?>" />

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet" />

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
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Humberger Begin -->
  <div class="humberger__menu__overlay"></div>
  <div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
      <a href="#"><img src="<?php echo e(asset('frontend/img/logo.png')); ?>" alt="" /></a>
    </div>
    <div class="humberger__menu__cart">
      <ul>
        <li>
          <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-shopping-bag"></i> <span><?php echo e($cartCount); ?></span></a>
        </li>
      </ul>
      <div class="header__cart__price">item: <span>$<?php echo e($cartTotal); ?></span></div>
    </div>
    <div class="humberger__menu__widget">
      <?php if(auth()->guard()->guest()): ?>
      <div class="header__top__right__language">
        <div class="header__top__right__auth">
          <a href="<?php echo e(route('login')); ?>"><i class="fa fa-user"></i> Login</a>
        </div>
      </div>
      <div class="header__top__right__auth" style="margin-left: 20px">
        <a href="<?php echo e(route('register')); ?>"><i class="fa fa-user"></i> Register</a>
      </div>
      <?php else: ?>
      <div class="header__top__right__language">
        <div class="header__top__right__auth">
          <a href=""><i class="fa fa-user"></i> <?php echo e(auth()->user()->username); ?></a>
        </div>
        <span class="arrow_carrot-down"></span>
        <ul>
          <li><a href="#">Profile</a></li>
        </ul>
      </div>
      <div class="header__top__right__auth" style="margin-left: 20px">
        <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-user"></i> Logout</a>
        <form action="<?php echo e(route('logout')); ?>" id="logout-form" method="post">
          <?php echo csrf_field(); ?>

        </form>
      </div>
      <?php endif; ?>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
      <ul>
        <li class="active"><a href="/">Accueil</a></li>
        <li><a href="<?php echo e(route('shop.index')); ?>">Boutique</a></li>
        <li>
          <a href="#">Catégories</a>
          <ul class="header__menu__dropdown">
            <?php $__currentLoopData = $menu_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e(route('shop.index', $menu_category->slug)); ?>"><?php echo e($menu_category->name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
    </div>
  </div>
  <!-- Humberger End -->

  <!-- Header Section Begin -->
  <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="header__top__left">

            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <?php if(auth()->guard()->guest()): ?>
            <div class="header__top__right">
              <div class="header__top__right__language header__top__right__auth">
                <a class="d-inline" href="<?php echo e(route('login')); ?>"><i class="fa fa-user"></i> Login</a>
              </div>
              <div class="header__top__right__auth">
                <a href="<?php echo e(route('register')); ?>"><i class="fa fa-user"></i> Register</a>
              </div>
            </div>
            <?php else: ?>
            <div class="header__top__right">
              <div class="header__top__right__language header__top__right__auth">
                <a class="d-inline" href="#"><i class="fa fa-user"></i> <?php echo e(auth()->user()->username); ?></a>
                <span class="arrow_carrot-down"></span>
                <ul>
                  <li><a href="#">Profile</a></li>
                </ul>
              </div>
              <div class="header__top__right__auth">
                <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit()"><i class="fa fa-user"></i> Logout</a>
                <form action="<?php echo e(route('logout')); ?>" id="logout-form" method="post">
                  <?php echo csrf_field(); ?>
                </form>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="header__logo">
            <a href="/"><img src="<?php echo e(asset('frontend/img/logo.png')); ?>" alt="" /></a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="header__menu">
            <ul>
              <li class="active"><a href="/">Accueil</a></li>
              <li><a href="<?php echo e(route('shop.index')); ?>">Boutique</a></li>
              <li>
                <a href="#">Catégories</a>
                <ul class="header__menu__dropdown">
                  <?php $__currentLoopData = $menu_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><a href="<?php echo e(route('shop.index', $menu_category->slug)); ?>"><?php echo e($menu_category->name); ?></a></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              </li>
              <li><a href="#">Contact</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-lg-3">
          <div class="header__cart">
            <ul>
              <li>
                <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
              </li>
              <li>
                <a href="<?php echo e(route('cart.index')); ?>"><i class="fa fa-shopping-bag"></i> <span><?php echo e($cartCount); ?></span></a>
              </li>
            </ul>
            <div class="header__cart__price">item: <span>$<?php echo e($cartTotal); ?></span></div>
          </div>
        </div>
      </div>
      <div class="humberger__open">
        <i class="fa fa-bars"></i>
      </div>
    </div>
  </header>
  <!-- Header Section End -->

  <!-- Hero Section Begin -->
  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="hero__search">
            <div class="hero__search__form">
              <form action="#">
                <input type="text" placeholder="Que recherchez-vous?" />
                <button type="submit" class="site-btn">SEARCH</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->

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
              <li>Address: 11-22 Benguerir 43150 Morocco</li>
              <li>Phone: +212 600000009</li>
              <li>Email: shopping@gmail.com</li>
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
                All rights reserved | Made with
                <i class="fa fa-heart" aria-hidden="true"></i> by
                <a href="https://colorlib.com" target="_blank">KERARMI ASMAE</a>
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

</html><?php /**PATH C:\Laravel\eco\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>