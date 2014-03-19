<?php
Yii::import('zii.widgets.CPortlet');
 
class SysRegistry extends CWidget
{
    
    public $rootId=0;
    public $param='';
    public $maillink=false;
    public $visible=true;
 
    public function getGalleryBlock() {
        //print_r(Galleries::model()->genGalleryInfo(2));
        return Galleries::model()->genSliderInfo($this->rootId);
    }

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
            case 'slider':
                $this->render('slider');
            break;

            case 'banner':
                $param = Registry::model()->genBanners(1);
                foreach ($param as $key => $value) {
                    $model[$value->param] = $value->value;
                }
                echo '<div class="top-banner"><a target="_blank" href="'.$model['link'].'"><img alt="'.$model['label'].'" src="/images/'.$model['image'].'"></a></div>';
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