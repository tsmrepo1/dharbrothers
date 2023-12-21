@extends('layouts.web')

@section('content')
<div class="main__body__wrapp">
    <div class="main__banner header__inner__banner">
        <div class="image__box__banner">
            <img src="images/innerbanner.jpg" alt="" />
        </div>
        <div class="banner__content">
            <div class="container">
                <div class="banner__content__inner text-center">
                    <h1>Hard Binding</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb d-lg-inline-flex align-items-center">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item">What We Do</li>
                            <li class="breadcrumb-item active" aria-current="page"> Hard Binding </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="inner__about">
        <div class="container">
            <div class="row">
                <div class="multisteps-form">
                    <!--progress bar-->
                    <div class="row">
                        <div class="col-12 col-lg-12 ml-auto mr-auto mb-4">
                            <div class="multisteps-form__progress">
                                <a href="#step1" id="step-1-link" class="multisteps-form__progress-btn js-active" type="button" title="User Info">Upload File</a>

                                <a href="#step2" id="step-2-link" class="multisteps-form__progress-btn" type="button" title="Address">Document Details</a>

                                <a href="#step3" id="step-3-link" class="multisteps-form__progress-btn d-none" type="button" title="Address">Hard Binding</a>

                                <a href="#step4" id="step-4-link" class="multisteps-form__progress-btn d-none" type="button" title="Address">Soft Binding</a>

                                <a href="#step5" id="step-5-link" class="multisteps-form__progress-btn d-none" type="button" title="Address">Synopsis</a>

                                <a href="#step6" id="step-6-link" class="multisteps-form__progress-btn d-none" type="button" title="Address">Order Summery</a>
                            </div>
                        </div>
                    </div>
                    <!--form panels-->
                    <div class="row">
                        <div class="col-12">
                            <form class="multisteps-form__form">
                                <!--single form panel 1-->
                                <div class="col-12 col-lg-8 m-auto">
                                    <div id="step-1" class="multisteps-form__panel padd__holder bg-white js-active" data-animation="scaleIn">
                                        <div class="multisteps-form__content">
                                            <div class="row">
                                                <div class="col-md-5 m-auto">
                                                    <div class="btn-container">
                                                        <!--the three icons: default, ok file (img), error file (not an img)-->
                                                        <div class="all__holder">
                                                            <h1 class="imgupload">
                                                                <img src="./images/icon _File Upload_.png" alt="" class="m-auto d-block" />
                                                            </h1>
                                                            <h1 class="imgupload ok">
                                                                <i class="fa fa-check"></i>
                                                            </h1>
                                                            <h1 class="imgupload stop">
                                                                <i class="fa fa-times"></i>
                                                            </h1>
                                                            <!--this field changes dinamically displaying the filename we are trying to upload-->
                                                            <h6>Upload Design</h6>
                                                        </div>
                                                        <p id="namefile"> (Support document Word or Pdf) <span>
                                                                <i class="fa-solid fa-circle-info"></i>
                                                            </span>
                                                        </p>
                                                        <!--our custom btn which which stays under the actual one-->
                                                        <button type="button" id="btnup" class="btn btn-lg"> Browse for your file! </button>
                                                        <!--this is the actual file input, is set with opacity=0 beacause we wanna see our custom one-->
                                                        <input type="file" value="" name="file" id="file" class="fileup" />
                                                        <p class="conv"> Convert Word to Pdf click on this Link </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-5">
                                                <button class="btn ml-auto js-btn-next next__button" type="button" title="Next" id="next_step_2"> Next </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--single form panel 2-->
                                <div id="step-2" class="multisteps-form__panel bg-white" data-animation="scaleIn">
                                    <div class="multisteps-form__content">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="document__details mb-4">
                                                    <h3>File Name : <span id="file_name"></span>
                                                    </h3>
                                                    <table class="table table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <td class="pl-4">Total page</td>
                                                                <td class="pr-4 text-right">0</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pl-4">Color page</td>
                                                                <td class="pr-4 text-right">0</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pl-4">BW page</td>
                                                                <td class="pr-4 text-right">0</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="document__detailsone mb-4">
                                                    <h3>Select type of Binding</h3>
                                                    <div class="Select_type">
                                                        <div class="check__holder">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" id="customCheckbox" name="hard_binding" class="custom-control-input" />
                                                                <label class="custom-control-label" for="customCheckbox">Hard Binding</label>
                                                            </div>
                                                        </div>
                                                        <div class="check__holder">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" id="customCheckbox1" name="soft_binding" class="custom-control-input" />
                                                                <label class="custom-control-label" for="customCheckbox1">Soft Binding</label>
                                                            </div>
                                                        </div>
                                                        <div class="check__holder">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" id="customCheckbox2" name="synopsis_binding" class="custom-control-input" />
                                                                <label class="custom-control-label" for="customCheckbox2">Synopsis</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="ordersummary__wrapp">
                                                    <h3>Order Summary</h3>
                                                    <table class="table border-solid mt-4">
                                                        <tbody>
                                                            <tr class="hard_binding_price_detail">
                                                                <th>Hard Binding</th>
                                                                <td class="text-right hard_binding_price">₹ 000</td>
                                                            </tr>
                                                            <tr class="soft_binding_price_detail">
                                                                <th>Soft Binding</th>
                                                                <td class="text-right soft_binding_price">₹ 000</td>
                                                            </tr>
                                                            <tr class="synopsis_binding_price_detail">
                                                                <th>Synopsis</th>
                                                                <td class="text-right synopsis_binding_price">₹ 000</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="total__holder">
                                                        <h3>Total</h3>
                                                        <h3 class="ml-auto total_price">₹ 0000</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4 col-12">
                                            <button class="btn next__button js-btn-prev" type="button" title="Prev"> Prev </button>
                                            <button class="btn next__button ml-auto js-btn-next" type="button" title="Next" id="next_step_3"> Next </button>
                                        </div>
                                    </div>
                                </div>

                                <!--single form panel 3-->
                                <div id="step-3" class="multisteps-form__panel bg-white" data-animation="scaleIn">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="document__detailsone mb-4">
                                                <h3>Print Details</h3>
                                                <div class="my-holder">
                                                    <div id="dynamic-field-1" class="form-group dynamic-field">
                                                        <div class="accordion mt-5" id="hard_binding_accordion">
                                                            <div class="card hard_binding_card">
                                                                <div class="card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
                                                                    <span class="title w-50">Papers Size :</span>
                                                                    <span class="title w-50">No Of Copies :</span>
                                                                    <span class="accicon">
                                                                        <i class="fas fa-angle-down rotate-icon"></i>
                                                                    </span>
                                                                </div>
                                                                <div id="collapseOne" class="collapse show" data-parent="#hard_binding_accordion">
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Papers Size</p>
                                                                                    <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown" data-profile="minimal" name="hard_binding_paper_size[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option value="A0"> A0 </option>
                                                                                        <option value="A1"> A1 </option>
                                                                                        <option value="A2"> A2 </option>
                                                                                        <option value="A3"> A3 </option>
                                                                                        <option value="A4"> A4 </option>
                                                                                        <option value="A5"> A5 </option>
                                                                                        <option value="A6"> A6 </option>
                                                                                        <option value="A7"> A7 </option>
                                                                                        <option value="A8"> A8 </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>No Of Copies</p>
                                                                                    <div class="qty-container">
                                                                                        <button class="qty-btn-minus btn-light" type="button">
                                                                                            <i class="fa fa-minus"></i>
                                                                                        </button>
                                                                                        <input type="text" value="0" class="input-qty" name="hard_binding_qty[]" />
                                                                                        <button class="qty-btn-plus btn-light" type="button">
                                                                                            <i class="fa fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Papers</p>
                                                                                    <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown" data-profile="minimal" name="hard_binding_paper_type[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option value="Paper One 100 GSM or Equivalent"> Paper One 100 GSM or
                                                                                            Equivalent</option>
                                                                                        <option value="Bond Paper 85 GSM or Equivalent"> Bond Paper 85 GSM or
                                                                                            Equivalent </option>
                                                                                        <option value="JK Easy 70 GSM or equivalent"> JK Easy 70 GSM or equivalent
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Color</p>
                                                                                    <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown" data-profile="minimal" name="hard_binding_paper_color[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option value="Black & White"> Black & White </option>
                                                                                        <option value="Color"> Color </option>
                                                                                        <option value="Royal Print"> Royal Print </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Printing Type</p>
                                                                                    <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown" data-profile="minimal" name="hard_binding_printing_type[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option value="Single Side"> Single Side</option>
                                                                                        <option value="Both Sidet"> Both Side </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix mt-4">
                                                        <button type="button" id="add-button" class="btn float-left add_btn_hard_binding">
                                                            <i class="fas fa-plus fa-fw"></i> Create New </button>
                                                    </div>
                                                </div>
                                                <h3>Binding Details</h3>
                                                <div>
                                                    <div class="binding__details">
                                                        <p>Colour of Covering Materials (Hard)</p>
                                                        <div class="bin__holder">
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/1.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="hard_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 1</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/2.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="hard_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 2</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/3.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="hard_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 3</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/4.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="hard_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 4</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/5.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="hard_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 5</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/6.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="hard_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 6</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/7.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="hard_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 7</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/8.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="hard_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 8</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/9.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="hard_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 9</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/10.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="hard_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 10</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 p-0 mt-5">
                                                            <div class="btn-container">
                                                                <p>Colour of Covering Materials (Hard)</p>
                                                                <!--the three icons: default, ok file (img), error file (not an img)-->
                                                                <div class="all__holder">
                                                                    <h1 class="imgupload">
                                                                        <img src="./images/icon _File Upload_.png" alt="" class="m-auto d-block" />
                                                                    </h1>
                                                                    <h1 class="imgupload ok">
                                                                        <i class="fa fa-check"></i>
                                                                    </h1>
                                                                    <h1 class="imgupload stop">
                                                                        <i class="fa fa-times"></i>
                                                                    </h1>
                                                                    <!--this field changes dinamically displaying the filename we are trying to upload-->
                                                                    <h6>Upload Design</h6>
                                                                </div>
                                                                <p id="namefile"> (Support document Word or Pdf) <span>
                                                                        <i class="fa-solid fa-circle-info"></i>
                                                                    </span>
                                                                </p>
                                                                <!--our custom btn which which stays under the actual one-->
                                                                <button type="button" id="btnup" class="btn btn-lg"> Browse for your file! </button>
                                                                <!--this is the actual file input, is set with opacity=0 beacause we wanna see our custom one-->
                                                                <input type="file" value="" name="fileup" id="fileup" name="hard_binding_cover_design" />
                                                                <div class="form-group form-check mt-3 d-none">
                                                                    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1" /> -->
                                                                    <label class="form-check-label" for="exampleCheck1">Same as thesis cover</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>Spine Printing Details</p>
                                                        <div class="spine__holder">
                                                            <div class="form-group form-check mr-3">
                                                                <input type="radio" class="form-check-input" id="exampleCheck1" name="hard_binding_spine" value="Print Required" />
                                                                <label class="form-check-label" for="exampleCheck1">Print Required</label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="radio" class="form-check-input" id="exampleCheck1" name="hard_binding_spine" value="Print Not Required" />
                                                                <label class="form-check-label" for="exampleCheck1">Print Not Required</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="searche__wrapp">
                                                                    <p>Top content area</p>
                                                                    <input type="text" name="" id="" name="hard_binding_spine_top_content" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="searche__wrapp">
                                                                    <p>Middle content area</p>
                                                                    <input type="text" name="" id="" name="hard_binding_spine_middle_content" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="searche__wrapp">
                                                                    <p>Bottom content area</p>
                                                                    <input type="text" name="" id="" name="hard_binding_spine_bottom_content" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="ordersummary__wrapp">
                                                <h3>Order Summary</h3>
                                                <table class="table border-solid mt-4">
                                                    <tbody>
                                                        <tr class="hard_binding_price_detail">
                                                            <th>Hard Binding</th>
                                                            <td class="text-right hard_binding_price">₹ 000</td>
                                                        </tr>
                                                        <tr class="soft_binding_price_detail">
                                                            <th>Soft Binding</th>
                                                            <td class="text-right soft_binding_price">₹ 000</td>
                                                        </tr>
                                                        <tr class="synopsis_binding_price_detail">
                                                            <th>Synopsis</th>
                                                            <td class="text-right synopsis_binding_price">₹ 000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="total__holder">
                                                    <h3>Total</h3>
                                                    <h3 class="ml-auto total_price">₹ 0000</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">
                                            <button class="btn next__button js-btn-prev" type="button" title="Prev"> Prev </button>
                                            <button class="btn next__button ml-auto js-btn-next" type="button" title="Next" id="next_step_4"> Next </button>
                                        </div>
                                    </div>
                                </div>

                                <!--single form panel 4-->
                                <div id="step-4" class="multisteps-form__panel bg-white" data-animation="scaleIn">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="document__detailsone mb-4">
                                                <h3>Print Details</h3>
                                                <div class="my-holder">
                                                    <div id="dynamic-field-1" class="form-group dynamic-field">
                                                        <div class="accordion mt-5" id="soft_binding_accordion">
                                                            <div class="card soft_binding_card">
                                                                <div class="card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
                                                                    <span class="title w-50">Papers Size :</span>
                                                                    <span class="title w-50">No Of Copies :</span>
                                                                    <span class="accicon">
                                                                        <i class="fas fa-angle-down rotate-icon"></i>
                                                                    </span>
                                                                </div>
                                                                <div id="collapseOne" class="collapse show" data-parent="#soft_binding_accordion">
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Papers Size</p>
                                                                                    <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown" data-profile="minimal" name="soft_binding_paper_size[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option value="A0"> A0 </option>
                                                                                        <option value="A1"> A1 </option>
                                                                                        <option value="A2"> A2 </option>
                                                                                        <option value="A3"> A3 </option>
                                                                                        <option value="A4"> A4 </option>
                                                                                        <option value="A5"> A5 </option>
                                                                                        <option value="A6"> A6 </option>
                                                                                        <option value="A7"> A7 </option>
                                                                                        <option value="A8"> A8 </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>No Of Copies</p>
                                                                                    <div class="qty-container">
                                                                                        <button class="qty-btn-minus btn-light" type="button">
                                                                                            <i class="fa fa-minus"></i>
                                                                                        </button>
                                                                                        <input type="text" value="0" class="input-qty" name="soft_binding_qty[]" />
                                                                                        <button class="qty-btn-plus btn-light" type="button">
                                                                                            <i class="fa fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Papers</p>
                                                                                    <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown" data-profile="minimal" name="soft_binding_paper_type[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option value="Paper One 100 GSM or Equivalent"> Paper One 100 GSM or
                                                                                            Equivalent</option>
                                                                                        <option value="Bond Paper 85 GSM or Equivalent"> Bond Paper 85 GSM or
                                                                                            Equivalent </option>
                                                                                        <option value="JK Easy 70 GSM or equivalent"> JK Easy 70 GSM or equivalent
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Color</p>
                                                                                    <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown" data-profile="minimal" name="soft_binding_paper_color[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option value="Black & White"> Black & White </option>
                                                                                        <option value="Color"> Color </option>
                                                                                        <option value="Royal Print"> Royal Print </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Printing Type</p>
                                                                                    <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown" data-profile="minimal" name="soft_binding_printing_type[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option value="Single Side"> Single Side</option>
                                                                                        <option value="Both Sidet"> Both Side </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix mt-4">
                                                        <button type="button" id="add-button" class="btn float-left add_btn_soft_binding">
                                                            <i class="fas fa-plus fa-fw"></i> Create New </button>
                                                    </div>
                                                </div>
                                                <h3>Binding Details</h3>
                                                <div>
                                                    <div class="binding__details">
                                                        <p>Colour of Covering Materials (Hard)</p>
                                                        <div class="bin__holder">
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/1.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="soft_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 1</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/2.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="soft_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 2</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/3.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="soft_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 3</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/4.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="soft_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 4</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/5.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="soft_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 5</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/6.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="soft_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 6</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/7.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="soft_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 7</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/8.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="soft_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 8</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/9.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="soft_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 9</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/10.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="soft_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 10</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 p-0 mt-5">
                                                            <div class="btn-container">
                                                                <p>Colour of Covering Materials (Hard)</p>
                                                                <!--the three icons: default, ok file (img), error file (not an img)-->
                                                                <div class="all__holder">
                                                                    <h1 class="imgupload">
                                                                        <img src="./images/icon _File Upload_.png" alt="" class="m-auto d-block" />
                                                                    </h1>
                                                                    <h1 class="imgupload ok">
                                                                        <i class="fa fa-check"></i>
                                                                    </h1>
                                                                    <h1 class="imgupload stop">
                                                                        <i class="fa fa-times"></i>
                                                                    </h1>
                                                                    <!--this field changes dinamically displaying the filename we are trying to upload-->
                                                                    <h6>Upload Design</h6>
                                                                </div>
                                                                <p id="namefile"> (Support document Word or Pdf) <span>
                                                                        <i class="fa-solid fa-circle-info"></i>
                                                                    </span>
                                                                </p>
                                                                <!--our custom btn which which stays under the actual one-->
                                                                <button type="button" id="btnup" class="btn btn-lg"> Browse for your file! </button>
                                                                <!--this is the actual file input, is set with opacity=0 beacause we wanna see our custom one-->
                                                                <input type="file" value="" name="fileup" id="fileup" name="soft_binding_cover_design" />
                                                                <div class="form-group form-check mt-3 d-none">
                                                                    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1" /> -->
                                                                    <label class="form-check-label" for="exampleCheck1">Same as thesis cover</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>Spine Printing Details</p>
                                                        <div class="spine__holder">
                                                            <div class="form-group form-check mr-3">
                                                                <input type="radio" class="form-check-input" id="exampleCheck1" name="soft_binding_spine" value="Print Required" />
                                                                <label class="form-check-label" for="exampleCheck1">Print Required</label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="radio" class="form-check-input" id="exampleCheck1" name="soft_binding_spine" value="Print Not Required" />
                                                                <label class="form-check-label" for="exampleCheck1">Print Not Required</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="searche__wrapp">
                                                                    <p>Top content area</p>
                                                                    <input type="text" name="" id="" name="soft_binding_spine_top_content" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="searche__wrapp">
                                                                    <p>Middle content area</p>
                                                                    <input type="text" name="" id="" name="soft_binding_spine_middle_content" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="searche__wrapp">
                                                                    <p>Bottom content area</p>
                                                                    <input type="text" name="" id="" name="soft_binding_spine_bottom_content" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="ordersummary__wrapp">
                                                <h3>Order Summary</h3>
                                                <table class="table border-solid mt-4">
                                                    <tbody>
                                                        <tr class="hard_binding_price_detail">
                                                            <th>Hard Binding</th>
                                                            <td class="text-right hard_binding_price">₹ 000</td>
                                                        </tr>
                                                        <tr class="soft_binding_price_detail">
                                                            <th>Soft Binding</th>
                                                            <td class="text-right soft_binding_price">₹ 000</td>
                                                        </tr>
                                                        <tr class="synopsis_binding_price_detail">
                                                            <th>Synopsis</th>
                                                            <td class="text-right synopsis_binding_price">₹ 000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="total__holder">
                                                    <h3>Total</h3>
                                                    <h3 class="ml-auto total_price">₹ 0000</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">
                                            <button class="btn next__button js-btn-prev" type="button" title="Prev"> Prev </button>
                                            <button class="btn next__button ml-auto js-btn-next" type="button" title="Next" id="next_step_5"> Next </button>
                                        </div>
                                    </div>
                                </div>

                                <!--single form panel 5-->
                                <div id="step-5" class="multisteps-form__panel bg-white" data-animation="scaleIn">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="document__detailsone mb-4">
                                                <h3>Print Details</h3>
                                                <div class="my-holder">
                                                    <div id="dynamic-field-1" class="form-group dynamic-field">
                                                        <div class="accordion mt-5" id="synopsis_binding_accordion">
                                                            <div class="card synopsis_binding_card">
                                                                <div class="card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
                                                                    <span class="title w-50">Papers Size :</span>
                                                                    <span class="title w-50">No Of Copies :</span>
                                                                    <span class="accicon">
                                                                        <i class="fas fa-angle-down rotate-icon"></i>
                                                                    </span>
                                                                </div>
                                                                <div id="collapseOne" class="collapse show" data-parent="#synopsis_binding_accordion">
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Papers Size</p>
                                                                                    <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown" data-profile="minimal" name="synopsis_binding_paper_size[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option value="A0"> A0 </option>
                                                                                        <option value="A1"> A1 </option>
                                                                                        <option value="A2"> A2 </option>
                                                                                        <option value="A3"> A3 </option>
                                                                                        <option value="A4"> A4 </option>
                                                                                        <option value="A5"> A5 </option>
                                                                                        <option value="A6"> A6 </option>
                                                                                        <option value="A7"> A7 </option>
                                                                                        <option value="A8"> A8 </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>No Of Copies</p>
                                                                                    <div class="qty-container">
                                                                                        <button class="qty-btn-minus btn-light" type="button">
                                                                                            <i class="fa fa-minus"></i>
                                                                                        </button>
                                                                                        <input type="text" value="0" class="input-qty" name="synopsis_binding_qty[]" />
                                                                                        <button class="qty-btn-plus btn-light" type="button">
                                                                                            <i class="fa fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Papers</p>
                                                                                    <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown" data-profile="minimal" name="synopsis_binding_paper_type[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option value="Paper One 100 GSM or Equivalent"> Paper One 100 GSM or
                                                                                            Equivalent</option>
                                                                                        <option value="Bond Paper 85 GSM or Equivalent"> Bond Paper 85 GSM or
                                                                                            Equivalent </option>
                                                                                        <option value="JK Easy 70 GSM or equivalent"> JK Easy 70 GSM or equivalent
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Color</p>
                                                                                    <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown" data-profile="minimal" name="synopsis_binding_paper_color[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option value="Black & White"> Black & White </option>
                                                                                        <option value="Color"> Color </option>
                                                                                        <option value="Royal Print"> Royal Print </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Printing Type</p>
                                                                                    <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown" data-profile="minimal" name="synopsis_binding_printing_type[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option value="Single Side"> Single Side</option>
                                                                                        <option value="Both Sidet"> Both Side </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix mt-4">
                                                        <button type="button" id="add-button" class="btn float-left add_btn_synopsis_binding">
                                                            <i class="fas fa-plus fa-fw"></i> Create New </button>
                                                    </div>
                                                </div>
                                                <h3>Binding Details</h3>
                                                <div>
                                                    <div class="binding__details">
                                                        <p>Colour of Covering Materials (Hard)</p>
                                                        <div class="bin__holder">
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/1.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="synopsis_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 1</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/2.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="synopsis_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 2</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/3.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="synopsis_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 3</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/4.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="synopsis_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 4</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/5.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="synopsis_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 5</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/6.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="synopsis_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 6</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/7.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="synopsis_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 7</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/8.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="synopsis_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 8</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/9.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="synopsis_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 9</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ddone">
                                                                <img src="./images/bindingcolor/10.jpg" alt="" />
                                                                <div class="form-check">
                                                                    <label class="form-check-label w-100">
                                                                        <input type="radio" class="form-check-input" name="synopsis_binding_cover_color_db" value="" />
                                                                        <span class="text-right d-block">DB 10</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 p-0 mt-5">
                                                            <div class="btn-container">
                                                                <p>Colour of Covering Materials (Hard)</p>
                                                                <!--the three icons: default, ok file (img), error file (not an img)-->
                                                                <div class="all__holder">
                                                                    <h1 class="imgupload">
                                                                        <img src="./images/icon _File Upload_.png" alt="" class="m-auto d-block" />
                                                                    </h1>
                                                                    <h1 class="imgupload ok">
                                                                        <i class="fa fa-check"></i>
                                                                    </h1>
                                                                    <h1 class="imgupload stop">
                                                                        <i class="fa fa-times"></i>
                                                                    </h1>
                                                                    <!--this field changes dinamically displaying the filename we are trying to upload-->
                                                                    <h6>Upload Design</h6>
                                                                </div>
                                                                <p id="namefile"> (Support document Word or Pdf) <span>
                                                                        <i class="fa-solid fa-circle-info"></i>
                                                                    </span>
                                                                </p>
                                                                <!--our custom btn which which stays under the actual one-->
                                                                <button type="button" id="btnup" class="btn btn-lg"> Browse for your file! </button>
                                                                <!--this is the actual file input, is set with opacity=0 beacause we wanna see our custom one-->
                                                                <input type="file" value="" name="fileup" id="fileup" name="synopsis_binding_cover_design" />
                                                                <div class="form-group form-check mt-3 d-none">
                                                                    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1" /> -->
                                                                    <label class="form-check-label" for="exampleCheck1">Same as thesis cover</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>Spine Printing Details</p>
                                                        <div class="spine__holder">
                                                            <div class="form-group form-check mr-3">
                                                                <input type="radio" class="form-check-input" id="exampleCheck1" name="synopsis_binding_spine" value="Print Required" />
                                                                <label class="form-check-label" for="exampleCheck1">Print Required</label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="radio" class="form-check-input" id="exampleCheck1" name="synopsis_binding_spine" value="Print Not Required" />
                                                                <label class="form-check-label" for="exampleCheck1">Print Not Required</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="searche__wrapp">
                                                                    <p>Top content area</p>
                                                                    <input type="text" name="" id="" name="synopsis_binding_spine_top_content" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="searche__wrapp">
                                                                    <p>Middle content area</p>
                                                                    <input type="text" name="" id="" name="synopsis_binding_spine_middle_content" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="searche__wrapp">
                                                                    <p>Bottom content area</p>
                                                                    <input type="text" name="" id="" name="synopsis_binding_spine_bottom_content" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="ordersummary__wrapp">
                                                <h3>Order Summary</h3>
                                                <table class="table border-solid mt-4">
                                                    <tbody>
                                                        <tr class="hard_binding_price_detail">
                                                            <th>Hard Binding</th>
                                                            <td class="text-right hard_binding_price">₹ 000</td>
                                                        </tr>
                                                        <tr class="soft_binding_price_detail">
                                                            <th>Soft Binding</th>
                                                            <td class="text-right soft_binding_price">₹ 000</td>
                                                        </tr>
                                                        <tr class="synopsis_binding_price_detail">
                                                            <th>Synopsis</th>
                                                            <td class="text-right synopsis_binding_price">₹ 000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="total__holder">
                                                    <h3>Total</h3>
                                                    <h3 class="ml-auto total_price">₹ 0000</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">
                                            <button class="btn next__button js-btn-prev" type="button" title="Prev"> Prev </button>
                                            <button class="btn next__button ml-auto js-btn-next" type="button" title="Next" id="next_step_6"> Next </button>
                                        </div>
                                    </div>
                                </div>

                                <!--single form panel 6-->
                                <div id="step-6" class="multisteps-form__panel p-4 bg-white" data-animation="scaleIn">
                                    <h2 class="text-center">Order Summary</h2>
                                    <div id="order_summery">

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    (function() {
        $(".hamburger-menu").on("click", function() {
            $(".bar").toggleClass("animate");
        });
    })();
</script>
<!-- upload file -->
<script>
    $(".fileup").change(function() {
        //here we take the file extension and set an array of valid extensions
        var res = $(".fileup").val();
        var arr = res.split("\\");
        var filename = arr.slice(-1)[0];
        filextension = filename.split(".");
        filext = "." + filextension.slice(-1)[0];
        valid = [".pdf", ".txt", ".doc", ".docx"];
        //if file is not valid we show the error icon, the red alert, and hide the submit button
        if (valid.indexOf(filext.toLowerCase()) == -1) {
            $(".imgupload").hide("slow");
            $(".imgupload.ok").hide("slow");
            $(".imgupload.stop").show("slow");
            $("#namefile").css({
                color: "red",
                "font-weight": 700
            });
            $("#namefile").html("File " + filename + " is not  pic!");
            $("#submitbtn").hide();
            $("#fakebtn").show();
        } else {
            //if file is valid we show the green alert and show the valid submit
            $(".imgupload").hide("slow");
            $(".imgupload.stop").hide("slow");
            $(".imgupload.ok").show("slow");
            $("#namefile").css({
                color: "green",
                "font-weight": 700
            });
            $("#namefile").html(filename);
            $("#submitbtn").show();
            $("#fakebtn").hide();
        }
    });
</script>
<!-- plus minus -->
<script>
    $(document).on("click", ".qty-btn-plus", function() {
        var $n = $(this).parent(".qty-container").find(".input-qty");
        $n.val(Number($n.val()) + 1);
    });

    $(document).on("click", ".qty-btn-minus", function() {
        var $n = $(this).parent(".qty-container").find(".input-qty");
        var amount = Number($n.val());
        if (amount > 0) {
            $n.val(amount - 1);
        }
    });
</script>

<script>
    const color_page = 200
    const bw_page = 200

    const HARD_BINDING_COVER_BELOW_3_PRICE = 300
    const HARD_BINDING_COVER_PRICE = 270
    const SOFT_BINDING_COVER_PRICE = 270
    const SYNOPSIS_BINDING_COVER_PRICE = 30


    const GSM_100 = {
        normal: {
            bw: {
                first_page: 6,
                other_page: 2
            },
            color: {
                first_page: 10,
                other_page: 8
            }
        },

        royal: {
            bw: {
                first_page: 8,
                other_page: 5
            },
            color: {
                first_page: 10,
                other_page: 8
            }
        }
    }


    const GSM_85 = {
        normal: {
            bw: {
                first_page: 6,
                other_page: 2
            },
            color: {
                first_page: 10,
                other_page: 8
            }
        },

        royal: {
            bw: {
                first_page: 8,
                other_page: 5
            },
            color: {
                first_page: 10,
                other_page: 8
            }
        }
    }


    const GSM_70 = {
        normal: {
            bw: {
                first_page: 5,
                other_page: 1.5
            },
            color: {
                first_page: 10,
                other_page: 8
            }
        },

        royal: {
            bw: {
                first_page: 6,
                other_page: 4
            },
            color: {
                first_page: 10,
                other_page: 8
            }
        }
    }
</script>

<script>
    var hard_binding_total_price = 0
    var soft_binding_total_price = 0
    var synopsis_binding_total_price = 0

    var hard_binding_selected = false
    var soft_binding_selected = false
    var synopsis_binding_selected = false
</script>

<script>
    $(document).ready(function(event) {
        $("input[name='file']").on("change", function(event) {
            $("#file_name").text(event.target.files[0].name)
        })

        // If User click on hard binding
        $("input[name='hard_binding']").on("change", function() {
            // If hard binding is checked
            if (this.checked) {
                // Add Cover Price
                hard_binding_total_price += HARD_BINDING_COVER_BELOW_3_PRICE

                // Display Tab Link   
                hard_binding_selected = true
                $("#step-3-link").removeClass("d-none")
            } else {
                // Deduct Cover Price
                hard_binding_total_price -= HARD_BINDING_COVER_BELOW_3_PRICE

                // Hide Tab Link
                hard_binding_selected = false
                $("#step-3-link").addClass("d-none")
            }
            if (hard_binding_selected || soft_binding_selected || synopsis_binding_selected) {
                $("#step-6-link").removeClass("d-none")
            } else {
                $("#step-6-link").addClass("d-none")
            }
        })

        // If User click on soft binding
        $("input[name='soft_binding']").on("change", function() {
            // If soft binding is checked
            if (this.checked) {
                // Add Cover Price
                soft_binding_total_price += SOFT_BINDING_COVER_PRICE

                // Display Tab Link     
                soft_binding_selected = true
                $("#step-4-link").removeClass("d-none")
            } else {
                // Deduct Cover Price
                soft_binding_total_price -= SOFT_BINDING_COVER_PRICE

                // Hide Tab Link 
                soft_binding_selected = false
                $("#step-4-link").addClass("d-none")
            }
            if (hard_binding_selected || soft_binding_selected || synopsis_binding_selected) {
                $("#step-6-link").removeClass("d-none")
            } else {
                $("#step-6-link").addClass("d-none")
            }
        })

        // If User click on synopsis binding
        $("input[name='synopsis_binding']").on("change", function() {
            // If synopsis binding is checked
            if (this.checked) {
                // Add Cover Price
                synopsis_binding_total_price += SYNOPSIS_BINDING_COVER_PRICE

                // Display Tab Link    
                synopsis_binding_selected = true
                $("#step-5-link").removeClass("d-none")
            } else {
                // Deduct Cover Price
                synopsis_binding_total_price -= SYNOPSIS_BINDING_COVER_PRICE

                // Hide Tab Link 
                synopsis_binding_selected = false
                $("#step-5-link").addClass("d-none")
            }
            if (hard_binding_selected || soft_binding_selected || synopsis_binding_selected) {
                $("#step-6-link").removeClass("d-none")
            } else {
                $("#step-6-link").addClass("d-none")
            }
        })

        // Hard Binding Create Button
        $(".add_btn_hard_binding").on("click", function(event) {

            let time = new Date().valueOf()

            $("#hard_binding_accordion").append(`
          <div class="card hard_binding_card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_${time}"
              aria-expanded="false">
              <span class="title w-50">Papers Size :</span>
              <span class="title w-50">No Of Copies :</span>
              <span class="accicon">
                <i class="fas fa-angle-down rotate-icon"></i>
              </span>
            </div>
            <div id="collapse_${time}" class="collapse" data-parent="#hard_binding_accordion">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6 mb-4">
                    <div class="searche__wrapp">
                      <p>Papers Size</p>
                      <select id="inlineFormCustomSelect" class="form-control custom-select"
                        data-role="select-dropdown" data-profile="minimal" name="hard_binding_paper_size[]">
                        <!-- options -->
                        <option value="">Select</option>
                        <option value="A0"> A0 </option>
                        <option value="A1"> A1 </option>
                        <option value="A2"> A2 </option>
                        <option value="A3"> A3 </option>
                        <option value="A4"> A4 </option>
                        <option value="A5"> A5 </option>
                        <option value="A6"> A6 </option>
                        <option value="A7"> A7 </option>
                        <option value="A8"> A8 </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <div class="searche__wrapp">
                      <p>No Of Copies</p>
                      <div class="qty-container">
                        <button class="qty-btn-minus btn-light" type="button">
                          <i class="fa fa-minus"></i>
                        </button>
                        <input type="text" value="0" class="input-qty" name="hard_binding_qty[]" />
                        <button class="qty-btn-plus btn-light" type="button">
                          <i class="fa fa-plus"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <div class="searche__wrapp">
                      <p>Papers</p>
                      <select id="inlineFormCustomSelect" class="form-control custom-select"
                        data-role="select-dropdown" data-profile="minimal" name="hard_binding_paper_type[]">
                        <!-- options -->
                        <option value="">Select</option>
                        <option value="Paper One 100 GSM or Equivalent"> Paper One 100 GSM or Equivalent</option>
                        <option value="Bond Paper 85 GSM or Equivalent"> Bond Paper 85 GSM or Equivalent </option>
                        <option value="JK Easy 70 GSM or equivalent"> JK Easy 70 GSM or equivalent </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <div class="searche__wrapp">
                      <p>Color</p>
                      <select id="inlineFormCustomSelect" class="form-control custom-select"
                        data-role="select-dropdown" data-profile="minimal" name="hard_binding_paper_color[]">
                        <!-- options -->
                        <option value="">Select</option>
                        <option value="Black & White"> Black & White </option>
                        <option value="Color"> Color </option>
                        <option value="Royal Print"> Royal Print </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <div class="searche__wrapp">
                      <p>Printing Type</p>
                      <select id="inlineFormCustomSelect" class="form-control custom-select"
                        data-role="select-dropdown" data-profile="minimal" name="hard_binding_printing_type[]">
                        <!-- options -->
                        <option value="">Select</option>
                        <option value="Single Side"> Single Side</option>
                        <option value="Both Sidet"> Both Side </option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        `)
        })

        $(".add_btn_soft_binding").on("click", function(event) {

            let time = new Date().valueOf()

            $(this).parent().parent().find(".accordion").append(`
          <div class="card soft_binding_card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_${time}" aria-expanded="false">
              <span class="title w-50">Papers Size :</span>
              <span class="title w-50">No Of Copies :</span>
              <span class="accicon">
                <i class="fas fa-angle-down rotate-icon"></i>
              </span>
            </div>
            <div id="collapse_${time}" class="collapse show" data-parent="#soft_binding_accordion">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6 mb-4">
                    <div class="searche__wrapp">
                      <p>Papers Size</p>
                      <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown"
                        data-profile="minimal" name="soft_binding_paper_size[]">
                        <!-- options -->
                        <option value="">Select</option>
                        <option value="A0"> A0 </option>
                        <option value="A1"> A1 </option>
                        <option value="A2"> A2 </option>
                        <option value="A3"> A3 </option>
                        <option value="A4"> A4 </option>
                        <option value="A5"> A5 </option>
                        <option value="A6"> A6 </option>
                        <option value="A7"> A7 </option>
                        <option value="A8"> A8 </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <div class="searche__wrapp">
                      <p>No Of Copies</p>
                      <div class="qty-container">
                        <button class="qty-btn-minus btn-light" type="button">
                          <i class="fa fa-minus"></i>
                        </button>
                        <input type="text" value="0" class="input-qty" name="soft_binding_qty[]" />
                        <button class="qty-btn-plus btn-light" type="button">
                          <i class="fa fa-plus"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <div class="searche__wrapp">
                      <p>Papers</p>
                      <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown"
                        data-profile="minimal" name="soft_binding_paper_type[]">
                        <!-- options -->
                        <option value="">Select</option>
                        <option value="Paper One 100 GSM or Equivalent"> Paper One 100 GSM or Equivalent</option>
                        <option value="Bond Paper 85 GSM or Equivalent"> Bond Paper 85 GSM or Equivalent </option>
                        <option value="JK Easy 70 GSM or equivalent"> JK Easy 70 GSM or equivalent </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <div class="searche__wrapp">
                      <p>Color</p>
                      <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown"
                        data-profile="minimal" name="soft_binding_paper_color[]">
                        <!-- options -->
                        <option value="">Select</option>
                        <option value="Black & White"> Black & White </option>
                        <option value="Color"> Color </option>
                        <option value="Royal Print"> Royal Print </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <div class="searche__wrapp">
                      <p>Printing Type</p>
                      <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown"
                        data-profile="minimal" name="soft_binding_printing_type[]">
                        <!-- options -->
                        <option value="">Select</option>
                        <option value="Single Side"> Single Side</option>
                        <option value="Both Sidet"> Both Side </option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        `)
        })

        $(".add_btn_synopsis_binding").on("click", function(event) {

            let time = new Date().valueOf()

            $(this).parent().parent().find(".accordion").append(`
          <div class="card synopsis_binding_card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_${time}" aria-expanded="true">
              <span class="title w-50">Papers Size :</span>
              <span class="title w-50">No Of Copies :</span>
              <span class="accicon">
                <i class="fas fa-angle-down rotate-icon"></i>
              </span>
            </div>
            <div id="collapse_${time}" class="collapse show" data-parent="#synopsis_binding_accordion">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6 mb-4">
                    <div class="searche__wrapp">
                      <p>Papers Size</p>
                      <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown"
                        data-profile="minimal" name="synopsis_binding_paper_size[]">
                        <!-- options -->
                        <option value="">Select</option>
                        <option value="A0"> A0 </option>
                        <option value="A1"> A1 </option>
                        <option value="A2"> A2 </option>
                        <option value="A3"> A3 </option>
                        <option value="A4"> A4 </option>
                        <option value="A5"> A5 </option>
                        <option value="A6"> A6 </option>
                        <option value="A7"> A7 </option>
                        <option value="A8"> A8 </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <div class="searche__wrapp">
                      <p>No Of Copies</p>
                      <div class="qty-container">
                        <button class="qty-btn-minus btn-light" type="button">
                          <i class="fa fa-minus"></i>
                        </button>
                        <input type="text" value="0" class="input-qty" name="synopsis_binding_qty[]" />
                        <button class="qty-btn-plus btn-light" type="button">
                          <i class="fa fa-plus"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <div class="searche__wrapp">
                      <p>Papers</p>
                      <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown"
                        data-profile="minimal" name="synopsis_binding_paper_type[]">
                        <!-- options -->
                        <option value="">Select</option>
                        <option value="Paper One 100 GSM or Equivalent"> Paper One 100 GSM or Equivalent</option>
                        <option value="Bond Paper 85 GSM or Equivalent"> Bond Paper 85 GSM or Equivalent </option>
                        <option value="JK Easy 70 GSM or equivalent"> JK Easy 70 GSM or equivalent </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <div class="searche__wrapp">
                      <p>Color</p>
                      <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown"
                        data-profile="minimal" name="synopsis_binding_paper_color[]">
                        <!-- options -->
                        <option value="">Select</option>
                        <option value="Black & White"> Black & White </option>
                        <option value="Color"> Color </option>
                        <option value="Royal Print"> Royal Print </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <div class="searche__wrapp">
                      <p>Printing Type</p>
                      <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown"
                        data-profile="minimal" name="synopsis_binding_printing_type[]">
                        <!-- options -->
                        <option value="">Select</option>
                        <option value="Single Side"> Single Side</option>
                        <option value="Both Sidet"> Both Side </option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        `)
        })


        setInterval(function() {
            $(".hard_binding_price").each(function() {
                $(this).text(hard_binding_total_price)
            })

            $(".soft_binding_price").each(function() {
                $(this).text(soft_binding_total_price)
            })

            $(".synopsis_binding_price").each(function() {
                $(this).text(synopsis_binding_total_price)
            })

            $(".total_price").each(function() {
                $(this).text(hard_binding_total_price + soft_binding_total_price + synopsis_binding_total_price)
            })

            // generate_order_summery()
        }, 500)
    })


    function generate_order_summery() {

        // Get Hardbinding Details
        var hard_bindings_orders = []
        $("#hard_binding_accordion .hard_binding_card").each(function() {
            console.log("hard_binding_card")
            let hard_bindings_order = {
                hard_binding_paper_size: $(this).find("select[name='hard_binding_paper_size[]']").val(),
                hard_binding_qty: $(this).find("input[name='hard_binding_qty[]']").val(),
                hard_binding_paper_type: $(this).find("select[name='hard_binding_paper_type[]']").val(),
                hard_binding_paper_color: $(this).find("select[name='hard_binding_paper_color[]']").val(),
                hard_binding_printing_type: $(this).find("select[name='hard_binding_printing_type[]']").val()
            }
            hard_bindings_orders.push(hard_bindings_order)
        })

        var soft_bindings_orders = []
        $("#soft_binding_accordion .soft_binding_card").each(function() {
            console.log("soft_binding_card")
            let soft_bindings_order = {
                soft_binding_paper_size: $(this).find("select[name='soft_binding_paper_size[]']").val(),
                soft_binding_qty: $(this).find("input[name='soft_binding_qty[]']").val(),
                soft_binding_paper_type: $(this).find("select[name='soft_binding_paper_type[]']").val(),
                soft_binding_paper_color: $(this).find("select[name='soft_binding_paper_color[]']").val(),
                soft_binding_printing_type: $(this).find("select[name='soft_binding_printing_type[]']").val()
            }

            soft_bindings_orders.push(soft_bindings_order)
        })

        var synopsis_bindings_orders = []
        $("#synopsis_binding_accordion .synopsis_binding_card").each(function() {
            console.log("synopsis_binding_card")
            let synopsis_bindings_order = {
                synopsis_binding_paper_size: $(this).find("select[name='synopsis_binding_paper_size[]']").val(),
                synopsis_binding_qty: $(this).find("input[name='synopsis_binding_qty[]']").val(),
                synopsis_binding_paper_type: $(this).find("select[name='synopsis_binding_paper_type[]']").val(),
                synopsis_binding_paper_color: $(this).find("select[name='synopsis_binding_paper_color[]']").val(),
                synopsis_binding_printing_type: $(this).find("select[name='synopsis_binding_printing_type[]']").val()
            }

            synopsis_bindings_orders.push(synopsis_bindings_order)
        })


        console.log({
            hard_bindings_orders,
            soft_bindings_orders,
            synopsis_bindings_orders
        })

        // `<div class="multisteps-form__content">
        //   <div>
        //     <div class="printing__wrapp p-4 bg-white mt-5 hard_binding_order_summery">
        //       <h3 class="mb-4">Hard Binding & Printing</h3>
        //       <div class="printing__Details table-responsive">
        //         <p>Binding Details</p>
        //         <table class="table table-striped">
        //           <thead>
        //             <tr>
        //               <th scope="col">Description</th>
        //               <th scope="col">Copies</th>
        //               <th scope="col" class="text-right">Cost</th>
        //             </tr>
        //           </thead>
        //           <tbody>
        //             <tr>
        //               <td>Hard Bind</td>
        //               <td>3</td>
        //               <td class="text-right">₹ 900</td>
        //             </tr>
        //           </tbody>
        //         </table>
        //       </div>
        //       <div class="printing__Details table-responsive">
        //         <p>Print Details</p>
        //         <span>1st Copy Charges</span>
        //         <table class="table table-striped">
        //           <thead>
        //             <tr>
        //               <th scope="col">Description</th>
        //               <th scope="col">Copies</th>
        //               <th scope="col">Qty</th>
        //               <th scope="col">Rate</th>
        //               <th scope="col" class="text-right">Cost</th>
        //             </tr>
        //           </thead>
        //           <tbody>
        //             <tr>
        //               <td>Normal Print BW</td>
        //               <td>1</td>
        //               <td>50</td>
        //               <td>10</td>
        //               <td class="text-right">₹ 500</td>
        //             </tr>
        //             <tr>
        //               <td class="border-bottom"> Normal Print Color </td>
        //               <td class="border-bottom">1</td>
        //               <td class="border-bottom">150</td>
        //               <td class="border-bottom">6</td>
        //               <td class="text-right border-bottom"> ₹ 900 </td>
        //             </tr>
        //           </tbody>
        //         </table>
        //         <span>Additional Copy Charges</span>
        //         <table class="table table-striped">
        //           <thead>
        //             <tr>
        //               <th scope="col">Description</th>
        //               <th scope="col">Copies</th>
        //               <th scope="col">Qty</th>
        //               <th scope="col">Rate</th>
        //               <th scope="col" class="text-right">Cost</th>
        //             </tr>
        //           </thead>
        //           <tbody>
        //             <tr>
        //               <td>Normal Print BW</td>
        //               <td>1</td>
        //               <td>50</td>
        //               <td>10</td>
        //               <td class="text-right">₹ 500</td>
        //             </tr>
        //             <tr>
        //               <td>Normal Print Color</td>
        //               <td>1</td>
        //               <td>150</td>
        //               <td>6</td>
        //               <td class="text-right">₹ 900</td>
        //             </tr>
        //           </tbody>
        //         </table>
        //         <div class="sub_total">
        //           <h4>Sub Total</h4>
        //           <h5>₹ 1900</h5>
        //         </div>
        //       </div>
        //       <div class="edit__wrapp">
        //         <h6>
        //           <i class="fa-solid fa-pen-to-square"></i> Edit Order
        //         </h6>
        //       </div>
        //     </div>
        //     <div class="printing__wrapp p-4 bg-white mt-5 soft_binding_order_summery">
        //       <h3 class="mb-4">Soft Binding & Printing</h3>
        //       <div class="printing__Details table-responsive">
        //         <p>Binding Details</p>
        //         <table class="table table-striped">
        //           <thead>
        //             <tr>
        //               <th scope="col">Description</th>
        //               <th scope="col">Copies</th>
        //               <th scope="col" class="text-right">Cost</th>
        //             </tr>
        //           </thead>
        //           <tbody>
        //             <tr>
        //               <td>Hard Bind</td>
        //               <td>3</td>
        //               <td class="text-right">₹ 900</td>
        //             </tr>
        //           </tbody>
        //         </table>
        //       </div>
        //       <div class="printing__Details table-responsive">
        //         <p>Print Details</p>
        //         <span>1st Copy Charges</span>
        //         <table class="table table-striped">
        //           <thead>
        //             <tr>
        //               <th scope="col">Description</th>
        //               <th scope="col">Copies</th>
        //               <th scope="col">Qty</th>
        //               <th scope="col">Rate</th>
        //               <th scope="col" class="text-right">Cost</th>
        //             </tr>
        //           </thead>
        //           <tbody>
        //             <tr>
        //               <td>Normal Print BW</td>
        //               <td>1</td>
        //               <td>50</td>
        //               <td>10</td>
        //               <td class="text-right">₹ 500</td>
        //             </tr>
        //             <tr>
        //               <td class="border-bottom"> Normal Print Color </td>
        //               <td class="border-bottom">1</td>
        //               <td class="border-bottom">150</td>
        //               <td class="border-bottom">6</td>
        //               <td class="text-right border-bottom"> ₹ 900 </td>
        //             </tr>
        //           </tbody>
        //         </table>
        //         <span>Additional Copy Charges</span>
        //         <table class="table table-striped">
        //           <thead>
        //             <tr>
        //               <th scope="col">Description</th>
        //               <th scope="col">Copies</th>
        //               <th scope="col">Qty</th>
        //               <th scope="col">Rate</th>
        //               <th scope="col" class="text-right">Cost</th>
        //             </tr>
        //           </thead>
        //           <tbody>
        //             <tr>
        //               <td>Normal Print BW</td>
        //               <td>1</td>
        //               <td>50</td>
        //               <td>10</td>
        //               <td class="text-right">₹ 500</td>
        //             </tr>
        //             <tr>
        //               <td>Normal Print Color</td>
        //               <td>1</td>
        //               <td>150</td>
        //               <td>6</td>
        //               <td class="text-right">₹ 900</td>
        //             </tr>
        //           </tbody>
        //         </table>
        //         <div class="sub_total">
        //           <h4>Sub Total</h4>
        //           <h5>₹ 1900</h5>
        //         </div>
        //       </div>
        //       <div class="edit__wrapp">
        //         <h6>
        //           <i class="fa-solid fa-pen-to-square"></i> Edit Order
        //         </h6>
        //       </div>
        //     </div>
        //     <div class="printing__wrapp p-4 bg-white mt-5 synopsis_binding_order_summery">
        //       <h3 class="mb-4">Synopsis Printing</h3>
        //       <div class="printing__Details table-responsive">
        //         <p>Print Details</p>
        //         <span>1st Copy Charges</span>
        //         <table class="table table-striped">
        //           <thead>
        //             <tr>
        //               <th scope="col">Description</th>
        //               <th scope="col">Copies</th>
        //               <th scope="col">Qty</th>
        //               <th scope="col">Rate</th>
        //               <th scope="col" class="text-right">Cost</th>
        //             </tr>
        //           </thead>
        //           <tbody>
        //             <tr>
        //               <td>Normal Print BW</td>
        //               <td>1</td>
        //               <td>50</td>
        //               <td>10</td>
        //               <td class="text-right">₹ 500</td>
        //             </tr>
        //             <tr>
        //               <td class="border-bottom"> Normal Print Color </td>
        //               <td class="border-bottom">1</td>
        //               <td class="border-bottom">150</td>
        //               <td class="border-bottom">6</td>
        //               <td class="text-right border-bottom"> ₹ 900 </td>
        //             </tr>
        //           </tbody>
        //         </table>
        //         <span>Additional Copy Charges</span>
        //         <table class="table table-striped">
        //           <thead>
        //             <tr>
        //               <th scope="col">Description</th>
        //               <th scope="col">Copies</th>
        //               <th scope="col">Qty</th>
        //               <th scope="col">Rate</th>
        //               <th scope="col" class="text-right">Cost</th>
        //             </tr>
        //           </thead>
        //           <tbody>
        //             <tr>
        //               <td>Normal Print BW</td>
        //               <td>1</td>
        //               <td>50</td>
        //               <td>10</td>
        //               <td class="text-right">₹ 500</td>
        //             </tr>
        //             <tr>
        //               <td>Normal Print Color</td>
        //               <td>1</td>
        //               <td>150</td>
        //               <td>6</td>
        //               <td class="text-right">₹ 900</td>
        //             </tr>
        //           </tbody>
        //         </table>
        //         <div class="sub_total">
        //           <h4>Sub Total</h4>
        //           <h5>₹ 1900</h5>
        //         </div>
        //       </div>
        //       <div class="edit__wrapp">
        //         <h6>
        //           <i class="fa-solid fa-pen-to-square"></i> Edit Order
        //         </h6>
        //       </div>
        //     </div>
        //     <div class="printing__wrapp p-4 bg-white mt-5">
        //       <h3 class="mb-4">Order Summary</h3>
        //       <div class="printing__Details border-0 table-responsive">
        //         <table class="table table-striped">
        //           <tbody>
        //             <tr>
        //               <td>Hard Binding & Printing</td>
        //               <td class="text-right">₹ 1900</td>
        //             </tr>
        //             <tr>
        //               <td>Hard Binding & Printing</td>
        //               <td class="text-right">₹ 1900</td>
        //             </tr>
        //             <tr>
        //               <td>Hard Binding & Printing</td>
        //               <td class="text-right">₹ 1900</td>
        //             </tr>
        //           </tbody>
        //         </table>
        //         <div class="col-sm-5 ml-auto">
        //           <table class="table">
        //             <tbody>
        //               <tr>
        //                 <td class="border-0"> Hard Binding & Printing </td>
        //                 <td class="text-right border-0">₹ 1900</td>
        //               </tr>
        //             </tbody>
        //           </table>
        //           <div class="sub_total">
        //             <h4>Sub Total</h4>
        //             <h5>₹ 1900</h5>
        //           </div>
        //         </div>
        //       </div>
        //     </div>
        //   </div>
        //   <div class="button-row d-flex mt-4">
        //     <a href="checkout.html" class="btn ml-auto next__button">Confrom Order</a>
        //     <button class="btn ml-auto next__button" type="button" title="Send">Confrom Order</button>
        //   </div>
        // </div>`
    }




    // $("#next_step_3").on("click", function () {
    //   $("#step-3").removeClass("d-none")
    // })

    // $("#next_step_4").on("click", function () {
    //   $("#step-4").removeClass("d-none")
    // })

    // $("#next_step_5").on("click", function () {
    //   $("#step-5").removeClass("d-none")
    // })

    $("#next_step_6").on("click", function() {
        generate_order_summery()
    })

    function calculate_hard_binding() {}

    function calculate_soft_binding() {}

    function calculate_synopsis_binding() {}
</script>
@stop