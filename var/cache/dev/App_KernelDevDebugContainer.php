<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAxl0Yx8\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAxl0Yx8/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAxl0Yx8.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAxl0Yx8\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAxl0Yx8\App_KernelDevDebugContainer([
    'container.build_hash' => 'Axl0Yx8',
    'container.build_id' => '3c2322c7',
    'container.build_time' => 1639062056,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAxl0Yx8');
