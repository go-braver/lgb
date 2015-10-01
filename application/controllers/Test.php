<?php
require_once(APPPATH.'libraries/REST_Controller.php');

class Test extends LGB_Controller {

	/**
	 * 各sceneとかの情報取得
	 *
	 */
	function menu() {
		$user_id = $this->input->get_post('user_id', TRUE);

		$indexData = new IndexData();
		$data = $indexData->get_index($user_id);
log_message('debug', json_encode($data, true));
                $this->output->set_output(json_encode($data));
                $this->output->_display();
		exit;
	}

	/**
	 * masterデータの取得
	 * 
	 */
	function master() {
		$masterData = new MasterData();
		$data = $masterData->get_master();

                $this->output->set_output(json_encode($data));
                $this->output->_display();
		exit;
	}

	/**
	 * userデータの取得
	 * @param user_id
	 */
	function user() {
		$user_id = $_REQUEST['user_id'];
		$user_id = 1;
		$userData = new UserData();
		$data = $userData->get_user($user_id);

		$this->output->set_output(json_encode($data));
		$this->output->_display();
		exit;
	}
}
