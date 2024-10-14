<?php
class ControllerExtensionModuleLaybuyLayout extends Controller {
	private $error = array();

	public function index() {
		$this->load->model('setting/setting');

		$this->load->language('extension/module/laybuy_layout');

		$this->document->setTitle($this->language->get('heading_title'));

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_laybuy_layout', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');


				if (isset($this->request->get['route'])) {
					$get = explode("/", $this->request->get['route']);
					if ($get[0] == 'extension') {
						$ext = $get[0];
						$folder = $get[1];
						$file = $get[2];
					} else {
						$folder = $get[0];
						$file = $get[1];
					}
					if ($file == 'user_permission') {
						$table = 'user_group';
					} else {
						if($folder == 'module'){
							$table = 'module';
						}
						elseif($folder == 'newsblog') {
							$table = $folder.'_'.$file;
						} else {
							$table = $file;
						}
					}
					$this->load->model('setting/setting');
					if ($file == 'user_permission' || $folder == 'module') {
						$id = $this->model_setting_setting->getLastId($table, $table);
					} else {
						$id = $this->model_setting_setting->getLastId($table, $file);
					}

					if ($folder != 'module') {
						if ($file == 'setting') {
							$route = 'setting/store';
							$editroute = 'setting/setting';
						} else {
							$route = $folder.'/'.$file;
							$editroute = $folder.'/'.$file.'/edit';
						}
					} else {
						if (isset($ext)) {
							$route = 'extension/'.$folder.'/'.$file;
							$editroute = 'extension/'.$folder.'/'.$file;
						} else {
							$route = $folder.'/'.$file;
							$editroute = $folder.'/'.$file;
						}
					}

					if (!isset($url)) $url = '';

					if(($folder != 'module') && ($folder != 'newsblog')) {
						if (($file != 'setting') && (isset($this->request->get[$table.'_id']) || isset($id))) {
							$url .= '&'.$table.'_id='.(isset($this->request->get[$table.'_id']) ? $this->request->get[$table.'_id'] : $id);
						}
					}
					elseif($folder == 'newsblog') {
						$url .= '&'.$file.'_id='.(isset($this->request->get[$file.'_id']) ? $this->request->get[$file.'_id'] : $id);
					} else {
						$url .= '&module_id='.(isset($this->request->get['module_id']) ? $this->request->get['module_id'] : $id);
					}
					if (isset($this->request->post['apply']) && $this->request->post['apply'] == '1') {
						$this->response->redirect($this->url->link($editroute, 'user_token=' . $this->session->data['user_token'] . $url, true));
					} else {
						if($folder != 'module') {
							$this->response->redirect($this->url->link($route, 'user_token=' . $this->session->data['user_token'] . $url, true));
						}
					}
				}
			
			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/laybuy_layout', 'user_token=' . $this->session->data['user_token'], true)
		);

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['action'] = $this->url->link('extension/module/laybuy_layout', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->post['module_laybuy_layout_status'])) {
			$data['module_laybuy_layout_status'] = $this->request->post['module_laybuy_layout_status'];
		} else {
			$data['module_laybuy_layout_status'] = $this->config->get('module_laybuy_layout_status');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/laybuy_layout', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/laybuy_layout')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}