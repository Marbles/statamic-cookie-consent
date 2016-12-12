<?php

namespace Statamic\Addons\CookieConsent;

use Statamic\Extend\Tags;

class CookieConsentTags extends Tags
{
    /**
     * The {{ cookie_consent }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        $options = [
            "palette" => [
                "popup" => [
                    "background" => $this->getConfig('color_bg', '#fff')
                ],
                "button" => [
                    "background" => $this->getConfig('color_button_bg', '#000'),
                    "text" => $this->getConfig('color_button_text', '#fff'),
                    "border" => $this->getConfig('color_button_border', '#000'),
                ]
            ],
            "content" => [
                "message" => $this->getConfig('message', 'This website uses cookies to ensure you get the best experience on our website.'),
                "dismiss" => $this->getConfig('button_text', 'Got it!'),
                "link" => $this->getConfig('link_text', 'Learn more'),
                "href" => $this->getConfig('link_text', 'http://cookiesandyou.com/')
            ],
            "showLink" => $this->getConfigBool('show_link', false)
        ];

        if ($this->getConfig('position', 'banner-bottom') != 'banner-bottom') {
            if ($this->getConfig('position') == 'banner-top') {
                $options["position"] = "top";
                $options["static"] = $this->getConfig('position');

            } else {
                $options["position"] = $this->getConfig('position');
            }
        }

        if ($this->getConfig('theme', 'block') != 'block') {
            $options["theme"] = $this->getConfig('theme');
        }

        return '
            <script>
            window.addEventListener("load", function(){
                window.cookieconsent.initialise(JSON.parse("' . addslashes(json_encode($options)) . '"))
            });
            </script>
        ';
    }

    /**
     * The {{ cookie_consent:js }} tag.
     *
     * @return string|array
     */
    public function js()
    {
        return "<script src='//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js'></script>";
    }

    /**
     * The {{ cookie_consent:css }} tag.
     *
     * @return string|array
     */
    public function css()
    {
        return "<link rel='stylesheet' type='text/css' href='//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css' />";
    }
}
