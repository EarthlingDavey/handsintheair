<section class="sign-up">

  <div class="container">

    <div class="row">
      <div class="col-sm-12">
        <h2 class="sign-up__heading text-center"><?php echo $this_module['heading']; ?></h2>
      </div>
    </div>

    <?php echo do_shortcode( '[contact-form-7 id="' . $this_module["sign_up_form"] . '" title="Sign up form"]' ); ?>

  </div>

</section>