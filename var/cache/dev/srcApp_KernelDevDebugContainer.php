<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerT0a7DAp\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerT0a7DAp/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerT0a7DAp.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerT0a7DAp\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerT0a7DAp\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'T0a7DAp',
    'container.build_id' => '61ce1bda',
    'container.build_time' => 1646429178,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerT0a7DAp');
