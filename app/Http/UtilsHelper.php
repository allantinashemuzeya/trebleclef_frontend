<?php

namespace App\Http;

class UtilsHelper
{
    /**
     * Handle page level resources.
     * Converts the array of resources to an array of html tags.
     *
     * Attributes can be added to the html tags using the $attributes parameter and in a key-value pair.
     *  @code $attributes = ['css' => 'id="page-level-css"','js' => 'id="page-level-js"',
     *
     * ];
     * @param array $resources
     * @param array $attributes
     * @return array
     */
    public static function handlePageLevelResources(Array $resources, Array $attributes = []): array
    {
        $pageLevelStyles = array_map(function($item) {
            return "<link rel='stylesheet' href='$item'>";
        }, $resources['css']);

        $pageLevelScripts = array_map(function($item) {
            return "<script src='$item'></script>";
        }, $resources['js']);

        if (!empty($attributes)) {
            $pageLevelStyles = array_map(function($item) use ($attributes) {
                return str_replace('>', ' ' . $attributes['css'] . '>', $item);
            }, $pageLevelStyles);

            $pageLevelScripts = array_map(function($item) use ($attributes) {
                return str_replace('>', ' ' . $attributes['js'] . '>', $item);
            }, $pageLevelScripts);
        }

        return [
            'css' => $pageLevelStyles,
            'js' => $pageLevelScripts,
        ];
    }
}
