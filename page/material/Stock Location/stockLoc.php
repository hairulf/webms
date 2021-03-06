<?php 
	include_once($_SERVER['DOCUMENT_ROOT'] . '/newms/connection/sschecker.php'); 
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <link rel="stylesheet" href="../../js/form-validator/theme-default.css" />
	<link rel="stylesheet" href="../../js/jquery-ui-1.11.4.custom/jquery-ui.css">
	<link rel="stylesheet" href="../../js/font-awesome-4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../js/ionicons-2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="../../js/AccordionMenu/dist/metisMenu.min.css"> 
	<link rel="stylesheet" href="../../js/bootstrap-3.3.5-dist/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="../../js/jasny-bootstrap/css/jasny-bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" media="screen" href="../../js/css/trirand/ui.jqgrid-bootstrap.css" />
	<style>
		.wrap{
			word-wrap: break-word;
		}
		.ui-th-column{
			word-wrap: break-word;
			white-space: normal !important;
			vertical-align: top !important;
		}
		
		.radio-inline+.radio-inline {
			margin-left: 0;
		}
		
		.radio-inline {
			margin-right: 10px;
		}
	</style>
	
	<script>
	</script>
    
     <meta charset="utf-8" />
    <title>Material - Stock Location</title>
</head>
<body>
	  
	<div class="container" style="margin-bottom:1em">
		<div class='row'>
			<form class="form-horizontal">
				<fieldset>
				
				<div class="col-md-6 form-group">
				<label class="col-md-3 control-label" for="itemcode">Item Code</label>  
				<div class="col-md-6">
			    <div class='input-group'>
	<input id="itemcode" name="itemcode" type="text" class="form-control input-sm" data-validation="required">
						<a class='input-group-addon btn btn-primary'><span class='ion-more'></span></a>
					  </div>
					  <span class="help-block"></span>
				  </div>
                  </div>
				</fieldset>
			</form>
		</div>
		
		<div class='row'>
			<div class='col-md-12'>
				<table id="jqGrid" class="table table-striped"></table>
				<div id="jqGridPager"></div>
			</div>
		</div>
		
		<div id="dialogForm" title="Add Form" >
			<form class='form-horizontal' style='width:99%' id='formdata'>
				<div class="form-group">
				  <label class="col-md-2 control-label" for="deptcode">Dept. Code</label>  
				  <div class="col-md-4">
					  <div class='input-group'>
						<input id="deptcode" name="deptcode" type="text" class="form-control input-sm" data-validation="required">
						<a class='input-group-addon btn btn-primary'><span class='ion-more'></span></a>
					  </div>
					  <span class="help-block"></span>
				  </div>
                  </div>
                  
                  <div class="form-group">
				  <label class="col-md-2 control-label" for="uomcode">UOM Code</label>  
				  <div class="col-md-4">
					  <div class='input-group'>
						<input id="uomcode" name="uomcode" type="text" class="form-control input-sm" data-validation="required">
						<a class='input-group-addon btn btn-primary'><span class='ion-more'></span></a>
					  </div>
					  <span class="help-block"></span>
				  </div>
                  </div>
                  
                   <div class="form-group">
				 <label class="col-md-2 control-label" for="stocktxntype">Transaction Type</label>  
				  <div class="col-md-10">
				    <label class="radio-inline"><input type="radio" name="stocktxntype" value='Transfer'>TRANSFER</label>
                    <label class="radio-inline"><input type="radio" name="stocktxntype" value='Issue'>ISSUE</label>				
                </div>
				</div>
                  
                  <div class="form-group">
				  <label class="col-md-2 control-label" for="disptype">Dispensing Type</label>  
				   <div class="col-md-10">
				    <label class="radio-inline"><input type="radio" name="disptype" value='TR Item'>DS (TR Item)</label>
                    <label class="radio-inline"><input type="radio" name="disptype" value='IS Item'>DS (IS Item)</label>				
                </div>
				</div>
                  
                
                <div class="form-group">
				  <label class="col-md-2 control-label" for="postcode">Rack No</label>  
				  <div class="col-md-4">
				  <input id="postcode" name="postcode" type="text" class="form-control input-sm" data-validation="required">
				 </div>
				
				  <label class="col-md-2 control-label" for="payto">Bin Code</label>  
				  <div class="col-md-4">
				  <input id="payto" name="payto" type="text" class="form-control input-sm" data-validation="required">
				</div>
				</div>
				
				<div class="form-group">
				  <label class="col-md-2 control-label" for="teloffice">Maximum Stock Qty</label>  
                  <div class="col-md-4">
				  <input id="teloffice" name="teloffice" type="text" class="form-control input-sm" data-validation="required">
				  </div>
                 
				  <label class="col-md-2 control-label" for="fax">Minimum Stock Qty</label>  
                  <div class="col-md-4">
				  <input id="fax" name="fax" type="text" class="form-control input-sm" data-validation="required">
				  </div>
                  </div>
                  
                  <div class="form-group">
				  <label class="col-md-2 control-label" for="contact">Reorder Level</label>  
                  <div class="col-md-4">
				  <input id="contact" name="contact" type="text" class="form-control input-sm" data-validation="required">
				  </div>
                 
				  <label class="col-md-2 control-label" for="position">Reorder Quantity</label>  
                  <div class="col-md-4">
				  <input id="position" name="position" type="text" class="form-control input-sm" data-validation="required">
				  </div>
                  </div>
                  
		</form>
		</div>
		
		<div id="dialog" title="title">
        	<form class="form-horizontal col-xs-12" style="background-color:gainsboro;margin-top:5px;border-radius:5px"><br>
            	<div id="Dcol" class='col-xs-6 form-group'>
				</div>
                
				<div class='col-xs-7 form-group'><!--/.ubah-->
					<input id="Dtext" type="search" placeholder="Search here ..." class="form-control text-uppercase">
				</div>
			</form>
            
			<div class='col-xs-12' align="center">
            <br>
				<table id="gridDialog" class="table table-striped"></table>
				<div id="gridDialogPager"></div>
			</div>
		</div>
	</div><!--/.container-->

    
</body>

    <script type="text/ecmascript" src="../../js/jquery.min.js"></script> 
    <script type="text/ecmascript" src="../../js/trirand/i18n/grid.locale-en.js"></script>
    <script type="text/ecmascript" src="../../js/trirand/jquery.jqGrid.min.js"></script>
    <script type="text/ecmascript" src="../../js/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script type="text/ecmascript" src="../../js/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
    <script type="text/ecmascript" src="../../js/AccordionMenu/dist/metisMenu.min.js"></script>
    <script type="text/ecmascript" src="../../js/jquery-ui.min.js"></script>
	<script type="text/ecmascript" src="../../js/form-validator/jquery.form-validator.min.js"></script>
    <script type="text/ecmascript" src="../../js/jquery.dialogextend.js"></script>
	
    <script type="text/ecmascript" src="stockLoc.js"></script>

</html>