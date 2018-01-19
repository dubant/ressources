<?php
class ShareAction extends CAction
{
    public function run()
    {
	   	echo $this->getController()->renderPartial("co2.views.app.search",array("type"=>"ressources"));
    }
}