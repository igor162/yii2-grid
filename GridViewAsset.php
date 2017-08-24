<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 12.03.17
 * Time: 22:37
 */

namespace igor162\grid;


class GridViewAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/igor162/AdminLteStyle/plugins/datatables';
    public $css = [
        'dataTables.bootstrap.css',
    ];
    public $js = [];
    public $depends = [
        'app\assets\AppAsset',
    ];
}
