<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXsXJatW\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXsXJatW/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXsXJatW.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXsXJatW\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXsXJatW\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'XsXJatW',
    'container.build_id' => '18b1520f',
    'container.build_time' => 1644879621,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXsXJatW');
