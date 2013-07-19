<h2>Viewing <span class='muted'>#<?php echo $bbs->id; ?></span></h2>

<p>
	<strong>Post date:</strong>
	<?php echo $bbs->post_date; ?></p>
<p>
	<strong>Message:</strong>
	<?php echo $bbs->message; ?></p>

<?php echo Html::anchor('bbs/edit/'.$bbs->id, 'Edit'); ?> |
<?php echo Html::anchor('bbs', 'Back'); ?>