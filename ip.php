<?
getRealClientIp() {
  $ipaddress = '';
  if (getenv('HTTP_CLIENT_IP')) {
      $ipaddress = getenv('HTTP_CLIENT_IP');
  } else if(getenv('HTTP_X_FORWARDED_FOR')) {
      $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
  } else if(getenv('HTTP_X_FORWARDED')) {
      $ipaddress = getenv('HTTP_X_FORWARDED');
  } else if(getenv('HTTP_FORWARDED_FOR')) {
      $ipaddress = getenv('HTTP_FORWARDED_FOR');
  } else if(getenv('HTTP_FORWARDED')) {
      $ipaddress = getenv('HTTP_FORWARDED');
  } else if(getenv('REMOTE_ADDR')) {
      $ipaddress = getenv('REMOTE_ADDR');
  } else {
      $ipaddress = '알수없음';
  }
  return $ipaddress;
}
        
        echo getRealClientIp(); ?>
        </h2>
        <hr>
        <h4>접속 환경</h4>
        <?php echo $_SERVER['HTTP_USER_AGENT']; ?>
        <hr>
