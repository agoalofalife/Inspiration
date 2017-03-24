<?php
if (! function_exists('insertServiceProvider')) {
    /**
     *
     * @param string $standingBeside
     * @param string $newServiceProvider
     */
    function insertServiceProvider( string $standingBeside, string $newServiceProvider = '')
    {
        $pathToFile           = config_path('app.php');
        $mask                 = "         " . $newServiceProvider .  ",\n";
        $quoteServiceProvider = preg_quote($newServiceProvider);

        if ( file_exists($pathToFile) && preg_match('/\w+Provider::class/', $newServiceProvider) && (bool)preg_match("/.+$quoteServiceProvider.+/", file_get_contents($pathToFile)) === false )
        {
            $arrayStrings      = file($pathToFile);
            $newFile           = [];
            $iterator          = 0;

            foreach ($arrayStrings as $key => $nextLine)
            {
                preg_match("/$standingBeside/", $nextLine, $matches);
                $newFile[$iterator] = $nextLine;
                $iterator++;

                if ( empty($matches) === false)
                {
                    $newFile[$iterator] = $mask;
                    $iterator++;
                }
            }

            file_put_contents($pathToFile, implode('',$newFile));
        }
    }
}