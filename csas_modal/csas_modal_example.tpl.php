<p>A bare-bones example of accessible modal pop-up windows using CSS3. <a
    href="http://websemantics.co.uk/resources/accessible_css3_modal_pop-ups/">Full
    article</a></p>

<!-- note IDs only used for anchor hooks -->
<ul id="#links">
  <li><a href="#pop1">Pop-up One</a></li>
  <li><a href="#pop2">Pop-up Two</a></li>
  <li><a href="#pop3">Pop-up Three</a></li>
</ul>

<!-- id here matches href in the activating link -->
<div id="pop1" class="csas-modal-pop-up">

  <!-- The pop-up block -->
  <div class="csas-modal-popBox">

    <!-- If the content becomes larger than the pop-up this div will scroll the content -->
    <div class="csas-modal-popScroll">
      <h2>Pop-up One</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique
        volutpat est, fermentum posuere ligula pretium egestas. Cras id justo
        nibh, at laoreet nisi. Quisque accumsan faucibus malesuada. Cum sociis
        natoque penatibus et magnis dis parturient montes, nascetur ridiculus
        mus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
        posuere cubilia Curae; Nulla posuere molestie tincidunt. Maecenas
        vestibulum neque in lectus ullamcorper in accumsan lectus consequat. Cum
        sociis natoque penatibus et magnis dis parturient montes, nascetur
        ridiculus mus. Etiam egestas posuere lorem, ut accumsan sem rhoncus vel.
        Nulla eu justo metus.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique
        volutpat est, fermentum posuere ligula pretium egestas. Cras id justo
        nibh, at laoreet nisi. Quisque accumsan faucibus malesuada. Cum sociis
        natoque penatibus et magnis dis parturient montes, nascetur ridiculus
        mus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
        posuere cubilia Curae; Nulla posuere molestie tincidunt. Maecenas
        vestibulum neque in lectus ullamcorper in accumsan lectus consequat. Cum
        sociis natoque penatibus et magnis dis parturient montes, nascetur
        ridiculus mus. Etiam egestas posuere lorem, ut accumsan sem rhoncus vel.
        Nulla eu justo metus.</p>
    </div>

    <!-- The close pop-up link correctly positioned at the end of the content block -->
    <a href="#links" class="csas-modal-close"><span>Back to links</span></a>
  </div>

  <!-- This link is the light box -->
  <a href="#links" class="csas-modal-lightbox">Back to links</a>
</div>

<div id="pop2" class="csas-modal-pop-up">
  <div class="csas-modal-popBox">
    <div class="csas-modal-popScroll">
      <h2>Pop-up Two</h2>
      <p>Sed tristique volutpat est, fermentum posuere ligula pretium egestas.
        Cras id justo nibh, at laoreet nisi. Quisque accumsan faucibus
        malesuada. Cum sociis natoque penatibus et magnis dis parturient montes,
        nascetur ridiculus mus. Vestibulum ante ipsum primis in faucibus orci
        luctus et ultrices posuere cubilia Curae; Nulla posuere molestie
        tincidunt. Maecenas vestibulum neque in lectus ullamcorper in accumsan
        lectus consequat. Cum sociis natoque penatibus et magnis dis parturient
        montes, nascetur ridiculus mus. Etiam egestas posuere lorem, ut accumsan
        sem rhoncus vel. Nulla eu justo metus.</p>
    </div>
    <a href="#links" class="csas-modal-close"><span>Back to links</span></a>
  </div>
  <a href="#links" class="csas-modal-lightbox">Back to links</a>
</div>

<div id="pop3" class="csas-modal-pop-up">
  <div class="csas-modal-popBox">
    <div class="csas-modal-popScroll">
      <h2>Pop-up Three</h2>
      <p>Cras id justo nibh, at laoreet nisi. Quisque accumsan faucibus
        malesuada. Cum sociis natoque penatibus et magnis dis parturient montes,
        nascetur ridiculus mus. Vestibulum ante ipsum primis in faucibus orci
        luctus et ultrices posuere cubilia Curae; Nulla posuere molestie
        tincidunt. Maecenas vestibulum neque in lectus ullamcorper in accumsan
        lectus consequat. Cum sociis natoque penatibus et magnis dis parturient
        montes, nascetur ridiculus mus. Etiam egestas posuere lorem, ut accumsan
        sem rhoncus vel. Nulla eu justo metus.</p>
    </div>
    <a href="#links" class="csas-modal-close"><span>Back to links</span></a>
  </div>
  <a href="#links" class="csas-modal-lightbox">Back to links</a>
</div>
