<?php include('form_process.php'); ?>

<link rel="stylesheet" href="style.css">
<div id="form-main">
  <div id="form-div">
    <form class="form" id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">

      <p class="name">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" value="<?= $name ?>"/>
	<span class="error"><?= $name_error ?></span>
      </p>

      <p class="email">
        <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email"  value="<?= $email ?>"/>
	<span class="error"><?= $email_error ?></span>
      </p>



      <p class="phone">
        <input name="phone" type="text" class="validate[required,custom[email]] feedback-input" id="phone" placeholder="Mobile Number"  value="<?= $phone ?>"/>
	<span class="error"><?= $phone_error ?></span>
      </p>


      <p class="address">
        <input name="address" type="text" class="validate[required,custom[email]] feedback-input" id="address" placeholder="Address"  value="<?= $address ?>"/>
	<span class="error"><?= $address_error ?></span>
      </p>


      <p class="organisation">
        <input name="organisation" type="text" class="validate[required,custom[email]] feedback-input" id="organisation" placeholder="College/Organisation Name"  value="<?= $organisation ?>"/>
  <span class="error"><?= $organisation_error ?></span>
      </p>

      <p class="department">
        <input name="department" type="text" class="validate[required,custom[email]] feedback-input" id="department" placeholder="Department/Society Name"  value="<?= $department ?>"/>
  <span class="error"><?= $department_error ?></span>
      </p>

      <p class="designation">
        <input name="designation" type="text" class="validate[required,custom[email]] feedback-input" id="designation" placeholder="Designation"  value="<?= $designation ?>"/>
  <span class="error"><?= $designation_error ?></span>
      </p>


      <p class="event">
        <input name="event" type="text" class="validate[required,custom[email]] feedback-input" id="event" placeholder="Event Date"  value="<?= $event ?>"/>
  <span class="error"><?= $event_error ?></span>
      </p>

      <p class="delivery">
        <input name="delivery" type="text" class="validate[required,custom[email]] feedback-input" id="event" placeholder="Delivery Date"  value="<?= $delivery ?>"/>
  <span class="error"><?= $delivery_error ?></span>
      </p>





      <p class="text">
        <textarea name="order" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Order Here"  value="<?= $order ?>"></textarea>
	<span class="error"><?= $order_error ?></span>
      </p>


      <div class="submit">
        <input type="submit" value="SEND" id="button-blue" name="submit" data-submit="...sending"/>
        <span class="success"><?= $success ?></div>
        <div class="ease"></div>
      </div>

    </form>
  </div>
