<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - InternLink</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="fontawesome-free-7.3.1-web/css/all.min.css" />
</head>
<body>
    
<?php include 'header.php'; ?>

<div class="auth-page">
    <div class="auth-card">
        <h1 class="auth-title">Welcome back</h1>
        <p class="auth-sub">Sign in to your account to continue.</p>

        <form class="auth-form">
            <label class="auth-label">Email address</label>
            <input type="email" class="auth-input" placeholder="caleb@gmail.com">

            <label class="auth-label">Password</label>
            <input type="password" class="auth-input" placeholder="Enter your password">

            <div class="auth-row">
                <label class="auth-checkbox">
                    <input type="checkbox"> Remember me
                </label>
                <a href="#ForgotPassword" class="auth-link-sm">Forgot password?</a>
            </div>

            <button type="submit" class="auth-btn-primary">Login</button>

            <div class="auth-divider"><span>or</span></div>

            <button type="button" class="auth-btn-outline">
                <i class="fa-brands fa-google"></i> Continue with Google
            </button>
            <button type="button" class="auth-btn-outline">
                <i class="fa-brands fa-linkedin"></i> Continue with LinkedIn
            </button>

            <p class="auth-footer-tx">Don't have an account? <a href="register.php">Register</a></p>
        </form>
    </div>
</div>

<script src="index.js"></script>
</body>
</html>