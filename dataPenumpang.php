<?php include('headerAdmin.php');?>
    <!-- content -->
    <div class="grid">
        <div class="row">
           
            <!-- sidebar -->
            <div class="span4 offset1"><br>
                <nav class="sidebar (light)">
                    <ul>
                        <li class="stick bg-orange active"><a href="pemesanan.php">Pemesanan Tiket</a></li>
                        <li class="stick bg-indigo"><a href="cetakTiket.php">Pencetakan Tiket</a></li>
                        <li class="stick bg-blue"><a href="daftarPenumpang.php">Daftar Penumpang</a></li>
                        <li class="stick bg-pink"><a href="pembatalan.php">Pembatalan</a></li>
                        <li class="stick bg-green"><a href="dataPenumpang.php">Data Penumpang</a></li>
                    </ul>
                </nav>
            </div>
            <!-- end sidebar -->

            <div class="span10 offset1">
                <h2 class="fg-green">Data Penumpang</h2><br>

            <div class="span10">
            <form id="form" method="#" action="#" onSubmit=""><br>
               
                <div class="span2">Trayek</div>
                <div class="span7 input-control select info-state">
                    <select name="trayek">
                          <option selected>pilih trayek</option>
                          <option>Bandung - Semarang</option>
                          <option>Bandung - Semarang - Jogja - Solo</option>
                          <option>Bandung - Semarang - Jogja - Klaten</option>
                          <option>Bandung - Wonosari</option>
                          <option>Bandung - Wonogiri</option>
                          <option>Bandung - Semarang - Lasem</option>
                          <option>Bandung - Semarang - Surabaya</option>
                    </select><br>
                </div>

                <div class="span2">Berangkat</div>
                <div class="span7 input-control text info-state">
                    <input type="date" id="tanggal"/><br>
                </div>
                <div class="span2">pilih kelas</div>
                <div class="span7 input-control select info-state">
                <select name="kelas">
                      <option selected>kelas</option>
                      <option>Executive</option>
                      <option>NonAC + Toilet</option>
                      <option>VipAC + Toilet</option>
                </select><br>
                </div>

                 <div style="padding-left: 160px">
                <button type="submit" class="bg-darkBlue fg-white large" id="">Cetak</button>
                </div>
            </form>
            </div>
        </div>
    </div>    
    <!-- end content -->
         
    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>
    <script src="js/prettify/prettify.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="js/docs.js"></script>
    <script src="js/github.info.js"></script>
    <script src="js/hitua.js"></script>

</body>
</html>