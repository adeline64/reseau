<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNAz90me\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNAz90me/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNAz90me.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNAz90me\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNAz90me\App_KernelDevDebugContainer([
    'container.build_hash' => 'NAz90me',
    'container.build_id' => '999b41db',
    'container.build_time' => 1617427147,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNAz90me');