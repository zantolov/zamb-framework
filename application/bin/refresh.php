#!/usr/bin/php
<?php

echo exec("./vendor/bin/doctrine orm:schema-tool:drop --force") . PHP_EOL;
echo exec("./vendor/bin/doctrine orm:schema-tool:update --force") . PHP_EOL;
//echo exec("./application/bin/seed.php") . PHP_EOL;