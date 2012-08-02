<h2>Currently open support tickets:</h2>
<?php print $ticket_table; ?>

<h2>Available knowledge bases:</h2>


<?php if (count($knowledge_bases) > 0) : ?>
	<ul>
	<?php foreach($knowledge_bases as $knowledge) : ?>

		<li><?php print l($knowledge['name'], 'admin/sirportly/knowledge/view/'.$knowledge['id']) ?></li>

	<?php endforeach; ?>
	</ul>
<?php endif; ?>