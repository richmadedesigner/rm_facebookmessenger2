<?php
defined('C5_EXECUTE') or die("Access Denied.");
?>
<?php
$c = Page::getCurrentPage();
if ($c->isEditMode()) { 
?>
<div class="ccm-edit-mode-disabled-item" style="width:100%;">
        <div style="padding:8px 0px; padding-top: 10px;"><?= t('RM Facebook Messenger disabled in edit mode.'); ?></div>
    </div>
<?php } else { ?>
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="<?php $fbpageid; $fbid = filter_var($fbpageid, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $fbid;
?>"
  theme_color="<?php
				  $fbpagecolor = (!isset( $fbpagecolor ) || empty( $fbpagecolor ) )? "#0084ff" : $fbpagecolor;
$fbwidgetcolor = filter_var($fbpagecolor, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $fbwidgetcolor;
?>">
      </div>
<?php } ?>