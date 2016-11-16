<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php require_once ("lib/headUtils.php");?>

    <link rel="stylesheet" href="lib/css/navbar.css">
    <link rel="stylesheet" href="lib/css/signup2.css">

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

<div class="row">
  <div class="col-md-6 offset-md-3 mytext">
    <h1></h1>
    <p>
      New Mexico Wildlife Federation’s (NMWF) mission is to inspire New Mexicans
      to conserve public landscapes, watersheds and wildlife for our children’s
      future.  This mission includes getting youth involved in experiencing nature
      and pursing outdoor adventures while learning to be environmentally responsible.
      If your kids enjoy learning about the outdoors and are interested in learning
      about hiking, hunting, fishing, rafting, geocaching and other activities, this is
      a great resource for them.  Your $25 per year membership fee will help support the
      New Mexico Wildlife Federation’s youth activities and outreach. Gen Out (GO!) Youth
      Club is a way to engage youth ages 5-17 by showing them new ways to explore the
      outdoors.  Every month your child will receive a newsletter with a how-to project,
      a monthly geocaching treasure hunt, cool games and puzzles. Families will also receive
      invitations to special camping trips, rafting trips, fishing expeditions and hiking activities.
    </p>
  </div>
</div>

<div class="col-md-12 test">
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Contribution Amount $25.00 Annual Membership per Child will be billed to your address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Parent/Guardian Name:">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1"></label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Address:">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1"></label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Phone:">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1"></label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Child Name:">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1"></label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Date of Birth:">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1"></label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="T-Shirt Size:">
    </div>
  </form>
  <button type="submit" class="btn btn-default">SUBMIT</button>

  <div class="col-md-12 mytext">

  </div>

    <?php require_once ("lib/partials/scripts.php");?>

  </body>
</html>
