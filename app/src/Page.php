<?php

namespace {

    use SilverStripe\CMS\Model\SiteTree;
    use SilverStripe\Forms\DropdownField;

    /**
 * Class \Page
 *
 * @property string $MenuPosition
 */
    class Page extends SiteTree
    {
        private static $db = [
            "MenuPosition" => "Enum('main,footer', 'main')",
        ];

        private static $has_one = [];

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            $fields->addFieldToTab("Root.Main", new DropdownField("MenuPosition", "Menü", [
                "main" => "Hauptmenü",
                "footer" => "Footer",
            ]), "Content");
            return $fields;
        }
    }
}
