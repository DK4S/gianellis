<?php

function generateNav(){

  echo "
    <!-- Page Header -->
    <header id='page-header'>

      <!-- FXO Logo -->
      <div id='logo-container'>
        <a href='../index.php'><img id='logo-header' class='logo-header' src='../images/websitefxologo.svg' alt='Folly X O Logo, a small castle-like tower.'/></a>
      </div>

      <div id='ui-cluster' class='flex'>
        <!-- Nav -->
        <div id='hamburgerStack' class='overlay'>
          <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
          <nav id='nav'>
            <ul>
            <li><a href='../our-books'>Our Books</a></li>
            <li><a href='../twl'>TWL</a></li>
            <li><a href='../staff-picks'>Staff Picks</a></li>
            </ul>
          </nav>
        </div>
        <span onclick='openNav()'><i class='fa fa-bars'></i></span>

        <!-- Cart Icon -->
        <span id='cart-icon'>
          <a href='../shopping-cart'><i class='fa-solid fa-shopping-cart'><span id='navbar-counter-target'></span></i></a>
        </span>
      </div>
    </header>
      ";

}



 ?>
