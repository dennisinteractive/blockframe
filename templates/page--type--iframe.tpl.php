<?php

/**
 * @file
 * Simple page template main used for rendering a page for use within an iframe
 */

?>

<?php if (isset($content)): ?>
  <?php print $content; ?>
<?php elseif ($page['content']): ?>
  <?php print render($page['content']); ?>
<?php endif; ?>