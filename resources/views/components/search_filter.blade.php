<div id="search_filter_comp">
    <div class="search_filter_parent_div">
    <div class="search_filter_child_div">
<form action="search" method="GET">
        <!-- heading text coding starts -->
        <div class="heading_textdiv">
            <div class="head_text">
                <p>You're almost there!</p> 
            </div>
            <div class="subhead_text">
                <p>Set your property requirements for better results</p> 
            </div>
        </div>


        <!-- location div coding starts -->
        <div class="location_parent_div">
            <div class="textdiv">
                <p>Locality/Project</p>
            </div>
            <div class="locationdiv">
                <input type="text" name="location" id="location" placeholder="Enter location" required>
            </div>
        </div>



        <!-------- property type slider code starts -------->

        <div id="property_type_parent_div">

            <div class="head_textdiv">
                <p>property type</p>
            </div>


    <div class="owl-carousel owl-theme">

    <div class="item">
        <div class="item_div">
            <img src="{{ asset('front_assets/images/market.png') }}" alt="retail_pic">
            <p>Retail</p>
        </div>
    </div>
    <div class="item">
        <div class="item_div">
            <img src="{{ asset('front_assets/images/commercial.png') }}" alt="retail_pic">
            <p>Commercial</p>
        </div>
    </div>
    <div class="item">
        <div class="item_div">
            <img src="{{ asset('front_assets/images/warehouse.png') }}" alt="retail_pic">
            <p>Warehouse</p>
        </div>
    </div>
    <div class="item">
        <div class="item_div">
            <img src="{{ asset('front_assets/images/residential.png') }}" alt="retail_pic">
            <p>Residential</p>
        </div>
    </div>
    <div class="item">
        <div class="item_div">
            <img src="{{ asset('front_assets/images/market.png') }}" alt="retail_pic">
            <p>Plot</p>
        </div>
    </div>

   </div>
</div>
<!-------- property type slider code ends -------->
<div class="budget_div">
    <div class="textdiv">
<select name="property_type"  required>
    <option value="">Property Type</option>
    <option value="retail">Retail</option>
    <option value="officespace">Officespace</option>
    <option value="warehouse">Warehouse</option>
    <option value="residential">Residence</option>
    <option value="plot">plot</option>
  </select>
</div>
</div>

        


        <!-- budget select coding start -->
        <div class="budget_div">
            <div class="textdiv">
                <p>Budget</p>
                <select name="budget" required>
                    <option value="">select your budget</option>
                    <option value="">Budget</option>
                    <option value="10000">Rs 10,000</option>
                    <option value="20000">Rs 20,000</option>
                    <option value="50000">Rs 50,000</option>
                    <option value="more">more than 50 Thousand</option>
                </select>
            </div>
        </div>
        <!-- budget select coding ends -->


        <!-- button code starts -->
        <div class="btn_div">
            <button name="submit" type="submit">Search Properties</button>
        </div>
        <!-- button code ends -->
</form>
    </div>
</div>
</div>