<?php
// @version $Id$
class EyiiVersion {

  const ID = 'EyiiVersion';

  public static function getVersion() {
    
    //    $value=Yii::app()->cache->get(self::ID);
    //    if($value===false) {

    $cmd = 'svn info '.Yii::app()->basePath.'/../../../framework/';
    exec( $cmd, $output, $return_code );
    $rev = explode(' ', $output[8]);

    /*
      $file=Yii::app()->basePath.'/../../../framework/YiiBase.php';
      $fh = fopen($file, 'r');
      $flag = true;
      while(($rec = fgets($fh)) && $flag) {
	if (strpos($rec, '$Id:')) {
	  $tok = explode(' ', $rec);
	  $value = $tok[5];
	  $flag = false;
	}
      }
      fclose($fh);
      //      Yii::app()->cache->set(self::ID, $value, 3600*24, new CFileCacheDependency($file));
      //    }
    */
    return $rev[3];

  }
}