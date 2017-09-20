# Blockframe
Expose any block as a page for use in iframes

## Usage
First parameter of the url is always `blockframe`

The second parameter is the *module name*

Third parameter is the *block delta*

## Usage examples

- Inserting 'Latest poll' block
```
<iframe src="http://denofgeek.vm.didev.co.uk/blockframe/views/latest_poll-block" width="100%" height="300px"></iframe>
```

- Inserting 'Powered by Drupal' block
```
<iframe src="http://denofgeek.vm.didev.co.uk/blockframe/system/powered-by" width="100%" height="100px"></iframe>
```
