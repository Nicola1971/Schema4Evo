<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
    'name' => array(
        'caption' => 'Name',
        'type' => 'text'
    ),

    'url' => array(
        'caption' => 'URL',
        'type' => 'text'
    ),
    'description' => array(
        'caption' => 'Description',
        'type' => 'textarea'
    ),
    'brand' => array(
        'caption' => 'Brand',
        'type' => 'text'
    ),
    'manufacturer' => array(
        'caption' => 'Manufacturer',
        'type' => 'text'
    ),
    'model' => array(
        'caption' => 'Model',
        'type' => 'text'
    ),
    'productid' => array(
        'caption' => 'Product ID',
        'type' => 'text'
    ),
    'avgrating' => array(
        'caption' => 'Avg Rating',
        'type' => 'text'
    ),
    'reviews' => array(
        'caption' => 'based on n reviews:',
        'type' => 'text'
    ),
    'price' => array(
        'caption' => 'Price',
        'type' => 'text'
    ),
    'condition' => array(
        'caption' => 'Condition',
        'type' => 'dropdown',
        'elements' => 'New==New||Used==Used||Refurbished==||Damaged==Damaged'
    )
);
$settings['templates'] = array(
    'outerTpl' => '<div itemscope itemtype="http://schema.org/Product"> [+wrapper+]</div>',
    'rowTpl' => '
<a itemprop="url" href="[+URL+]"><div itemprop="name"><strong>[+name+]</strong></div></a>
<div itemprop="description">[+description+]</div>
<div itemprop="brand" itemscope itemtype="http://schema.org/Organization">
<span itemprop="name">[+brand+]</span></div>
<div itemprop="manufacturer" itemscope itemtype="http://schema.org/Organization">
Manufactured by: <span itemprop="name">[+manufacturer+]</span></div>
<div>Model: <span itemprop="model">[+model+]</span></div>
<div>Product ID: <span itemprop="productID">[productid+]</span></div>
<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
<span itemprop="ratingValue">[+avgrating+]</span> based on <span itemprop="reviewCount">[+reviews+]</span> reviews</div>
<div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="price">[+price+]</span> <link itemprop="itemCondition" href="http://schema.org/NewCondition" />[+condition+]</div>
'
);
$settings['configuration'] = array(
    'enablePaste' => true,
    'enableClear' => true,
    'csvseparator' => ','
);