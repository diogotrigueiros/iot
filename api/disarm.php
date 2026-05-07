<?php

$file = "../alarme_status.txt";

file_put_contents($file, "DESARMADO");

shell_exec("mosquitto_pub -h localhost -t casa/alarme -m disarmed");

echo "Alarme desarmado";

?>