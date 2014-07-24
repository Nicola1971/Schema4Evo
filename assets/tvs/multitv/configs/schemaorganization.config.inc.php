<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
    'type' => array(
        'caption' => 'Type',
        'type' => 'dropdown',
        'elements' => 'General==Organization||Corporation==Corporation||Educational==EducationalOrganization||Government==GovernmentOrganization||LocalBusiness==LocalBusiness||NGO==NGO||PerformingGroup==PerformingGroup||SportsTeam==SportsTeam'
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
        'type' => 'textarea'
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
    'outerTpl' => '<div itemscope itemtype="http://schema.org/[+type+]">[+wrapper+]</div>',
    'rowTpl' => '
<a itemprop="url" href="[+URL+]"><div itemprop="name"><strong>[+name+]</strong></div>
</a>
<div itemprop="description">[+description+]</div>
<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
<span itemprop="streetAddress">[+address+]</span><br>
P.O. Box: <span itemprop="postOfficeBoxNumber">[+pobox+]</span><br>
<span itemprop="addressLocality">[+city+]</span><br>
<span itemprop="addressRegion">[+stateregion+]</span><br>
<span itemprop="postalCode">[+postalcode+]</span><br>
<span itemprop="addressCountry">[+coutry+]</span><br>
</div>
'
);
$settings['configuration'] = array(
    'enablePaste' => true,
    'enableClear' => true,
    'csvseparator' => ','
);