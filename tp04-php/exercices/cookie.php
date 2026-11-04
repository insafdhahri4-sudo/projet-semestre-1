<?php
setcookie("nom", "Insaf", time() + 3600);
setcookie("theme", "sombre", time() + 3600);
setcookie("langue", "fr", time() + 3600);
foreach(['nom','theme','langue']as $c){
    echo $c .";".($_COOKIE[$c] ?? "absent")."<br>";
}
?>