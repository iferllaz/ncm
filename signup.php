<?php
    include './db.php';
    include './templates/main-content.php';
    // include './templates/crud-content.php';
    // include './templates/account-content.php';
    include './templates/header.php';

    headerContent();

    // noCopyContent();
    // profileInfo();
    // contentBox();
    // loginContent();
    // signupContent(); ?>
<div class="container center" style="background-color: white; padding: 5%">
  <form>
    <div class="mb-3">
      <label for="exampleInputUsername" class="form-label">Username</label>
      <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
    
<?php

    footerContent();
?>