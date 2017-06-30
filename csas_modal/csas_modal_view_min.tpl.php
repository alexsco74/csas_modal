<div
  class="csas-modal-wr<?php !empty($opt['class']) ? print " {$opt['class']}" : ''; ?>">
  <div class="csas-modal-link-wr">
    <a id="<?php print $opt['link_id']; ?>"
       class="csas-modal-link<?php print $opt['link_class']; ?>"
       href="#<?php print $opt['id']; ?>"><?php print $opt['link_title']; ?></a>
  </div>
  <div id="<?php print $opt['id']; ?>" class="csas-modal-pop-up">
    <div class="csas-modal-popBox">
      <div class="csas-mdl-vrt">
        <div class="csas-modal-popScroll">
          <div class="csas-modal-inner">
            <?php if (!empty($opt['title'])): ?>
              <h2><?php print $opt['title']; ?></h2>
            <?php endif; ?>
            <?php print $opt['content']; ?>
          </div>
        </div>
        <a href="#<?php print $opt['link_id']; ?>"
           class="csas-modal-close icon-cancel-circle" title="Закрыть"></a>
      </div>
    </div>
    <a href="#<?php print $opt['link_id']; ?>" class="csas-modal-lightbox"></a>
  </div>
</div>