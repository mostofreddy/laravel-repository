<?php

if (!function_exists('app_path')) {
    /**
     * Get the path to the application folder.
     *
     * @codeCoverageIgnore
     * @param string $path
     * @return string
     */
    function app_path($path = '')
    {
        return app()->path($path);
    }
}
