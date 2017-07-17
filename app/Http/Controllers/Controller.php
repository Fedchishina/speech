<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Bluora\Yandex\Facades\YandexTranslateFacade;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getTranslate(Request $request) {
        $input = $request->all();
        return YandexTranslateFacade::translate($input['text_in'], $input['lang_in'], $input['lang_out'])->getTranslation();
    }
}
