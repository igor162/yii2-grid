<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 12.03.17
 * Time: 22:44
 */

namespace igor162\grid;

use yii\grid\DataColumn as YiiDataColumn;
use kartik\grid\DataColumn as KartikDataColumn;
use yii\helpers\Html;


class DataColumn extends KartikDataColumn
{

    public function renderHeaderCell()
    {
        $provider = $this->grid->dataProvider;
        if ($this->attribute !== null && $this->enableSorting &&
            ($sort = $provider->getSort()) !== false && $sort->hasAttribute($this->attribute)) {
            if (($direction = $sort->getAttributeOrder($this->attribute)) !== null) {
                Html::addCssClass($this->headerOptions, 'sorting_' . ($direction === SORT_DESC ? 'desc' : 'asc'));
            } else {
                Html::addCssClass($this->headerOptions, 'sorting');
            }
        }
        return Html::tag('th', $this->renderHeaderCellContent(), $this->headerOptions);
    }

}