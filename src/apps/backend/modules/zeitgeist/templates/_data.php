<?php
// TODO : this should go in a component's controller
$zeitgeist = $form->getObject();
$dateTimeStart = DateTime::createFromFormat('Y-m-d', $zeitgeist->datestart);
$dateTimeEnd = DateTime::createFromFormat('Y-m-d', $zeitgeist->dateend);
$urlImages = sprintf('http://data.musiques-incongrues.net/collections/links/segments/images/get?contributed_at=[%sT00:00:00Z%%20TO%%20%sT00:00:00Z]&viewmode=gallery', $dateTimeStart->format('Y-m-d'), $dateTimeEnd->format('Y-m-d'));
$urlYoutube = sprintf('http://data.musiques-incongrues.net/collections/links/segments/youtube/get?contributed_at=[%sT00:00:00Z%%20TO%%20%sT00:00:00Z]&viewmode=gallery', $dateTimeStart->format('Y-m-d'), $dateTimeEnd->format('Y-m-d'));
$urlVimeo = sprintf('http://data.musiques-incongrues.net/collections/links/segments/all/get?contributed_at=[%sT00:00:00Z%%20TO%%20%sT00:00:00Z]&domain_parent=vimeo.com&viewmode=gallery', $dateTimeStart->format('Y-m-d'), $dateTimeEnd->format('Y-m-d'));
$urlAll = sprintf('http://data.musiques-incongrues.net/collections/links/segments/all/get?contributed_at=[%sT00:00:00Z%%20TO%%20%sT00:00:00Z]&viewmode=gallery', $dateTimeStart->format('Y-m-d'), $dateTimeEnd->format('Y-m-d'));
?>

<div class="clearfix sf_admin_form_row">
	<div>
		<label>Explorer data.musiques-incongrues.net</label>
		<div class="input">
			<ul>
				<li><a target="_blank" href="<?php echo $urlImages ?>">Les images</a></li>
				<li><a target="_blank" href="<?php echo $urlYoutube ?>">Les vidéos youtube</a></li>
				<li><a target="_blank" href="<?php echo $urlVimeo ?>">Les vidéos vimeo</a></li>
				<li><a target="_blank" href="<?php echo $urlAll ?>">Tous les liens</a></li>
			</ul>
		</div>
	</div>
</div>

