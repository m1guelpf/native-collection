<?php

namespace M1guelpf\NativeCollection;

class ArrayHandler
{
    public function __call(string $name, array $arguments)
    {
        return collect($arguments[0])->$name(...array_slice($arguments, 1))->toArray();
    }

    public function __callStatic(string $name, array $arguments)
    {
        return $this->__call($name, $arguments);
    }
}
