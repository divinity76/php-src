--TEST--
Basic test for date_sunrise and date_sunset based on example in PHP manual
--FILE--
<?php

date_default_timezone_set('UTC');

/* calculate the sunrise time for Lisbon, Portugal
Latitude: 38.4 North
Longitude: 9 West
Zenith ~= 90
offset: +1 GMT
*/

echo "Basic test for date_sunrise() and date_sunset()\n";

echo date("D M d Y") . ', sunrise time : ' . date_sunrise(time(), SUNFUNCS_RET_STRING, 38.4, -9, 90, 1) . "\n";
echo date("D M d Y") . ', sunset time : ' . date_sunset(time(), SUNFUNCS_RET_STRING, 38.4, -9, 90, 1) . "\n";

// Check that calling with just the first parameter works.
var_dump(gettype(date_sunrise(time())));
var_dump(gettype(date_sunset(time())));

?>
--EXPECTF--
Basic test for date_sunrise() and date_sunset()

Deprecated: Constant SUNFUNCS_RET_STRING is deprecated since 8.4, as date_sunrise() and date_sunset() were deprecated in 8.1 in %s on line %d

Deprecated: Function date_sunrise() is deprecated since 8.1, use date_sun_info() instead in %s on line %d
%s %s %d %d, sunrise time : %d:%d

Deprecated: Constant SUNFUNCS_RET_STRING is deprecated since 8.4, as date_sunrise() and date_sunset() were deprecated in 8.1 in %s on line %d

Deprecated: Function date_sunset() is deprecated since 8.1, use date_sun_info() instead in %s on line %d
%s %s %d %d, sunset time : %d:%d

Deprecated: Function date_sunrise() is deprecated since 8.1, use date_sun_info() instead in %s on line %d
string(6) "string"

Deprecated: Function date_sunset() is deprecated since 8.1, use date_sun_info() instead in %s on line %d
string(6) "string"
