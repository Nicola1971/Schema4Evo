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
    'author' => array(
        'caption' => 'Author',
        'type' => 'text'
    ),
    'datepublished' => array(
        'caption' => 'Date published',
        'type' => 'date',
        'width' => '150'
    ),
    'item' => array(
        'caption' => 'Item reviewed',
        'type' => 'text'
    ),
    'reviewbody' => array(
        'caption' => 'Review Body',
        'type' => 'textarea'
    ),
    'rating' => array(
        'caption' => 'Rating',
        'type' => 'text'
    ),
    'minrating' => array(
        'caption' => 'Rating scale minimum',
        'type' => 'text'
    ),
    'maxrating' => array(
        'caption' => 'Rating scale maximum',
        'type' => 'text'
    )
);
$settings['templates'] = array(
    'outerTpl' => '<div itemscope itemtype="http://schema.org/Review">[+wrapper+]</div>',
    'rowTpl' => '
<a itemprop="url" href="[+url+]"><div itemprop="name"><strong>[+name+]</strong></div>
</a>
<div itemprop="description">[+description+]</div>
<div itemprop="reviewBody">[+reviewbody+]</div>
<div itemprop="author" itemscope itemtype="http://schema.org/Person">
Written by: <span itemprop="name">[+author+]</span></div>
<div itemprop="itemReviewed" itemscope itemtype="http://schema.org/Thing">
<span itemprop="name">[+item+]</span></div>
<div><meta itemprop="datePublished" content="[+datepublished+]">Date published: [+datepublished+]</div>
<div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
<meta itemprop="worstRating" content="[+minrating+]"><span itemprop="ratingValue">[+rating+]</span> / <span itemprop="bestRating">[+maxrating+]</span> stars</div>

'
);
$settings['configuration'] = array(
    'enablePaste' => true,
    'enableClear' => true,
    'csvseparator' => ','
);