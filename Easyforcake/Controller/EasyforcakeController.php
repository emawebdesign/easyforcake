<?php

App::uses('AppController', 'Controller');

class EasyforcakeController extends AppController {
	
	public $components = array('Session','Cookie','RequestHandler');
	
	public $helpers = array('Html', 'Form', 'Session');

	
	
	
	public function autocomplete() {

        header('content-type: application/json; charset=utf-8');

		$this->autoRender = false;
		
		$model = addslashes(trim(strip_tags(urldecode(stripslashes($this->request->query['model'])))));
		$field = addslashes(trim(strip_tags(urldecode(stripslashes($this->request->query['field'])))));
		$this->request->query['phrase'] = addslashes(trim(strip_tags(stripslashes($this->request->query['phrase']))));

		$this->loadModel($model);

        $conditions = array($model ."." .$field ." LIKE '%" .$this->request->query['phrase'] ."%'");

        $items = $this->{$model}->find('all', array(
			'conditions' => $conditions
        ));
        
        $arr = array();

        foreach($items as $item):

            $arr[] = array(
                'id' => $item[$model]["id"],
                'value' => $item[$model][$field]
            );

        endforeach;

        echo json_encode($arr);

	}
	
	
	
	
}

?>