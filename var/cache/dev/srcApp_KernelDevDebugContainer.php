<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerV6W3JKK\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerV6W3JKK/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerV6W3JKK.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerV6W3JKK\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerV6W3JKK\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'V6W3JKK',
    'container.build_id' => 'fc7edc36',
    'container.build_time' => 1645403161,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerV6W3JKK');
