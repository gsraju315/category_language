<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bootstrap_helper {
    protected $CI;
    public function __construct($params){
        $this->CI =& get_instance();
        $CI->load->helper('form');
        $CI->load->helper('html');
    }

    public create_form($elements_list){        
        //form_open([$action = ''[, $attributes = ''[, $hidden = array()]]]
        //$hidden = array('username' => 'Joe', 'member_id' => '234');
        //<input type="hidden" name="username" value="Joe" />
        //<input type="hidden" name="member_id" value="234" />
        $form_open = form_open('email/send', $elements_list['form_attributes'], $elements_list['hidden_elements']);
        //form_input([$data = ''[, $value = ''[, $extra = '']]])
        /*$data = array(
        'name'          => 'username',
        'id'            => 'username',
        'value'         => 'johndoe',
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%'
        'class'         => ???
        'onClick'       => ???
        ); */
        $form_input = form_input($data, $js);
        $form_password = '';        // identical to form input
        $form_upload = '';          // identical to form input
        $form_textarea = '';        // identical to form_input()
        $form_dropdown = '';        // form_dropdown('shirts', $options, 'large', $js);
        $form_multiselect = '';     // form_multiselect([$name = ''[, $options = array()[, $selected = array()[, $extra = '']]]])
        $form_fieldset = '';        // form_fieldset([$legend_text = ''[, $attributes = array()]])
        $form_checkbox = '';        // form_checkbox([$data = ''[, $value = ''[, $checked = FALSE[, $extra = '']]]])
        $form_radio = '';           // form_radio([$data = ''[, $value = ''[, $checked = FALSE[, $extra = '']]]])
        $form_label = '';           // form_label([$label_text = ''[, $id = ''[, $attributes = array()]]])
        $form_submit = '';          // form_submit([$data = ''[, $value = ''[, $extra = '']]])
        $form_reset = '';           // form_reset([$data = ''[, $value = ''[, $extra = '']]])
        $form_button = '';          // form_button([$data = ''[, $content = ''[, $extra = '']]])
        $form_close = '';           // form_close([$extra = ''])
        $set_value = '';            // set_value($field[, $default = ''[, $html_escape = TRUE]])
        $set_select = '';           // set_select($field[, $value = ''[, $default = FALSE]])
        $set_checkbox = '';         // set_checkbox($field[, $value = ''[, $default = FALSE]])
        $set_radio = '';            // set_radio($field[, $value = ''[, $default = FALSE]])
        $form_prep = '';            // form_prep($str)
    }

    public create_dropdown($current_value, $dropdown_data, $label_text, $css_js, $dropdown_name, $display_text, $value_text){
        $sub_array = array();
        if(!!$display_text && !!$value_text) {
            foreach($dropdown_data as $data) {
                $sub_array[$data[$display_text]] = $data[$value_text];
            }
        }
        else {
            $sub_array = $dropdown_data;
        }
        $current_value = !!$current_value ? $current_value : '';
        $css_js = !!$css_js ? $css_js : '';
        $form_dropdown = form_dropdown('shirts', $sub_array, $current_value, $css_js);
        $label_text = !!$label_text ? "<label for='$label_text'>$label_text</label>" : "<label for='$dropdown_name'>$dropdown_name</label>"; 
        return $label_text.br(1).$form_dropdown;
    }
}