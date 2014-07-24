Schema4Evo
==========

Schema.org Creator MultiTvs

MultiTvs to create HTML with schema.org microdata 

### Supported schemas:

* Person
* Product
* Event
* Organization
* Movie
* Book
* Review

##### Schema Events Multitv:

![schema events](https://raw.githubusercontent.com/Nicola1971/Schema4Evo/master/schemaevent.jpg)

##### Schema Person Multitv:

![schema person](https://raw.githubusercontent.com/Nicola1971/Schema4Evo/master/schemaperson.jpg)
# This Package includes   

## Tvs (MultiTvs)

* **schemabook** 
* **schemaevent** 
* **schemamovie** 
* **schemaorganization** 
* **schemaperson** 
* **schemaproduct** 
* **schemareview** 

## Chunks:
* **Schema4Evo mm rules** (examples code for ManagerManager plugin Schemas Tab)

# Install
* Install with Package Manager
* Assign the desired MultiTv to your Template
* add ``[[multiTV? &tvName=`NameOfSchemaMultiTv` &display=`all`]]``

##### Example
``[[multiTV? &tvName=`schemaevent` &display=`all`]]``

## Create a dedicated ManagerManager Tab
* Copy the desired salmple code from **Schema4Evo mm rules** in your template

##### Example

``````
//Schema Event tab
mm_createTab('Schema.org Event','Event', '', $news_tpl, '', '600');
mm_moveFieldsToTab('schemaevent', 'Event', '', $news_tpl);

``````
