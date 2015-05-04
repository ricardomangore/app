<div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3>
      </div>
      <ul class="breadcrumb">
        <li><a href="{{ URL::to('dashboard') }}">{{ Lang::get('core.home') }}</a></li>
		<li><a href="{{ URL::to('piers?md='.$masterdetail["filtermd"]) }}">{{ $pageTitle }}</a></li>
        <li class="active"> {{ Lang::get('core.detail') }} </li>
      </ul>
	 </div>  
	 
	 
 	<div class="page-content-wrapper">   
	   <div class="toolbar-line">
	   		<a href="{{ URL::to('piers?md='.$masterdetail["filtermd"].$trackUri) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="icon-table"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
			@if($access['is_add'] ==1)
	   		<a href="{{ URL::to('piers/add/'.$id.'?md='.$masterdetail["filtermd"].$trackUri) }}" class="tips btn btn-xs btn-primary" title="{{ Lang::get('core.btn_edit') }}"><i class="icon-pencil3"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
			@endif  		   	  
		</div>
	<div class="table-responsive">
	<table class="table table-striped table-bordered" >
		<tbody>	
	
					<tr>
						<td width='30%' class='label-view text-right'>ID</td>
						<td>{{ $row->ID }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>IMPORT EXPORT</td>
						<td>{{ $row->IMPORT_EXPORT }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>HSCODE 6DIGITS</td>
						<td>{{ $row->HSCODE_6DIGITS }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>DESCRIPTION 6DIGITS</td>
						<td>{{ $row->DESCRIPTION_6DIGITS }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>HSCODE 8DIFITS</td>
						<td>{{ $row->HSCODE_8DIFITS }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>DESCRIPTION 8DIGITS</td>
						<td>{{ $row->DESCRIPTION_8DIGITS }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>IRS MX</td>
						<td>{{ $row->IRS_MX }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>NAME MX</td>
						<td>{{ $row->NAME_MX }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>ADDRESS MX</td>
						<td>{{ $row->ADDRESS_MX }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>ZIP MX</td>
						<td>{{ $row->ZIP_MX }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>CITY MX</td>
						<td>{{ $row->CITY_MX }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>STATE MX</td>
						<td>{{ $row->STATE_MX }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>CUSTOM KEY</td>
						<td>{{ $row->CUSTOM_KEY }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>SECTION KEY</td>
						<td>{{ $row->SECTION_KEY }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>CUSTOM</td>
						<td>{{ $row->CUSTOM }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>CUSTOM PORT SATE</td>
						<td>{{ $row->CUSTOM_PORT_SATE }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>CUSTOM BROKER</td>
						<td>{{ $row->CUSTOM_BROKER }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>DOCUMENT</td>
						<td>{{ $row->DOCUMENT }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>DAY</td>
						<td>{{ $row->DAY }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>MONTH</td>
						<td>{{ $row->MONTH }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>YEAR</td>
						<td>{{ $row->YEAR }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>TRANSPORT</td>
						<td>{{ $row->TRANSPORT }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>ORIGIN DESTINY</td>
						<td>{{ $row->ORIGIN_DESTINY }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>BUYER SELLER</td>
						<td>{{ $row->BUYER_SELLER }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>EXCHANGE RATE</td>
						<td>{{ $row->EXCHANGE_RATE }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>WEIGHT</td>
						<td>{{ $row->WEIGHT }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>QUANTITY</td>
						<td>{{ $row->QUANTITY }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>UNIT</td>
						<td>{{ $row->UNIT }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>PESOS</td>
						<td>{{ $row->PESOS }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>USD</td>
						<td>{{ $row->USD }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>COMER QTY</td>
						<td>{{ $row->COMER_QTY }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>COMER UNIT</td>
						<td>{{ $row->COMER_UNIT }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>COMER VALUE</td>
						<td>{{ $row->COMER_VALUE }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>IRS</td>
						<td>{{ $row->IRS }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>NAME</td>
						<td>{{ $row->NAME }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>ADDRESS</td>
						<td>{{ $row->ADDRESS }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>INTERIOR</td>
						<td>{{ $row->INTERIOR }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>EXTERIOR</td>
						<td>{{ $row->EXTERIOR }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>ZIP</td>
						<td>{{ $row->ZIP }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>CITY STATE</td>
						<td>{{ $row->CITY_STATE }} </td>
						
					</tr>
				
		</tbody>	
	</table>    
	</div>
	</div>
</div>
	  