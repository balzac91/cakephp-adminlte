<?php
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
?>
<div class="alert alert-info alert-dismissible <?= h($class) ?>">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?= h($message) ?>
</div>