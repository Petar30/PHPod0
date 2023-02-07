<?php
$settings = parse_ini_file("test.ini");
print_r($settings);
foreach ($settings as $key => $value) {
    echo $key . "=>" . $value . PHP_EOL;
}

echo $settings['font1'] . PHP_EOL;
echo $settings['white'] . PHP_EOL;
