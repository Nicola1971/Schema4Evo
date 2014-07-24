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
    'publisher' => array(
        'caption' => 'Publisher',
        'type' => 'text'
    ),
    'bookedition' => array(
        'caption' => 'Book edition',
        'type' => 'text'
    ),
    'isbn' => array(
        'caption' => 'ISBN',
        'type' => 'text'
    ),
        'ebook' => array(
        'caption' => 'Ebook',
        'type' => 'option',
        'elements' => 'No==0||Yes==1'
    ),
        'paperback' => array(
        'caption' => 'Paperback',
        'type' => 'option',
        'elements' => 'No==0||Yes==1'
    ),
        'hardcover' => array(
        'caption' => 'Hardcover',
        'type' => 'option',
        'elements' => 'No==0||Yes==1'
    )
);
$settings['templates'] = array(
    'outerTpl' => '<div itemscope itemtype="http://schema.org/Book">[+wrapper+]</div>',
    'rowTpl' => '
<a itemprop="url" href="[+url+]"><div itemprop="name"><strong>[+name+]</strong></div>
</a>
<div itemprop="description">[+description+]</div>
<div itemprop="author" itemscope itemtype="http://schema.org/Person">
Written by: <span itemprop="name">[+author+]</span></div>
<div itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
Published by: <span itemprop="name">[+publisher+]</span></div>
<div><meta itemprop="datePublished" content="[+datepublished+]">Date published: [+datepublished+]</div>
<div>Edition: <span itemprop="bookEdition">[+bookedition+]</span></div>
<div>ISBN: <span itemprop="isbn">[+ISBN+]</span></div>
<div>Available in
[+ebook:ne=`0`:then=`<link itemprop="bookFormat" href="http://schema.org/Ebook">Ebook`+]
[+paperback:ne=`0`:then=`<link itemprop="bookFormat" href="http://schema.org/Paperback">Paperback`+]
[+hardcover:ne=`0`:then=`<link itemprop="bookFormat" href="http://schema.org/Hardcover">Hardcover`+]
 </div>
'
);
$settings['configuration'] = array(
    'enablePaste' => true,
    'enableClear' => true,
    'csvseparator' => ','
);