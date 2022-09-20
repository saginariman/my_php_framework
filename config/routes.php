<?php

use \Core\Route;

return [
    new Route('/', 'news', 'get'), 
    new Route('/news', 'news', 'get'), 
    new Route('/news/:id', 'news', 'getOne'), 
    new Route('/hello/', 'hello', 'index'), 
];