# cakephp-notify
Notifications plugin for CakePHP 2.x

-- Notify plugin for CakePHP 2x --

This plugin written by Paul Drage from e-swoosh Ltd is used to raise notifications on a multi user system.
You can raise a notification about any controller/model combination.

The requirements per notifications are thus:
The plugin will accept a controller and model, or, a URL to send the user to when the notification item is clicked.

Notifications require 'Users' to associate the notification with - this is important for keeping tracking of who is notifying who as well as data connections- i.e User 1 is notifying User 2 about an update to Order 1234.

Notifications rely on the model 'User' and it's associated 'id' field- the schema that ships with this plugin allows for a 36 char user_id field but this can easily be modified to an INTEGER(11) field -- see 'schema'.

Notifications, when clicked direct a user at a redirection method of the plugin: First the user is sent to the plugins 'acknowledged' function; this method simply marks the notification as 'read' in the database, so in future it is not displayed, or is displayed elsewhere.
Once marked as 'read' the user is redirected to the correct final destination, e.g /Orders/view/1234 




