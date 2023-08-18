<!-- ======= Statistik Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Donasi Kendaraan</h2>
    </div>
    <div class="card">
        <div class="card-body p-0">
          <table class="table table-striped" align="center" >
            <thead class="auto"  align="center">
              <tr>
                <th>No</th>
                <th>Release Date</th>
                <th>Car Name</th>
                <th>Seat</th>
                <th>Class</th>
                <th>Images</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody class="auto" align="center">
              <?php 
              $no = 0;
              foreach($donasi as $d){ 
              ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $d['bulan_rilis'] ?></td>
                <td><?= $d['nama_kendaraan'] ?></td>
                <td><?= $d['seat'] ?></td>
                <td><?= $d['class'] ?></td>
                <td><a href=""target="_blank" class="btn-get-started scrollto">Preview</a></td>
                <td>IDR <?= $d['price'] ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>
</section>