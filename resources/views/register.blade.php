<!DOCTYPE html>
<!-- Source Codes By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <link rel="stylesheet" href="./assets/css/register.css" />
  </head>
  <body>
    <div class="login_form">
      <!-- Close button linking to index -->
      <a href="index.html" class="close_button">&times;</a>

      <!-- Registration form container -->
      <form action="#">
        <h1>Sign Up</h1>

        <!-- Email input box -->
        <div class="input_box">
          <input type="text" id="firstName" placeholder="First Name" required />
        </div>

        <div class="input_box">
          <input type="text" id="lastName" placeholder="Last Name" required />
        </div>

        <div class="input_box">
          <input
            type="email"
            id="email"
            placeholder="Enter email address"
            required
          />
        </div>

        <!-- Paswwrod input box -->
        <div class="input_box">
          <input
            type="password"
            id="password"
            placeholder="Enter your password"
            required
          />
        </div>

        <!-- Sign Up button -->
        <button type="submit">Sign up</button>

        <p class="sign_up">Already a member? <a href="login.html">Login</a></p>
      </form>
    </div>
  </body>
</html>
