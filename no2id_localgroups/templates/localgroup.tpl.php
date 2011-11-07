<?php
/*
 * localgroup.tpl.php:
 *    template for local groups info
 *
 * Copyright (c) 2009 no2id. All rights reserved.
 * Email: <adam@amyl.org.uk> Web: <http://blog.amyl.org.uk/>
 *
 * $Id: localgroup.tpl.php 58 2010-04-13 16:59:57Z harry $
 *
 */
?>

<div class="localgroup">
<h4><a name="<?php echo $group_name ?>"><?php echo $group ?></a></h4>

<?php if(!empty($contact_name)): ?>
  <p>Contact: <strong><?php echo $contact_name ?></strong></p>
<?php endif; ?>

<?php if(!empty($contact_email)): ?>
  <p>Co-ordinator's Email Address: <strong><?php echo $contact_email ?></strong></p>
<?php endif; ?>

<?php if(!empty($contact_tel)): ?>
  <p>Phone Number: <strong><?php echo $contact_tel ?></strong></p>
<?php endif; ?>

<?php if(!empty($grouplist_uri)): ?>
<p>Email List: <strong><?php echo l($grouplist_uri,$grouplist_uri) ?></strong></p>
<?php endif; ?>

<?php if(!empty($website)): ?>
  <p>Website: <strong><?php echo l($website,$website) ?></strong></p>
<?php endif; ?>
</div>
