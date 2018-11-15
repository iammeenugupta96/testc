<?php
  // outputs the username that owns the running php/httpd process
  // (on a system with the "whoami" executable in the path)
  $dir = "https://github.com/mgupta15/testc";
  echo exec('ipconfig');
  echo '<br>';
  echo exec('whoami');
  echo '<br>';
  echo 'a '.exec("git init 2>&1");
  echo '<br>';
  echo 'b '.exec("git log 2>&1");
  echo '<br>';
  echo 'c '.exec("git fetch https://github.com/mgupta15/testc 2>&1");
  echo '<br>';
  echo 'd '.exec("git pull https://github.com/mgupta15/testc master 2>&1");
  echo '<br>';
  //echo exec('git log');
  echo 'e '.exec("git add . 2>&1");
  echo '<br>';
  echo 'f '.exec("git commit -m 'first commit' 2>&1");
  echo '<br>';
  echo 'g '.exec("git push -f https://github.com/mgupta15/testc master 2>&1", $output);
  echo '<br>';
  echo '<pre>';
  print_r($output);
?>