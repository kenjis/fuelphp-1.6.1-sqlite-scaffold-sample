<h2>Listing <span class='muted'>Bbs</span></h2>
<br>
<?php if ($bbs): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Post date</th>
			<th>Message</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($bbs as $bbs): ?>		<tr>

			<td><?php echo $bbs->post_date; ?></td>
			<td><?php echo $bbs->message; ?></td>
			<td>
				<?php echo Html::anchor('bbs/view/'.$bbs->id, '<i class="icon-eye-open" title="View"></i>'); ?> |
				<?php echo Html::anchor('bbs/edit/'.$bbs->id, '<i class="icon-wrench" title="Edit"></i>'); ?> |
				<?php echo Html::anchor('bbs/delete/'.$bbs->id, '<i class="icon-trash" title="Delete"></i>', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Bbs.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('bbs/create', 'Add new Bbs', array('class' => 'btn btn-success')); ?>

</p>
