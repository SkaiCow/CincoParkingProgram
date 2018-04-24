<?php
//SuperCSSLoader

// To reduce our large amount of stylesheets, stylesheets are now combined
//into one file that has all our css. Unlike the script loader, site styling is dependent on
//the order that stylesheets are applied, so we can't automagically load them from a folder the way scripts
//are. Instead, we'll use php includes. This should make the site load noticeably faster on slow
// mobile connections.
header('Content-Type: text/css');
header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + 604800)); //Tell the browser to cache this for 1 week
include ('./stylesheets/icon-font.css');

//Main stylesheets
//note that the order of the files in the list can be significant.
//include a css file in this list to load it
$mainFiles = [
  'defaults.css',
  'menu.css',
  'users.css',
  'login.css',
  'enterID.css',
  'info.css',
  'map.css',
  'done.css',
  'approve.css'
];

foreach($mainFiles as $file) {
  require_once('./stylesheets/styles/' . $file);
}
