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
            <form id="form" method="post" action="#" onsubmit="addPemesanan();return false;"><br>
                <div class="span2">Nama Penumpang</div>
                <div class="span7 input-control text info-state">
                    <input type="text" placeholder="nama" id="nama"/><br>
                </div>
                <div class="span2">Trayek</div>
                <div class="span7 input-control select info-state">
                    <select name="trayek" id="trayek">
                          <option selected>pilih trayek</option>
                          <?php
                            require_once("model/trayek.php");
                            $trayek = new Trayek();
                            $result = $trayek->GetAllTrayek();
                            while($row = mysql_fetch_object($result))
                            {                                
                          ?>                        
                          <option><?php echo $row->asal; ?> - <?php echo $row->tujuan; ?></option>
                          <?php } ?>
                    </select><br>
                </div>
                <div class="span2">Nomor Telepon</div>
                <div class="span7 input-control text info-state">
                    <input type="text" placeholder="nomor telepon" id="no_hp"/><br>
                </div>
                <div class="span2">Kota Tujuan</div>
                <div class="span7 input-control text info-state">
                  <input type="text" id="tujuan" placeholder="kota tujuan"/><br>
                </div>
                <div class="span2">Berangkat</div>
                <div class="span7 input-control text info-state">
                    <input type="date" id="tanggal"/><br>
                </div>
                <div class="span2">Kelas</div>
                <div class="span7 input-control select info-state">
                <select name="kelas">
                      <option selected>pilih kelas</option>
                      <option>Eksekutif</option>
                      <option>NonAC</option>
                      <option>Bisnis</option>
                </select><br>
                </div>
                <div class="span2">pilih nomor Kursi</div>
                <div class="span7 input-control select info-state">
                <select name="no_kursi" id="no_kursi">
                      <option selected>nomor kursi</option>
                      <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
                      <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
                      <option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
                      <option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
                      <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
                      <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
                      <option>31</option><option>32</option><option>33</option>
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
     
    <script type="text/javascript">
    function addPemesanan()
    {
        var nama = document.getElementById("nama").value;
        var trayek = document.getElementById("trayek").value;
        var no_hp = document.getElementById("no_hp").value;
        var tanggal = document.getElementById("tanggal").value;
        var tujuan = document.getElementById("tujuan").value;
        var kelas = document.getElementById("kelas").value;
        var no_kursi = document.getElementById("no_kursi").value;
        var keterangan = document.getElementById("keterangan").value;
        if ((nama != "") &&
            (trayek != "") &&
            (no_hp != "") &&
            (tanggal != "") &&
            (tujuan != "") &&
            (kelas != "") &&
            (no_kursi != "") &&
            (keterangan != "")
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                    if (xmlhttp.readyState<4)
                    {
                        //document.getElementById("btn-submit").style="display:none";
                        //document.getElementById("loading").style="display:block";
                    }
                    else if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                        if (xmlhttp.responseText == "true")
                        {
                            window.location = "pemesanan.php";
                        }
                        else
                        {
                            alert("Post gagal diproses");
                            document.getElementById("loading").style="display:none";
                            document.getElementById("btn-submit").style="display:block";
                        }
                    }
                }
                xmlhttp.open("POST","controller/addPemesanan.php",true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send("nama="+nama+
                              "&trayek="+trayek+
                              "&no_hp="+no_hp+
                              "&tanggal="+tanggal+
                              "&tujuan="+tujuan+
                              "&kelas="+kelas+
                              "&no_kursi="+no_kursi+
                              "&keterangan="+keterangan);
        }
        else
        {
            alert("Input tidak valid");
            document.getElementById("loading").style="display:none";
            document.getElementById("btn-submit").style="display:block";
        }
    }
    </script>

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