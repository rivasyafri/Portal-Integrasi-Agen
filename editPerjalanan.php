<?php include('headerAdminPusat.php'); ?>
<br><br>
<div class="container">
  <div class="row">
    <h2 class="fg-indigo">Ubah Perjalanan</h2><br>
        <div class="span8">
    <form action="" method="">
            <div class="span2">Nomor Trayek</div>
            <div class="span6 input-control select info-state">
               <select name="nomor_trayek">
                      <option selected>nomor trayek</option>
                      <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
                </select><br>
            </div>
            <div class="span2">Nomor Bus</div>
            <div class="span6 input-control select info-state">
                <select name="nomor_bus">
                      <option selected>nomor bus</option>
                      <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
                </select><br>
            </div>
            <div class="span2">Harga</div>
            <div class="span6 input-control text info-state">
                <input type="text" placeholder="status" id="status"/><br>
            </div>
           <div style="padding-left: 0px">
                <button type="submit" class="bg-darkBlue fg-white large" id="">Ubah</button>
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