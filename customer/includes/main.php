<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap" rel="stylesheet">
</head>

<body>

  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">



        <div class="currency">
          <a class="currency__change" href="customer/my_account.php?my_orders">
            <?php
            if (!isset($_SESSION['customer_email'])) {
              echo "Welcome : Guest";
            } else {
              echo "Welcome : " . $_SESSION['customer_email'] . "";
            }
            ?>
          </a>
        </div>

        <div class="basket">
          <a href="cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> items
          </a>
        </div>


        <ul class="login">

          <li class="login__item">
            <?php
            if (!isset($_SESSION['customer_email'])) {
              echo '<a href="customer_register.php" class="login__link">Register</a>';
            } else {
              echo '<a href="customer/my_account.php?my_orders" class="login__link">My Account</a>';
            }
            ?>
          </li>


          <li class="login__item">
            <?php
            if (!isset($_SESSION['customer_email'])) {
              echo '<a href="checkout.php" class="login__link">Sign In</a>';
            } else {
              echo '<a href="./logout.php" class="login__link">Logout</a>';
            }
            ?>

          </li>


        </ul>

      </div>
    </div>
    <!-- bottomline -->

    <div class="page-header__bottomline">
      <div class="container clearfix">

        <div class="logo">
          <a class="logo__link" href="index.php">
            <b style="font-family: 'Oleo Script', cursive; font-size:xx-large;">RequiSite</b>
          </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">
            <li class="categories__item">
              <a class="categories__link categories__link--active" href="shop.php">View All Products</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

  </header>