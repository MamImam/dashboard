<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.15
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/styleform.css">
<div class="container">
  <header class="header">
    <h1 id="title" class="text-center">LOGIN</h1>
    <p id="description" class="description text-center">
      Sign In To Your Accounts
    </p>
  </header>
  <body class="app flex-row align-items-center">
    <form action="CRUD/proses_login.php" method="post">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="icon-user"></i>
          </span>
        </div>
      <label id="name-label" for="name">Username</label>
      <input 
        type="text" 
        name="username"
        class="form-control" 
        placeholder="username">
    </div>
      <div class="input-group mb-4">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="icon-lock"></i>
          </span>
        </div>
      <label id="name-label" for="name">Password</label>
      <input 
        type="text"  
        name="password"
        class="form-control" 
        placeholder="password">
    </div>
    <div class="form-group">
      <button type="submit" name="login" class="submit-button" value="login">
        LOGIN
      </button>
    </form>
</div>

  </body>
</div>
</html>
