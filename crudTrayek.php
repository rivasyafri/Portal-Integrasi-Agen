<?php include('headerAdminPusat.php'); ?>
<br><br>
<div class="container">
	<div class="row">
		<h2 class="fg-indigo">Daftar Trayek</h2><br>
		<div class="place-right">
			<h3><a href="addTrayek.php"><span class="icon-plus"></a> Tambah Trayek</span></h3>
		</div><br><br><br>
            <table class="table hovered bordered">
                <thead>
                <tr class="info fg-white">
                	<td class="text-center">No.</td>
                    <td class="text-center">Tujuan</td>
                    <td class="text-center">Asal</td>
                    <td class="text-center">Jam</td>
                     <td class="text-center"></td>
                </tr>
                </thead>

                <tbody>
                <tr>
                	<td class="text-center">1</td>
                    <td class="text-center">Semarang</td>
                    <td class="text-center">Bandung</td>
                    <td class="text-center">09.00 - 15.00</td>
   					<td class="text-center">
   						<a href="editTrayek.php"><span class="icon-pencil">  </span></a>
   						<a href=""><span class="icon-remove">  </span></a>
   					</td>
                </tr>
                
                </tbody>
            </table>
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