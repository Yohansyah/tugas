<section id="jenis" name="jenis">
    <div id="jenis">
      <div class="container">
        <div class="row">
            <div class="col-lg-7">
          <h3>Data Jenis Obat</h3>

          <br>
          <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

            <div class="form-group">
              <label for="contact-kode">Kode</label>
              <input type="kode" name="kode" class="form-control" id="contact-kode" placeholder="Kode" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-jenis">Nama Jenis Obat</label>
              <input type="jenis" name="jenis" class="form-control" id="contact-jenis" placeholder="Jenis" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="form-edit">
              <button type="submit" class="btn btn-large">Edit</button>
            </div>
            <br>
            <div class="form-delete">
              <button type="submit" class="btn btn-large">Delete</button>
            </div>
        <br>
        <br>
        <br>
      </div>
      <!-- /container -->
    </div>
  </section>