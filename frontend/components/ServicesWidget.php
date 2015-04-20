<?php
    namespace app\components;

    use yii\base\Widget;

    class ServicesWidget extends Widget
    {
        // public $menuItems;

        public function init()
        {
            parent::init();
        }

        public function run()
        {
            return $this->render('services');
        }
    }