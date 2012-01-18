<?php
// TODO : this should go in a component's controller
$events = $form->getObject()->getUpcomingEvents(7);
?>

<?php if ($events): ?>
<div class="clearfix sf_admin_form_row">
	<div>
		<label>Events</label>
		<div class="input">
			<ul>
	<?php foreach ($events as $event): ?>
				<li>
					[<a href="http://www.musiques-incongrues.net/forum/discussion/<?php echo $event['discussionid']?>">view</a>]
					[<a href="http://www.musiques-incongrues.net/forum/post/<?php echo $event['firstcommentid']?>">edit</a>]
					<?php echo utf8_decode($event['name']) ?> - <?php echo $event['LUM_Event']['date'] ?> - <?php echo $event['LUM_Event']['city'] ?>, <?php echo $event['LUM_Event']['country'] ?>
				</li>
	<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?>