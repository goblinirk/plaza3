<?php
Yii::import('zii.widgets.CPortlet');
 
class News extends CWidget
{
    
    public $count=0;
    public $visible=true;
 
    public function getNewsWidget()
    {
        return Pages::model()->genNewsWidget($this->count);
    }
 
    protected function renderContent()
    {
        $this->render('News');
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