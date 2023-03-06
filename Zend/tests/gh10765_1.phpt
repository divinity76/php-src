--TEST--
GH-10765: Throw on negative cookie expiration timestamp
--INI--
date.timezone=UTC
--FILE--
<?php

try {
    setcookie("name", "value", -1);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

?>
--EXPECT--
setcookie(): "expires" option must be greater than or equal to 0
--EXPECTHEADERS--