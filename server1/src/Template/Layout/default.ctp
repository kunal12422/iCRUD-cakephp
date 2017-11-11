<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html ng-app="coderDecoder2App">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css"/>
   <link rel="stylesheet" href="//rawgit.com/tameraydin/ngToast/2.0.0/dist/ngToast.css"/>
   <link rel="stylesheet" href="//rawgit.com/tameraydin/ngToast/2.0.0/dist/ngToast-animations.css"/>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body >
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href="#" ui-sref="home"><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <!-- <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div> -->
    </nav>
    <?= $this->Flash->render() ?>
    <!-- <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div> -->
    <div class="container clearfix">
        
        <div ui-view class="view"></div>
      
    </div>
    <footer>
    </footer>
    <script type="text/javascript" src="../../../js/bower_components/angular/angular.min.js"></script>
    <script type="text/javascript" src="../../../js/bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>
    <script  src="http://rawgit.com/tameraydin/ngToast/2.0.0/dist/ngToast.js"></script>
    <script type="text/javascript" src="../../../js/app/app.js"></script>
    <script type="text/javascript" src="../../../js/app/services/data.factory.js"></script>
    <script type="text/javascript" src="../../../js/app/main.controller.js"></script>
    <script type="text/javascript" src="../../../js/app/edit.controller.js"></script>
    <script type="text/javascript" src="../../../js/app/add.controller.js"></script>
    
    


</body>
</html>
