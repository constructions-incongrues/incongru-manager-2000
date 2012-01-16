<?php
$mixes = $form->getObject()->getMixes();
$releases = $form->getObject()->getReleases();
$users = $form->getObject()->getUsers();
?>

<?php if ($mixes): ?>
<div class="clearfix sf_admin_form_row">
	<div>
		<label>Mixes</label>
		<div class="input">
			<ul>
	<?php foreach ($mixes as $mix): ?>
				<li><?php echo utf8_decode($mix['name']) ?> (<a href="http://www.musiques-incongrues.net/forum/discussion/<?php echo $mix['discussionid']?>">discussion</a> / <a href="<?php echo $mix['downloadlink']?>">download</a>)</li>	
	<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?>
		
<?php if ($releases): ?>
<div class="clearfix sf_admin_form_row">
	<div>
		<label>Releases</label>
		<div class="input">
			<ul>
			<?php foreach ($releases as $release): ?>
				<li><?php echo utf8_decode($release['name']) ?> (<a href="http://www.musiques-incongrues.net/forum/discussion/<?php echo $release['discussionid']?>">discussion</a> / <a href="<?php echo $release['downloadlink']?>">download</a>)</li>	
			<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?>

<?php if ($users): ?>
<div class="clearfix sf_admin_form_row">
	<div>
		<label>Users</label>
		<div class="input">
			<ul>
		<?php foreach ($users as $user): ?>
				<li><a href="http://www.musiques-incongrues.net/forum/account/<?php echo $user['userid']?>"><?php echo utf8_decode($user['name']) ?></a></li>	
		<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?>
