<?php

use M1guelpf\NativeCollection\ArrayHandler;

if (!extension_loaded('scalar_objects')) {
    throw new \RuntimeException('This package needs the [scalar_objects] extension.');
}

register_primitive_type_handler('array', ArrayHandler::class);
