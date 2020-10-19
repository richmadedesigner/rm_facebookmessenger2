<?php
defined('C5_EXECUTE') or die('Access Denied');
?>
 <!-- Feed Text Color -->
    <div class="form-group">
        <?php  echo '<label class="control-label">' . t('Widget Theme Color') . '</label>'; ?>
        <br>
        <?php
        $color = Core::make('helper/form/color');
        $color->output('fbpagecolor', $fbpagecolor ? $fbpagecolor : "#000000", array('preferredFormat'=>'hex'));
        ?>
    </div>

<div class="form-group">
    <?php echo $form->label('fbidcode', t('Your Facebook page id number'));?>
    <?php echo $form->text('fbpageid', $fbpageid);?>
</div>
<br>
<br>



