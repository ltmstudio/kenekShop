<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerExtensionModuleBlogFeatured extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/blog_featured');

        $this->document->addScript('view/javascript/jquery/Sortable.js');
        $this->document->addScript('view/javascript/jquery/jquery-sortable.js');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('blog_featured', $this->request->post);
			} else {
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
			}

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

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}

		if (isset($this->error['width'])) {
			$data['error_width'] = $this->error['width'];
		} else {
			$data['error_width'] = '';
		}

		if (isset($this->error['height'])) {
			$data['error_height'] = $this->error['height'];
		} else {
			$data['error_height'] = '';
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

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/blog_featured', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/blog_featured', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/blog_featured', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/blog_featured', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}

		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($module_info)) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = '';
		}

		$this->load->model('blog/article');

		$data['articles'] = array();

		if (!empty($this->request->post['article'])) {
			$articles = $this->request->post['article'];
		} elseif (!empty($module_info['article'])) {
			$articles = $module_info['article'];
		} else {
			$articles = array();
		}

		foreach ($articles as $article_id) {
			$article_info = $this->model_blog_article->getArticle($article_id);

			if ($article_info) {
				$data['articles'][] = array(
					'article_id' => $article_info['article_id'],
					'name'       => $article_info['name']
				);
			}
		}

		if (isset($this->request->post['limit'])) {
			$data['limit'] = $this->request->post['limit'];
		} elseif (!empty($module_info)) {
			$data['limit'] = $module_info['limit'];
		} else {
			$data['limit'] = 5;
		}

		if (isset($this->request->post['width'])) {
			$data['width'] = $this->request->post['width'];
		} elseif (!empty($module_info)) {
			$data['width'] = $module_info['width'];
		} else {
			$data['width'] = 200;
		}

		if (isset($this->request->post['height'])) {
			$data['height'] = $this->request->post['height'];
		} elseif (!empty($module_info)) {
			$data['height'] = $module_info['height'];
		} else {
			$data['height'] = 200;
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info)) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/blog_featured', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/blog_featured')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		if (!$this->request->post['width']) {
			$this->error['width'] = $this->language->get('error_width');
		}

		if (!$this->request->post['height']) {
			$this->error['height'] = $this->language->get('error_height');
		}

		return !$this->error;
	}
}