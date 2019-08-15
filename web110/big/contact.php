<!DOCTYPE html>
<html lang="en">
 <head>
     <title>Sabra Grace: WEB110 Portal Website</title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
 </head>
 <body>
     <header>
         <h1><a href="index.html">Web Developer Examples and Resources by Sabra Grace</a></h1>
            <nav id="cssmenu">
              <ul>
                 <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i>WEB110</a></li>
                 <li><a href="index.html"><i class="fa fa-fw fa-home"></i>BIG</a></li>
                <li><a href="forms.html"><i class="fa fa-fw fa-globe"></i>Forms</a></li>
                 <li><a href="accessibility.html"><i class="fa fa-fw fa-globe"></i> Accessibility</a></li>
                 <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-o-up"></i>SMO</a></li>
                 <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i>Images</a></li>
                 <li><a href="#"><i class="fa fa-fw fa-bars"></i>Google</a>
                    <ul>
                       <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
                       <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
                       <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i>Map</a></li>
                    </ul>
                 </li>
                 <li><a href="contact.php"><i class="fa fa-fw fa-server"></i> Contact Sabra</a></li>
              </ul>
         </nav>
    </header>
     
   <main class="wrapper">
     
       <h2 class="subheader">Contact Sabra</h2>
       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other 1!       
         *
         */
        include 'includes/simple.php'; #demonstrates a simple contact form
        //include 'includes/multiple.php';#demonstrates multiple form elements

	    ?>
     <footer>
      <p><small>&copy; 2019 by <a href="contact.php">Contact Sabra </a> All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
 </body>
</html>