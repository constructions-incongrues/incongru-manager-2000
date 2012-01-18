<?php
// TODO : this should go in a component's controller
$image = $form->getObject()->getImage();
?>

<?php if (filter_var($image, FILTER_VALIDATE_URL)): ?>
<div class="clearfix sf_admin_form_row">
	<div>
		<label>Image de la semaine (preview)</label>
		<div class="input">
			<img src="<?php echo $image?>" width="500"/>
		</div>
	</div>
</div>
<?php endif; ?>