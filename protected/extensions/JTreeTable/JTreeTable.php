<?php

/**
 * JTreeTable class file.
 *
 * @author jerry2801 <jerry2801@gmail.com>
 *
 * @version alpha 4 (2010-10-20 18:48)
 * @version alpha 3 (2010-8-12 14:05)
 * @version alpha 2 (2010-6-4 13:28)
 * @version alpha 1 (2010-4-30 15:57)
 * @requires treeTable v2.3.0 (http://ludo.cubicphuse.nl/jquery-plugins/treeTable/doc/index.html, http://plugins.jquery.com/project/treeTable)
 *
 * A typical usage of JTreeTable is as follows:
 * <pre>
 * $this->widget('ext.treetable.JTreeTable',array(
 *     'id'=>'treeTable',
 *     'primaryColumn'=>'id',
 *     'parentColumn'=>'parent_id',
 *     'columns'=>array(
 *         'id'=>array(
 *             'label'=>'Id',
 *             'headerHtmlOptions'=>array('width'=>80),
 *             'htmlOptions'=>array('align'=>'center'),
 *         ),
 *         'name'=>'Name',
 *     ),
 *     'items'=>array(
 *         array('id'=>1,'parent_id'=>0,'name'=>'test 1'),
 *         array('id'=>2,'parent_id'=>1,'name'=>'test 1\'s children 1'),
 *     ),
 *     'options'=>array(
 *         'initialState'=>'expanded',
 *     ),
 * ));
 * </pre>
 */
Yii::import('zii.widgets.grid.CGridView');

class JTreeTable extends CGridView
{
    public $primaryColumn = 'id';
    public $parentColumn = 'owner_id';
    public $itemsCssId = 'MyTreeGrid';
    public $jstree_options=array();

    public function renderItems()
    {
        if($this->dataProvider->getItemCount()>0 || $this->showTableOnEmpty)
        {
            echo "<table id=\"{$this->itemsCssId}\" class=\"{$this->itemsCssClass}\">\n";
            $this->renderTableHeader();
            ob_start();
            $this->renderTableBody();
            $body=ob_get_clean();
            $this->renderTableFooter();
            echo $body; // TFOOT must appear before TBODY according to the standard.
            echo "</table>";
        }
        else
            $this->renderEmptyText();
    }

    public function run()
    {
        $jstree_options=CJavaScript::encode($this->jstree_options);

        $path=dirname(__FILE__).DIRECTORY_SEPARATOR.'source';
        $baseUrl=Yii::app()->getAssetManager()->publish($path);

        $id=$this->itemsCssId;

        $js='$("#'.$id.'").find("tr").each(function(){ 
               var curr = $(this); 
               if(curr.attr("data-tt-parent-id") !== 0){ 
                    var pid = curr.attr("data-tt-parent-id"); 
                    childs = $("#'.$id.'").find("tr[data-tt-id="+pid+"]"); 
                    var rowsArray = [];
                    for(var i = 0; i<childs.length; i++)
                        rowsArray.push(childs[i]);

                    var compare = function(rowA, rowB) {
                        return rowA.attr("data-tt-sort") - rowB.attr("data-tt-sort");
                    };

                    rowsArray.sort(compare);

                    for(var i=0; i<rowsArray.length; i++)
                        $(rowsArray[i]).after(curr);
               } 
            });';

        $js.='$("#'.$id.'").treetable('.$jstree_options.');';

        $js.='$("#'.$id.'").find("tr").each(function(){ 
               var curr = $(this); 
               if(curr.attr("data-tt-parent-id") !== 0){ 
                    var pid = curr.attr("data-tt-parent-id"); 
                    childs = $("#'.$id.'").find("tr[data-tt-id="+pid+"]"); 
                    var rowsArray = [];
                    for(var i = 0; i<childs.length; i++)
                        rowsArray.push(childs[i]);

                    var compare = function(rowA, rowB) {
                        return rowA.attr("data-tt-sort") - rowB.attr("data-tt-sort");
                    };

                    rowsArray.sort(compare);

                    for(var i=0; i<rowsArray.length; i++)
                        $(rowsArray[i]).after(curr);
               } 
            });';

        $cs = Yii::app()->getClientScript();

        /*$juiBasePath=Yii::getPathOfAlias('zii.vendors.jui');
        $juiBaseUrl=Yii::app()->getAssetManager()->publish($juiBasePath);
        $cs->registerCssFile($juiBaseUrl.'/css/base/jquery-ui.css');
        $cs->registerScriptFile($juiBaseUrl.'/js/jquery-ui.min.js');*/

        $cs->registerCssFile($baseUrl.'/stylesheets/jquery.treetable.css');
        $cs->registerCssFile($baseUrl.'/stylesheets/jquery.treetable.theme.default.css');
        $cs->registerScriptFile($baseUrl.'/javascripts/jquery.treetable.js');

        $cs->registerScript(__CLASS__.'#'.$id,$js);

        parent::run();
    }

    /**
     * Renders a table body row.
     * @param integer $row the row number (zero-based).
     */
    public function renderTableRow($row)
    {
        $htmlOptions=array();
        if($this->rowHtmlOptionsExpression!==null)
        {
            $data=$this->dataProvider->data[$row];
            $options=$this->evaluateExpression($this->rowHtmlOptionsExpression,array('row'=>$row,'data'=>$data));
            if(is_array($options))
                $htmlOptions = $options;
        }

        if($this->rowCssClassExpression!==null)
        {
            $data=$this->dataProvider->data[$row];
            $class=$this->evaluateExpression($this->rowCssClassExpression,array('row'=>$row,'data'=>$data));
        }
        elseif(is_array($this->rowCssClass) && ($n=count($this->rowCssClass))>0)
            $class=$this->rowCssClass[$row%$n];

        $data = $data=$this->dataProvider->data[$row]->attributes;
        //$htmlOptions['id']='node-'.$data[$this->primaryColumn];
        $htmlOptions['data-tt-id']=$data[$this->primaryColumn];
        $htmlOptions['data-tt-parent-id']=$data[$this->parentColumn];
        $htmlOptions['data-tt-sort']=$data['sort'];

        if(!empty($class))
        {
            if(isset($htmlOptions['class']))
                $htmlOptions['class'].=' '.$class;
            else
                $htmlOptions['class']=$class;
        }

        echo CHtml::openTag('tr', $htmlOptions)."\n";
        foreach($this->columns as $column)
            $column->renderDataCell($row);
        echo "</tr>\n";
    }
}