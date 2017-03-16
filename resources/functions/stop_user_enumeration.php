<?php
// Stop User enumeration
if ( ! is_admin() && isset($_SERVER)){
  if(preg_match('/(wp-comments-post)/', $_SERVER['REQUEST_URI']) === 0 ) {
     if (!empty($_POST['author'])) {
        ll_kill_enumeration();
     }
  }

if (isset($_SERVER['QUERY_STRING'])) {
  if(preg_match('/author=([0-9]*)/', $_SERVER['QUERY_STRING']) === 1) {
    ll_kill_enumeration();
  }
}


add_filter('redirect_canonical','ll_detect_enumeration', 10,2);
}

add_filter('redirect_canonical','ll_detect_enumeration', 10,2);
function ll_detect_enumeration ($redirect_url, $requested_url) {
if (preg_match('/\?author(%00[0%]*)?=([0-9]*)(\/*)/', $requested_url)===1  || isset($_POST['author'])) {
     ll_kill_enumeration();
   } else {
     return $redirect_url;
   }
}

function ll_kill_enumeration() {
     openlog('wordpress('.$_SERVER['HTTP_HOST'].')',LOG_NDELAY|LOG_PID,LOG_AUTH);
     syslog(LOG_INFO,"Attempted user enumeration from {$_SERVER['REMOTE_ADDR']}");
     closelog();
     wp_die('forbidden');
}
