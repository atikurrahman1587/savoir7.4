@extends('frontend.master')
@section('body')
    <div class="signup_area">
        <div class="container">
            <div class="row">
                <img src="{{ asset('/') }}frontend/img/Group.png" alt="image not found" />
                <h5>MAXIMIZE PROFITS WITH DYNAMIC PRICING ON CROWDMALL. </h5>
                <p>Running a promotion to clear your inventory? With CrowdMall, you can now safeguard your margins <span></span> while selling. As more shoppers buy, your price decreases to attract more shoppers. When the price<span></span> changes, prior customers receive E-Cashbacks to encourage return purchases with you again. <br /><br />  Sign up now with a Standard or Advanced Plan that best suits your business needs.</p>
                <button>SIGN UP NOW</button>
            </div>
        </div>
    </div>


    <div class="sell_crowdmall_area">
        <div class="container">
            <div class="row">
                <h5>Sell To Millions Of Shoppers On CrowdMall.</h5>
                <p>CrowdMall is an innovative digital voucher marketplace that empowers retailers to offer sustainable promotions using dynamic pricing technology. With dynamic pricing, retailers can protect their margins from unexpected drops in sales performance, while also rewarding loyal customers with unlimited E-Cashback incentives to encourage repeat visits and boost sales.</p>

                <div class="col-md-7">
                    <div class="col-md-2"><img src="{{ asset('/') }}frontend/img/calculate.svg" alt="image not found" /></div>
                    <div class="col-md-10"><p>Streamline your promotion management process and save time with our solution.  Simply provide us with three simple settings and let our algorithm take care of the  rest, delivering real-time optimization of your price discount-to-sales yield.</p></div>

                    <div class="col-md-2"><img src="{{ asset('/') }}frontend/img/cashback.svg" alt="image not found" /></div>
                    <div class="col-md-10"><p>Deliver sustainable and profitable price discount promotions with CrowdMall. Our proprietary technology allows you to offer discounts with confidence, knowing that they will always match with your sales. Guaranteed.</p></div>

                    <div class="col-md-2"><img src="{{ asset('/') }}frontend/img/reward.svg" alt="image not found" /></div>
                    <div class="col-md-10"><p>Reward your customers with unlimited cashback on their purchases and encourage them to come back and shop with you again. Allow them to maximize their savings with up to 4X E-Cashback in addition to their discounted price!</p></div>

                    <div class="col-md-2"><img src="{{ asset('/') }}frontend/img/spender.svg" alt="image not found" /></div>
                    <div class="col-md-10"><p>Identify your biggest spenders using customer data on purchasing habits. With this information, you can create relevant marketing messages for your targeted shopper audience at each stage of your discount promotion.</p></div>

                </div>
                <div class="col-md-5">
                    <img src="{{ asset('/') }}frontend/img/Rectangle 19.png" alt="image not found" />
                </div>
            </div>
        </div>
    </div>



    <div class="crowdmall_plan_area">
        <div class="container">
            <div class="row">
                <h5>Select A Plan With Us</h5>
                <p>Run your next promotion with a sales target in mind and sell strategically. Determine the desired number of units to sell and the discount you're willing to offer upon reaching that target. It's similar to group-buying, but with a twist. Instead of waiting for everyone to participate, you can now start selling from the first customer. Our dynamic pricing technology tracks sales and adjusts prices to attract more shoppers as you sell more.</p>
                <div class="standard">
                    <h3>STANDARD PLAN</h3>
                    <p>Everything that you need to get started for micro sized businesses.</p>
                    <b>What You Get:</b>
                    <ul>
                        <li>50 voucher listings</li>
                        <li>3 user accounts</li>
                        <li>3 outlet locations</li>
                        <li>2  flash deal listings per month</li>
                        <li style="opacity: 0;"></li>
                    </ul>
                    <b>Fees:</b>
                    <ul>
                        <li>US$25 Monthly</li>
                        <li>Per Transaction: 7%*</li>
                    </ul>
                    <button>SIGN UP NOW</button>
                    <i>*Includes payment gateway charges.</i>
                </div>
                <div class="advance">
                    <h3>ADVANCE PLAN</h3>
                    <p>For small and medium sized businesses with multiple outlet locations and staff.</p>
                    <b>What You Get:</b>
                    <ul>
                        <li>100 voucher listings</li>
                        <li>10 user accounts</li>
                        <li>10 outlet locations</li>
                        <li>4 flash deal listings per month</li>
                        <li>Dedicated brand page</li>
                    </ul>
                    <b>Fees:</b>
                    <ul>
                        <li>US$45 Monthly</li>
                        <li>Per Transaction: 6%*</li>
                    </ul>
                    <button>SIGN UP NOW</button>
                    <i>*Includes payment gateway charges.</i>
                </div>
            </div>
        </div>
    </div>


    <div class="standard_plan_area">
        <div class="container">
            <form action="{{ route('crowdmall.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <h3>You have selected - Standard Plan</h3>
                    <div class="col-md-6">
                        <b>Company Profile Details</b>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="company_name" id="inputEmail4" placeholder="Company Name">
                            </div>
                            <div class="col-md-12 addanotherinput">
                                <div class="form-row">
                                    <div class="form-group clickplus">
                                        <input type="text" class="form-control" name="brands[]" id="clickplus" placeholder="Brand Name (click ‘&plus;’ to add more brands) ">
                                    </div>
                                    <div class="form-group inputplus">
                                        <a href="javascript:void(0);" class="btn" id="inputplus"><img src="{{ asset('/') }}frontend/img/plus.png" alt="image not found" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="reg_com_address_link_one" id="inputPassword4" placeholder="Registered Company Address Line #1">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="reg_com_address_link_two" id="inputPassword4" placeholder="Registered Company Address Line #2">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="post_code" id="inputPassword4" placeholder="Postal Code">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="country" id="inputPassword4" placeholder="Country">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="contact_person_first_name" id="inputPassword4" placeholder="Contact Person - First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="contact_person_last_name" id="inputPassword4" placeholder="Contact Person - Last Name">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="contact_number" id="inputEmail4" placeholder="Contact Number (include country code ie. +60)">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Contact Email Address">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="business_reg_no" id="inputEmail4" placeholder="Business Registration Number">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="business_category" id="inputPassword4" placeholder="Select Business Category">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="market_place" id="inputPassword4" placeholder="Select Marketplace">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="tax_amount" id="inputEmail4" placeholder="Enter Tax (GST/SST/VAT/etc.) Amount : ie. 8%" >
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="voucher_code" id="inputEmail4" placeholder="Apply Voucher Code If Any">
                            </div>
                        </div>
                        <div class="file_up_pre">
                            <!-- Upload  -->
                            <div id="file-upload-form" class="uploader">
                                <input id="file-upload" type="file" name="file" accept="{{ asset('/') }}frontend/img/Group 135.png" />

                                <label for="file-upload" id="file-drag">
                                    <div id="start">
                                        <img src="{{ asset('/') }}frontend/img/Group 135.png" alt="image not found" />
                                    </div>
                                </label>
                            </div>
                            <!-- <div class="pre">
                                <img src="{{ asset('/') }}frontend/img/acra_example 1.png" alt="image not found" />
                            </div>-->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <b>Bank Account Details</b>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="bank_name" id="inputEmail4" placeholder="Bank Name">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="bank_account_name" id="inputEmail4" placeholder="Bank Account Name">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="bank_account_no" id="inputEmail4" placeholder="Bank Account Number">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="bank_branch_code" id="inputEmail4" placeholder="Bank Branch Code">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="bank_shift_code" id="inputEmail4" placeholder="Bank SWIFT Code">
                            </div>
                        </div>
                        <b>For EKYC purposes, please provide the details of one (1) company shareholder.</b>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="shareholder_first_name" id="inputPassword4" placeholder="Shareholder - First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="shareholder_last_name" id="inputPassword4" placeholder="Shareholder - Last Name">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="shareholder_identity_pass_no" id="inputEmail4" placeholder="Shareholder Identity/Passport Number">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="shareholder_contact_no" id="inputEmail4" placeholder="Shareholder Contact Number (include country code ie. +65)">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="shareholder_bank_account_no" id="inputEmail4" placeholder="Bank Account Number">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="shareholder_bank_branch_code" id="inputEmail4" placeholder="Bank Branch Code">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" name="shareholder_email" id="inputEmail4" placeholder="Shareholder Email Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" name="agree" type="checkbox" value="1" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    I have read and accept the <a href="#"> Merchant Services Agreement.</a>
                                </label>
                                <span class="text-danger">{{ $errors->has('agree') ? $errors->first('agree') : ' ' }}</span>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="button">Cancel</button>
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <p>*Note: Your application will take between 5-7 working days to approve. Status of your application will be sent to your email address.</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function (){
            let AddIndex = 500;
            $("#inputplus").click(function () {

                $.ajax({
                    type:"GET",
                    url:"{{route('add-input-in-crowdmall')}}",
                    data:{key:AddIndex},
                    success: function(res){
                        $(".addanotherinput").append(res);
                        AddIndex++
                    }
                });
            });
        });
    </script>
@endsection