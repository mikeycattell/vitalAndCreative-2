<?php get_header('nonav'); //template name: paypal?>

<main role="main" class="page-content paypal-page" id="top">
  <section class="pay--header">
    <div class="wrapper head--padding text-center">
      <h1 class="wow fadeInDown animated"><?php the_field('h1-input'); ?></h1>
    </div>
  </section>

  <section class="section--second">
    <div class="wrapper content">

      <div class="grid-full text-center">

        <h2 class="header--sub"><?php the_field('h2-title'); ?></h2>
        
        <p><?php the_field('text-input-1'); ?></p>

        <div style="border: 1px solid #d6d6d6; padding: 30px; margin: 30px auto 60px; max-width: 500px;">

        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="margin: 0 auto; text-align: center; width: 100%;">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="NSUKEPR94UTBL">
          <table style="width: 100%;">
          <tr><td><input type="hidden" name="on0" value="Invoice Number">Invoice Number</td></tr><tr><td><input type="text" name="os0" maxlength="200"></td></tr>
          <tr><td><input type="hidden" name="on1" value="Company Name">Company Name</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
          </table>
          <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" style="border: 0; margin-top: 10px;">
          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" style="border: 0;">
        </form>

        </div>

    </div>

  </section>


</main>

<?php get_footer(); ?>
