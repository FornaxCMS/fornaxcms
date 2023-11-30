<?php

namespace Fornax;

use Illuminate\Support\Facades\Http;

class Fornax {
    public function getFromHttp() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}