<h2>Editing <span class='muted'>Bbs</span></h2>
<br>

<?php echo render('bbs/_form'); ?>
<p>
	<?php echo Html::anchor('bbs/view/'.$bbs->id, 'View'); ?> |
	<?php echo Html::anchor('bbs', 'Back'); ?></p>
