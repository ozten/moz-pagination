<div class="pagination">
<?php
    if ($pager->totalPages > 1) {
        echo "<ol>";  
        if ($pager->showPrevious) { ?>
            <li class='first'><a href='/activity/stories/<?=$locale?>/<?= $pager->previousPage ?>'><?= _('Newer Posts') ?></a></li>
  <?php }
        if ($pager->totalPages > 1) {
            for ($i = 1; $i <= $pager->totalPages; $i++) {
                if ($pager->currentPage == $i) { ?>
                  <li class='current'><?= $i ?> </li>
          <?php } else {?>
                  <li><a href="<?= $i ?>" title="<?= sprintf(_('Go to page %1$s of %2$s'),
                                                             $i, $pager->totalPages) ?>"><?= $i ?></a></li> 
          <?php }
            }
        }
        if ($pager->showNext) { ?>
            <li class='last'><a href='/activity/stories/<?= $locale ?>/<?= $pager->nextPage ?>'><?= _('Older Posts') ?></a>
  <?php }
        echo "</ol>";
    } ?>
</div>