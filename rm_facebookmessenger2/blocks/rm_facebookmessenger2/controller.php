<?php
namespace Concrete\Package\RmFacebookmessenger2\Block\RmFacebookmessenger2;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Asset\AssetList;
use Concrete\Core\Asset\Asset;
use Concrete\Core\Package\Package;

defined('C5_EXECUTE') or die("Access Denied.");

class Controller extends BlockController
{
    protected $cID;
    protected $btInterfaceWidth = "900";
    protected $btInterfaceHeight = "300";
    protected $btTable = 'btRmFacebookMessenger2';
    protected $btDefaultSet = 'social';

    public function getBlockTypeDescription()
    {
        return t("Add the Facebook Messenger Chat widget to your Concrete5 website");
    }

    public function getBlockTypeName()
    {
        return t("RichMessenger for Facebook");
    }
}