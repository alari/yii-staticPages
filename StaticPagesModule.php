<?php

class StaticPagesModule extends CWebModule
{
    public $actionView = "/staticPages/staticPages/view";
    public $view = "view";

    public $actionImageUpload = "/staticPages/redactorUpload/imageUpload";
    public $actionFileUpload = "/staticPages/redactorUpload/fileUpload";
    public $actionLinkFileUpload = "/staticPages/redactorUpload/linkFileUpload";

    public $modelClass = "StaticPage";

    public $imagesDir = "assets/staticPages/images";
    public $filesDir = "assets/staticPages/files";
    public $linkFilesDir = "assets/staticPages/files";

    public function init()
    {
        // this method is called when the module is being created
        // you may place code here to customize the module or the application

        // import the module-level models and components
        $this->setImport(array(
            'staticPages.models.*',
            'staticPages.components.*',
        ));
    }

    public function beforeControllerAction($controller, $action)
    {
        if (parent::beforeControllerAction($controller, $action)) {
            // this method is called before any module controller action is performed
            // you may place customized code here
            return true;
        } else
            return false;
    }

    public function model() {
        return StaticPage::model($this->modelClass);
    }
}
