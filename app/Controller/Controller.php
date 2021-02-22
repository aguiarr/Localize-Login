<?php
namespace Localize\Controller;

abstract class Controller
{
    public function render(string $path, array $data): string 
    {
        extract($data);
        ob_start();
        require __DIR__ . '/../View/' . $path;
        $html = ob_get_clean();

        return $html;
    }
}