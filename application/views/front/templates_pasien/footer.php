<footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?= base_url('vendor/stisla') ?>/assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?= base_url('vendor/stisla') ?>/assets/js/scripts.js"></script>
  <script src="<?= base_url('vendor/stisla') ?>/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>



<script type="text/javascript">
    
    function auto_nama_dokter(){
         //autocomplete
        $("#kode_dokter_penanggung_jawab").autocomplete({
            source: "<?php echo base_url() ?>index.php/pendaftaran/autocompleteDokter",
            minLength: 1
        });
    }
    
   
    function autocomplete_norekmedis(){
        //autocomplete
        $("#no_rekamedis").autocomplete({
            source: "<?php echo base_url() ?>index.php/pendaftaran/autonorekamedis",
            minLength: 1
        });
        autofill();
    }

    function autofill(){

        var no_rekamedis = $("#no_rekamedis").val();
        $.ajax({
            url: "<?php echo base_url()?>index.php/pendaftaran/autofill",
            data : "no_rekamedis="+no_rekamedis,
        }).success(function (data) {
            var json = data,
            obj = JSON.parse(json);
            $('#nama_pasien').val(obj.nama_pasien);
            $('#tanggal_lahir').val(obj.tanggal_lahir);
            $('#no_bpjs').val(obj.no_bpjs);
        }); 
    }

    function tampilkan(){
  var id_user=document.getElementById("form1").status_pasien.value;
  if (id_user=="BPJS")
    {
        document.getElementById("no_bpjs").readOnly = false;
        autocomplete_norekmedis();
        
    }
  else if (id_user=="Umum")
    {
       document.getElementById("no_bpjs").readOnly = true;
       document.getElementById("no_bpjs").value = "-";

    }
    else if (id_user=="")
    {


    }
}
   
</script>



</body>
</html>
