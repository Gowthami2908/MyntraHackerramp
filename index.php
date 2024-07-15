<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login | Instaclone</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="images/label.ico" type="image/x-icon">
        <link href="css/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    </head>
    <body class="no-padding" style="background-image: url('images/fashion.png'); background-size: cover; background-position: center;">
        <main class="login">
            <!--<div class="login__column">
                <img
                    src="images/phone.png"
                    alt="Phone Image"
                    title="Phone Image"
                    class="login__phone-image"
                />-->
            </div>
            <section class="login__column" style="margin-left:500px;">
                <div class="login__section login__sign-in">
                    <img 
                        src="images/Logo.png"
                        alt="Logo"
                        title="Logo"
                        class="login__logo"
                    />
                    <!-- x   -->
                    <form action="login.php" method ="POST" class="login__form"> 
                        <div class="login__input-container">
                            <input 
                                type="text"
                                name="username"
                                placeholder="Username"
                                required
                                class="login__input"
                            />
                        </div>
                        <div class="login__input-container">
                            <input 
                                type="password"
                                name="password"
                                placeholder="Password"
                                required
                                class="login__input" 
                            />
                            <a href="#" class="login__form-link">Forgot?</a>
                        </div>
                        <div class="login__input-container">
                            <input
                                type="submit"
                                value="Log in"
                                class="login__input login__input--btn"
                            />
                        </div>
                    </form>
                    <span class="login__divider">or</span>
                    <a class="login__fb-link" href="#">
                        <i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i> Log in with Facebook
                    </a>
                </div>
                <div class="login__section login__sign-up">
                    <span class="login__text">
                        Don't have an account? 
                        <a href="registration.php" class="login__link">
                            Sign up
                        </a>
                    </span>
                </div>
                <div class="login__section login__section--transparent login__app">
                    <span class="login__text">
                        Get the app.
                    </span>
                    <div class="login__appstores">
                        <img 
                            src="images/ios.png"
                            alt="iOS"
                            title="Get the app!"
                            class="login__appstore" 
                        />
                        <img 
                            src="images/android.png"
                            alt="Android"
                            title="Get the app!"
                            class="login__appstore" 
                        />
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer" style="position:fixed; bottom:0; width:100%; left:80px;background-color:#f8f9fa; text-align:center; padding:10px 0;">
    <nav class="footer__nav" style="display:inline;justify-content:center;">
        <ul class="footer__list" style="list-style:none; padding:0; margin:0;">
            <li class="footer__list-item" style="display:inline; margin-right:20px;"><a href="#" class="footer__link">about us</a></li>
            <li class="footer__list-item" style="display:inline; margin-right:20px;"><a href="#" class="footer__link">support</a></li>
            <li class="footer__list-item" style="display:inline; margin-right:20px;"><a href="#" class="footer__link">blog</a></li>
            <li class="footer__list-item" style="display:inline; margin-right:20px;"><a href="#" class="footer__link">press</a></li>
            <li class="footer__list-item" style="display:inline; margin-right:20px;"><a href="#" class="footer__link">api</a></li>
            <li class="footer__list-item" style="display:inline; margin-right:20px;"><a href="#" class="footer__link">jobs</a></li>
            <li class="footer__list-item" style="display:inline; margin-right:20px;"><a href="#" class="footer__link">privacy</a></li>
            <li class="footer__list-item" style="display:inline; margin-right:20px;"><a href="#" class="footer__link">terms</a></li>
            <li class="footer__list-item" style="display:inline; margin-right:20px;"><a href="#" class="footer__link">directory</a></li>
            <li class="footer__list-item" style="display:inline; margin-right:20px;"><a href="#" class="footer__link">language</a></li>
        </ul>
    </nav>
    <span class="footer__copyright" style="margin-right:-400px;">© Myntra</span>
</footer>
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
    </body>
</html>