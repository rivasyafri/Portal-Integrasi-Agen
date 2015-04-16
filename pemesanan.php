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
                        <li class="stick bg-green"><a href="#">Data Penumpang</a></li>
                       
                    </ul>
                </nav>
            </div>
            <!-- end sidebar -->

            <div class="span10 offset1">
                <h2 class="fg-orange">Form Pemesanan</h2><br>

            <div class="span10">
            <form id="form" method="#" action="#" onSubmit=""><br>
                <div class="span2">Nama Penumpang</div>
                <div class="span7 input-control text info-state">
                    <input type="text" placeholder="nama" id="nama"/><br>
                </div>
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
                <div class="span2">Nomor Telepon</div>
                <div class="span7 input-control text info-state">
                    <input type="text" placeholder="nomor telepon" id="no_telepon"/><br>
                </div>
                <div class="span2">Kota Tujuan</div>
                <div class="span7 input-control text info-state">
                  <input type="text" id="kota tujuan" placeholder="kota tujuan"/><br>
                </div>
                <div class="span2">Berangkat</div>
                <div class="span7 input-control text info-state">
                    <input type="date" id="tanggal"/><br>
                </div>
                <div class="span2">Kelas</div>
                <div class="span7 input-control select info-state">
                <select name="kelas">
                      <option selected>pilih kelas</option>
                      <option>Executive</option>
                      <option>NonAC + Toilet</option>
                      <option>VipAC + Toilet</option>
                </select><br>
                </div>
                <div class="span2">pilih nomor Kursi</div>
                <div class="span7 input-control select info-state">
                <select name="nomor_kursi">
                      <option selected>nomor kursi</option>
                      <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
                      <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
                      <option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
                      <option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
                      <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
                      <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
                      <option>31</option><option>32</option><option>33</option><option>34</option><option>35</option>
                      <option>36</option><option>37</option>
                </select><br>
                </div>
                <div class="span2">Keterangan</div>
                <div class="span7 input-control textarea info-state">
                  <textarea type="text" id="keterangan" placeholder="keterangan"></textarea><br>
                </div>
                 <div style="padding-left: 160px">
                <button type="submit" class="bg-darkBlue fg-white large" id="">Submit</button>
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