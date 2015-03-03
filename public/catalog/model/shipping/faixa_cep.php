<?php

class ModelShippingFaixaCEP extends Model {

      function getQuote($address) {
            $this->load->language('shipping/faixa_cep');

            $postcode = (int) preg_replace("/[^0-9]/", "", $address['postcode']);

            $status = false;

            $faixa_cep_interval = json_decode($this->config->get('faixa_cep_interval'), true);
            $cart_subtotal = $this->cart->getSubTotal();            
            
            $faixa_cep_title = $this->language->get('text_description');

            if ($faixa_cep_interval && $this->config->get('faixa_cep_status')) {
                  foreach ($faixa_cep_interval as $interval) {
                        //DEFINE AS FAIXAS DE CEP            
                        if (strstr($interval['cep'], ':')) {
                              $ceps = explode(":", str_replace("-", "", $interval['cep']));

                              if ($postcode >= (int) $ceps[0] && $postcode <= (int) $ceps[1]) {
                                    $status = true;
                              }
                        } elseif ($interval['cep']) {
                              $cep = str_replace("-", "", $interval['cep']);
                              
                              if ($postcode == $cep) {
                                    $status = true;
                              }
                        }

                        if ($cart_subtotal < (float)$interval['order_total']) {
                              $status = false;
                        }
                        
                        $faixa_cep_title = $interval['title'];
                        $faixa_cep_cost = (float)$interval['cost'];
                        
                        if($status === true) break;
                  }
            }

            $method_data = array();

            if ($status && isset($faixa_cep_cost)) {
                  $quote_data = array();

                  $quote_data['faixa_cep'] = array(
                      'code' => 'faixa_cep.faixa_cep',
                      'title' => $faixa_cep_title,
                      'cost' => $faixa_cep_cost,
                      'tax_class_id' => 0,
                      'text' => $this->currency->format($faixa_cep_cost)
                  );

                  $method_data = array(
                      'code' => 'faixa_cep',
                      'title' => $this->language->get('text_title'),
                      'quote' => $quote_data,
                      'sort_order' => $this->config->get('faixa_cep_sort_order'),
                      'error' => false
                  );
            }

            return $method_data;
      }

}

?>