<?php
class Plugin_widont extends Plugin {

  var $meta = array(
    'name'       => 'Widont',
    'version'    => '1.0',
    'author'     => 'John Henry Donovan',
    'author_url' => 'http://johnhenry.ie'
  );

  public function index() {


    Statamic_View::$_dataStore = array_merge(Statamic_View::$_dataStore, $this->attributes);
    $this->content = Parse::template($this->content, Statamic_View::$_dataStore, 'Statamic_View::callback');
    
    $this->content = preg_replace('/\s+(\S+)$/', '&#160;$1', rtrim($this->content));
   
    return $this->content;
  }

 
    
}