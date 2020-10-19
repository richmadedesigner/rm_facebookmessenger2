<?php
namespace Concrete\Package\RmFacebookmessenger2;

use Concrete\Core\Package\Package;
use Concrete\Core\Block\BlockType\BlockType;

defined('C5_EXECUTE') or die("Access Denied.");

class Controller extends Package
{
    protected $pkgHandle = 'rm_facebookmessenger2';
    protected $appVersionRequired = '8.0.0';
    protected $pkgVersion = '0.94';

    public function getPackageDescription()
    {
        return t("Add the Facebook Messenger Chat widget to your website");
    }

    public function getPackageName()
    {
        return t("RM Facebook Messenger Widget");
    }

    public function install()
    {
        $pkg = parent::install();

        $btRmFacebookMessenger2 = BlockType::getByHandle('rm_facebookmessenger2');
        if (!is_object($btRmFacebookMessenger2)) {
            BlockType::installBlockType('rm_facebookmessenger2', $pkg);
        }
    }
}

