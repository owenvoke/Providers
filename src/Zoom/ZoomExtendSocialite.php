<?php

namespace SocialiteProviders\Zoom;

use SocialiteProviders\Manager\SocialiteWasCalled;

class ZoomExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('zoom', __NAMESPACE__.'\Provider');
    }
}
