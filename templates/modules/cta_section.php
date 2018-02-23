

<section class="cta-section <?php echo $this_module['align_content']; ?>" style="background-image: url('<?php echo $this_module['background_image']['sizes']['full-width']; ?>')">

<div class="container-fluid" >

  <div class="container">

    <div class="col-md-6

    <?php if ($this_module['align_content'] == 'right') { echo 'offset-md-6';} ?>">


      <h1 class="cta-section__heading"><?php echo $this_module['heading']; ?></h2>

      <div class="cta-section__content wysiwyg">
        <?php echo $this_module['content']; ?>
      </div>

    </div>


  </div>

</div>

</section>
