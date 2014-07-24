<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
    'type' => array(
        'caption' => 'Type',
        'type' => 'dropdown',
        'elements' => 'General==Event||Business==BusinessEvent||Childrens==ChildrensEvent||Comedy==ComedyEvent||Dance==DanceEvent||Education==EducationEvent||Festival==Festival||Food==FoodEvent||Music==MusicEvent||Sale==SaleEvent||Social==SocialEvent||Sports==SportsEvent||Theater==TheaterEvent||UserInteraction==UserInteraction||VisualArtsEvent==VisualArtsEvent'
    ),

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
        'type' => 'text'
    ),
    'startdate' => array(
        'caption' => 'Start Date',
        'type' => 'date',
        'width' => '150'
    ),

    'enddate' => array(
        'caption' => 'End Date',
        'type' => 'date',
        'width' => '150'
    ),
    'duration' => array(
        'caption' => 'Duration (hh:mm)',
        'type' => 'text'
    ),

    'address' => array(
        'caption' => 'Address',
        'type' => 'text'
    ),
    'pobox' => array(
        'caption' => 'PO Box',
        'type' => 'text'
    ),
    'city' => array(
        'caption' => 'City',
        'type' => 'text'
    ),
    'stateregion' => array(
        'caption' => 'State/Region',
        'type' => 'text'
    ),
    'postalcode' => array(
        'caption' => 'Postal Code',
        'type' => 'text'
    ),
    'country' => array(
        'caption' => 'Country',
        'type' => 'text'
    )
);
$settings['templates'] = array(
    'outerTpl' => '<div itemscope itemtype="http://schema.org/[+Type+]">[+wrapper+]</div>',
    'rowTpl' => '
<a itemprop="url" href="[+url+]"><div itemprop="name"><strong>[+name+]</strong></div>
</a>
<div itemprop="description">[+description+]</div>
<div><meta itemprop="startDate" content="[+startdate+]">Starts: [+startdate+]</div>
<meta itemprop="endDate" content="[+enddate+]">Ends: [+enddate+]
<meta itemprop="duration" content="0000-00-00T[+duration+]">Duration: [+duration+]
</div>
<div itemprop="location" itemscope itemtype="http://schema.org/PostalAddress">
<div itemprop="streetAddress">[+address+]</div>
<div>P.O. Box: <span itemprop="postOfficeBoxNumber">[+pobox+]</div>
<div><span itemprop="addressLocality">[+city+]</span>, <span itemprop="addressRegion">[+stateregion+]</span></div><div itemprop="postalCode">[+postalcode+]</div>
<div itemprop="addressCountry">[+country+]</div>
'
);
$settings['configuration'] = array(
    'enablePaste' => true,
    'enableClear' => true,
    'csvseparator' => ','
);