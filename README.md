# Blockframe
Expose any block as a page for use in iframes

## Usage
First parameter of the url is always `blockframe`

The second parameter is the *module name*

Third parameter is the *block delta*

## Usage examples
### Insert iframe block  as wysiwyg widget embed
 It require <a href = "https://www.drupal.org/project/wysiwyg_widget">wysiwyg_widget</a> module.
 Click on wysiwyg widget embed icon from wysiwyg toolbar. Paste the iframe embed code in and click insert.

###Inserting iframe block as html
click on html icon from wysiwyg toolbar, paste the iframe embed code in html markup. and click update. 

###Sample Embed code
- 'Latest poll' block iframe embed sample
```
<iframe src="http://example.com/blockframe/views/latest_poll-block" width="100%" height="300px"></iframe>
```

- 'Powered by Drupal' block iframe embed sample
```
<iframe src="http://example.com/blockframe/system/powered-by" width="100%" height="100px"></iframe>
```
