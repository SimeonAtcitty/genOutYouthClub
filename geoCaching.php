<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php require_once ("lib/headUtils.php");?>
    <link rel="stylesheet" href="lib/css/geoCaching.css">
    <link rel="stylesheet" href="lib/css/navbar.css">
    <link rel="stylesheet" href="lib/css/index.css">
  </head>
  <body>
    <?php require_once ("lib/partials/navbar.php");?>

    <div class="jumbotron">
      <div class="container">
      <h1>New Mexico</h1>
      <h1>Wildlife Federation</h1>
      <h1>Gen Out Youth Club</h1>
      </div>
    </div>



      <div class="col-md-4 side">
          <figure class="circle">
            <img src="lib/images/rivertrip1.png" alt="sq-sample14" />
            <figcaption><a href="#"><p>Sign up</p></a></figcaption>
            <a href="#"></a>
          </figure>
      </div>
        <div class="col-md-4 push">
             <img src="lib/images/logo.png" class="logo img-fluid animated bounceInUp" alt="" />
        </div>
      <div class="col-md-4 side">
          <figure class="circle">
            <img src="lib/images/rivertrip1.png" alt="sq-sample14" />
            <figcaption><a href="#"><p>Learn More</p></a></figcaption>
            <a href="#"></a>
          </figure>
      </div>

      <div class="container adventure">
        <div class="row">
          <div class="col-md-6">
            <h5 class="outdoor">Are you looking for a fun outdoor activity?</h5>
            <p class="caching">
              Geocaching is an entertaining adventure, a real life treasure hunt that presents a unique and exciting manner of
              exploring the community. Geocaching is an outdoor treasure hunting game
              using GPS-enabled devices. Participants navigate to a specific set of GPS coordinates
              and then attempt to find the geocache (container) hidden at that location.
            </p>
          </div>
          <div class="col-md-6">
            <h5 class="outdoor">Simple Steps to Playing the game!</h5>
            <ol class="rules">
              <li>Register for a free Basic Membership.</li>
              <li>Visit the "Hide & Seek a Cache" page.</li>
              <li>Enter your postal code and click "search."</li>
              <li>Choose any geocache from the list and click on its name.</li>
              <li>Enter the coordinates of the geocache into your GPS Device.</li>
            </ol>
            <p class="rules">
              There are many other levels to the game starting from the simplest and moving
              towards a harder level.  The simple level is recommended for beginners but is
              a good way to enjoy the outdoors.
            </p>

          </div>
        </div>
      </div>



    <?php require_once ("lib/partials/scripts.php");?>

  </body>
</html>
