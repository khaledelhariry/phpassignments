<?php

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';

setcookie("name", "khaled", time() + 90, );
setcookie("food", "cookies", time() + 60);

 ?>
<html>
<body>
<?php
echo "set Cookies";
setcookie("name", "mohamed", time() + 30);
setcookie("food", "cookies", time() + -1);
setcookie("name", "khaled", time() - 1);
?>
<?php
session_start();
echo'<pre>';
var_dump($_SESSION);
echo'</pre>';
if(isset($_SESSION['page_count'])){
    $_SESSION['page_count'] += 1;
} else {
    $_SESSION['page_count'] = 1;
}

$msg = "you have visited my page <span style='color:red>".$_SESSION['page_count'];
$msg .= "</span> in this session.";
unset($_SESSION['page_count']);
session_destroy();
var_dump($_SESSION)
?>
</body>
</html>