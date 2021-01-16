@extends('layouts.app')
@section('title')
    privacy Policy
@endsection

@section('content')
    <!-- Inner Header -->
    <section class="section-padding bg-dark inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="mt-0 mb-3 text-white">{{ ucfirst(str_replace('_',' ',$title)) }}</h1>
{{--                    <div class="breadcrumbs">--}}
{{--                        <p class="mb-0 text-white"><a class="text-white" href="#">Home</a>  /  <span class="text-success">About Us</span></p>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container">
{{--            <div class="row">--}}
{{--                <div class="pl-4 col-lg-5 col-md-5 pr-4">--}}
{{--                    <img class="rounded img-fluid" src="img/about.jpg" alt="Card image cap">--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-6 pl-5 pr-5">--}}
                    <h5 class="mt-2">{{ ucfirst(str_replace('_',' ',$title)) }}</h5>
            <hr>
            {!! $content !!}
{{--                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,</p>--}}

{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>

    <section class="section-padding">
        <div class="section-title text-center mb-5">
            <h2 class="mt-5 mb-5 text-secondary">Save more with GO! </h2>

            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="mt-4 mb-4"><i class="text-success mdi mdi-shopping mdi-48px"></i></div>
                    <h5 class="mt-3 mb-3 text-secondary">Best Prices & Offers</h5>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mt-4 mb-4"><i class="text-success mdi mdi-earth mdi-48px"></i></div>
                    <h5 class="mb-3 text-secondary">Wide Assortment</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text eve.</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mt-4 mb-4"><i class="text-success mdi mdi-refresh mdi-48px"></i></div>
                    <h5 class="mt-3 mb-3 text-secondary">Easy Returns</h5>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="mt-4 mb-4"><i class="text-success mdi mdi-truck-fast mdi-48px"></i></div>
                    <h5 class="mb-3 text-secondary">Free & Next Day Delivery</h5>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mt-4 mb-4"><i class="text-success mdi mdi-basket mdi-48px"></i></div>
                    <h5 class="mt-3 mb-3 text-secondary">100% Satisfaction Guarantee</h5>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mt-4 mb-4"><i class="text-success mdi mdi mdi-tag-heart mdi-48px"></i></div>
                    <h5 class="mt-3 mb-3 text-secondary">Great Daily Deals Discount</h5>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.</p>
                </div>
            </div>
        </div>
    </section>
{{--    <section class="not-found-page section-padding">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}

{{--                <p>--}}
{{--                    Privacy Policy <br>--}}
{{--                    Sikarwar Softwares built the The Best One app as a Free app. This SERVICE is provided by Sikarwar Softwares at no cost and is intended for use as is.--}}

{{--                    This page is used to inform visitors regarding my policies with the collection, use, and disclosure of Personal Information if anyone decided to use my Service.--}}

{{--                    If you choose to use my Service, then you agree to the collection and use of information in relation to this policy. The Personal Information that I collect is used for providing and improving the Service. I will not use or share your information with anyone except as described in this Privacy Policy.--}}

{{--                    The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at The Best One unless otherwise defined in this Privacy Policy.--}}

{{--                    Information Collection and Use--}}

{{--                    For a better experience, while using our Service, I may require you to provide us with certain personally identifiable information, including but not limited to name , phone , address , location , record audio . The information that I request will be retained on your device and is not collected by me in any way.--}}

{{--                    The app does use third party services that may collect information used to identify you.--}}

{{--                    Link to privacy policy of third party service providers used by the app--}}

{{--                    Google Play Services--}}
{{--                    Log Data--}}

{{--                    I want to inform you that whenever you use my Service, in a case of an error in the app I collect data and information (through third party products) on your phone called Log Data. This Log Data may include information such as your device Internet Protocol (“IP”) address, device name, operating system version, the configuration of the app when utilizing my Service, the time and date of your use of the Service, and other statistics.--}}

{{--                    Cookies--}}

{{--                    Cookies are files with a small amount of data that are commonly used as anonymous unique identifiers. These are sent to your browser from the websites that you visit and are stored on your device's internal memory.--}}

{{--                    This Service does not use these “cookies” explicitly. However, the app may use third party code and libraries that use “cookies” to collect information and improve their services. You have the option to either accept or refuse these cookies and know when a cookie is being sent to your device. If you choose to refuse our cookies, you may not be able to use some portions of this Service.--}}

{{--                    Service Providers--}}

{{--                    I may employ third-party companies and individuals due to the following reasons:--}}

{{--                    To facilitate our Service;--}}
{{--                    To provide the Service on our behalf;--}}
{{--                    To perform Service-related services; or--}}
{{--                    To assist us in analyzing how our Service is used.--}}
{{--                    I want to inform users of this Service that these third parties have access to your Personal Information. The reason is to perform the tasks assigned to them on our behalf. However, they are obligated not to disclose or use the information for any other purpose.--}}

{{--                    Security--}}

{{--                    I value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it. But remember that no method of transmission over the internet, or method of electronic storage is 100% secure and reliable, and I cannot guarantee its absolute security.--}}

{{--                    Links to Other Sites--}}

{{--                    This Service may contain links to other sites. If you click on a third-party link, you will be directed to that site. Note that these external sites are not operated by me. Therefore, I strongly advise you to review the Privacy Policy of these websites. I have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.--}}

{{--                    Children’s Privacy--}}

{{--                    These Services do not address anyone under the age of 13. I do not knowingly collect personally identifiable information from children under 13. In the case I discover that a child under 13 has provided me with personal information, I immediately delete this from our servers. If you are a parent or guardian and you are aware that your child has provided us with personal information, please contact me so that I will be able to do necessary actions.--}}

{{--                    Changes to This Privacy Policy--}}

{{--                    I may update our Privacy Policy from time to time. Thus, you are advised to review this page periodically for any changes. I will notify you of any changes by posting the new Privacy Policy on this page.--}}

{{--                    This policy is effective as of 2020-12-21--}}

{{--                    Contact Us--}}

{{--                    If you have any questions or suggestions about my Privacy Policy, do not hesitate to contact me at info@ssoftwares.in.                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
@endsection
