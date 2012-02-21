<?php
// TODO : this should go in a component's controller
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
				<li>
					[<a href="http://www.musiques-incongrues.net/forum/discussion/<?php echo $mix['discussionid']?>">view</a>]
					[<a href="http://www.musiques-incongrues.net/forum/post/<?php echo $mix['firstcommentid']?>">edit</a>]
					<?php echo utf8_decode($mix['name']) ?>
				</li>	
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
				<li>
					[<a href="http://www.musiques-incongrues.net/forum/discussion/<?php echo $release['discussionid']?>">view</a>]
					[<a href="http://www.musiques-incongrues.net/forum/post/<?php echo $release['firstcommentid']?>">edit</a>]
					<?php echo utf8_decode($release['name']) ?>
				</li>	
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
				<li>
					[<a href="http://www.musiques-incongrues.net/forum/account/<?php echo $user['userid']?>" target="_blank">view</a>]
					[<a href="<?php echo url_for('@lum_user_edit?userid='.$user['userid']) ?>" target="_blank">delete</a>]
					<?php echo utf8_decode($user['name']) ?>
				</li>
		<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?>
