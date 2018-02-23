

<section class="cta-section <?php echo $this_module['align_content']; ?>" style="background-image: url('<?php echo $this_module['background_image']['sizes']['full-width']; ?>')">

<div class="container-fluid" >

  <div class="container">

    <div class="row">

    <div class="col-md-6 col-sm-12

    <?php if ($this_module['align_content'] == 'right') { echo 'offset-md-6';} ?>">

      <?php
        if(isset($heading_tag)) {
          $heading_tag = 'h2';
        } else {
          $heading_tag = 'h1';
        }
      ?>

      <<?php echo $heading_tag; ?> class="cta-section__heading">
        <?php echo $this_module['heading']; ?>
      </<?php echo $heading_tag; ?>>

      <div class="cta-section__content wysiwyg">
        <?php echo $this_module['content']; ?>
      </div>

    </div>

  </div>


  </div>

</div>

</section>
