<?php


function intToMonth($monthNum){
  $dateObj   = DateTime::createFromFormat('!m', $monthNum);
  return  $dateObj->format('F');  
}


?>


            <div class="row">
                <div class="pull-right">
                    <br>
                        <a href="#" type="button" 
                         class="btn btn-success btn-md"
                        data-toggle="modal"  
                        data-target=".upload_dtrdata_modal"
                        uid     =0  
                        id=emp_editor                       
                         ><i class="fa fa-plus" ></i> UPLOAD DTR DATA</a>
                         </span>                   
                <br>
                </div>

            </div>





             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           DTRs
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="datatable-buttons">
                                <thead>
                                    <tr>
                                        <th width="20px">#</th>
                                        <th width="60%">PARTICULAR</th>
                                        <th>MONTH</th>
                                        <th>YEAR</th>
                                        <th>DAY 1-15</th>
                                        <th>DAY 16-30</th>

                                    </tr>
                                </thead>
                                <tbody id=audittaillist>

                                            <?php 
                                                $res_data = mysqli_query($con, "
                                                SELECT
                                                  `profile`.`CATEGORY` AS PARTICULAR
                                                , MONTH(`dtr`.`LOG`) AS `MONTH`
                                                , YEAR(`dtr`.`LOG`) AS `YEAR`
                                                FROM
                                                `dmcsm`.`profile`
                                                INNER JOIN `dmcsm`.`dtr` 
                                                    ON (`profile`.`EMP_ID` = `dtr`.`EMP_ID`)
                                                GROUP BY `PARTICULAR`, `MONTH`, `YEAR`
                                                ORDER BY `YEAR` DESC, `MONTH` DESC, `PARTICULAR` DESC
                                                ") or die(mysqli_error());

                                                $cnt=0;
                                                while ($r=mysqli_fetch_array($res_data,MYSQLI_ASSOC)) {
                                                    $cnt+=1;
                                                    $PARTICULAR = $r['PARTICULAR']; 
                                                    $MONTH = $r['MONTH']; 
                                                    $MONTH_NAME = intToMonth($MONTH);
                                                    $YEAR = $r['YEAR']; 
                                                    echo "
                                                        <tr id=audittraildata>
                                                            <td class=\"even gradeC\"> $cnt</td>
                                                            <td>$PARTICULAR</td>
                                                            <td>$MONTH_NAME</td>
                                                            <td>$YEAR</td>
                                                            
                                                            <td><a class='btn btn-default' 
                                                            href='#'
                                                            year=$YEAR
                                                            month=$MONTH
                                                            mode=1
                                                            category=$PARTICULAR
                                                            id=dtr_preview
                                                            link='./fpdf/reports/dtr.php?mode=1&m=$MONTH&y=$YEAR#view=FitH' 
                                                            target='_blank' 
                                                            data-toggle=\"modal\" 
                                                            data-target=\".preview_modal\"                                           
                                                            role='button'>Open</a></td>
                                                            
                                                            <td><a class='btn btn-default' 
                                                            href='#'
                                                            year=$YEAR
                                                            month=$MONTH
                                                            mode=2
                                                            category=$PARTICULAR
                                                            id=dtr_preview
                                                            link='./fpdf/reports/dtr.php?mode=2&m=$MONTH&y=$YEAR#view=FitH' 
                                                            target='_blank' 
                                                            data-toggle=\"modal\" 
                                                            data-target=\".preview_modal\"                                           
                                                            role='button'>Open</a></td>



                                                    </tr>

                                                    ";


                                                }
                                                mysqli_free_result($res_data);
                                                
                                            ?>




                                </tbody>
                            </table>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

       


    <!--script src="../vendor/jquery/jquery.min.js"></script-->


<div class="modal fade bs-example-modal-sm upload_dtrdata_modal" tabindex="-1" role="dialog" aria-labelledby="upload_dtrdata_modal">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Upload DTR Records file</h4>


            </div>
            <div class="modal-body">
              <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
               <form id="uploaddtr" action="" method="post" enctype="multipart/form-data">

                 <div class="form-group ">
                  <label class="control-label " for="file">
                   
                  </label>
                  <div class="input-group">
                   <div class="input-group-addon">
                    <i class="fa fa-gg">
                    </i>
                   </div>
                   <input class="form-control" id="dtrfile" name="dtrfile" type="file"  />

                  </div>
                 </div>

                 <div class="form-group">
                  <div class="pull-right">
                   <input type="submit" value="UPLOAD" class="btn btn-primary" id="btn_upload_dtr"/ >
                    
                  </div>
                 </div>
                 </form>
               </div>
              </div>            
            </div>
   
    </div>
  </div>
</div>



<div class="modal fade bs-example-modal-sm preview_modal" tabindex="-1" role="dialog" aria-labelledby="modal_preview">
  <div class="modal-dialog modal-lg" style="width:80%">
    <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">DTR Preview</h4>


            </div>
            <div class="modal-body">

             <iframe id=prev_pdf name=prev_pdf width="100%" height="600"></iframe>
            
            <div class="alert alert-danger alert-dismissible fade in" id ="error_box" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4>Ops! Record not found!</h4>
                  <p>Please upload biometric data file.</p>

            </div>            
            </div>
   
    </div>
  </div>
</div>




    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });

    });

    $('#dtrfile').bind('change', function() {
        if (this.files[0].size > 1000000){
            $("#dtrfile").replaceWith($("#dtrfile").val('').clone(true));
            alert("The file is too huge. Please make sure that the file size will not exceed to 1MB");
            return;
        }else if ($('#dtrfile').val().substr( ($('#dtrfile').val().lastIndexOf('.') +1)) != 'dat'){
            $("#dtrfile").replaceWith($("#dtrfile").val('').clone(true));
            alert("Invalid file type. Only dat file format supported!");
            return;        
        }
    });


    $(document).on("click","#dtr_preview",function(e){
        e.preventDefault();

        var iframe = $('#prev_pdf');
        var error_box = $('#error_box');
        var link = $(this).attr('link');

        var YEAR        = $(this).attr('year');
        var MONTH       = $(this).attr('month');
        var MODE        = $(this).attr('mode');
        var CATEGORY    = $(this).attr('category');
 
        $.ajax({type:'GET',Data: {year:YEAR,month:MONTH,mode:MODE,category:CATEGORY},url: './proc/superuser_proc.php',success: function(response) {}});


            $.ajax({  
                type: 'GET',
                url: './proc/checkrecords_proc.php', 
                data: { 
                    year:YEAR,
                    month:MONTH,
                    mode:MODE,
                    category:CATEGORY
                },
                success: function(response) {
                    // prompt(response,response);

                     if (response.indexOf("**success**") > -1){
                        
                        $(iframe).attr('src', link);  
                        $(iframe).removeClass('hidden');
                        $(error_box).addClass('hidden');
                     }else if (response.indexOf("**no_records**") > -1){
                        $(iframe).attr('src', ''); 
                        $(iframe).addClass('hidden');
                        $(error_box).removeClass('hidden');


                     }
                }
            });



    });


    $('#uploaddtr').on("submit",function (e) {
        e.preventDefault();  

         $.ajax({  
            contentType: false,       
            cache: false,             
            processData:false,        
            type: 'POST',
            url: 'proc/upload_dtr_proc.php', 
            data: new FormData(this),
            success: function(response) {
                 //prompt(response,response);
                 //return;  
                 if (response.indexOf("**success**") > -1){
                    alert('DTR Data successfully uploaded.');
                    window.location="index.php?page=periodlist";
                 }else if (response.indexOf("Notice") > -1){
                    alert("Upload failed: An error has occured while uploading data. Please contact your system developer. ");
                 }
            }
        });       


    });


    </script>

