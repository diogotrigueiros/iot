<?php

shell_exec("mosquitto_pub -h localhost -t casa/luz -m off");

echo "Luz desligada";

?>
