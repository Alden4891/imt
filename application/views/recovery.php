
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Recovery <small>...</small></h2> 
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Settings 1</a>
                        <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        


        <div class="x_content">


            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>CTRL No.</th>
                        <th>Household ID</th>
                        <th>Intervention</th>
                        <th>Encoded By</th>
                        <th>Date Encoded</th>
                        <th>Deleted By </th>
                        <th>Date Deleted </th>
                        <th>Restore</th>
                    </tr>
                </thead>

                <tbody id=clientlist>
                    <?=$deleted_data;?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script type="text/javascript">
    
$( document ).ready(function() {

    //delete intervention
    $(document).on('click', '#btn_restore_intervention', function(e) {
        e.preventDefault();
        var tr = $(this).closest('tr');
        Swal.fire({
          title: "Restore ?",
          text: "This will be added back to the intervention catalog.",
          icon: "question",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, restore it!"
        }).then((result) => {
          if (result.isConfirmed) {

            $.ajax({
                type: 'POST',
                url: '<?=site_url('interventions/intervention_restore')?>',
                data: {
                    interv_id: $(this).attr('interv_id'),
                    user_id: '<?=$this->session->userdata('user_id')?>'
                },
                success: function(response) {
                    var obj = JSON.parse(response);
                    if (obj.result == 1) {
                        tr.fadeOut(500, function() {
                            parent.remove();
                        });
                    }

                }
            });
          }
        });
    });


});



</script>