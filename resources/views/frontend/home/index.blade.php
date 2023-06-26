@extends('frontend.master')
@section('body')
    <div class="banner_area">
        <div class="container">
            <div class="row">
                <h2>Powering The <span></span> Retail Industry <br />With Innovative<span></span>  Retail-Tech Solutions.</h2>
            </div>
        </div>
    </div>
    <div class="banner_details">
        <div class="container">
            <div class="row">
                <h5>Introducing Savoir Technologies: Revolutionizing Retail with Dynamic Pricing.</h5>
                <p>Welcome to Savoir Technologies, a leading provider of innovative retail-tech solutions. Built on our proprietary dynamic pricing technology, our solutions empowers retail merchants worldwide to revolutionize their promotional campaigns, protect margins, and achieve impressive bulk-sale results. With our comprehensive suite of integrated solutions, we enhance market competitiveness and drive business growth. <br />
                    <br />
                    Our proprietary RXD dynamic pricing technology lies at the heart of our retail solutions. The solutions we offer with dynamic pricing include CrowdLuxe and CrowdMall, both online-to-offline digital voucher marketplaces for retailers to drive more footfall traffic to their physical stores and create more sales opportunities. CrowdLive is our in-house social commerce platform for micropreneurs, key online influencers, and drop shippers to engage with their audience and drive sales. Additionally, we have our CrowdPOS system, which facilitates in-event sales and integrates with our Electronic Shelf Labeling solution. For data-led decision makers, CrowdTech provides analytical insights into consumer behavior and purchasing patterns, enabling effective marketing campaigns.<br />
                    <br />
                    Discover how our customizable solutions can transform your retail business. Join us in revolutionizing retail with the use of dynamic pricing and unlock the true potential of your business in today's competitive market. Contact Savoir Technologies today and let us drive your business to greater heights of success.</p>
            </div>
        </div>
    </div>
    <div class="coming_area">
        <div class="container">
            <div class="row">
                <img src="{{ asset('/') }}frontend/img/Layer_2.png" alt="image not found" />

                <h5>AN EXCLUSIVE PLATFORM FOR PREMIUM BRANDS ON CROWDLUXE.</h5>
                <p>Elevate your brand by showcasing your products alongside other high-standing brands. CrowdLuxe  offers a premium marketplace where only invited retailers, and members of The Private Room, can view and shop for your products or services. <br /> <br />
                    Listing on CrowdLuxe and membership to The Private Room is by invitation only.</p>
                <button>COMING SOON</button>
            </div>
        </div>
    </div>
    <div class="signup_area">
        <div class="container">
            <div class="row">
                <img src="{{ asset('/') }}frontend/img/Group.png" alt="image not found" />
                <h5>MAXIMIZE PROFITS WITH DYNAMIC PRICING ON CROWDMALL. </h5>
                <p>Running a promotion to clear your inventory? With CrowdMall, you can now safeguard your margins while selling. As more shoppers buy, your price decreases to attract more shoppers. When the price changes, prior customers receive E-Cashbacks to encourage return purchases with you again. <br /><br /> Sign up now with a Standard or Advanced Plan that best suits your business needs.</p>
                <button><a href="{{ route('crowdmall') }}">SIGN UP NOW</a></button>
            </div>
        </div>
    </div>

    <div class="comingsecond_area">
        <div class="container">
            <div class="row">
                <img src="{{ asset('/') }}frontend/img/Layer_10.png" alt="image not found" />
                <h5>EMBRACE THE POWER OF SOCIAL COMMERCE WITH CROWDLIVE.</h5>
                <p>Calling all micropreneurs, online influencers, drop shippers! Connect directly with your online audiences in the room and leverage on their numbers to boost sales with dynamic pricing. Whether you're new or experienced in social commerce, authenticity is what audiences crave, not ads! <br /><br /> Sign up now and choose a session plan that matches your selling style.</p>
                <button>COMING SOON</button>
            </div>
        </div>
    </div>

    <div class="contact_area">
        <div class="container">
            <div class="row">
                <img src="{{ asset('/') }}frontend/img/Layer_17.png" alt="image not found" />
                <h5>MAXIMIZE YOUR SALES ON THE EVENT FLOOR WITH CROWDPOS.</h5>
                <p>Empower your sales staff with dynamic pricing technology enabled POS devices, allowing them to transact anywhere in the event hall. Keep your prices in sync between your POS and shelf with our Electronic Shelf Labeling (ESL) solution. <br /><br /> To explore how CrowdPOS can benefit your business, please contact us for more details.</p>
                <button><a href="#">CONTACT US</a></button>
            </div>
        </div>
    </div>
    <div class="contactsecond_area">
        <div class="container">
            <div class="row">
                <img src="{{ asset('/') }}frontend/img/Layer_19.png" alt="image not found" />
                <h5>MAKE DATA-LED DECISIONS WITH CROWTECH.</h5>
                <p>Harness the power of data to drive informed pricing and marketing strategies for your business. Our extensive database provides valuable insights into customer buying behaviors and patterns, empowering you to plan and execute effective sales and marketing campaigns.<br /> <br /> To discover how CrowdTech can help with your planning, please contact us for more details.</p>
                <button>CONTACT US</button>
            </div>
        </div>
    </div>
@endsection