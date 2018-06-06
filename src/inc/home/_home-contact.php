<section class="container home-contact section">
  <div class="section--title">
    <h1>Contact</h1>
  </div>
  <div class="section--content columns-2">
    <div class="home-contact--address">
      <p>
        <strong>Dr. Doe Lifestyle Medicine</strong>
      </p>
      <p>12345 Somewhere St.
        <br>Los Angeles, CA 91234</p>
      <p>888 123 4567</p>
      <p>drdoe@lifestylemedicine.com</p>
      <table>
        <tr>
          <td>Office Hours:</td>
          <td>8AM&ndash;4PM</td>
        </tr>
      </table>
      <br>
      <a href="<?php echo esc_url(site_url('/contact')); ?>" class="section--button">More Information</a>
    </div>
    <form action="">
      <label for="">Your Name</label>
      <input spellcheck="false" class="home-contact--input" type="text">
      <label for="">Your Email</label>
      <input spellcheck="false" class="home-contact--input" type="text">
      <label for="">Message</label>
      <textarea name="" id="" cols="30" rows="10"></textarea>
      <input class="submit" type="submit">
    </form>
  </div>
</section>