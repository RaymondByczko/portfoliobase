<?php
/**
  * @file gitsha1.php
  * @author Raymond Byczko
  * @company self
  * @start_date 2014-02-13 Feb 13
  * @purpose To produce sha1 values for a certain file that match
  * that produced by git.
  */
openlog('gitsha1.php', LOG_CONS|LOG_NDELAY|LOG_PID, LOG_USER);
syslog(LOG_INFO, 'gitsha1.php start'."\n");
$pt = $_SERVER['REQUEST_URI'];

$dr = $_SERVER['DOCUMENT_ROOT'];
$posSuffixStart = strpos($pt, '.gitsha1');
$realFile = substr($pt, 1, $posSuffixStart-1);
$fe = file_exists($dr.'/'.$realFile);
if ($fe == false)
{
	echo '<p>';
	echo 'This file does not exist: '.$dr.'/'.$realFile;
	return;
}
set_include_path(get_include_path() . PATH_SEPARATOR . $dr);
$filecontents = file_get_contents($realFile, FILE_USE_INCLUDE_PATH);
if ($filecontents === false)
{
	syslog(LOG_INFO,'filecontents returned false');
}
else
{
	syslog(LOG_INFO,'filecontents returned true');
}
$filesize = strlen($filecontents);
$gitentity = 'blob '.$filesize."\000".$filecontents;
$sha1ge = sha1($gitentity);
syslog(LOG_INFO, 'incpath='.get_include_path());
syslog(LOG_INFO, 'allow_url_fopen='.ini_get('allow_url_fopen'));
if (array_key_exists('PATH_TRANSLATED', $_SERVER))
	syslog(LOG_INFO, 'Intercepted (PATH_TRANSLATED):'.$_SERVER['PATH_TRANSLATED']);
if (array_key_exists('PATH_INFO', $_SERVER))
	syslog(LOG_INFO, 'Intercepted (PATH_INFO):'.$_SERVER['PATH_INFO']); 
if (array_key_exists('REQUEST_URI', $_SERVER))
	syslog(LOG_INFO, 'Intercepted (REQUEST_URI):'.$_SERVER['REQUEST_URI']);;

syslog(LOG_INFO, 'Document Root:'.$dr);
syslog(LOG_INFO, 'realFile: '.$realFile);
syslog(LOG_INFO, 'posSuffixStart: '.$posSuffixStart);
if ($fe == true)
	syslog(LOG_INFO,'realFile exists is:'.(bool)$fe);
else
	syslog(LOG_INFO,'realFile does not exist:'.(bool)$fe);
syslog(LOG_INFO, 'filesize:'.$filesize);
echo 'File: '.$realFile."\n";
echo 'The sha1ge is:'.$sha1ge."\n";
// echo 'The filecontents is:'.$filecontents."\n";
syslog(LOG_INFO, exec('whoami'));
// var_dump($_SERVER);
exit(0);
?>
