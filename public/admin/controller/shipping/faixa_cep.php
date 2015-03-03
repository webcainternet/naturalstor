<?php

class ControllerShippingFaixaCEP extends Controller {

      private $error = array();

      public function index() {
            $this->language->load('shipping/faixa_cep');

            $this->document->setTitle($this->language->get('heading_title'));

            $this->load->model('setting/setting');

            if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
                  
                  $this->request->post['faixa_cep_interval'] = json_encode($this->request->post['faixa_cep_interval']);
                  
                  $this->model_setting_setting->editSetting('faixa_cep', $this->request->post);
                  
                  $this->session->data['success'] = $this->language->get('text_success');

                  $this->redirect($this->url->link('extension/shipping', 'token=' . $this->session->data['token'], 'SSL'));
            }

            $this->data['heading_title'] = $this->language->get('heading_title');

            $this->data['text_enabled'] = $this->language->get('text_enabled');
            $this->data['text_disabled'] = $this->language->get('text_disabled');
            $this->data['text_all_zones'] = $this->language->get('text_all_zones');
            $this->data['text_none'] = $this->language->get('text_none');
            $this->data['text_interval'] = $this->language->get('text_interval');
            $this->data['text_interval_info'] = $this->language->get('text_interval_info');

            $this->data['entry_title'] = $this->language->get('entry_title');
            $this->data['entry_cep'] = $this->language->get('entry_cep');
            $this->data['entry_total'] = $this->language->get('entry_total');
            $this->data['entry_cost'] = $this->language->get('entry_cost');
            $this->data['entry_status'] = $this->language->get('entry_status');
            $this->data['entry_sort_order'] = $this->language->get('entry_sort_order');

            $this->data['button_add'] = $this->language->get('button_add');
            $this->data['button_remove'] = $this->language->get('button_remove');
            $this->data['button_save'] = $this->language->get('button_save');
            $this->data['button_cancel'] = $this->language->get('button_cancel');

            if (isset($this->error['warning'])) {
                  $this->data['error_warning'] = $this->error['warning'];
            } else {
                  $this->data['error_warning'] = '';
            }

            if (isset($this->error['faixa_cep_interval'])) {
                  $this->data['error_faixa_cep_interval'] = $this->error['faixa_cep_interval'];
            } else {
                  $this->data['error_faixa_cep_interval'] = '';
            }

            $this->data['breadcrumbs'] = array();

            $this->data['breadcrumbs'][] = array(
                'text' => $this->language->get('text_home'),
                'href' => $this->url->link('common/home', 'token=' . $this->session->data['token'], 'SSL'),
                'separator' => false
            );

            $this->data['breadcrumbs'][] = array(
                'text' => $this->language->get('text_shipping'),
                'href' => $this->url->link('extension/shipping', 'token=' . $this->session->data['token'], 'SSL'),
                'separator' => ' :: '
            );

            $this->data['breadcrumbs'][] = array(
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('shipping/faixa_cep', 'token=' . $this->session->data['token'], 'SSL'),
                'separator' => ' :: '
            );

            $this->data['action'] = $this->url->link('shipping/faixa_cep', 'token=' . $this->session->data['token'], 'SSL');

            $this->data['cancel'] = $this->url->link('extension/shipping', 'token=' . $this->session->data['token'], 'SSL');

            if (isset($this->request->post['faixa_cep_status'])) {
                  $this->data['faixa_cep_status'] = $this->request->post['faixa_cep_status'];
            } else {
                  $this->data['faixa_cep_status'] = $this->config->get('faixa_cep_status');
            }

            if (isset($this->request->post['faixa_cep_sort_order'])) {
                  $this->data['faixa_cep_sort_order'] = $this->request->post['faixa_cep_sort_order'];
            } else {
                  $this->data['faixa_cep_sort_order'] = $this->config->get('faixa_cep_sort_order');
            }

            if (isset($this->request->post['faixa_cep_interval'])) {
                  $this->data['faixa_cep_interval'] = $this->request->post['faixa_cep_interval'];
            } elseif ($this->config->get('faixa_cep_interval')) {
                  $this->data['faixa_cep_interval'] = json_decode($this->config->get('faixa_cep_interval'), true);
            } else {
                  $this->data['faixa_cep_interval'] = array();
            }

            $this->template = 'shipping/faixa_cep.tpl';
            $this->children = array(
                'common/header',
                'common/footer'
            );

            $this->response->setOutput($this->render());
      }

      protected function validate() {
            if (!$this->user->hasPermission('modify', 'shipping/faixa_cep')) {
                  $this->error['warning'] = $this->language->get('error_permission');
            }

            if (empty($this->request->post['faixa_cep_interval'])) {
                  $this->error['faixa_cep_interval'] = $this->language->get('error_interval');
            }

            if (!$this->error) {
                  return true;
            } else {
                  return false;
            }
      }

}

?>