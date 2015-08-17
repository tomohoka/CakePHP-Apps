<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
		//Authコンポーネント 認証機能
    public $components = array('Session','DebugKit.Toolbar',
    'Auth' => array(
        'authenticate' => array(
            'Form' => array(
                'passwordHasher' => array(
                    'className' => 'Simple',
                    'hashType' => 'sha256'
                    )
                )
            )
        )
    );
    //ヘルパー
    public $helpers = array( //	//'Html'と'Form'と'Pagenator'に関するヘルパーを呼び出しなさい！(Sessionは標準装備)
        'Session',
        'Html' => array('className','TwitterBootstrap.BootstrapHtml'),
        'Form' => array('className','Twitterbootstrap.BootstrapForm'),
        'Paginator' => array('className','TwitterBootstrap.BootstrapPaginator'),
    );
    public $layout = 'bootstrap';


    // function beforeRender() {
    //     /**
    //     * 管理者用レイアウトを呼び出す
    //     * 
    //     */
    //     if ( Configure::read('Routing.prefixes') && !empty($this->params['admin']) ) {
    //         $this->layout = 'admin';
    //     }
    // }

    // function beforeRender() {
    //     parent::beforeFilter();
    //     if (isset($this->params['admin']) && true === $this->params['admin']) {
    //         $this->layout = 'admin';
    //     }
    // }

}