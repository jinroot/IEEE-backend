

<?php



$expiry = time() + 60 * 60 * 24 * 60;
setcookie("site[layout]", "boxed", $expiry);
setcookie("site[font]", "Swat", $expiry);
setcookie("site[color]", "blue", $expiry);