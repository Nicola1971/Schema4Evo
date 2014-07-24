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
    'director' => array(
        'caption' => 'Director',
        'type' => 'text'
    ),
    'actor' => array(
        'caption' => 'Actor',
        'type' => 'text'
    ),
    'actor2' => array(
        'caption' => 'Actor',
        'type' => 'text'
    ),
    'actor3' => array(
        'caption' => 'Actor',
        'type' => 'text'
    )
);
$settings['templates'] = array(
    'outerTpl' => '<div itemscope itemtype="http://schema.org/Movie"> [+wrapper+]</div>',
    'rowTpl' => '
<a itemprop="url" href="[+url+]"><div itemprop="name"><strong>[+name+]</strong></div>
</a>
<div itemprop="description">[+description+]</div>
<div itemprop="director" itemscope itemtype="http://schema.org/Person">
Directed by: <span itemprop="name">[+director+]</span></div>
<div>Starring: <div itemprop="actors" itemscope itemtype="http://schema.org/Person">
<span itemprop="name">[+actor+]</span></div>
<div itemprop="actors" itemscope itemtype="http://schema.org/Person">
<span itemprop="name">[+actor2+]</span></div>
<div itemprop="actors" itemscope itemtype="http://schema.org/Person">
<span itemprop="name">[+actor3+]</span></div>
</div>
'
);
$settings['configuration'] = array(
    'enablePaste' => true,
    'enableClear' => true,
    'csvseparator' => ','
);