<?php
if (! function_exists('addTextNode')) {

    function addTextNode(string $pathFile, string $searchTextAfter, string $newTextNode = '')
    {
        $arr      = file($pathFile);
        $newFile  = [];
        $iterator = 0;

         array_walk($arr, function ($item) use (&$newFile, &$iterator, $searchTextAfter){
            preg_match("/.+{$searchTextAfter}.+/", $item, $matches);

            if ( empty($matches) === false)
            {

                $newFile[$iterator] = $textNode;
                $iterator++;
            }
            $newFile[$iterator] = $item;
            $iterator++;
        });
        file_put_contents($pathFile, implode('',$newFile));
    }
}