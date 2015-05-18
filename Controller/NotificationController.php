<?php
/* 	Plugin: Notify
	Author: e-swoosh Ltd, Paul Drage
	Version: 1.0
*/	

class NotificationController extends AppController {


	/* calls model functions primarily: holds plugin together including logic */


	public $helpers = array('Html');
	public $components = array('RequestHandler');


	public function index() {
        $this->set('notifications', $this->Notification->get( $this->Auth->User('id') ));
    }


    /* acknowledge aka READ status */
	public function ak($notification_id) {
        $acknowledged = $this->Notification->read( $this->Auth->User('id'),  $notification_id, true );

        $this->set('notification_status', $acknowledged);
    }



    public function notify(/* tbc */){

    	/* collate info and push to model */
    	/* $from_id, $to_id, $url, $text = 'Click here for more info', $icon = 'flag', $colour = '#D0FDEF' */
    	$text = "This is a notification!";
    	$icon = "flag";
    	$colour = "red";

    	$new_notification = $this->Notification->new( $this->Auth->User('id'), $to_id, $text, $icon, $colour);
    	pr($new_notification);

    }

}