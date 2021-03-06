<div id="ribbon">
    <span class="ribbon-button-alignment"> 
        <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your fields." data-html="true">
            <i class="fa fa-refresh"></i>
        </span> 
    </span>
    <ol class="breadcrumb">
        <li>Home</li><li>AOTD</li><li>Analytical Testing Services</li><li>Workbook</li>
    </ol>
</div>
<div id="content">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <h1 class="page-title txt-color-blueDark">
                <i class="fa fa-flask fa-fw "></i> 
                Analytical Testing Services
                <span>> 
                    Workbook
                </span>
            </h1>
        </div>
    </div>
    <section id="widget-grid"> 
        <div class="row">
            <article class="col-md-3">
                <div class="well">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-12">
                            <ul id="sparks" class="pull-left">
                                <li class="sparks-info">
                                    <h5 class="padding-5 awb_lbl_summary awb_lbl_summary_1 text-bold"> Incoming Task <span class="txt-color-red"><i class="fa fa-inbox"></i>&nbsp;&nbsp;<a href="javascript:void(0)" class="lawb_summary" id="lawb_summary_1" onclick="f_awb_summary_click('1', 'Incoming Task');" rel="tooltip" data-placement="right" data-original-title="Click to view report">0</a></span></h5>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-12">
                            <ul id="sparks" class="pull-left">
                                <li class="sparks-info">
                                    <h5 class="padding-5 awb_lbl_summary awb_lbl_summary_2"> Submitted Task <span class="txt-color-greenDark"><i class="fa fa-mail-forward"></i>&nbsp;&nbsp;<a href="javascript:void(0)" class="lawb_summary" id="lawb_summary_2" onclick="f_awb_summary_click('2', 'Submitted Task');" rel="tooltip" data-placement="right" data-original-title="Click to view report">0</a></span></h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="well padding-10">
                    <form id="form_awb_search">
                        <h5 class="margin-top-0"><i class="fa fa-barcode"></i> Scan Barcode</h5>
                        <div class="padding-bottom-10"><input type="text" class="form-control" name="awb_barcode_no" id="awb_barcode_no" placeholder="Barcode No."></div>
                        <div class="text-right">
                            <button type="button" class="btn btn-labeled btn-default" id="awb_btn_scan">
                                <span class="btn-label"><i class="fa fa-search"></i></span>Search
                            </button>
                        </div>
                    </form>
                </div>
            </article>
            <article class="col-md-9">
                <div class="jarviswidget jarviswidget-color-blueLight" id="wid-id-awb1" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false">                
                    <header>
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                        <h2>Certificate List : <span class="text-italic" id="awb_table_header"></span> &nbsp;<span class="font-xs text-danger" id="awb_table_title"></span></h2>
                    </header>
                    <div>
                        <div class="widget-body no-padding">
                            <div class="table-responsive">                                
                                <table id="datatable_awb" class="table table-striped table-bordered table-hover table-condensed" width="100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th><input type="text" class="form-control" maxlength="50" /></th>
                                            <th><input type="text" class="form-control" maxlength="5" /></th>
                                            <th><input type="text" class="form-control" maxlength="100" /></th>
                                            <th><input type="text" class="form-control" maxlength="100" /></th>                                            
                                            <th><input type="text" class="form-control" id="awb_dateReceived" readonly /></th>
                                            <th><input type="text" class="form-control" maxlength="30" /></th>                                            
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th width="30px">No.</th>         
                                            <th data-class="expand">Certificate No.</th>               
                                            <th data-hide="phone" width="9%">Number of Sample</th>   
                                            <th data-hide="phone,tablet" width="23%">Customer Name</th>
                                            <th data-hide="phone,tablet" width="18%">Attention</th>
                                            <th style="width: 88px; min-width: 88px"></th>                                            
                                            <th style="width: 58px; min-width: 58px">Status</th>
                                            <th style="width: 32px; max-width: 32px">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>									
                                </table>    
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>        
    </section>
</div>
<?php 
    include 'view/modal/modal_ats_certificate.php';
    include 'view/modal/modal_ats_sample_login.php';
    include 'view/modal/modal_ats_formula_set.php';
    include 'view/modal/modal_ats_raw.php';
?>