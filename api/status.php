<?php

$file = "../alarme_status.txt";

if (file_exists($file)) {

    echo file_get_contents($file);

} else {

    echo "DESARMADO";

}

?>