<?php

namespace Statamic\Addons\CookieConsent;

use Statamic\Extend\Controller;

class CookieConsentController extends Controller
{
    /**
     * Maps to your route definition in routes.yaml.
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        return $this->view('index');
    }
}
