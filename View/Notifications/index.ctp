<?php
	/*shows all unread notifications for this user id by default */
	/* @TODO -- wrap the text portion in a link that will redirect to the original URL */
?>
<ul class="notifications list">
<?php
	foreach ($notifications as $notification):
        echo '\t<li>'.$notification['text'] .'</li>';
    endforeach;
?>
</ul>