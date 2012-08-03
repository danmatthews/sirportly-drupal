<?php

/**
 * @file
 * Template for the sirportly dashboard.
 */

?>

<h2>Currently open support tickets:</h2>
<?php print $ticket_table; ?>

<h2>Available knowledge bases:</h2>


<?php if (count($knowledge_bases) > 0) : ?>
	<ul>
	<?php foreach($knowledge_bases as $knowledge) : ?>

		<li><?php print l($knowledge[1], 'admin/sirportly/knowledge/view/' . $knowledge[0]) ?></li>

	<?php endforeach; ?>
	</ul>
<?php endif; ?>
