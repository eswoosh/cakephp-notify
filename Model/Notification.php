<?php
App::uses('NotifyAppModel', 'Notification.Model');
/**
 * Notification Model
 *
*/
class Notification extends NotifyAppModel {


	public function acknowledge($user_id,$notification_id){
		return $this->updateAll(
			array('Notification.read' => true),
			array('Notification.user_id' => $user_id, 'Notification.id' => $notification_id)
		);
	}

	public function getNotifications($user_id, $limit = false){
		return $this->find('all', array(
			'conditions' => array(
				'Notification.user_id' => $user_id,
				'Notification.read' => false
			),
			'limit' => $limit,
		));
	}


}