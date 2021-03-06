<div id="ribbon">
    <span class="ribbon-button-alignment"> 
        <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your fields." data-html="true">
            <i class="fa fa-refresh"></i>
        </span> 
    </span>
    <ol class="breadcrumb">
        <li>Customer Management</li><li>Customer Management</li>
    </ol>
</div>
<div id="content">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <h1 class="page-title txt-color-blueDark">
                <i class="fa fa-suitcase fa-fw "></i> 
                Customer Management
                <span>> 
                    Customer Management
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
                                    <h5 class="padding-5 cmg_lbl_summary cmg_lbl_summary_ text-bold"> All Types <span class="txt-color-blue"><i class="fa fa-tags"></i>&nbsp;&nbsp;<a href="javascript:void(0)" class="lcmg_summary" id="lcmg_summary_" onclick="f_cmg_summary_click('', 'All Types');" rel="tooltip" data-placement="right" data-original-title="Click to view report">0</a></span></h5>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-12">
                            <ul id="sparks" class="pull-left">
                                <li class="sparks-info">
                                    <h5 class="padding-5 cmg_lbl_summary cmg_lbl_summary_INT"> Internal Customer Type <span class="txt-color-green"><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="javascript:void(0)" class="lcmg_summary" id="lcmg_summary_INT" onclick="f_cmg_summary_click('INT', 'Internal Type');" rel="tooltip" data-placement="right" data-original-title="Click to view report">0</a></span></h5>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-12">
                            <ul id="sparks" class="pull-left">
                                <li class="sparks-info">
                                    <h5 class="padding-5 cmg_lbl_summary cmg_lbl_summary_EXT"> External Customer Type <span class="txt-color-red"><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="javascript:void(0)" class="lcmg_summary" id="lcmg_summary_EXT" onclick="f_cmg_summary_click('EXT', 'External Type');" rel="tooltip" data-placement="right" data-original-title="Click to view report">0</a></span></h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="well padding-10">
                    <form id="form_cmg_search">
                        <h5 class="margin-top-0"><i class="fa fa-search"></i> Search...</h5>
                        <div class="padding-bottom-10"><input type="text" class="form-control" name="cmg_srch_customer" id="cmg_srch_customer" placeholder="Customer"></div>
                        <div class="padding-bottom-10"><input type="text" class="form-control" name="cmg_srch_pic" id="cmg_srch_pic" placeholder="PIC"></div>
                        <div class="padding-bottom-10">
                            <select class="form-control select2" name="cmg_srch_group" id="cmg_srch_group" style="width:100%"></select>
                        </div>
                        <div class="text-right">
                            <button type="button" class="btn btn-labeled btn-default" id="cmg_btn_search">
                                <span class="btn-label"><i class="fa fa-search"></i></span>Search
                            </button>
                        </div>
                    </form>
                </div>
            </article>
            <article class="col-md-9">
                <div class="jarviswidget jarviswidget-color-blueLight" id="wid-id-cmg1" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false">                
                    <header>
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                        <h2>Category List : <span class="text-italic" id="cmg_table_header"></span> &nbsp;<span class="font-xs text-danger" id="cmg_table_title"></span></h2>
                        <div class="widget-toolbar">
                            <a href="javascript:void(0);" class="btn btn-primary" onclick="f_mcu_load_customer(1,'','cmg');" rel="tooltip" data-placement="left" data-original-title="Create new Customer"><i class="fa fa-plus-square"></i> Add New Customer</a>
                        </div>
                    </header>
                    <div>
                        <div class="widget-body no-padding">
                            <div class="table-responsive">                                
                                <table id="datatable_cmg" class="table table-striped table-bordered table-hover table-condensed" width="100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th><input type="text" class="form-control" maxlength="100" /></th>
                                            <th>
                                                <select class="form-control" id="cmg_srchdt_group" style="width:100%"></select>
                                            </th>
                                            <th>
                                                <select class="form-control" style="width:100%">
                                                    <option value=""></option>
                                                    <option value="Internal">Internal</option>
                                                    <option value="External">External</option>
                                                </select>
                                            </th>
                                            <th><input type="text" class="form-control" maxlength="100" /></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th width="30px">No.</th>         
                                            <th data-class="expand">Customer Name</th>               
                                            <th width="20%">Category</th>   
                                            <th data-hide="phone,tablet" width="15%">Customer Type</th>
                                            <th data-hide="phone,tablet">PIC</th>
                                            <th style="width: 28px; max-width: 28px">&nbsp;</th>
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
    include 'view/modal/modal_customer.php';
?>
      