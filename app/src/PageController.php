<?php

namespace {

    use SilverStripe\Control\HTTPRequest;
    use SilverStripe\CMS\Controllers\ContentController;

    /**
 * Class \PageController
 *
 * @property \Page $dataRecord
 * @method \Page data()
 * @mixin \Page
 */
    class PageController extends ContentController
    {
        /**
         * An array of actions that can be accessed via a request. Each array element should be an action name, and the
         * permissions or conditions required to allow the user to access it.
         *
         * <code>
         * [
         *     'action', // anyone can access this action
         *     'action' => true, // same as above
         *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
         *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
         * ];
         * </code>
         *
         * @var array
         */
        private static $allowed_actions = [
           'feedViewableData'
        ];

        private static $url_handlers = [
            'fetchViewableData' => 'feedViewableData'
        ];

        protected function init()
        {
            parent::init();
            // You can include any CSS or JS required by your project here.
            // See: https://docs.silverstripe.org/en/developer_guides/templates/requirements/
        }

        public function feedViewableData(HTTPRequest $request)
        {
            $viewableData = [
                "Content" => $this->Content
            ];
            $json = json_encode($viewableData);
            $this->getResponse()->addHeader('Content-type', 'application/json');
            //echo "Test: " + $json;
            return $json;
        }
    }
}
