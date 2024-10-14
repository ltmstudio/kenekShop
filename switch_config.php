<?php

if ($argc !== 2) {
    echo "Usage: php switch_config.php [local|server]\n";
    exit(1);
}

$env = $argv[1];
$validEnvs = ['local', 'server'];

if (!in_array($env, $validEnvs)) {
    echo "Invalid argument. Use 'local' or 'server'.\n";
    exit(1);
}

// Массив папок, где нужно переключить конфиг
$configPaths = [
    'opencart' => [
        'local' => 'opencart/config_local.php',
        'server' => 'opencart/config_server.php',
        'main' => 'opencart/config.php'
    ],
    'opencart/admin' => [
        'local' => 'opencart/admin/config_local.php',
        'server' => 'opencart/admin/config_server.php',
        'main' => 'opencart/admin/config.php'
    ]
];

// Функция для замены конфигурации
function switchConfig($configFile, $mainConfigFile) {
    if (!file_exists($configFile)) {
        echo "Configuration file '$configFile' not found.\n";
        return false;
    }

    if (copy($configFile, $mainConfigFile)) {
        echo "Configuration switched for '$mainConfigFile'.\n";
        return true;
    } else {
        echo "Failed to switch configuration for '$mainConfigFile'.\n";
        return false;
    }
}

// Переключаем конфиги в обеих директориях
foreach ($configPaths as $path => $files) {
    $configFile = $files[$env];  // Локальный или серверный конфиг
    $mainConfigFile = $files['main'];  // Основной файл config.php

    // Меняем конфиг в текущей директории
    switchConfig($configFile, $mainConfigFile);
}
