<?php

namespace Easir\SDK;

use Easir\SDK\Helper\StringHelper;

/**
 * Class Model
 * @package Easir\SDK
 */
abstract class Model
{
    use PopulatableFromData;

    /**
     * Factory method to create an instance of a given type if it exists
     *
     * @static
     * @param string $type
     * @param array $data
     * @return null|Model
     */
    public static function createIfExists($type, $data)
    {
        $modelType = "\\Easir\\SDK\\Model\\" . StringHelper::studly($type);
        $internalModelType = "\\Easir\\Internal\\SDK\\Model\\" . StringHelper::studly($type);

        if (class_exists($modelType)) {
            return new $modelType($data);
        } elseif (class_exists($internalModelType)) {
            return new $internalModelType($data);
        } else {
            return null;
        }
    }
}