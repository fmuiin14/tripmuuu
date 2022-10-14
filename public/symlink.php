<?php

$targetFolder = __DIR__.'/../../laravel-tripmu/storage/app/public';
$linkFolder = __DIR__.'/storage';
symlink($targetFolder,$linkFolder);

echo 'Symlink process successfully completed';