<?php

# instead of this:

/*
// 1 - Admin, 2 - Moderator, Any other - Guest
$permission = 1;

if ($permission === 1) {
    ?><h1>Hello Admin</h1><?php
} else if ($permission === 2) {
    ?><h1>Hello Moderator</h1><?php
} else {
    ?><h1>Hello Guest</h1><?php
}
*/
?>

# do this:
<?php $permission = 1; ?>

<?php if ($permission === 1) : ?>
    <h1>Hello Admin</h1>
<?php elseif ($permission === 2) : ?>
    <h1>Hello Moderator</h1>
<?php else : ?>
    <h1>Hello Guest</h1>
<?php endif; ?>
