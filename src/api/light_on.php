<?php

shell_exec("mosquitto_pub -h localhost -t casa/luz -m on");

echo "Luz ligada";

?>
