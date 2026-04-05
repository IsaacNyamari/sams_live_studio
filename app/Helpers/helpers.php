<?php

if (! function_exists('user_initials')) {
    function user_initials($name)
    {
        $words = explode(' ', trim($name));

        if (count($words) >= 2) {
            return strtoupper(substr($words[0], 0, 1).substr($words[1], 0, 1));
        }

        return strtoupper(substr($name, 0, 2));
    }
}
if (! function_exists('batchEnvUpdate')) {
    function batchEnvUpdate(array $updates)
    {
        $path = base_path('.env');
        $content = file_get_contents($path);

        foreach ($updates as $key => $value) {
            $pattern = "/^{$key}=.*/m";
            $replacement = "{$key}={$value}";
            $content = preg_replace($pattern, $replacement, $content);
        }

        file_put_contents($path, $content);
    }
}
