<?php

namespace FriendsOfBotble\HideActivatedLicenseInfo;

use Carbon\Laravel\ServiceProvider;

class HideActivatedLicenseInfoProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app['config']->set('core.base.general.hide_activated_license_info', true);

    }
}
