Statamic Widon't Plugin
================================

Eliminates widows in your post titles by inserting a non-breaking space between the last two words of a title.

## Installing
1. Download the zip file (or clone via git) and unzip it or clone the repo into `/_add-ons/`.
2. Ensure the folder name is `widont` (Github timestamps the download folder).


## Usage

Wrap any text variable in the widont tag pair
    
    <h1>{{ widont }}{{ title }}{{ /widont }}</h1>

   

---

*Props to Shaun Inman for the original WordPress Widon't plugin*  
*http://www.shauninman.com/archive/2007/01/03/widont_2_1_wordpress_plugin/*