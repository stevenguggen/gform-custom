# Gravity Forms Custom Tool Kit

## features:

- adds autocomplete feature to a post code field using google maps api and places library
- COMING SOON! animated custom slider
- COMING SOON! custom progress bar
- COMING SOON! table with refinance, balance, monthly payments and interest rate fields

### for developers:
* don't for get to run npm install and gulp from the root directory *

#### javascript
- register javascript enqueues in the enqueues class.
- if for some reason, you are adding javascript that will always be loaded in the header or footer, there is a method in the enqueues class that enqueues by default. you probably won't use this but if you need to it's there.
- localize vars using the method in the enqueues class.
- to add javascript, put your code in a .js file in dist/js/ (or a sub-folder) and register it in the enqueues class. that way you can enqueue it properly wherever you need to and we can find all the registered javascript listed in one place with neat, clean handles.

#### styles
- use sass
- all of the css is compiled via sass to css main.css which is enqueued by default
- to add styles, add to the appropriate sass file in the sass folder.
- if you create a new sass file in /sass, remember to @import via the /sass/main.scss
- then run gulp watch to compile your sass


#### shortcodes
- add shortcodes to the shortcodes class.
- for markup create a view file in /src/Views/
- try to separate your data processing from your markup view presentation layer
- feel free to create classes for reuseable data objects and functions
- don't echo a bunch of html tags in your methods
- and don't query the database down in your markup.
- define all of your objects and then include your markup from view files, which will present the data, not process or query it.

#### rest routes

#### widgets

#### admin options
