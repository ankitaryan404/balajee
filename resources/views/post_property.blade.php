@extends('common')
@section('content')


<!-------------- side navbar coding starts --------------->
<!-------------- side navbar coding starts --------------->

<div class="side_bar">
  <div class="close_btn">
    <i class="fa fa-times" aria-hidden="true"></i>
  </div>
  <div class="login_div">
    <a href="javascript:void(0)" class="login_btn">BPGroup</a>
  </div>
 
  <div class="menu">
    <div class="item">
      <a href="#" class="sub_btn" >Buy <i class="fa fa-angle-right dropdown" aria-hidden="true"></i></a>
      <div class="sub_menu">
        <a href="{{url('property-list/retail')}}" class="sub_item">Retail</a>
        <a href="{{url('property-list/officespace')}}" class="sub_item">Officespace</a>
        <a href="{{url('property-list/warehouse')}}" class="sub_item">Warehouse</a>
        <a href="{{url('property-list/residential')}}" class="sub_item">Residential</a>
        <a href="{{url('property-list/commercial')}}" class="sub_item">Commercial</a>
        <a href="{{url('property-list/plot')}}" class="sub_item">Plot</a>
      </div>
    </div>
    <div class="item">
      <a href="#" class="sub_btn" >Rent <i class="fa fa-angle-right dropdown" aria-hidden="true"></i></a>
      <div class="sub_menu">
        {{-- <a href="#" class="sub_item">sub Item 1</a>
        <a href="#" class="sub_item">sub Item 2</a>
        <a href="#" class="sub_item">sub Item 3</a>
        <a href="#" class="sub_item">sub Item 4</a> --}}
      </div>
    </div>
    <div class="item">
      <a href="#" class="sub_btn" >Sell <i class="fa fa-angle-right dropdown" aria-hidden="true"></i></a>
      <div class="sub_menu">
        {{-- <a href="#" class="sub_item">sub Item 1</a>
        <a href="#" class="sub_item">sub Item 2</a>
        <a href="#" class="sub_item">sub Item 3</a>
        <a href="#" class="sub_item">sub Item 4</a> --}}
      </div>
    </div>
    <div class="item">
      <a href="#" class="sub_btn" >Home Loans <i class="fa fa-angle-right dropdown" aria-hidden="true"></i></a>
      <div class="sub_menu">
        {{-- <a href="#" class="sub_item">sub Item 1</a>
        <a href="#" class="sub_item">sub Item 2</a>
        <a href="#" class="sub_item">sub Item 3</a>
        <a href="#" class="sub_item">sub Item 4</a> --}}
      </div>
    </div>
    <div class="item">
      <a href="#" class="sub_btn" >Property Services <i class="fa fa-angle-right dropdown" aria-hidden="true"></i></a>
      <div class="sub_menu">
        {{-- <a href="#" class="sub_item">sub Item 1</a>
        <a href="#" class="sub_item">sub Item 2</a>
        <a href="#" class="sub_item">sub Item 3</a>
        <a href="#" class="sub_item">sub Item 4</a> --}}
      </div>
    </div>
    <div class="item">
      <a href="#" class="sub_btn" >Resources <i class="fa fa-angle-right dropdown" aria-hidden="true"></i></a>
      <div class="sub_menu">
        {{-- <a href="#" class="sub_item">sub Item 1</a>
        <a href="#" class="sub_item">sub Item 2</a>
        <a href="#" class="sub_item">sub Item 3</a>
        <a href="#" class="sub_item">sub Item 4</a> --}}
      </div>
    </div>
    <div class="item">
      <a href="#" class="sub_btn" >Help <i class="fa fa-angle-right dropdown" aria-hidden="true"></i></a>
      <div class="sub_menu">
        {{-- <a href="#" class="sub_item">sub Item 1</a>
        <a href="#" class="sub_item">sub Item 2</a>
        <a href="#" class="sub_item">sub Item 3</a>
        <a href="#" class="sub_item">sub Item 4</a> --}}
      </div>
    </div>
  </div>
</div>
<!-- side navbar coding ends -->
<!-- side navbar coding ends -->

<div class="body_div">


<!-------------------------------- Basic Detail div code  starts----------------------------------->

<div class="basicdetail_parent_div">
	<div class="basicdetail_div">
		<p class="text">Fill the Basic Details<span id="progress"></span></p>
	</div>
</div>
<!------------------------------ Basic Detail div code  ends  ---------------------------------->

<div class="postproperty_content_parent_div">

	<div class="pstproperty_leftcontent_div">

		<div class="div_content">

		<div class="pstproperty_content">
			<div class="headingtextdiv">
			<p class="headtext">Sell or Rent your Property</p>
			<p class="subtext">We've over 15 Lac buyers and tenants for you!</p>
			</div>
		</div>

		<div class="freeposting_div">
			<p class="text1">You are posting this property for <del>₹5000</del> <span>FREE</span> </p>
			<div class="textdiv">
				<p class="text2">Free Professional Photoshoot</p>
				<p class="text3">Get Contact Details of upto 5 Responses</p>
			</div>
			<p class="text4">Access to 15 Lac Buyers & Tenants</p>
		</div>
    
