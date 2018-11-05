  <section id="contact" name="contact">
    <div id="footerwrap">
      <div class="container">
        <div class="col-lg-5">
          <h3>.</h3>
          <p>
            <br/><br/>.
            <br/>.
          </p>
        </div>

        <div class="col-lg-7">
          <h3>Menu</h3>

          <br>
          <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

            <div class="form-group">
              <label for="contact-name">Nama</label>
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-email">Email</label>
              <input type="email" name="email" class="form-control" id="contact-email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-subject">HP</label>
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="No" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>

            <div class="form-group">
              <label for="contact-message"></label>
              <textarea class="form-control" name="message" id="contact-message" placeholder="Notice" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>

            <div class="loading"><img src="aset/lib/php-mail-form/loading.gif"></div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <div class="form-send">
              <button type="submit" class="btn btn-large">Kirim</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </section>