<?php
Yii::import('zii.widgets.CPortlet');
 
class SysRegistry extends CWidget
{
    
    public $rootId=0;
    public $param='';
    public $maillink=false;
    public $visible=true;
 
    public function getSpheres($ind)
    {
        $sphereparams = Registry::model()->genSpheresMenu($ind);
        $sphere = array();
        foreach ($sphereparams as $key => $value) {
            $sphere[$value->param] = $value->value;
        }
        
        return $sphere;
    }
 
    protected function renderContent()
    {
        switch ($this->param) {
            case 'sphere_module':
                $this->render('sphere_module');
            break;
            
            default:
                $param = Registry::model()->getSysParam($this->param);
                if($this->maillink)
                    echo '<a href="mailto:'.$param->value.'">'.$param->value.'</a>';
                else
                    echo $param->value;
            break;
        }
        
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