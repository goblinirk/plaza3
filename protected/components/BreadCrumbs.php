<?php
Yii::import('zii.widgets.CPortlet');
 
class BreadCrumbs extends CWidget
{
    
    public $rootId=0;
    public $visible=true;
 
    public function getMainMenu()
    {
        return Pages::model()->genBreadCrumbs($this->rootId);
    }
 
    protected function renderContent()
    {
        $this->render('BreadCrumbs');
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