/**
 * Schema4Evo_mm_rules
 *
 * Schema4Evo example rules for ManagerManager SEO Tab
 *
 * @author   Author: Nicola Lambathakis http://www.tattoocms.it/  
 * @category	chunk
 * @internal @modx_category Schema4Evo
 */
// Select the tab you need and copy and paste in you ManageManeger rules chunk


//Schema Book tab
mm_createTab('Schema.org Book','Book', '', $news_tpl, '', '600');
mm_moveFieldsToTab('schemabook', 'Book', '', $news_tpl);

//Schema Event tab
mm_createTab('Schema.org Event','Event', '', $news_tpl, '', '600');
mm_moveFieldsToTab('schemaevent', 'Event', '', $news_tpl);

//Schema Movie tab
mm_createTab('Schema.org Movie','Movie', '', $news_tpl, '', '600');
mm_moveFieldsToTab('schemamovie', 'Movie', '', $news_tpl);

//Schema Organization tab
mm_createTab('Schema.org Organization','Organization', '', $news_tpl, '', '600');
mm_moveFieldsToTab('schemaorganization', 'Organization', '', $news_tpl);

//Schema Person tab
mm_createTab('Schema.org Person','Person', '', $news_tpl, '', '600');
mm_moveFieldsToTab('schemaperson', 'Person', '', $news_tpl);

//Schema Product tab
mm_createTab('Schema.org Person','Product', '', $news_tpl, '', '600');
mm_moveFieldsToTab('schemaproduct', 'Product', '', $news_tpl);

//Schema Review tab
mm_createTab('Schema.org Review','Review', '', $news_tpl, '', '600');
mm_moveFieldsToTab('schemareview', 'Review', '', $news_tpl);