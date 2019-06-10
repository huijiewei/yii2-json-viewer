<?php


namespace huijiewei\jsonViewer;

use yii\base\Widget;

class JsonViewerWidget extends Widget
{
    public $data = [];

    public function init()
    {
        parent::init();

        JsonViewerAsset::register($this->getView());
    }

    public function run()
    {
        $js = <<<EOD
$('#$this->id').jsonViewer($this->data);
EOD;

        $this->getView()->registerJs($js);

        $html = '<pre id="' . $this->id . '"></pre>';

        return $html;
    }
}
