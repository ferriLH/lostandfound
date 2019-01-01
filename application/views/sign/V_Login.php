<head>
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" type="text/css">
</head>
<script src="<?php echo base_url()?>assets/js/style.js"></script>
<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action="<?php echo base_url('login/auth')?>" method="post">
      <input type="text" placeholder="username" name="username" />
      <input type="password" placeholder="password" name="password" />
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>