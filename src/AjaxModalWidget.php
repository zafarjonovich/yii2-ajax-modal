<?php

namespace zafarjonovich\Yii2AjaxModal;

class AjaxModalWidget extends \yii\base\Widget
{
    public $unique_id;
    public $header;
    public $url;
    public $size = BaseAjaxModal::SIZE_SMALL;
    public $is_modal_x_large = false;
    public $label = '';
    public $button = [
        'label' => '<i class="fa fa-print"></i>',
        'tag' => 'span',
        'class' => 'btn btn-success',
        'style' => 'margin-left:10px; cursor:pointer;'
    ];

    public $options = [];

    public $widgetOptions = [];

    public function run()
    {
        if ($this->unique_id == null) {
            $this->unique_id = \Yii::$app->security->generateRandomString(7);
        }
        if ($this->is_modal_x_large) {
            $this->view->registerCss(
                ".modal-ku {
                  min-width: 88%;
                  margin: 2% 6%;
                }"
            );
        }

        $options = array_merge_recursive(
            ['class' => 'header-primary'],
            $this->options
        );

        $widgetOptions = array_merge([
            'id' => 'ajax_modal_' . $this->unique_id,
            'title' => $this->header,
            'toggleButton' => $this->button,
            'url' => $this->url,
            'ajaxSubmit' => false,
            'size' => $this->size,
            'options' => $options,
            'autoClose' => true,
            'pjaxContainer' => '#grid-pjax_' . $this->unique_id,
        ],$this->widgetOptions);

        return BaseAjaxModal::widget($widgetOptions);
    }
}