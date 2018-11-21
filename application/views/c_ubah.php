<section id="ubah" name="ubah">
  <div id="ubah">
    <div style="background: #708090;">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2>Ubah Data Obat</h2>
            <br>
            <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">
              <div class="form-group">
                <label for="contact-kode">Kode</label>
                <input type="kode" name="kode" class="form-control" id="contact-kode" placeholder="Kode" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-nama">Nama Obat</label>
                <input type="nama" name="nama" class="form-control" id="contact-nama" placeholder="Nama Obat" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-stok">Stok</label>
                <input type="stok" name="stok" class="form-control" id="contact-stok" placeholder="Stok" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="contact-harga">Harga</label>
                <input type="harga" name="harga" class="form-control" id="contact-harga" placeholder="Harga" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="form-edit">
              <button type="submit" class="btn btn-large">Edit</button>
            </div>
            <div class="form-delete">
              <button type="submit" class="btn btn-large">Delete</button>
            </div>
              <br>
            </form>
          </div>
          <br>
          <br>
        </div>
      </div>
    </div>
  </div>
</section>