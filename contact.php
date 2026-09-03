<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>

  <?php include('inc/css.php') ?>
</head>

<body class="bg-dark">

  <!-- header start -->
  <?php include('inc/header.php') ?>
  <!-- header End -->
 
  <section class="contact">
    <div class="container">

<div class="row">
  <div class="col-lg-6 p-3">
  <h2 class="text-center">Contact Form</h2>
  <div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname">Email</label>
    <input type="email" id="email" name="email" placeholder="Your Email..">


    <label for="lname">Phone</label>
    <input type="number" id="number" name="phone" placeholder="Your Phone number..">


    <label for="massage">Massage</label>
    <textarea id="massage" name="massage" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit Form">
  </form>
</div>
  </div>
</div>
    </div>

  </section>


  <!-- footer start -->

  <?php include('inc/footer.php') ?>

  <!-- footer End -->


</body>

</html>