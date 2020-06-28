<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <?php echo $this->session->userdata('message') ?>

                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">KELOLA DATA PARAMEDIS</h3>
                    </div>
        
        <div class="box-body">
        <div style="padding-bottom: 10px;"'>
        <?php echo anchor(site_url('paramedis/create'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Tambah Data', 'class="btn btn-microsoft btn-sm"'); ?>
		<?php echo anchor(site_url('paramedis/cetak'), '<i class="fa fa-print" aria-hidden="true"></i> Cetak Data', 'class="btn btn-soundcloud btn-sm"'); ?></div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="30px">No</th>
            <th>Kode Paramedis</th>
		    <th>Nama Paramedis</th>
		    <th>Jenis Kelamin</th>
		    <th>No Izin Paramedis</th>
		    <th>Tempat Lahir</th>
		    <th>Tanggal Lahir</th>
		    <th>Alamat Tinggal</th>
		    <th>Poli</th>
		    <th width="200px">Action</th>
                </tr>
            </thead>
	    
        </table>
        </div>
                    </div>
            </div>
            </div>
    </section>
</div>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };

                var t = $("#mytable").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#mytable_filter input')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                     if (e.keyCode == 13  || e.keyCode == 66 || e.keyCode == 65 || e.keyCode == 115 || e.keyCode == 8 || e.keyCode == 67 || e.keyCode == 68 || e.keyCode == 69 || e.keyCode == 70 || e.keyCode == 71 || e.keyCode == 72 || e.keyCode == 73 || e.keyCode == 74 || e.keyCode == 75 || e.keyCode == 76 || e.keyCode == 77 || e.keyCode == 78 || e.keyCode == 79 || e.keyCode == 80 || e.keyCode == 81 || e.keyCode == 82 || e.keyCode == 83 || e.keyCode == 84 || e.keyCode == 85 || e.keyCode == 86 || e.keyCode == 87 || e.keyCode == 88 || e.keyCode == 89 || e.keyCode == 90 || e.keyCode == 90 || e.keyCode == 48 || e.keyCode == 49 || e.keyCode == 50 || e.keyCode == 51 || e.keyCode == 52 || e.keyCode == 53 || e.keyCode == 54 || e.keyCode == 55 || e.keyCode == 56 || e.keyCode == 57 || e.keyCode == 33 || e.keyCode == 35 || e.keyCode == 36 || e.keyCode == 37 || e.keyCode == 38 || e.keyCode == 40 || e.keyCode == 41 || e.keyCode == 42 || e.keyCode == 94  ) {
                                        api.search(this.value).draw();
                            }
                        });
                    },
                    oLanguage: {
                        sProcessing: "loading..."
                    },
                    processing: true,
                    serverSide: true,
                    ajax: {"url": "paramedis/json", "type": "POST"},
                    columns: [
                        {
                            "data": "kode_paramedis",
                            "orderable": false
                        },{"data": "kode_paramedis"},{"data": "nama_paramedis"},{"data": "jenis_kelamin"},{"data": "no_izin_paramedis"},{"data": "tempat_lahir"},{"data": "tanggal_lahir"},{"data": "alamat_tinggal"},{"data": "nama_poli"},
                        {
                            "data" : "action",
                            "orderable": false,
                            "className" : "text-center"
                        }
                    ],
                    order: [[0, 'desc']],
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    }
                });
            });
        </script>