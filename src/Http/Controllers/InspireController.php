<?php 

namespace Fornax\Http\Controllers;

use Fornax\Fornax;

class InspirationController {
    public function __invoke(Fornax $fornax) 
    {
        $quote = $fornax->getFromHttp();

        return view('fornax::dashboard', compact('quote'));
    }
}