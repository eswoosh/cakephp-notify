<?php
App::uses('NotifyAppModel', 'Notification.Model');
/**
 * Notification Model
 *
*/
class Notification extends NotifyAppModel {

	/*
		Raise new notification
		returns: notification ID, INT
	*/
	public function create($from_id, $to_id, $url, $text = 'Click here for more info', $icon = 'flag', $colour = '#D0FDEF'){


		$this->Notification->create();
		/* @TODO */

	}


	/*
		Mark existing notification as 'read'
		in: user_id, notification id, single (bool) (if single is false then mark all notifications READ for that user)
		returns: BOOL (true on success)
	*/
	public function read($user_id,$notification_id, $single = true){
		if($single):
			return $this->updateAll(
				array('Notification.read' => true),
				array('Notification.user_id' => $user_id, 'Notification.id' => $notification_id)
			);
		else:
			/*mark all of this users notifications as read*/
			return $this->updateAll(
				array('Notification.read' => true),
				array('Notification.user_id' => $user_id)
			);
		endif;
	}


	/*
		Delete existing notification
		returns: BOOL (true on success)
	*/
	public function delete($user_id,$notification_id){		
		/* @TODO - check if this user_id is allowed to delete this notification_id (i.e ownership) */
		//return $this->Notification->delete($notification_id);

		return false;
	}


	/*
		Get existing notifications
		In: user_id (int/char), Read (BOOL), Limit (int)
		returns: array of results
	*/
	public function get($user_id, $read = false, $limit = false){
		return $this->find('all', array(
			'conditions' => array(
				'Notification.user_id' => $user_id,
				'Notification.read' => $read
			),
			'limit' => $limit,
		));
	}


}