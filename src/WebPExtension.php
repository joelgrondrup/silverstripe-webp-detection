<?php

namespace BiffBangPow\Extension;

use SilverStripe\Control\Controller;
use SilverStripe\Core\Extension;

class WebPExtension extends Extension
{

    /**
     * @return bool
     */
    public function getWebPSupport(): bool
    {
        $request = Controller::curr()->getRequest()->getHeader('accept');
        return is_string($request) && stripos($request, 'image/webp') !== false;
    }

}
