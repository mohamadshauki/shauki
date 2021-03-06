<?php
    include 'view/js/j_modal_eff_certificate.php';
    include 'view/js/j_modal_eff_sample_login.php';
?>

<script type="text/javascript">
    
    var fwb_summary_id = '1';
    
    $(document).ready(function () {
        
        pageSetUp();
        
        $('#fwb_dateReceived').datepicker({
            dateFormat: 'yy-mm-dd',
            defaultDate: '0',
            changeMonth: true,
            changeYear: true,
            maxDate: '0', 
            prevText: '<i class="fa fa-chevron-left"></i>',
            nextText: '<i class="fa fa-chevron-right"></i>',
            showButtonPanel: true,
            closeText:'Clear',
            beforeShow: function( input ) {
		setTimeout(function() {
                    var clearButton = $(input ).datepicker( "widget" ).find( ".ui-datepicker-close" );
                    clearButton.unbind("click").bind("click",function(){$.datepicker._clearDate( input );});
                    }, 1 );
            }
        });
        
        var datatable_fwb = undefined;  
        dataNew = $('#datatable_fwb').DataTable({
            "sDom": "<'dt-toolbar'<'col-xs-5 hidden-xs'l><'col-xs-7'p>>" + "t" +
                    "<'dt-toolbar-footer'<'col-xs-5'i><'col-xs-7'p>>",
            "aaSorting": [5,'desc'],
            "autoWidth": true,
            "preDrawCallback": function () {
                if (!datatable_fwb) {
                    datatable_fwb = new ResponsiveDatatablesHelper($('#datatable_fwb'), breakpointDefinition);
                }
            },
            "rowCallback": function (nRow, aData, index) {
                datatable_fwb.createExpandIcon(nRow);
                var info = dataNew.page.info();
                $('td', nRow).eq(0).html(info.page * info.length + (index + 1));
            },
            "drawCallback": function (oSettings) {
                datatable_fwb.respond();
                $('[data-toggle="tooltip"]').tooltip({ placement: 'left', container: 'body', html: true });
            },
            "aoColumns":
                [
                    {mData: null, bSortable: false},
                    {mData: 'effRep_no'},
                    {mData: 'effRep_totalSample'},                    
                    {mData: 'client_organisation'},
                    {mData: 'client_pic'},
                    {mData: 'wfTask_timeCreated', sClass: 'text-center'},
                    {mData: 'status_desc', sClass: 'text-center',
                        mRender: function (data, type, row) {
                            return '<b class="label bg-color-'+row.status_color+'"> '+data+' </b>';
                        }
                    },
                    {mData: null, bSortable: false, sClass: 'text-center',
                        mRender: function (data, type, row) {
                            $label = '<a href="javascript:void(0)" class="btn btn-success btn-xs" style="width:24px" onclick="f_mfcr_load_certificate ('+(fwb_summary_id=='1'?2:3)+', \''+row.effRep_no+'\', '+row.wfTask_id+',\'fwb\');" data-toggle="tooltip" data-original-title="Certificate Workbook"><i class="fa fa-columns"></i></a>';
                            return $label;
                        }
                    }
                ]
        });
        $("#datatable_fwb thead th input[type=text]").on('keyup change', function () {
            dataNew.column($(this).parent().index() + ':visible').search(this.value).draw();
        });
        $("#datatable_fwb thead th input[type=number]").on('keyup change', function () {
            dataNew.column($(this).parent().index() + ':visible').search('^'+this.value+'$', true, false, true).draw();
        });
        $("#datatable_fwb thead th select").on('change', function () {
            if (this.value == '')
                dataNew.column($(this).parent().index() + ':visible').search(this.value).draw();
            else
                dataNew.column($(this).parent().index() + ':visible').search('^'+this.value+'$', true, false, true).draw();
        }); 
        
        $('#modal_waiting').on('shown.bs.modal', function(e){
            if (f_check_task_user (2)) {
                f_fwb_summary();
                f_fwb_process(fwb_summary_id, 'Incoming Task');
            }
            $('#modal_waiting').modal('hide');
            $(this).unbind(e);
        }).modal('show');
        
        
    });
    
    function f_fwb_process(summary_id, title) {
        fwb_summary_id = summary_id;
        if (summary_id == '1') {
            datas = f_get_general_info_multiple('dt_eff_incoming', {}, {wfTaskType_id:'43'});
            f_dataTable_draw(dataNew, datas);
            $(dataNew.columns(5).header()).text('Received Time');
            $(dataNew.columns(6).header()).text('Status');
        } else if (summary_id == '2') {
            datas = f_get_general_info_multiple('dt_eff_outgoing', {}, {wfTaskType_id:'43'});
            f_dataTable_draw(dataNew, datas);
            $(dataNew.columns(5).header()).text('Submitted Time');
            $(dataNew.columns(6).header()).text('Action');
        }
        $('.fwb_lbl_summary').removeClass('text-bold');
        $('.fwb_lbl_summary_'+summary_id).addClass('text-bold');
        if (typeof title !== 'undefined')
            $('#fwb_table_header').html(title);
    }        
    
    function f_fwb_summary_click(summary_id, title) {
        $('#modal_waiting').on('shown.bs.modal', function(e){
            f_fwb_process (summary_id, title);
            $('#modal_waiting').modal('hide');
            $(this).unbind(e);
        }).modal('show');
    }
    
    function f_fwb_summary() {
        $('.lfwb_summary').html(0);
        var arr_status = f_get_general_info_multiple('vw_count_task', {}, {wfTaskType_id:'43'}); 
        $.each(arr_status, function(u){
            if (jQuery.inArray(arr_status[u].wfTask_partition, ['1', '2']) !== -1) {
                $('#lfwb_summary_'+arr_status[u].wfTask_partition).html(formattedNumber(arr_status[u].total));
            }
        });
    }
    
</script>