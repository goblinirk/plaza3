<?php
Yii::import('zii.widgets.CPortlet');
 
class Otziv extends CWidget
{
    public $pageId=0;
    public $visible=true;
 
    public function getOtzivList()
    {
        return FbMessages::model()->getOtzivList($this->pageId);
    }
 
    protected function renderContent()
    {
        $this->render('Otziv');
    }

    public function init()
    {
        if($this->visible)
        {
            // отрендерить начало блока портлета
            // отрендерить заголовок портлета
        }
    }
 
    public function run()
    {
        if($this->visible)
        {
            $this->renderContent();
            // отрендерить конец блока портлета
        }
    }
}