<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php require_once ("lib/headUtils.php");?>

    <link rel="stylesheet" href="lib/css/signup2.css">
  </head>
  <body>

    <div class="jumbotron">
      <div class="container">
      <h1>New Mexico</h1>
      <h1>Wildlife Federation</h1>
      <h1>Gen Out Youth Club</h1>
      </div>
    </div>


    <div class="row push">
      <div class="col-md-4 middle col-xs-2">
        <a href="#"><button type="button" class="circle1" name="button">Sign Up</button></a>
      </div>

      <div class="col-md-4 middle col-xs-8">
        <img src="lib/images/logo.png" class="logo img-fluid animated bounceInUp" alt="" />
      </div>

      <div class="col-md-4 middle col-xs-2">
        <a href="#"><button type="button" class="circle1" name="button">Learn More</button></a>
      </div>
    </div>


    <div class="col-md-12 test">
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1"></label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="First Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1"></label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Last Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1"></label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Address">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1"></label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="City, State ZIP">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1"></label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1"></label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Phone">
        </div>
      </form>
      <button type="submit" class="btn btn-default">SUBMIT</button>
    </div>

    <?php require_once ("lib/partials/scripts.php");?>

  </body>
</html>
