<!DOCTYPE html>
<html lang="en">
<head>
    <title>Glassmorphism login Form Tutorial in html css</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <link href="/css/signup.css" rel="stylesheet" >
</head>
<body>
    <div class="scroll-container">
        <div class="container">
            <div class="welcome-section">
                <h1>Welcome</h1>
                <p>Glad to see you!</p>
            </div>

            <div class="form-section">
                <input type="text" id="text" placeholder="Full name" class="input-field">
                <input type="number" id="text" placeholder="Phone number" class="input-field">
                <input type="number" id="text" placeholder="Cin" class="input-field">
                <input type="number" id="text" placeholder="Inscription Number" class="input-field">



                <input type="email" id="email" placeholder="Email" class="input-field">
                
                <input type="password" id="password" placeholder="Password" class="input-field">
                <input type="password" id="password" placeholder="Confirm Password" class="input-field">


                <button class="login-btn" id="btn-login">SIGN UP</button>

                <div class="divider">
                    <p>Or sign up with</p>
                </div>

                <div class="social-buttons">
                    <button class="social-btn google-btn">
                        <img src="/picture/gg.png" alt="Google" class="social-icon"> Google
                    </button>
                    <button class="social-btn facebook-btn">
                        <img src="/picture/fb.png" alt="Facebook" class="social-icon"> Facebook
                    </button>
                </div>

                <div class="account-section">
                    <p>Already have an account? <a href="signin" id="signup">Sign in!</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>