<form method="POST" action="{{route('user.post')}}">
  @csrf
		<div class="personal_detail_parent_div">
			<div class="personaldetail_child_div">
				<p class="text">Personal Details</p>

				<div class="radiobtndiv">
					<P>I am</P>
			       <div class="radiobtndiv1">
				      
				      <label class="lablel1">
				      	<input type="radio" name="prad1" value="1" required>  Owner
				      </label>
			       </div>
					<div class="radiobtndiv2">
						
				      <label class="lablel1">
				      	<input type="radio" name="prad1" value="2" required>  Agent
				      </label>
					</div>
					<div class="radiobtndiv3">
					  
				      <label class="lablel1">
				      	<input type="radio" name="prad1" value="3" required>  Builder
				      </label>
					</div>
				
				</div>

			</div>
		</div>


		<div class="property_detail_parentdiv">
			<div class="propertydetail_child_div">

				<div class="headtext_div">
					<p class="text">Property Details</p>
					
				</div>
				<div class="radioselector_parentdiv">
					<p>For</p>
						<label for="">
							<input type="radio" name="prad2" class="" value="1"> Sale
						</label>
						<label for="">
							<input type="radio" name="prad2" class="" value="2"> Rent/Lease
						</label>
						<label for="">
							<input type="radio" name="prad2" class="" value="3"> PG/Hostel
						</label>
				</div>

				<div class="property_typ_parentdiv">
					<p class="text">Property Type</p>
					<div class="selector_div">
						<select name="pcat" id="pcat" class="property_typ_selector" required>
                            <option value="">Select Property Type</option>
                            <option value="residential">All Residential</option>
                            <option value="commercial">Commercial</option>
                            <option value="office-space">Residential House</option>
                            <option value="plot">Plot</option>
                            <option value="warehouse">Warehouse</option>
                        </select>
					</div>
				</div>


				<div class="propertylocation_parentdiv">
					<div class="propertylocation_child_div">
						<div class="textdiv">
							<p class="text">Property Location</p>
						</div>
						<div class="citydiv">
							<label for="" class="city1">City</label><br>
							<input type="text" placeholder="Enter City" name="pcity" id="pcity" required>
						</div>
						<div class="localitydiv">
							<label for="" class="locality">Locality</label><br>
							<input type="text" placeholder="Enter Locality" name="ploc" id="ploc" required>
						</div>
					</div>

				</div>

				<!-- property feature code starts -->

        <div class="property_feature_div">
          <h1>Property Feature</h1>
          <div class="bedroom_balcony_parent_div">
            <div class="bedroom_numberdiv">
              <p>Bedrooms</p>
              <select name="pbed" id="pbed" class="bedroom_number_selection" required>
                <option value="">select bedroom</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
            </div>
            <div class="balcony_number_div">
              <p>Balconies</p>
              <select name="pbal" id="pbal" class="balconies_number_selection" required>
                <option value="">select balconies</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
            </div>
          </div>
          <div class="floor_number_parent_div">
            <p>Floor No.</p>
            <select name="pfloor" id="pfloor" class="floors_number_selection" required> 
              <option value="">select floors</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
            </select>
          </div>
          <div class="total_floors_parent_div">
            <p>Total Floors</p>
            <select name="ptfloor" id="ptfloor" class="total_floors_selection" required>
              <option value="">Total floors</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
            </select>
          </div>
          <div class="furnished_status_parent_div">
            <p>Furnished Status</p>
            <select name="pfrun" id="pfurn" class="furnished_status_selection">
              <option value="">Select furnished status</option>
              <option value="Furnished">Furnished</option>
              <option value="Unfurnished">Unfurnished</option>
              <option value="Semi-furnished">Semi-furnished</option>
              
            </select>
          </div>
          <div class="bathrooms_number_seat_parent_div">
            <div class="bathroom_number_child_div">
              <p>Bathrooms</p>
              <select name="pbath" id="pbath" class="bedroom_number_selection">
                <option value="">select bedroom</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
            </div>
            <div class="number_of_seat_Child_div">
              <p>Number of Seat</p>
              <input type="text" placeholder="Enter Number" name="pseat" id="pseat"/>
            </div>
          </div>

          <div class="cabinet_meeting_room_open_hours_parent_div">
            <div class="cabinet_meeting_child_div">
              <p>Cabin/meeting Rooms</p>
              <select
                name="pcab"
                id="pcab"
                class="cabin_meeting_room_selection"
              >
                <option value="">Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
            </div>
           
          </div>
        </div>
        <!-- property feature code Ends  -->
       
        <div class="pst_login_btndiv">
          <button type="submit" class="btn" >Post Property</button>
        <div class="paragraph_parentdiv">
       
				<div class="paragraph_parentdiv">
					<div class="headtext">
						<p>Looking to Sell or Rent your Flat?</p>
					</div>
					<div class="paradiv">Do you want to Sell your flat or put your house on rent? BPGroup has the right solution for you.Your advertisement will be viewed by millions of buyers and tenants in India.Magicbricks provides you the best classified for your requirement. Our website offers one free property ad that you can use for selling or renting . You will be able to sell or rent every real estate property from flat or house to land , even commercial property fast and immediately.
 					</div>
				</div>
			</div>
		</div>

		</div>

	</div>
</form>

	<div class="pstproperty_right_content_div"></div>

</div>

	<!-- mobile view code starts -->
	<div class="imge_div">
		<img src="images/house.png" alt="housepic">
	</div>
	<div class="mobile_view_sellor_rentdiv">
		<div class="sellor_rent_contentdiv">
			<div class="div_texthead">
				<p class="heading1text">Sell or Rent your property</p>
				<p class="subheading">We have 15lac tenants and buyers for you</p>
			</div>

			<div class="postingfree_div">
				<p class="postfreetext">You are posting this property for <del>₹5000</del> <span>FREE</span></p>
				<div class="featuresdiv">
					<p class="text1">Free Professional Photoshoot</p>
					<p class="text2">Get Contact Details Upto 5 Responses</p>
					<p class="text3">Access to 15 lac buyers and tenants</p>
				</div>
			</div>

			<div class="continue_btn_div">
				<a href="#">continue</a>
			</div>

		</div>
	</div>
	<!-- mobile view code ends -->


</div>
@endsection