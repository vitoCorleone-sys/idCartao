<?php

function idCartao($cardNumber){
        $output = null;
        $retval = null;
        $command = exec("/opt/jdk-18/bin/java -jar /var/lib/asterisk/agi-bin/encrypt/idCartao/criptografia2.java {$cardNumber}", $output, $retval);
    return $output[0];
}


?>
