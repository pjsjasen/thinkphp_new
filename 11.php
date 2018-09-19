<?php
$name = 'zhOng Guo';
echo preg_replace("/[A-Z]/", "_\\0", $name);
