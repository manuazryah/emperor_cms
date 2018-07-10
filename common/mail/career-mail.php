<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\BaseMessage instance of newly created mail message */
if (isset($touser) && $touser != '')
        $name = $touser;
else
        $name = '';
?>

<html>
        <head>
                <style>
                        .main-content p{
                                line-height: 1.8;
                        }
                        .body{
                                font-family: Open Sans !important;
                        }
                </style>
        </head>
        <body>
                <div style="/* margin: 20px 200px 0px 300px; */border: 1px solid #9E9E9E;">
                        <table border ="0"  class="main-tabl" border="0">
                                <thead>
                                        <tr>
                                                <th style="width:100%">
                                                        <div class="header" style="padding-bottom: 40px;">
                                                                <div class="main-header">
                                                                        <div class="main-header-left" style="float: left;padding-left: 40px;">
                                                                                <?php echo Html::img('http://' . Yii::$app->request->serverName . '/images/logo.png', $options = ['width' => '200px']) ?>
                                                                                <?php //echo Html::img('@web/admin/images/logos/logo-1.png', $options = ['width' => '200px']) ?>
                                                                        </div>
                                                                        <div class="main-header-right" style="float: right;padding-right: 50px;padding-top: 24px;">
                                                                                <span style="color: #13a8b0;">emperor@emperorlines.com</span>
                                                                        </div>
                                                                </div>
                                                                <br/>
                                                        </div>
                                                </th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                                <td style="width:100%">
                                                        <div class="replay-content" style="text-align: justify;padding-right: 50px;padding-left: 50px;">
                                                                <hr style="border: 2px solid #9E9E9E;">
                                                                <div class="main-content">
                                                                    <table>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <th>:</th>
                                                                            <td><?= $model->name ?></td>
                                                                        </tr>
                                                                         <tr>
                                                                            <th>Email</th>
                                                                            <th>:</th>
                                                                            <td><?= $model->email ?></td>
                                                                        </tr>
                                                                         <tr>
                                                                            <th>Phone</th>
                                                                            <th>:</th>
                                                                            <td><?= $model->phone ?></td>
                                                                        </tr>
                                                                         <tr>
                                                                            <th>Position</th>
                                                                            <th>:</th>
                                                                            <td><?= $model->position ?></td>
                                                                        </tr>
                                                                         <tr>
                                                                            <th>Portfolio Url</th>
                                                                            <th>:</th>
                                                                            <td><?= $model->portfolio_url ?></td>
                                                                        </tr>
                                                                         <tr>
                                                                            <th>Message</th>
                                                                            <th>:</th>
                                                                            <td><?= $model->message ?></td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                        </div>
                                                </td>
                                        </tr>
                                </tbody>
                        </table>
                </div>
        </body>
</html>