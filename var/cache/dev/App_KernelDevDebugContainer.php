<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBegcZLB\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBegcZLB/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBegcZLB.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBegcZLB\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBegcZLB\App_KernelDevDebugContainer([
    'container.build_hash' => 'BegcZLB',
    'container.build_id' => '72acdeee',
    'container.build_time' => 1618042180,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBegcZLB');
