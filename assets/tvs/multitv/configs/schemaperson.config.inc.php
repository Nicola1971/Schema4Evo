<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
    'name' => array(
        'caption' => 'Name',
        'type' => 'text'
    ),
    'organization' => array(
        'caption' => 'Organization',
        'type' => 'text'
    ),
    'jobtitle' => array(
        'caption' => 'Job title',
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
    'birthdate' => array(
        'caption' => 'Birth Date',
        'type' => 'date',
        'width' => '150'
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
    ),
    'email' => array(
        'caption' => 'Email',
        'type' => 'text'
    ),
    'telephone' => array(
        'caption' => 'Telephone',
        'type' => 'text'
    ),
);
$settings['templates'] = array(
    'outerTpl' => '<div itemscope itemtype="http://schema.org/Person">[+wrapper+]</div>',
    'rowTpl' => '
<a itemprop="url" href="[+URL+]"><div itemprop="name"><strong>[+name+]</strong></div>
</a>
<div itemscope itemtype="http://schema.org/Organization"><span itemprop="name">[+organization+]</span></div><div itemprop="jobtitle">[+jobtitle+]</div>
<div itemprop="description">[+description+]</div>
<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
<div itemprop="streetAddress">[+address+]</div>
<div>P.O. Box: <span itemprop="postOfficeBoxNumber">[+pobox+]</div>
<div><span itemprop="addressLocality">[+city+]</span>, <span itemprop="addressRegion">[+stateregion+]</span></div><div itemprop="postalCode">[+postalcode+]</div>
<div itemprop="addressCountry">[+country+]</div>
</div>
<div itemprop="email">[+email+]</div>
<div itemprop="telephone">[+telephone+]</div>
<div><meta itemprop="birthDate" content="[+birthdate+]">DOB: [+birthdate+]</div>
'
);
$settings['configuration'] = array(
    'enablePaste' => true,
    'enableClear' => true,
    'csvseparator' => ','
);