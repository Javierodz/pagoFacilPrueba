<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNfpfmh7\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNfpfmh7/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerNfpfmh7.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerNfpfmh7\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerNfpfmh7\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Nfpfmh7',
    'container.build_id' => '523e60b3',
    'container.build_time' => 1537287419,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerNfpfmh7');
