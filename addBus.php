<?php include('headerAdminPusat.php'); ?>
<br><br>
<div class="container">
    <div class="row">
        <h2 class="fg-indigo">Tambah Bus</h2><br>
        <div class="span8">
        <form action="" method="">
            <div class="span2">Jenis</div>
            <div class="span6 input-control select info-state">
                <select name="jenis">
                      <option selected>pilih jenis</option>
                      <option>Executive</option>
                      <option>NonAC + Toilet</option>
                      <option>VipAC + Toilet</option>
                </select><br>
            </div>
            <div class="span2">Jumlah Kursi</div>
            <div class="span6 input-control text info-state">
                <input type="text" placeholder="jumlah kursi" id="kursi"/><br>
            </div>
            <div class="span2">Status</div>
            <div class="span6 input-control text info-state">
                <input type="text" placeholder="status" id="status"/><br>
            </div>
           <div style="padding-left: 0px">
                <button type="submit" class="bg-darkBlue fg-white large" id="">Tambah</button>
           </div>
        </form>
     </div>
    </div>
</div>
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