
  <div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3>
      </div>
      <ul class="breadcrumb">
        <li><a href="{{ URL::to('dashboard') }}">{{ Lang::get('core.home') }}</a></li>
		<li><a href="{{ URL::to('piers?md='.$filtermd) }}">{{ $pageTitle }}</a></li>
        <li class="active">{{ Lang::get('core.addedit') }} </li>
      </ul>
	  	  
    </div>
 
 	<div class="page-content-wrapper">
		@if(Session::has('message'))	  
			   {{ Session::get('message') }}
		@endif	
		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
		 {{ Form::open(array('url'=>'piers/save/'.SiteHelpers::encryptID($row['ID']).'?md='.$filtermd.$trackUri, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) }}
<div class="col-md-12">
						<fieldset><legend> Piers Module</legend>
									
								  <div class="form-group  " >
									<label for="ID" class=" control-label col-md-4 text-left"> ID </label>
									<div class="col-md-6">
									  {{ Form::text('ID', $row['ID'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="IMPORT EXPORT" class=" control-label col-md-4 text-left"> IMPORT EXPORT </label>
									<div class="col-md-6">
									  {{ Form::text('IMPORT_EXPORT', $row['IMPORT_EXPORT'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="HSCODE 6DIGITS" class=" control-label col-md-4 text-left"> HSCODE 6DIGITS </label>
									<div class="col-md-6">
									  {{ Form::text('HSCODE_6DIGITS', $row['HSCODE_6DIGITS'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="DESCRIPTION 6DIGITS" class=" control-label col-md-4 text-left"> DESCRIPTION 6DIGITS </label>
									<div class="col-md-6">
									  {{ Form::text('DESCRIPTION_6DIGITS', $row['DESCRIPTION_6DIGITS'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="HSCODE 8DIFITS" class=" control-label col-md-4 text-left"> HSCODE 8DIFITS </label>
									<div class="col-md-6">
									  {{ Form::text('HSCODE_8DIFITS', $row['HSCODE_8DIFITS'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="DESCRIPTION 8DIGITS" class=" control-label col-md-4 text-left"> DESCRIPTION 8DIGITS </label>
									<div class="col-md-6">
									  {{ Form::text('DESCRIPTION_8DIGITS', $row['DESCRIPTION_8DIGITS'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="IRS MX" class=" control-label col-md-4 text-left"> IRS MX </label>
									<div class="col-md-6">
									  {{ Form::text('IRS_MX', $row['IRS_MX'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="NAME MX" class=" control-label col-md-4 text-left"> NAME MX </label>
									<div class="col-md-6">
									  {{ Form::text('NAME_MX', $row['NAME_MX'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="ADDRESS MX" class=" control-label col-md-4 text-left"> ADDRESS MX </label>
									<div class="col-md-6">
									  {{ Form::text('ADDRESS_MX', $row['ADDRESS_MX'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="ZIP MX" class=" control-label col-md-4 text-left"> ZIP MX </label>
									<div class="col-md-6">
									  {{ Form::text('ZIP_MX', $row['ZIP_MX'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="CITY MX" class=" control-label col-md-4 text-left"> CITY MX </label>
									<div class="col-md-6">
									  {{ Form::text('CITY_MX', $row['CITY_MX'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="STATE MX" class=" control-label col-md-4 text-left"> STATE MX </label>
									<div class="col-md-6">
									  {{ Form::text('STATE_MX', $row['STATE_MX'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="CUSTOM KEY" class=" control-label col-md-4 text-left"> CUSTOM KEY </label>
									<div class="col-md-6">
									  {{ Form::text('CUSTOM_KEY', $row['CUSTOM_KEY'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="SECTION KEY" class=" control-label col-md-4 text-left"> SECTION KEY </label>
									<div class="col-md-6">
									  {{ Form::text('SECTION_KEY', $row['SECTION_KEY'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="CUSTOM" class=" control-label col-md-4 text-left"> CUSTOM </label>
									<div class="col-md-6">
									  {{ Form::text('CUSTOM', $row['CUSTOM'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="CUSTOM PORT SATE" class=" control-label col-md-4 text-left"> CUSTOM PORT SATE </label>
									<div class="col-md-6">
									  {{ Form::text('CUSTOM_PORT_SATE', $row['CUSTOM_PORT_SATE'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="CUSTOM BROKER" class=" control-label col-md-4 text-left"> CUSTOM BROKER </label>
									<div class="col-md-6">
									  {{ Form::text('CUSTOM_BROKER', $row['CUSTOM_BROKER'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="DOCUMENT" class=" control-label col-md-4 text-left"> DOCUMENT </label>
									<div class="col-md-6">
									  {{ Form::text('DOCUMENT', $row['DOCUMENT'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="DAY" class=" control-label col-md-4 text-left"> DAY </label>
									<div class="col-md-6">
									  {{ Form::text('DAY', $row['DAY'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="MONTH" class=" control-label col-md-4 text-left"> MONTH </label>
									<div class="col-md-6">
									  {{ Form::text('MONTH', $row['MONTH'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="YEAR" class=" control-label col-md-4 text-left"> YEAR </label>
									<div class="col-md-6">
									  {{ Form::text('YEAR', $row['YEAR'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="TRANSPORT" class=" control-label col-md-4 text-left"> TRANSPORT </label>
									<div class="col-md-6">
									  {{ Form::text('TRANSPORT', $row['TRANSPORT'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="ORIGIN DESTINY" class=" control-label col-md-4 text-left"> ORIGIN DESTINY </label>
									<div class="col-md-6">
									  {{ Form::text('ORIGIN_DESTINY', $row['ORIGIN_DESTINY'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="BUYER SELLER" class=" control-label col-md-4 text-left"> BUYER SELLER </label>
									<div class="col-md-6">
									  {{ Form::text('BUYER_SELLER', $row['BUYER_SELLER'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="EXCHANGE RATE" class=" control-label col-md-4 text-left"> EXCHANGE RATE </label>
									<div class="col-md-6">
									  {{ Form::text('EXCHANGE_RATE', $row['EXCHANGE_RATE'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="WEIGHT" class=" control-label col-md-4 text-left"> WEIGHT </label>
									<div class="col-md-6">
									  {{ Form::text('WEIGHT', $row['WEIGHT'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="QUANTITY" class=" control-label col-md-4 text-left"> QUANTITY </label>
									<div class="col-md-6">
									  {{ Form::text('QUANTITY', $row['QUANTITY'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="UNIT" class=" control-label col-md-4 text-left"> UNIT </label>
									<div class="col-md-6">
									  {{ Form::text('UNIT', $row['UNIT'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="PESOS" class=" control-label col-md-4 text-left"> PESOS </label>
									<div class="col-md-6">
									  {{ Form::text('PESOS', $row['PESOS'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="USD" class=" control-label col-md-4 text-left"> USD </label>
									<div class="col-md-6">
									  {{ Form::text('USD', $row['USD'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="COMER QTY" class=" control-label col-md-4 text-left"> COMER QTY </label>
									<div class="col-md-6">
									  {{ Form::text('COMER_QTY', $row['COMER_QTY'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="COMER UNIT" class=" control-label col-md-4 text-left"> COMER UNIT </label>
									<div class="col-md-6">
									  {{ Form::text('COMER_UNIT', $row['COMER_UNIT'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="COMER VALUE" class=" control-label col-md-4 text-left"> COMER VALUE </label>
									<div class="col-md-6">
									  {{ Form::text('COMER_VALUE', $row['COMER_VALUE'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="IRS" class=" control-label col-md-4 text-left"> IRS </label>
									<div class="col-md-6">
									  {{ Form::text('IRS', $row['IRS'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="NAME" class=" control-label col-md-4 text-left"> NAME </label>
									<div class="col-md-6">
									  {{ Form::text('NAME', $row['NAME'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="ADDRESS" class=" control-label col-md-4 text-left"> ADDRESS </label>
									<div class="col-md-6">
									  {{ Form::text('ADDRESS', $row['ADDRESS'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="INTERIOR" class=" control-label col-md-4 text-left"> INTERIOR </label>
									<div class="col-md-6">
									  {{ Form::text('INTERIOR', $row['INTERIOR'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="EXTERIOR" class=" control-label col-md-4 text-left"> EXTERIOR </label>
									<div class="col-md-6">
									  {{ Form::text('EXTERIOR', $row['EXTERIOR'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="ZIP" class=" control-label col-md-4 text-left"> ZIP </label>
									<div class="col-md-6">
									  {{ Form::text('ZIP', $row['ZIP'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="CITY STATE" class=" control-label col-md-4 text-left"> CITY STATE </label>
									<div class="col-md-6">
									  {{ Form::text('CITY_STATE', $row['CITY_STATE'],array('class'=>'form-control', 'placeholder'=>'',   )) }} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> </fieldset>
			</div>
			
			
			<div style="clear:both"></div>	
				
			  <div class="form-group">
				<label class="col-sm-4 text-right">&nbsp;</label>
				<div class="col-sm-8">	
				<input type="submit" name="apply" class="btn btn-info" value="{{ Lang::get('core.sb_apply') }} " />
				<input type="submit" name="submit" class="btn btn-primary" value="{{ Lang::get('core.sb_save') }}  " />
				<button type="button" onclick="location.href='{{ URL::to('piers?md='.$masterdetail["filtermd"].$trackUri) }}' " id="submit" class="btn btn-success ">  {{ Lang::get('core.sb_cancel') }} </button>
				</div>	  
		
			  </div> 
		 
		 {{ Form::close() }}
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		 
	});
	</script>		 