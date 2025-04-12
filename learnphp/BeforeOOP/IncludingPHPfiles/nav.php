<?php

const FOO = 1;  # if we invoke nav page twice or more in other, const cannot be defined more than once
                # so, we have to "include_once" the page

?>

<nav>
    <a href="/BeforeOOP/IncludingPHPfiles/">home</a>
    <a href="/BeforeOOP/IncludingPHPfiles/about.php">about</a>
</nav>