<?php

$file = "../alarme_status.txt";

file_put_contents($file, "ARMADO");

shell_exec("mosquitto_pub -h localhost -t casa/alarme -m armed");

echo "Alarme armado";

?>