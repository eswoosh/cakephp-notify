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
    	
    	
    }

}