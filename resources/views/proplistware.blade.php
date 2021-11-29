@extends('common')
@section('content')
<!-- desktop view content code starts -->
<div class="commecial_prdct_parentdiv">
	<div class="commrcial_contentdiv">
@php
// for photo {{count($property_photos[$data->id])}}
$selected1="";
$selected2="";
$selected3="";
if($sort!=='')
{
	if($sort=="price_low_to_high")
	{
		$selected1="selected";
	}
	if($sort=="price_high_to_low")
	{
		$selected2="selected";
	}
	if($sort=="most_recent")
	{
		$selected3="selected";
	}
}
@endphp

		<div class="commercial_toplinksdiv">

			<div class="links">
			<a href="/">Home ></a><a href="#">Patna Warehouse Real Estate ></a><a href="#">commerical property for rent in Patna ></a><a href="#">Office for rent in Patna></a>
			</div>

			<div class="update_date">
			  <p>Last Updated: 4 April 2021</p>	
			</div>

		</div>

		<div class="tablinksdiv">
			<div class="threelinksdiv">
				<div class="propertylinks">
					<a href="#" class="links1">Properties({{count($property)}})</a>
				</div>
				<div class="topagentslinks">
					<a href="#" class="links3">Top Agents</a>
				</div>
			</div>
			<div class="filterParent_div">
				<div class="filtertext">
					<p>{{count($property)}} Owner Warehouse Properties for Sale</p>
				</div>
				<div class="filterdiv">
            
		<select name="sort_by_value" id="sort_by_value" onchange="sort_by()">
			<option value="relevance">Sort By Relevance</option>
			<option value="price_low_to_high" {{$selected1}}>Price Low to High</option>
			<option value="price_high_to_low" {{$selected2}}>Price High to Low</option>
			<option value="most_recent" {{$selected3}}>Most Recent</option>
		</select>
        
         </div>
		</div>
	   </div>
		

	   @foreach($property as $data)
	   @php 
	   	$inr=inr($data->rent_p_sq_ft);
	   @endphp
		<div class="product_detailparent_div">
			<div class="exclusivetextdiv">
				<p class="text1">BP Group Exclusive</p>
			</div>
			<div class="descriptiondiv">
				<div class="photodiv">
					<img
					src="{{ asset('storage/media/'.$data->banner_pic) }}" alt="property-pic" />
					{{-- <p class="postedtext">Posted:yesterday</p> --}}
				</div>
				<div class="pricediv">
					<p class="text2">&#8377; {{$inr}} sq/ft</p>
					<a href="#">See other charges</a>
				</div>
				<div class="aboutproperty_parentdiv">
					<div class="headtxt_div">
						<p class="officespacetext"><b>{{$data->building_name}}</b>&nbsp;&nbsp; for rent in {{$data->city_name}}</p>
						<div class="ratesparentdiv">
							<div class="div_first">
								<p>Total Area <b>{{$data->total_area}} sqft</b></p>
								<p class="furnishtext">
									Furnished		
							</p>
							</div>
							<div class="div_second">
								<p>Floor <b>{{$data->floor_offered}}</b></p>
								<p class="cabintext">Structure - <b>{{$data->structure}} sqft</b></p>
							</div>
							<div class="div_third">
								<p>Immediately Available</p>
								<p class="washroomtext">Vehicle Parking -<b>@if ($data->vehicle_parking=='1')
									Yes		
									@else
									No
								@endif</b></p>
							</div>
						</div>

						
					</div>
					<div class="property_descrpsn">
						<p>Zone: Urban Enterprise Zones&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Grade A class Building</p>
					</div>
					<div class="textdescrpsn">
						<p></p>
					</div>
					<div class="buttons_div">
						<div>
						<a href="javascript:void(0)" class="button btn1" onclick="open_cont_modal()">Contact Owner</a>
						<a href="javascript:void(0)" class="button btn2" onclick="open_num()">Get Phone No.</a>
						{{-- <a href="#" class="button btn3">Save</a> --}}
						</div>
						<div class="ownernametext">
						<p>Owner : {{$data->owner_name}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach

	</div>
</div>
{{-- {{$property->links()}} --}}

<!-- desktop view content code ends -->

<!-- mobile view content code starts -->
<div class="megapropertydiv">
<div class="mobilecontentparent_div">
	<div class="contentchild_div">
		<p class="headtext1">What kind of product you are looking for</p>
		<p class="subtext1">
			Stay Home, stay safe & share with us
		</p>
		<div class="bttn">
		<a href="#">Share Requirement</a>
		</div>
	</div>
</div>

<div class="commercial_property_number">
<p >{{count($property)}} owner commercial property for sale in patna</p>
</div>

@foreach($property as $data)
@php 
$inr=inr($data->rent_p_sq_ft);
@endphp
<div class="propertydiv_one">
	<div class="childdiv">
		<div class="divexclusive">
			<p>BPGroup Exclusive</p>
		</div>
		<div class="picandratediv">
			<div class="picdiv">
				<img src="{{ asset('storage/media/'.$data->banner_pic) }}" alt="Property Pic">
			</div>
			<div class="ratediv">
				<p class="ratetext">&#8377; {{$inr}} sq/ft</p>
				<p>Total Area <b>{{$data->total_area}} sqft</b></p>
								<p class="furnishtext">
									
										UnFurnished</p>
				<small>{{$data->building_name}}</small>

				<p>{{$data->address}}<br>{{$data->city_name}},Bihar</p>
				<p>Ready to Move</p>
			</div>
		</div>
		<div class="descripsandiv">
			<p class="text3">{{$data->city_name}} is the favourate and prime Location</p>
		</div>
		<div class="buttnsdiv_child">
			    
			    <a href="#" class="button btn2">Get Phone No.</a>
			    <a href="#" class="button btn1">Contact Owner</a>				
		</div>
	</div>
</div>

@endforeach

<!-- mobile view content code ends ---->

</div>

<form id="categoryFilter">
    <input type="hidden" id="sort" name="sort"/>
  </form> 
@endsection