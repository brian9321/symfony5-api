<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container14ev4Pz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container14ev4Pz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container14ev4Pz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container14ev4Pz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container14ev4Pz\App_KernelDevDebugContainer([
    'container.build_hash' => '14ev4Pz',
    'container.build_id' => 'e35c2e68',
    'container.build_time' => 1679153674,
], __DIR__.\DIRECTORY_SEPARATOR.'Container14ev4Pz');
