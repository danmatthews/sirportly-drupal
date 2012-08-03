<?php

/**
 * @file
 * Template for a single ticket.
 */

?>

<p class="ticket-recieved">The following ticket was received at <?php print date("jS F Y", $date); ?> at <?php print date("H:ia", $date) ?>:</p>

<table id="ticket-info">

<tr>
	<td class="label">From</td>
	<td class="value"><?php print $customer['name'] ?> &lt;<?php print $email ?>&gt;</td>
</tr>

<tr>
	<td class="label">Subject</td>
	<td class="value"><?php print $subject ?></td>
</tr>

<tr>
	<td class="label">Message:</td>
	<td><?php print $message; ?></td>
</tr>

</table>
