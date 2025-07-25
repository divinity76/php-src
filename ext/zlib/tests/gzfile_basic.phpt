--TEST--
Test function gzfile() reading a gzip relative file
--EXTENSIONS--
zlib
--FILE--
<?php
$plaintxt = <<<EOT
hello world
is a very common test
for all languages
EOT;
$dirname = 'gzfile_temp';
$filename = $dirname.'/gzfile_basic.txt.gz';
mkdir($dirname);
$h = gzopen($filename, 'w');
gzwrite($h, $plaintxt);
gzclose($h);


var_dump(gzfile( $filename ) );

?>
--CLEAN--
<?php
$dirname = 'gzfile_temp';
$filename = $dirname.'/gzfile_basic.txt.gz';
@unlink($filename);
@rmdir($dirname);
?>
--EXPECT--
array(3) {
  [0]=>
  string(12) "hello world
"
  [1]=>
  string(22) "is a very common test
"
  [2]=>
  string(17) "for all languages"
}
