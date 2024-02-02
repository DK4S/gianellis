<?php

function generateFooter(){

  echo "
    <footer>
      <div class='footer-link-container'>
        <ul>
          <li class='footer-link-title'>Folly X.O.</li>
          <li><a class ='footer-link' href='../about'>About</a></li>
          <li><a class ='footer-link' href='../subscribe'>Newsletter</a></li>
          <li><a class ='footer-link' href='../privacy'>Privacy Policy</a></li>
          <li><a class ='footer-link' href='terms'>Terms & Conditions</a></li>
        </ul>
        <ul>
          <li class='footer-link-title'>Contact Us</li>
          <li><a class ='footer-link' href='../contact'>General</a></li>
          <li><a class ='footer-link' href='../submissions'>Submissions</a></li>
          <li>
            <a class='footer-link' href='https://twitter.com/FollyXO' target='_blank' rel='noopener' aria-label='twitter icon'><i class='fa-brands fa-twitter' ></i></a>
            <a class='footer-link' rel='me' href='https://zirk.us/@follyxo'><i class='fa-brands fa-mastodon' ></i></a>
          </li>
        </ul>

      </div>

      <div id='watermark'>
          <a href='../index.php'>
            <div id='footer-logo-container'>
              <img id='footer-logo' src='../images/follyxotower.svg' alt='Folly X O Logo'/>
            </div>
          </a>
      </div>
    </footer>
      ";
}



 ?>
