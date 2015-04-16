<?php include('headerAdmin.php');?>

    <!-- content -->
    <div class="grid">
        <div class="row">
           
            <!-- sidebar -->
            <div class="span4 offset1"> <br>
                <nav class="sidebar (light)">
                    <ul>
                        <li class="stick bg-orange"><a href="pemesanan.php">Pemesanan Tiket</a></li>
                        <li class="stick bg-indigo"><a href="cetakTiket.php">Pencetakan Tiket</a></li>
                        <li class="stick bg-blue"><a href="daftarPenumpang.php">Daftar Penumpang</a></li>
                        <li class="stick bg-pink active"><a href="pembatalan.php">Pembatalan</a></li>
                        <li class="stick bg-green"><a href="dataPenumpang.php">Data Penumpang</a></li>
                    </ul>
                </nav>
            </div>
            <!-- end sidebar -->
            
            <div class="span10 offset1">
                <div class="input-control text size4 offset6">
                    <input type="text" name="search" placeholder="Search">
                    <button class="btn-search"></button>
                </div>
                <br><br>
            <table class="table hovered bordered">
                <tdead>
                <tr class="bg-pink fg-white">
                    <td class="text-center">No</td>
                    <td class="text-center">Nama</td>
                    <td class="text-center">Trayek</td>
                    <td class="text-center">Tujuan</td>
                    <td class="text-center">Berangkat</td>
                    <td class="text-center">Kode Bus</td>
                    <td class="text-center">Nomor Kursi</td>
                    <td class="text-center"></td>
                </tr>
                </tdead>

                <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">Riska</td>
                    <td class="text-center">Bandung - Surabaya</td>
                    <td class="text-center">Surabaya</td>
                    <td class="text-center">6/7/2015</td>
                    <td class="text-center">2</td>
                    <td class="text-center">17</td>
                    <td class="text-center"><a href="">Batal</a></td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td class="text-center">Riva</td>
                    <td class="text-center">Bandung - Surabaya</td>
                    <td class="text-center">Surabaya</td>
                    <td class="text-center">6/7/2015</td>
                    <td class="text-center">2</td>
                    <td class="text-center">17</td>
                    <td class="text-center"><a href="">Batal</a></td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td class="text-center">Nisa</td>
                    <td class="text-center">Bandung - Surabaya</td>
                    <td class="text-center">Surabaya</td>
                    <td class="text-center">6/7/2015</td>
                    <td class="text-center">2</td>
                    <td class="text-center">17</td>
                    <td class="text-center"><a href="">Batal</a></td>
                </tr>
                
                
                </tbody>

                
            </table>

            </div>
        </div>
    </div>    
    <!-- end content -->
         
   
    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>
    <script src="js/prettify/prettify.js"></script>
    <script src="js/jquery/jquery.dataTables.js"></script>
    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="js/docs.js"></script>
    <script src="js/gitdub.info.js"></script>
    <script src="js/hitua.js"></script>

</body>
</html>