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
                            <li class="breadcrumb-item active" aria-current="page">
                                Hard Binding
                            </li>
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
                                <a href="#step1" id="step-1-link" class="multisteps-form__progress-btn js-active"
                                    type="button" title="User Info">Upload File</a>

                                <a href="#step2" id="step-2-link" class="multisteps-form__progress-btn" type="button"
                                    title="Address">Document Details</a>

                                <a href="#step3" id="step-3-link" class="multisteps-form__progress-btn d-none"
                                    type="button" title="Address">Hard Binding</a>

                                <a href="#step4" id="step-4-link" class="multisteps-form__progress-btn d-none"
                                    type="button" title="Address">Soft Binding</a>

                                <a href="#step5" id="step-5-link" class="multisteps-form__progress-btn d-none"
                                    type="button" title="Address">Synopsis</a>

                                <a href="#step6" id="step-6-link" class="multisteps-form__progress-btn d-none"
                                    type="button" title="Address">Order Summery</a>
                            </div>
                        </div>
                    </div>
                    <!--form panels-->
                    <div class="row">
                        <div class="col-12">
                            <form class="multisteps-form__form">
                                <!--single form panel 1-->
                                <div class="col-12 col-lg-8 m-auto">
                                    <div id="step-1" class="multisteps-form__panel padd__holder bg-white js-active"
                                        data-animation="scaleIn">
                                        <div class="multisteps-form__content">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="panel-body">
                                                    <div class="dropzone"></div>
                                                    <p id="namefile">
                                                        (Support document Word or Pdf)
                                                        <span>
                                                            <a href="#" data-toggle="tooltip" title="Hooray!"><i class="fa-solid fa-circle-info"></i></a>
                                                        </span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="panel-body">
                                                    <div class="dropzone">
                                                    <h1 class="imgupload">
                                                            <img
                                                            src="./web/images/icon _File Upload_.png"
                                                            alt=""
                                                            class="m-auto d-block"
                                                            />
                                                        </h1>
                                                    </div>
                                                    <p id="namefile">
                                                        (Support document Word or Pdf)
                                                        <span>
                                                            <a href="#" data-toggle="tooltip" title="Hooray!"><i class="fa-solid fa-circle-info"></i></a>
                                                        </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-5">
                                                <button disabled class="btn ml-auto js-btn-next next__button"
                                                    type="button" title="Next" id="next_step_2">
                                                    Next
                                                </button>
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
                                                    <h3>File Name : <span id="file_name"></span></h3>
                                                    <table class="table table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <td class="pl-4">Total page</td>
                                                                <td class="pr-4 text-right" id="total_page">0</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pl-4">Color page</td>
                                                                <td class="pr-4 text-right" id="color_page">0</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pl-4">BW page</td>
                                                                <td class="pr-4 text-right" id="bw_page">0</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="document__detailsone mb-4">
                                                    <h3>Select type of Binding</h3>
                                                    <div class="Select_type">
                                                        <div class="check__holder">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" id="customCheckbox"
                                                                    name="hard_binding" class="custom-control-input" />
                                                                <label class="custom-control-label"
                                                                    for="customCheckbox">Hard Binding</label>
                                                            </div>
                                                        </div>
                                                        <div class="check__holder">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" id="customCheckbox1"
                                                                    name="soft_binding" class="custom-control-input" />
                                                                <label class="custom-control-label"
                                                                    for="customCheckbox1">Soft Binding</label>
                                                            </div>
                                                        </div>
                                                        <div class="check__holder">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" id="customCheckbox2"
                                                                    name="synopsis_binding"
                                                                    class="custom-control-input" />
                                                                <label class="custom-control-label"
                                                                    for="customCheckbox2">Synopsis</label>
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
                                                                <td class="text-right hard_binding_price">
                                                                    ₹ 000
                                                                </td>
                                                            </tr>
                                                            <tr class="soft_binding_price_detail">
                                                                <th>Soft Binding</th>
                                                                <td class="text-right soft_binding_price">
                                                                    ₹ 000
                                                                </td>
                                                            </tr>
                                                            <tr class="synopsis_binding_price_detail">
                                                                <th>Synopsis</th>
                                                                <td class="text-right synopsis_binding_price">
                                                                    ₹ 000
                                                                </td>
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
                                            <button disabled class="btn next__button js-btn-prev" type="button"
                                                title="Prev">
                                                Prev
                                            </button>
                                            <button disabled class="btn next__button ml-auto js-btn-next" type="button"
                                                title="Next" id="next_step_3">
                                                Next
                                            </button>
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
                                                                <div class="card-header" data-toggle="collapse"
                                                                    data-target="#collapseOne" aria-expanded="true">
                                                                    <span class="title w-50">Papers Size : </span>
                                                                    <span class="title w-50">No Of Copies : </span>
                                                                    <span class="accicon">
                                                                        <i class="fas fa-angle-down rotate-icon"></i>
                                                                    </span>
                                                                    
                                                                </div>
                                                                  <span class="accicononere">
                                                                        <a href="#" class="btn-trash"><i
                                                                            class="fa-solid fa-trash"></i></a>
                                                                    </span>
                                                                <div id="collapseOne" class="collapse show"
                                                                    data-parent="#hard_binding_accordion">
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Papers Size <a href="#"
                                                                                            data-toggle="tooltip"
                                                                                            title="Hooray!">
                                                                                            <i class=" fa-solid fa-circle-info"
                                                                                                aria-hidden="true"></i>
                                                                                        </a></p>
                                                                                    <select id="inlineFormCustomSelect"
                                                                                        class="form-control custom-select"
                                                                                        data-role="select-dropdown"
                                                                                        data-profile="minimal"
                                                                                        name="hard_binding_paper_size[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option value="A0">A0</option>
                                                                                        <option value="A1">A1</option>
                                                                                        <option value="A2">A2</option>
                                                                                        <option value="A3">A3</option>
                                                                                        <option value="A4">A4</option>
                                                                                        <option value="A5">A5</option>
                                                                                        <option value="A6">A6</option>
                                                                                        <option value="A7">A7</option>
                                                                                        <option value="A8">A8</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>No Of Copies <a href="#"
                                                                                            data-toggle="tooltip"
                                                                                            title="Hooray!">
                                                                                            <i class=" fa-solid fa-circle-info"
                                                                                                aria-hidden="true"></i>
                                                                                        </a></p>
                                                                                    <div class="qty-container">
                                                                                        <button
                                                                                            class="qty-btn-minus btn-light"
                                                                                            type="button">
                                                                                            <i class="fa fa-minus"></i>
                                                                                        </button>
                                                                                        <input type="text" value="0"
                                                                                            class="input-qty"
                                                                                            name="hard_binding_qty[]" />
                                                                                        <button
                                                                                            class="qty-btn-plus btn-light"
                                                                                            type="button">
                                                                                            <i class="fa fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Papers <a href="#"
                                                                                            data-toggle="tooltip"
                                                                                            title="Hooray!">
                                                                                            <i class=" fa-solid fa-circle-info"
                                                                                                aria-hidden="true"></i>
                                                                                        </a></p>
                                                                                    <select id="inlineFormCustomSelect"
                                                                                        class="form-control custom-select"
                                                                                        data-role="select-dropdown"
                                                                                        data-profile="minimal"
                                                                                        name="hard_binding_paper_type[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option
                                                                                            value="Paper One 100 GSM or Equivalent">
                                                                                            Paper One 100 GSM or
                                                                                            Equivalent
                                                                                        </option>
                                                                                        <option
                                                                                            value="Bond Paper 85 GSM or Equivalent">
                                                                                            Bond Paper 85 GSM or
                                                                                            Equivalent
                                                                                        </option>
                                                                                        <option
                                                                                            value="JK Easy 70 GSM or equivalent">
                                                                                            JK Easy 70 GSM or equivalent
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Color <a href="#"
                                                                                            data-toggle="tooltip"
                                                                                            title="Hooray!">
                                                                                            <i class=" fa-solid fa-circle-info"
                                                                                                aria-hidden="true"></i>
                                                                                        </a></p>
                                                                                    <select id="inlineFormCustomSelect"
                                                                                        class="form-control custom-select"
                                                                                        data-role="select-dropdown"
                                                                                        data-profile="minimal"
                                                                                        name="hard_binding_paper_color[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option
                                                                                            value="Normal - Black & White">
                                                                                            Normal - Black & White
                                                                                        </option>
                                                                                        <option value="Normal - Color">
                                                                                            Normal - Color
                                                                                        </option>
                                                                                        <option
                                                                                            value="Royal - Black & White">
                                                                                            Royal - Black & White
                                                                                        </option>
                                                                                        <option value="Royal - Color">
                                                                                            Royal - Color
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Printing Type <a href="#"
                                                                                            data-toggle="tooltip"
                                                                                            title="Hooray!">
                                                                                            <i class=" fa-solid fa-circle-info"
                                                                                                aria-hidden="true"></i>
                                                                                        </a></p>
                                                                                    <select id="inlineFormCustomSelect"
                                                                                        class="form-control custom-select"
                                                                                        data-role="select-dropdown"
                                                                                        data-profile="minimal"
                                                                                        name="hard_binding_printing_type[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option value="Single Side">
                                                                                            Single Side
                                                                                        </option>
                                                                                        <option value="Both Sidet">
                                                                                            Both Side
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>A4 Pockets (in copies) <a
                                                                                            href="#"
                                                                                            data-toggle="tooltip"
                                                                                            title="Hooray!">
                                                                                            <i class=" fa-solid fa-circle-info"
                                                                                                aria-hidden="true"></i>
                                                                                        </a></p>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="hard_binding_a4_pockets[]" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>CD Pockets (in copies)</p>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="hard_binding_cd_pockets[]" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6"></div>
                                                                            <div class="col-sm-12">
                                                                                <p>Additional Information <a href="#"
                                                                                        data-toggle="tooltip"
                                                                                        title="Hooray!">
                                                                                        <i class=" fa-solid fa-circle-info"
                                                                                            aria-hidden="true"></i>
                                                                                    </a></p>
                                                                                <textarea class="form-control"
                                                                                    name="hard_binding_information[]"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix mt-4">
                                                        <button type="button" id="add-button"
                                                            class="btn float-left add_btn_hard_binding">
                                                            <i class="fas fa-plus fa-fw"></i> Create New
                                                        </button>
                                                    </div>
                                                </div>
                                                <h3>Binding Details</h3>
                                                <div>
                                                    <div class="binding__details">
                                                        <p>Colour of Covering Materials (Hard) <a href="#"
                                                                data-toggle="tooltip" title="Hooray!">
                                                                <i class=" fa-solid fa-circle-info"
                                                                    aria-hidden="true"></i>
                                                            </a></p>
                                                        <div class="bin__holder">
                                                            <div class="row">
                                                                <div class="col-sm-2">
                                                                    <div class="container-enlarge">
                                                                        <img src="./web/images/bindingcolor/1.jpg"
                                                                            alt="" />
                                                                        <span> <img
                                                                                src="./web/images/bindingcolor/1.jpg"
                                                                                alt="" /></span>

                                                                        <div class="form-check all__formcheck">
                                                                            <label class="form-check-label w-100">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="hard_binding_cover_color_db"
                                                                                    value="DB 1" />
                                                                                <div class="text-right d-block">DB 1
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="container-enlarge">
                                                                        <img src="./web/images/bindingcolor/2.jpg"
                                                                            alt="" />
                                                                        <span> <img
                                                                                src="./web/images/bindingcolor/2.jpg"
                                                                                alt="" /></span>

                                                                        <div class="form-check all__formcheck">
                                                                            <label class="form-check-label w-100">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="hard_binding_cover_color_db"
                                                                                    value="DB 2" />
                                                                                <div class="text-right d-block">DB 2
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="container-enlarge">
                                                                        <img src="./web/images/bindingcolor/3.jpg"
                                                                            alt="" />
                                                                        <span> <img
                                                                                src="./web/images/bindingcolor/3.jpg"
                                                                                alt="" /></span>

                                                                        <div class="form-check all__formcheck">
                                                                            <label class="form-check-label w-100">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="hard_binding_cover_color_db"
                                                                                    value="DB 3" />
                                                                                <div class="text-right d-block">DB 3
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="container-enlarge">
                                                                        <img src="./web/images/bindingcolor/4.jpg"
                                                                            alt="" />
                                                                        <span> <img
                                                                                src="./web/images/bindingcolor/4.jpg"
                                                                                alt="" /></span>

                                                                        <div class="form-check all__formcheck">
                                                                            <label class="form-check-label w-100">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="hard_binding_cover_color_db"
                                                                                    value="DB 4" />
                                                                                <div class="text-right d-block">DB 4
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="container-enlarge">
                                                                        <img src="./web/images/bindingcolor/5.jpg"
                                                                            alt="" />
                                                                        <span> <img
                                                                                src="./web/images/bindingcolor/5.jpg"
                                                                                alt="" /></span>

                                                                        <div class="form-check all__formcheck">
                                                                            <label class="form-check-label w-100">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="hard_binding_cover_color_db"
                                                                                    value="DB 5" />
                                                                                <div class="text-right d-block">DB 5
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="container-enlarge">
                                                                        <img src="./web/images/bindingcolor/6.jpg"
                                                                            alt="" />
                                                                        <span> <img
                                                                                src="./web/images/bindingcolor/6.jpg"
                                                                                alt="" /></span>

                                                                        <div class="form-check all__formcheck">
                                                                            <label class="form-check-label w-100">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="hard_binding_cover_color_db"
                                                                                    value="DB 6" />
                                                                                <div class="text-right d-block">DB 6
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="container-enlarge">
                                                                        <img src="./web/images/bindingcolor/7.jpg"
                                                                            alt="" />
                                                                        <span> <img
                                                                                src="./web/images/bindingcolor/7.jpg"
                                                                                alt="" /></span>

                                                                        <div class="form-check all__formcheck">
                                                                            <label class="form-check-label w-100">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="hard_binding_cover_color_db"
                                                                                    value="DB 7" />
                                                                                <div class="text-right d-block">DB 7
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="container-enlarge">
                                                                        <img src="./web/images/bindingcolor/8.jpg"
                                                                            alt="" />
                                                                        <span> <img
                                                                                src="./web/images/bindingcolor/8.jpg"
                                                                                alt="" /></span>

                                                                        <div class="form-check all__formcheck">
                                                                            <label class="form-check-label w-100">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="hard_binding_cover_color_db"
                                                                                    value="DB 8" />
                                                                                <div class="text-right d-block">DB 8
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="container-enlarge">
                                                                        <img src="./web/images/bindingcolor/9.jpg"
                                                                            alt="" />
                                                                        <span> <img
                                                                                src="./web/images/bindingcolor/9.jpg"
                                                                                alt="" /></span>

                                                                        <div class="form-check all__formcheck">
                                                                            <label class="form-check-label w-100">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="hard_binding_cover_color_db"
                                                                                    value="DB 9" />
                                                                                <div class="text-right d-block">DB 9
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="container-enlarge">
                                                                        <img src="./web/images/bindingcolor/10.jpg"
                                                                            alt="" />
                                                                        <span> <img
                                                                                src="./web/images/bindingcolor/10.jpg"
                                                                                alt="" /></span>

                                                                        <div class="form-check all__formcheck">
                                                                            <label class="form-check-label w-100">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="hard_binding_cover_color_db"
                                                                                    value="DB 10" />
                                                                                <div class="text-right d-block">DB 10
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-5 p-0 mt-5">
                                                            <div class="searche__wrapp">
                                                                <p>Covering Text Colour <a href="#"
                                                                        data-toggle="tooltip" title="Hooray!">
                                                                        <i class=" fa-solid fa-circle-info"
                                                                            aria-hidden="true"></i>
                                                                    </a></p>
                                                                <select id="inlineFormCustomSelect"
                                                                    class="form-control custom-select"
                                                                    data-role="select-dropdown" data-profile="minimal"
                                                                    name="hard_binding_cover_text_color">
                                                                    <!-- options -->
                                                                    <option value="">Select</option>
                                                                    <option value="Silver">Silver</option>
                                                                    <option value="Golden">Golden</option>
                                                                </select>
                                                            </div>
                                                            <div class="btn-container">
                                                                <p>Cover Page Design <a href="#" data-toggle="tooltip"
                                                                        title="Hooray!">
                                                                        <i class=" fa-solid fa-circle-info"
                                                                            aria-hidden="true"></i>
                                                                    </a></p>
                                                                <!--the three icons: default, ok file (img), error file (not an img)-->
                                                                <div class="all__holder">
                                                                    <h1 class="imgupload">
                                                                        <img src="./web/images/icon _File Upload_.png"
                                                                            alt="" class="m-auto d-block" />
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
                                                                <p id="namefile1">
                                                                    (Support document Word or Pdf)
                                                                    <a href="#" data-toggle="tooltip" title="Hooray!">
                                                                        <i class=" fa-solid fa-circle-info"
                                                                            aria-hidden="true"></i>
                                                                    </a>
                                                                </p>
                                                                <!--our custom btn which which stays under the actual one-->
                                                                <button type="button" id="btnup" class="btn btn-lg">
                                                                    Browse for your file!
                                                                </button>
                                                                <!--this is the actual file input, is set with opacity=0 beacause we wanna see our custom one-->
                                                                <input type="file" class="fileup" value="" name="fileup"
                                                                    id="hard_binding_cover_design" name="hard_binding_cover_design" />
                                                                <div class="form-group form-check mt-3 d-none">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="exampleCheck1"
                                                                        name="hard_binding_same_as_cover" />
                                                                    <label class="form-check-label"
                                                                        for="exampleCheck1">Same as thesis cover</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>Spine Printing Details <a href="#" data-toggle="tooltip"
                                                                title="Hooray!">
                                                                <i class=" fa-solid fa-circle-info"
                                                                    aria-hidden="true"></i>
                                                            </a></p>
                                                        <div class="spine__holder">
                                                            <div class="form-group form-check mr-3 btnShow">
                                                                <input type="radio" class="form-check-input"
                                                                    id="exampleCheck1" name="hard_binding_spine"
                                                                    value="Print Required" />
                                                                <label class="form-check-label"
                                                                    for="exampleCheck1">Print Required</label>
                                                            </div>
                                                            <div class="form-group form-check btnHide">
                                                                <input type="radio" class="form-check-input"
                                                                    id="exampleCheck1" name="hard_binding_spine"
                                                                    value="Print Not Required" />
                                                                <label class="form-check-label"
                                                                    for="exampleCheck1">Print Not Required</label>
                                                            </div>

                                                        </div>

                                                        <div class="col-12" id="contentRow">
                                                            <div class="card" id="contentCard">

                                                                <div class="card-body">
                                                                    <div class="row hard_binding_spine_content">
                                                                        <div class="col-sm-4">
                                                                            <div class="searche__wrapp">
                                                                                <p>Top content area <a href="#"
                                                                                        data-toggle="tooltip"
                                                                                        title="Hooray!">
                                                                                        <i class=" fa-solid fa-circle-info"
                                                                                            aria-hidden="true"></i>
                                                                                    </a></p>
                                                                                <input type="text" name="" id=""
                                                                                    name="hard_binding_spine_top_content" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="searche__wrapp">
                                                                                <p>Middle content area <a href="#"
                                                                                        data-toggle="tooltip"
                                                                                        title="Hooray!">
                                                                                        <i class=" fa-solid fa-circle-info"
                                                                                            aria-hidden="true"></i>
                                                                                    </a></p>
                                                                                <input type="text" name="" id=""
                                                                                    name="hard_binding_spine_middle_content" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="searche__wrapp">
                                                                                <p>Bottom content area <a href="#"
                                                                                        data-toggle="tooltip"
                                                                                        title="Hooray!">
                                                                                        <i class=" fa-solid fa-circle-info"
                                                                                            aria-hidden="true"></i>
                                                                                    </a></p>
                                                                                <input type="text" name="" id=""
                                                                                    name="hard_binding_spine_bottom_content" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
                                                            <td class="text-right hard_binding_price">
                                                                ₹ 000
                                                            </td>
                                                        </tr>
                                                        <tr class="soft_binding_price_detail">
                                                            <th>Soft Binding</th>
                                                            <td class="text-right soft_binding_price">
                                                                ₹ 000
                                                            </td>
                                                        </tr>
                                                        <tr class="synopsis_binding_price_detail">
                                                            <th>Synopsis</th>
                                                            <td class="text-right synopsis_binding_price">
                                                                ₹ 000
                                                            </td>
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
                                            <button disabled class="btn next__button js-btn-prev" type="button"
                                                title="Prev">
                                                Prev
                                            </button>
                                            <button disabled class="btn next__button ml-auto js-btn-next" type="button"
                                                title="Next" id="next_step_4">
                                                Next
                                            </button>
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
                                                                <div class="card-header" data-toggle="collapse"
                                                                    data-target="#collapseOne" aria-expanded="true">
                                                                    <span class="title w-50">Papers Size :
                                                                    </span>
                                                                    <span class="title w-50">No Of Copies : </span>
                                                                    <span class="accicon">
                                                                        <i class="fas fa-angle-down rotate-icon"></i>
                                                                    </span>
                                                                     
                                                                </div>
                                                                  <span class="accicononere">
                                                                        <a href="#" class="btn-trash"><i
                                                                            class="fa-solid fa-trash"></i></a>
                                                                    </span>
                                                                <div id="collapseOne" class="collapse show"
                                                                    data-parent="#soft_binding_accordion">
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Papers Size <a href="#"
                                                                                            data-toggle="tooltip"
                                                                                            title="Hooray!">
                                                                                            <i class=" fa-solid fa-circle-info"
                                                                                                aria-hidden="true"></i>
                                                                                        </a></p>
                                                                                    <select id="inlineFormCustomSelect"
                                                                                        class="form-control custom-select"
                                                                                        data-role="select-dropdown"
                                                                                        data-profile="minimal"
                                                                                        name="soft_binding_paper_size[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option value="A0">A0</option>
                                                                                        <option value="A1">A1</option>
                                                                                        <option value="A2">A2</option>
                                                                                        <option value="A3">A3</option>
                                                                                        <option value="A4">A4</option>
                                                                                        <option value="A5">A5</option>
                                                                                        <option value="A6">A6</option>
                                                                                        <option value="A7">A7</option>
                                                                                        <option value="A8">A8</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>No Of Copies <a href="#"
                                                                                            data-toggle="tooltip"
                                                                                            title="Hooray!">
                                                                                            <i class=" fa-solid fa-circle-info"
                                                                                                aria-hidden="true"></i>
                                                                                        </a></p>
                                                                                    <div class="qty-container">
                                                                                        <button
                                                                                            class="qty-btn-minus btn-light"
                                                                                            type="button">
                                                                                            <i class="fa fa-minus"></i>
                                                                                        </button>
                                                                                        <input type="text" value="0"
                                                                                            class="input-qty"
                                                                                            name="soft_binding_qty[]" />
                                                                                        <button
                                                                                            class="qty-btn-plus btn-light"
                                                                                            type="button">
                                                                                            <i class="fa fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Papers <a href="#"
                                                                                            data-toggle="tooltip"
                                                                                            title="Hooray!">
                                                                                            <i class=" fa-solid fa-circle-info"
                                                                                                aria-hidden="true"></i>
                                                                                        </a></p>
                                                                                    <select id="inlineFormCustomSelect"
                                                                                        class="form-control custom-select"
                                                                                        data-role="select-dropdown"
                                                                                        data-profile="minimal"
                                                                                        name="soft_binding_paper_type[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option
                                                                                            value="Paper One 100 GSM or Equivalent">
                                                                                            Paper One 100 GSM or
                                                                                            Equivalent
                                                                                        </option>
                                                                                        <option
                                                                                            value="Bond Paper 85 GSM or Equivalent">
                                                                                            Bond Paper 85 GSM or
                                                                                            Equivalent
                                                                                        </option>
                                                                                        <option
                                                                                            value="JK Easy 70 GSM or equivalent">
                                                                                            JK Easy 70 GSM or equivalent
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Color <a href="#"
                                                                                            data-toggle="tooltip"
                                                                                            title="Hooray!">
                                                                                            <i class=" fa-solid fa-circle-info"
                                                                                                aria-hidden="true"></i>
                                                                                        </a></p>
                                                                                    <select id="inlineFormCustomSelect"
                                                                                        class="form-control custom-select"
                                                                                        data-role="select-dropdown"
                                                                                        data-profile="minimal"
                                                                                        name="soft_binding_paper_color[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option
                                                                                            value="Normal - Black & White">
                                                                                            Normal - Black & White
                                                                                        </option>
                                                                                        <option value="Normal - Color">
                                                                                            Normal - Color
                                                                                        </option>
                                                                                        <option
                                                                                            value="Royal - Black & White">
                                                                                            Royal - Black & White
                                                                                        </option>
                                                                                        <option value="Royal - Color">
                                                                                            Royal - Color
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Printing Type <a href="#"
                                                                                            data-toggle="tooltip"
                                                                                            title="Hooray!">
                                                                                            <i class=" fa-solid fa-circle-info"
                                                                                                aria-hidden="true"></i>
                                                                                        </a></p>
                                                                                    <select id="inlineFormCustomSelect"
                                                                                        class="form-control custom-select"
                                                                                        data-role="select-dropdown"
                                                                                        data-profile="minimal"
                                                                                        name="soft_binding_printing_type[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option value="Single Side">
                                                                                            Single Side
                                                                                        </option>
                                                                                        <option value="Both Sidet">
                                                                                            Both Side
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>A4 Pockets (in copies) <a
                                                                                            href="#"
                                                                                            data-toggle="tooltip"
                                                                                            title="Hooray!">
                                                                                            <i class=" fa-solid fa-circle-info"
                                                                                                aria-hidden="true"></i>
                                                                                        </a></p>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="soft_binding_a4_pockets[]" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>CD Pockets (in copies) <a
                                                                                            href="#"
                                                                                            data-toggle="tooltip"
                                                                                            title="Hooray!">
                                                                                            <i class=" fa-solid fa-circle-info"
                                                                                                aria-hidden="true"></i>
                                                                                        </a></p>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="soft_binding_cd_pockets[]" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6"></div>
                                                                            <div class="col-sm-12">
                                                                                <p>Additional Information <a href="#"
                                                                                        data-toggle="tooltip"
                                                                                        title="Hooray!">
                                                                                        <i class=" fa-solid fa-circle-info"
                                                                                            aria-hidden="true"></i>
                                                                                    </a></p>
                                                                                <textarea class="form-control"
                                                                                    name="soft_binding_information[]"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix mt-4">
                                                        <button type="button" id="add-button"
                                                            class="btn float-left add_btn_soft_binding">
                                                            <i class="fas fa-plus fa-fw"></i> Create New
                                                        </button>
                                                    </div>
                                                </div>
                                                <h3>Binding Details</h3>
                                                <div>
                                                    <div class="binding__details">
                                                        <p>Colour of Covering Materials (Hard) <a href="#"
                                                                data-toggle="tooltip" title="Hooray!">
                                                                <i class=" fa-solid fa-circle-info"
                                                                    aria-hidden="true"></i>
                                                            </a></p>
                                                        <div class="bin__holder">
                                                            <div class="row">
                                                                <div class="col-sm-2">
                                                                    <div class="container-enlarge">
                                                                        <img src="./web/images/bindingcolor/1.jpg"
                                                                            alt="" />
                                                                        <span> <img
                                                                                src="./web/images/bindingcolor/1.jpg"
                                                                                alt="" /></span>

                                                                        <div class="form-check all__formcheck">
                                                                            <label class="form-check-label w-100">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="soft_binding_cover_color_db"
                                                                                    value="DB 1" />
                                                                                <div class="text-right d-block">DB 1
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="container-enlarge">
                                                                        <img src="./web/images/bindingcolor/2.jpg"
                                                                            alt="" />
                                                                        <span> <img
                                                                                src="./web/images/bindingcolor/2.jpg"
                                                                                alt="" /></span>

                                                                        <div class="form-check all__formcheck">
                                                                            <label class="form-check-label w-100">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="soft_binding_cover_color_db"
                                                                                    value="DB 2" />
                                                                                <div class="text-right d-block">DB 2
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="container-enlarge">
                                                                        <img src="./web/images/bindingcolor/3.jpg"
                                                                            alt="" />
                                                                        <span> <img
                                                                                src="./web/images/bindingcolor/3.jpg"
                                                                                alt="" /></span>

                                                                        <div class="form-check all__formcheck">
                                                                            <label class="form-check-label w-100">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="soft_binding_cover_color_db"
                                                                                    value="DB 3" />
                                                                                <div class="text-right d-block">DB 3
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="container-enlarge">
                                                                        <img src="./web/images/bindingcolor/4.jpg"
                                                                            alt="" />
                                                                        <span> <img
                                                                                src="./web/images/bindingcolor/4.jpg"
                                                                                alt="" /></span>

                                                                        <div class="form-check all__formcheck">
                                                                            <label class="form-check-label w-100">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="soft_binding_cover_color_db"
                                                                                    value="DB 4" />
                                                                                <div class="text-right d-block">DB 4
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="container-enlarge">
                                                                        <img src="./web/images/bindingcolor/5.jpg"
                                                                            alt="" />
                                                                        <span> <img
                                                                                src="./web/images/bindingcolor/5.jpg"
                                                                                alt="" /></span>

                                                                        <div class="form-check all__formcheck">
                                                                            <label class="form-check-label w-100">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="soft_binding_cover_color_db"
                                                                                    value="DB 5" />
                                                                                <div class="text-right d-block">DB 5
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="container-enlarge">
                                                                        <img src="./web/images/bindingcolor/6.jpg"
                                                                            alt="" />
                                                                        <span> <img
                                                                                src="./web/images/bindingcolor/6.jpg"
                                                                                alt="" /></span>

                                                                        <div class="form-check all__formcheck">
                                                                            <label class="form-check-label w-100">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="soft_binding_cover_color_db"
                                                                                    value="DB 6" />
                                                                                <div class="text-right d-block">DB 6
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="container-enlarge">
                                                                        <img src="./web/images/bindingcolor/7.jpg"
                                                                            alt="" />
                                                                        <span> <img
                                                                                src="./web/images/bindingcolor/7.jpg"
                                                                                alt="" /></span>

                                                                        <div class="form-check all__formcheck">
                                                                            <label class="form-check-label w-100">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="soft_binding_cover_color_db"
                                                                                    value="DB 7" />
                                                                                <div class="text-right d-block">DB 7
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="container-enlarge">
                                                                        <img src="./web/images/bindingcolor/8.jpg"
                                                                            alt="" />
                                                                        <span> <img
                                                                                src="./web/images/bindingcolor/8.jpg"
                                                                                alt="" /></span>

                                                                        <div class="form-check all__formcheck">
                                                                            <label class="form-check-label w-100">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="soft_binding_cover_color_db"
                                                                                    value="DB 8" />
                                                                                <div class="text-right d-block">DB 8
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="container-enlarge">
                                                                        <img src="./web/images/bindingcolor/9.jpg"
                                                                            alt="" />
                                                                        <span> <img
                                                                                src="./web/images/bindingcolor/9.jpg"
                                                                                alt="" /></span>

                                                                        <div class="form-check all__formcheck">
                                                                            <label class="form-check-label w-100">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="soft_binding_cover_color_db"
                                                                                    value="DB 9" />
                                                                                <div class="text-right d-block">DB 9
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="container-enlarge">
                                                                        <img src="./web/images/bindingcolor/10.jpg"
                                                                            alt="" />
                                                                        <span> <img
                                                                                src="./web/images/bindingcolor/10.jpg"
                                                                                alt="" /></span>

                                                                        <div class="form-check all__formcheck">
                                                                            <label class="form-check-label w-100">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="soft_binding_cover_color_db"
                                                                                    value="DB 10" />
                                                                                <div class="text-right d-block">DB 10
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 p-0 mt-5">
                                                            <div class="searche__wrapp">
                                                                <p>Covering Text Colour <a href="#"
                                                                        data-toggle="tooltip" title="Hooray!">
                                                                        <i class=" fa-solid fa-circle-info"
                                                                            aria-hidden="true"></i>
                                                                    </a></p>
                                                                <select id="inlineFormCustomSelect"
                                                                    class="form-control custom-select"
                                                                    data-role="select-dropdown" data-profile="minimal"
                                                                    name="soft_binding_cover_text_color">
                                                                    <!-- options -->
                                                                    <option value="">Select</option>
                                                                    <option value="Silver">Silver</option>
                                                                    <option value="Golden">Golden</option>
                                                                </select>
                                                            </div>
                                                            <div class="btn-container">
                                                                <p>Cover Page Design <a href="#" data-toggle="tooltip"
                                                                        title="Hooray!">
                                                                        <i class=" fa-solid fa-circle-info"
                                                                            aria-hidden="true"></i>
                                                                    </a></p>
                                                                <!--the three icons: default, ok file (img), error file (not an img)-->
                                                                <div class="all__holder">
                                                                    <h1 class="imgupload">
                                                                        <img src="./web/images/icon _File Upload_.png"
                                                                            alt="" class="m-auto d-block" />
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
                                                                <p id="namefile2">
                                                                    (Support document Word or Pdf)
                                                                    <a href="#" data-toggle="tooltip" title="Hooray!">
                                                                        <i class=" fa-solid fa-circle-info"
                                                                            aria-hidden="true"></i>
                                                                    </a>
                                                                </p>
                                                                <!--our custom btn which which stays under the actual one-->
                                                                <button type="button" id="btnup" class="btn btn-lg">
                                                                    Browse for your file!
                                                                </button>
                                                                <!--this is the actual file input, is set with opacity=0 beacause we wanna see our custom one-->
                                                                <input type="file" class="fileup" value="" name="fileup"
                                                                    id="soft_binding_cover_design" name="soft_binding_cover_design" />
                                                                <div class="form-group form-check mt-3 d-none">
                                                                    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1" /> -->
                                                                    <label class="form-check-label"
                                                                        for="exampleCheck1">Same as thesis cover</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>Spine Printing Details <a href="#" data-toggle="tooltip"
                                                                title="Hooray!">
                                                                <i class=" fa-solid fa-circle-info"
                                                                    aria-hidden="true"></i>
                                                            </a></p>
                                                        <div class="spine__holder">
                                                            <div class="form-group form-check mr-3">
                                                                <input type="radio" class="form-check-input"
                                                                    id="exampleCheck1" name="soft_binding_spine"
                                                                    value="Print Required" />
                                                                <label class="form-check-label"
                                                                    for="exampleCheck1">Print Required</label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="radio" class="form-check-input"
                                                                    id="exampleCheck1" name="soft_binding_spine"
                                                                    value="Print Not Required" />
                                                                <label class="form-check-label"
                                                                    for="exampleCheck1">Print Not Required</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="searche__wrapp">
                                                                    <p>Top content area <a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
                                                                    <input type="text" name="" id=""
                                                                        name="soft_binding_spine_top_content" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="searche__wrapp">
                                                                    <p>Middle content area <a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
                                                                    <input type="text" name="" id=""
                                                                        name="soft_binding_spine_middle_content" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="searche__wrapp">
                                                                    <p>Bottom content area <a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
                                                                    <input type="text" name="" id=""
                                                                        name="soft_binding_spine_bottom_content" />
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
                                                            <td class="text-right hard_binding_price">
                                                                ₹ 000
                                                            </td>
                                                        </tr>
                                                        <tr class="soft_binding_price_detail">
                                                            <th>Soft Binding</th>
                                                            <td class="text-right soft_binding_price">
                                                                ₹ 000
                                                            </td>
                                                        </tr>
                                                        <tr class="synopsis_binding_price_detail">
                                                            <th>Synopsis</th>
                                                            <td class="text-right synopsis_binding_price">
                                                                ₹ 000
                                                            </td>
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
                                            <button disabled class="btn next__button js-btn-prev" type="button"
                                                title="Prev">
                                                Prev
                                            </button>
                                            <button disabled class="btn next__button ml-auto js-btn-next" type="button"
                                                title="Next" id="next_step_5">
                                                Next
                                            </button>
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
                                                                <div class="card-header" data-toggle="collapse"
                                                                    data-target="#collapseOne" aria-expanded="true">
                                                                    <span class="title w-50">Papers Size :</span>
                                                                    <span class="title w-50">No Of Copies :</span>
                                                                    <span class="accicon">
                                                                        <i class="fas fa-angle-down rotate-icon"></i>
                                                                    </span>
                                                                    
                                                                </div>
                                                                <span class="accicononere">
                                                                        <a href="#" class="btn-trash"><i
                                                                            class="fa-solid fa-trash"></i></a>
                                                                    </span>
                                                                <div id="collapseOne" class="collapse show"
                                                                    data-parent="#synopsis_binding_accordion">
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Papers Size <a href="#"
                                                                                            data-toggle="tooltip"
                                                                                            title="Hooray!">
                                                                                            <i class=" fa-solid fa-circle-info"
                                                                                                aria-hidden="true"></i>
                                                                                        </a></p>
                                                                                    <select id="inlineFormCustomSelect"
                                                                                        class="form-control custom-select"
                                                                                        data-role="select-dropdown"
                                                                                        data-profile="minimal"
                                                                                        name="synopsis_binding_paper_size[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option value="A0">A0</option>
                                                                                        <option value="A1">A1</option>
                                                                                        <option value="A2">A2</option>
                                                                                        <option value="A3">A3</option>
                                                                                        <option value="A4">A4</option>
                                                                                        <option value="A5">A5</option>
                                                                                        <option value="A6">A6</option>
                                                                                        <option value="A7">A7</option>
                                                                                        <option value="A8">A8</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>No Of Copies <a href="#"
                                                                                            data-toggle="tooltip"
                                                                                            title="Hooray!">
                                                                                            <i class=" fa-solid fa-circle-info"
                                                                                                aria-hidden="true"></i>
                                                                                        </a></p>
                                                                                    <div class="qty-container">
                                                                                        <button
                                                                                            class="qty-btn-minus btn-light"
                                                                                            type="button">
                                                                                            <i class="fa fa-minus"></i>
                                                                                        </button>
                                                                                        <input type="text" value="0"
                                                                                            class="input-qty"
                                                                                            name="synopsis_binding_qty[]" />
                                                                                        <button
                                                                                            class="qty-btn-plus btn-light"
                                                                                            type="button">
                                                                                            <i class="fa fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Papers <a href="#"
                                                                                            data-toggle="tooltip"
                                                                                            title="Hooray!">
                                                                                            <i class=" fa-solid fa-circle-info"
                                                                                                aria-hidden="true"></i>
                                                                                        </a></p>
                                                                                    <select id="inlineFormCustomSelect"
                                                                                        class="form-control custom-select"
                                                                                        data-role="select-dropdown"
                                                                                        data-profile="minimal"
                                                                                        name="synopsis_binding_paper_type[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option
                                                                                            value="Paper One 100 GSM or Equivalent">
                                                                                            Paper One 100 GSM or
                                                                                            Equivalent
                                                                                        </option>
                                                                                        <option
                                                                                            value="Bond Paper 85 GSM or Equivalent">
                                                                                            Bond Paper 85 GSM or
                                                                                            Equivalent
                                                                                        </option>
                                                                                        <option
                                                                                            value="JK Easy 70 GSM or equivalent">
                                                                                            JK Easy 70 GSM or equivalent
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Color <a href="#"
                                                                                            data-toggle="tooltip"
                                                                                            title="Hooray!">
                                                                                            <i class=" fa-solid fa-circle-info"
                                                                                                aria-hidden="true"></i>
                                                                                        </a></p>
                                                                                    <select id="inlineFormCustomSelect"
                                                                                        class="form-control custom-select"
                                                                                        data-role="select-dropdown"
                                                                                        data-profile="minimal"
                                                                                        name="synopsis_binding_paper_color[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option
                                                                                            value="Normal - Black & White">
                                                                                            Normal - Black & White
                                                                                        </option>
                                                                                        <option value="Normal - Color">
                                                                                            Normal - Color
                                                                                        </option>
                                                                                        <option
                                                                                            value="Royal - Black & White">
                                                                                            Royal - Black & White
                                                                                        </option>
                                                                                        <option value="Royal - Color">
                                                                                            Royal - Color
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 mb-4">
                                                                                <div class="searche__wrapp">
                                                                                    <p>Printing Type <a href="#"
                                                                                            data-toggle="tooltip"
                                                                                            title="Hooray!">
                                                                                            <i class=" fa-solid fa-circle-info"
                                                                                                aria-hidden="true"></i>
                                                                                        </a></p>
                                                                                    <select id="inlineFormCustomSelect"
                                                                                        class="form-control custom-select"
                                                                                        data-role="select-dropdown"
                                                                                        data-profile="minimal"
                                                                                        name="synopsis_binding_printing_type[]">
                                                                                        <!-- options -->
                                                                                        <option value="">Select</option>
                                                                                        <option value="Single Side">
                                                                                            Single Side
                                                                                        </option>
                                                                                        <option value="Both Sidet">
                                                                                            Both Side
                                                                                        </option>
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
                                                        <button type="button" id="add-button"
                                                            class="btn float-left add_btn_synopsis_binding">
                                                            <i class="fas fa-plus fa-fw"></i> Create New
                                                        </button>
                                                    </div>
                                                </div>
                                                <h3>Binding Details</h3>
                                                <div>
                                                    <div class="binding__details">
                                                        <div class="spine__holder">
                                                            <div class="form-group form-check mr-3">
                                                                <input type="radio" class="form-check-input"
                                                                    id="exampleCheck1" name="synopsis_binding_cover_design"
                                                                    value="Same as Hard/ Soft Binding Cover" />
                                                                <label class="form-check-label"
                                                                    for="exampleCheck1">Same as Hard/ Soft Binding Cover</label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="radio" class="form-check-input"
                                                                    id="exampleCheck1" name="synopsis_binding_cover_design"
                                                                    value="Don't Need Cover Printing" />
                                                                <label class="form-check-label"
                                                                    for="exampleCheck1">Don't Need Cover Printing</label>
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
                                                            <td class="text-right hard_binding_price">
                                                                ₹ 000
                                                            </td>
                                                        </tr>
                                                        <tr class="soft_binding_price_detail">
                                                            <th>Soft Binding</th>
                                                            <td class="text-right soft_binding_price">
                                                                ₹ 000
                                                            </td>
                                                        </tr>
                                                        <tr class="synopsis_binding_price_detail">
                                                            <th>Synopsis</th>
                                                            <td class="text-right synopsis_binding_price">
                                                                ₹ 000
                                                            </td>
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
                                            <button disabled class="btn next__button js-btn-prev" type="button"
                                                title="Prev">
                                                Prev
                                            </button>
                                            <button disabled class="btn next__button ml-auto js-btn-next" type="button"
                                                title="Next" id="next_step_6">
                                                Next
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!--single form panel 6-->
                                <div id="step-6" class="multisteps-form__panel p-4 bg-white" data-animation="scaleIn">
                                    <h2 class="text-center">Order Summary</h2>
                                    <div id="order_summery"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.hoverZoom.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $(".thumb img").hoverZoom({
        speedView: 600,
        speedRemove: 400,
        showCaption: true,
        speedCaption: 600,
        debug: true,
        hoverIntent: true,
        loadingIndicatorPos: "center",
        useBgImg: true,
    });
});
</script>
<script src="js/multistep.js"></script>
<!-- <script src="js/addremove.js"></script> -->
<script src="https://kit.fontawesome.com/2d537fef4a.js" crossorigin="anonymous"></script>
<script src="js/core.js"></script>
<script src="js/owl.js"></script>
<script src="js/script.js"></script>
<script src="js/swiper.min.js"></script>
<!-- show and hide -->
<script>
    
function elementExists(element) {
    if ($(element).length) {
        return true;
    } else {
        return false;
    }
}

function elementVisible(element) {
    if ($(element).is(":visible")) {
        return true;
    } else {
        return false;
    }
}

$(document).ready(function() {
    $(document).on("click", ".btn-trash", function() {
        $(this).parent().parent().remove()
    })

    $("#contentCard").hide(); //Hide card on page load
    $(".btnShow").click(function() {
        if (elementExists("#contentCard")) {
            if (elementVisible("#contentCard")) {
                alert("#contentCard is visible");
            } else {
                $("#contentCard").show();
            }
        } else {
            alert("#contentCard has been removed. Use the create button");
        }
    });
    $(".btnHide").click(function() {
        if (elementVisible("#contentCard")) {
            $("#contentCard").hide();
        } else {
            alert("#contentCard is not visible");
        }
    });


});
</script>
<!-- tooltip -->
<script>
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

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
            "font-weight": 700,
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
            "font-weight": 700,
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
const color_page = 200;
const bw_page = 200;

const HARD_BINDING_COVER_BELOW_3_PRICE = 300;
const HARD_BINDING_COVER_PRICE = 270;
const SOFT_BINDING_COVER_PRICE = 270;
const SYNOPSIS_BINDING_COVER_PRICE = 30;

var hard_binding_total_price = 0;
var soft_binding_total_price = 0;
var synopsis_binding_total_price = 0;

var hard_binding_selected = false;
var soft_binding_selected = false;
var synopsis_binding_selected = false;

var hard_binding_copies = 0
var soft_binding_copies = 0
var synopsis_binding_copies = 0

var order_summery = {}

var thesis_file = null
var hard_binding_cover_design = null
var soft_binding_cover_design = null
</script>

<script>
var apiUrl = "{{route('web.upload_file')}}";

$(document).ready(function(event) {

    $('#file').on('change', function () {
        var formData = new FormData();
        formData.append("file", this.files[0]); // Append the file

        // Call the upload function
        fetch(apiUrl, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            }
        })
        .then(response => response.json())
        .then(data => {
            console.log('Success:', data);
            window.thesis_file = data.file_name
            // Handle the server response here
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    });

    $('#hard_binding_cover_design').on('change', function () {
        var formData = new FormData();
        formData.append("file", this.files[0]); // Append the file

        // Call the upload function
        fetch(apiUrl, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            }
        })
        .then(response => response.json())
        .then(data => {
            console.log('Success:', data);
            window.hard_binding_cover_design = data.file_name
            // Handle the server response here
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    });

    $('#soft_binding_cover_design').on('change', function () {
        var formData = new FormData();
        formData.append("file", this.files[0]); // Append the file

        // Call the upload function
        fetch(apiUrl, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            }
        })
        .then(response => response.json())
        .then(data => {
            console.log('Success:', data);
            window.soft_binding_cover_design = data.file_name
            // Handle the server response here
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    });
    
    $("input[name='file']").on("change", function(event) {
        $("#file_name").text(event.target.files[0].name);

        $("#total_page").text(color_page + bw_page)
        $("#color_page").text(color_page)
        $("#bw_page").text(bw_page)
    });
    
    // If User click on hard binding
    $("input[name='hard_binding']").on("change", function() {
        // If hard binding is checked
        if (this.checked) {
            // Add Cover Price
            hard_binding_total_price += HARD_BINDING_COVER_BELOW_3_PRICE;

            // Display Tab Link
            hard_binding_selected = true;
            $("#step-3-link").removeClass("d-none");
        } else {
            // Deduct Cover Price
            hard_binding_total_price -= HARD_BINDING_COVER_BELOW_3_PRICE;

            // Hide Tab Link
            hard_binding_selected = false;
            $("#step-3-link").addClass("d-none");
        }
        if (
            hard_binding_selected ||
            soft_binding_selected ||
            synopsis_binding_selected
        ) {
            $("#step-6-link").removeClass("d-none");
        } else {
            $("#step-6-link").addClass("d-none");
        }
    });

    // If User click on soft binding
    $("input[name='soft_binding']").on("change", function() {
        // If soft binding is checked
        if (this.checked) {
            // Add Cover Price
            soft_binding_total_price += SOFT_BINDING_COVER_PRICE;

            // Display Tab Link
            soft_binding_selected = true;
            $("#step-4-link").removeClass("d-none");
        } else {
            // Deduct Cover Price
            soft_binding_total_price -= SOFT_BINDING_COVER_PRICE;

            // Hide Tab Link
            soft_binding_selected = false;
            $("#step-4-link").addClass("d-none");
        }
        if (
            hard_binding_selected ||
            soft_binding_selected ||
            synopsis_binding_selected
        ) {
            $("#step-6-link").removeClass("d-none");
        } else {
            $("#step-6-link").addClass("d-none");
        }
    });

    // If User click on synopsis binding
    $("input[name='synopsis_binding']").on("change", function() {
        // If synopsis binding is checked
        if (this.checked) {
            // Add Cover Price
            synopsis_binding_total_price += SYNOPSIS_BINDING_COVER_PRICE;

            // Display Tab Link
            synopsis_binding_selected = true;
            $("#step-5-link").removeClass("d-none");
        } else {
            // Deduct Cover Price
            synopsis_binding_total_price -= SYNOPSIS_BINDING_COVER_PRICE;

            // Hide Tab Link
            synopsis_binding_selected = false;
            $("#step-5-link").addClass("d-none");
        }
        if (
            hard_binding_selected ||
            soft_binding_selected ||
            synopsis_binding_selected
        ) {
            $("#step-6-link").removeClass("d-none");
        } else {
            $("#step-6-link").addClass("d-none");
        }
    });

    // Hard Binding Create Button
    $(".add_btn_hard_binding").on("click", function(event) {
        let time = new Date().valueOf();

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
            <span class="accicononere">
                                                                        <a href="#" class="btn-trash"><i
                                                                            class="fa-solid fa-trash"></i></a>
                                                                    </span>
            <div id="collapse_${time}" class="collapse" data-parent="#hard_binding_accordion">
              <div class="card-body">
                <div class="row">
                    <div class="col-sm-6 mb-4">
                        <div class="searche__wrapp">
                        <p>Papers Size <a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
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
                        <p>No Of Copies <a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
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
                        <p>Papers <a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
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
                        <p>Color <a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
                        <select id="inlineFormCustomSelect" class="form-control custom-select"
                            data-role="select-dropdown" data-profile="minimal" name="hard_binding_paper_color[]">
                            <!-- options -->
                            <option value="">Select</option>
                            <option value="Normal - Black & White">
                                Normal - Black & White
                            </option>
                            <option value="Normal - Color">
                                Normal - Color
                            </option>
                            <option value="Royal - Black & White">
                                Royal - Black & White
                            </option>
                            <option value="Royal - Color">
                                Royal - Color
                            </option>
                        </select>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="searche__wrapp">
                        <p>Printing Type <a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
                        <select id="inlineFormCustomSelect" class="form-control custom-select"
                            data-role="select-dropdown" data-profile="minimal" name="hard_binding_printing_type[]">
                            <!-- options -->
                            <option value="">Select</option>
                            <option value="Single Side"> Single Side</option>
                            <option value="Both Sidet"> Both Side </option>
                        </select>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="searche__wrapp">
                            <p>A4 Pockets (in copies) <a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
                            <input type="text" class="form-control" name="hard_binding_a4_pockets[]" />
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="searche__wrapp">
                            <p>CD Pockets (in copies) <a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
                            <input type="text" class="form-control" name="hard_binding_cd_pockets[]" />
                        </div>
                    </div>
                    <div class="col-sm-6"></div>
                    <div class="col-sm-12">
                        <p>Additional Information <a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
                        <textarea class="form-control" name="hard_binding_information[]"></textarea>
                    </div>
                </div>
              </div>
            </div>
          </div>
        `);
    });

    $(".add_btn_soft_binding").on("click", function(event) {
        let time = new Date().valueOf();

        $(this).parent().parent().find(".accordion").append(`
          <div class="card soft_binding_card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_${time}" aria-expanded="false">
              <span class="title w-50">Papers Size :</span>
              <span class="title w-50">No Of Copies :</span>
              <span class="accicon">
                <i class="fas fa-angle-down rotate-icon"></i>
              </span>
               
            </div>
            <span class="accicononere">
                                                                        <a href="#" class="btn-trash"><i
                                                                            class="fa-solid fa-trash"></i></a>
                                                                    </span>
            <div id="collapse_${time}" class="collapse show" data-parent="#soft_binding_accordion">
              <div class="card-body">
                <div class="row">
                    <div class="col-sm-6 mb-4">
                        <div class="searche__wrapp">
                        <p>Papers Size<a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
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
                        <p>No Of Copies<a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
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
                        <p>Papers<a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
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
                        <p>Color<a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
                        <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown"
                            data-profile="minimal" name="soft_binding_paper_color[]">
                            <!-- options -->
                            <option value="">Select</option>
                            <option value="Normal - Black & White">
                                Normal - Black & White
                            </option>
                            <option value="Normal - Color">
                                Normal - Color
                            </option>
                            <option value="Royal - Black & White">
                                Royal - Black & White
                            </option>
                            <option value="Royal - Color">
                                Royal - Color
                            </option>
                        </select>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="searche__wrapp">
                        <p>Printing Type<a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
                        <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown"
                            data-profile="minimal" name="soft_binding_printing_type[]">
                            <!-- options -->
                            <option value="">Select</option>
                            <option value="Single Side"> Single Side</option>
                            <option value="Both Sidet"> Both Side </option>
                        </select>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="searche__wrapp">
                            <p>A4 Pockets (in copies)<a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
                            <input type="text" class="form-control" name="soft_binding_a4_pockets[]" />
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="searche__wrapp">
                            <p>CD Pockets (in copies)<a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
                            <input type="text" class="form-control" name="soft_binding_cd_pockets[]" />
                        </div>
                    </div>
                    <div class="col-sm-6"></div>
                    <div class="col-sm-12">
                        <p>Additional Information<a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
                        <textarea class="form-control" name="soft_binding_information[]"></textarea>
                    </div>
                </div>
              </div>
            </div>
          </div>
        `);
    });

    $(".add_btn_synopsis_binding").on("click", function(event) {
        let time = new Date().valueOf();

        $(this).parent().parent().find(".accordion").append(`
          <div class="card synopsis_binding_card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_${time}" aria-expanded="true">
              <span class="title w-50">Papers Size :</span>
              <span class="title w-50">No Of Copies :</span>
              <span class="accicon">
                <i class="fas fa-angle-down rotate-icon"></i>
              </span>
               
            </div>
             <span class="accicononere">
                                                                        <a href="#" class="btn-trash"><i
                                                                            class="fa-solid fa-trash"></i></a>
                                                                    </span>
            <div id="collapse_${time}" class="collapse show" data-parent="#synopsis_binding_accordion">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6 mb-4">
                    <div class="searche__wrapp">
                      <p>Papers Size<a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
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
                      <p>No Of Copies<a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
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
                      <p>Papers<a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
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
                      <p>Color<a href="#"
                                                                            data-toggle="tooltip" title="Hooray!">
                                                                            <i class=" fa-solid fa-circle-info"
                                                                                aria-hidden="true"></i>
                                                                        </a></p>
                      <select id="inlineFormCustomSelect" class="form-control custom-select" data-role="select-dropdown"
                        data-profile="minimal" name="synopsis_binding_paper_color[]">
                        <!-- options -->
                        <option value="">Select</option>
                        <option value="Normal - Black & White">
                            Normal - Black & White
                        </option>
                        <option value="Normal - Color">
                            Normal - Color
                        </option>
                        <option value="Royal - Black & White">
                            Royal - Black & White
                        </option>
                        <option value="Royal - Color">
                            Royal - Color
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <div class="searche__wrapp">
                      <p>Printing Type<a href="#"
                                                data-toggle="tooltip" title="Hooray!">
                                                <i class=" fa-solid fa-circle-info"
                                                    aria-hidden="true"></i>
                                            </a></p>
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
        `);
    });

    setInterval(function() {
        $(".hard_binding_price").each(function() {
            $(this).text(hard_binding_total_price);
        });

        $(".soft_binding_price").each(function() {
            $(this).text(soft_binding_total_price);
        });

        $(".synopsis_binding_price").each(function() {
            $(this).text(synopsis_binding_total_price);
        });

        $(".total_price").each(function() {
            $(this).text(
                hard_binding_total_price +
                soft_binding_total_price +
                synopsis_binding_total_price
            );
        });

        // generate_order_summery()
    }, 500);
});

function get_rate(paper_type, color) {
    if (paper_type == "Paper One 100 GSM or Equivalent") {
        if (color == "Normal - Black & White") {
            return {
                first_page: 6,
                other_page: 2
            }
        } else if (color == "Normal - Color") {
            return {
                first_page: 10,
                other_page: 8
            }
        } else if (color == "Royal - Black & White") {
            return {
                first_page: 8,
                other_page: 5
            }
        } else if (color == "Royal - Color") {
            return {
                first_page: 10,
                other_page: 8
            }
        } else {
            return {
                first_page: 0,
                other_page: 0
            }
        }
    } else if (paper_type == "Bond Paper 85 GSM or Equivalent") {
        if (color == "Normal - Black & White") {
            return {
                first_page: 6,
                other_page: 2
            }
        } else if (color == "Normal - Color") {
            return {
                first_page: 10,
                other_page: 8
            }
        } else if (color == "Royal - Black & White") {
            return {
                first_page: 8,
                other_page: 5
            }
        } else if (color == "Royal - Color") {
            return {
                first_page: 10,
                other_page: 8
            }
        } else {
            return {
                first_page: 0,
                other_page: 0
            }
        }
    } else {
        if (color == "Normal - Black & White") {
            return {
                first_page: 5,
                other_page: 1.5
            }
        } else if (color == "Normal - Color") {
            return {
                first_page: 10,
                other_page: 8
            }
        } else if (color == "Royal - Black & White") {
            return {
                first_page: 6,
                other_page: 4
            }
        } else if (color == "Royal - Color") {
            return {
                first_page: 10,
                other_page: 8
            }
        } else {
            return {
                first_page: 0,
                other_page: 0
            }
        }
    }
}

function generate_order_summery() {
    hard_binding_total_price = 0;
    soft_binding_total_price = 0;
    synopsis_binding_total_price = 0;

    hard_binding_copies = 0;
    soft_binding_copies = 0;
    synopsis_binding_copies = 0;

    $("#order_summery").empty()
    
    // Get Hardbinding Details
    var hard_bindings_orders = [];
    $("#hard_binding_accordion .hard_binding_card").each(function() {
        console.log("hard_binding_card");
        let hard_bindings_order = {
            hard_binding_paper_size: $(this)
                .find("select[name='hard_binding_paper_size[]']")
                .val(),
            hard_binding_qty: $(this)
                .find("input[name='hard_binding_qty[]']")
                .val(),
            hard_binding_paper_type: $(this)
                .find("select[name='hard_binding_paper_type[]']")
                .val(),
            hard_binding_paper_color: $(this)
                .find("select[name='hard_binding_paper_color[]']")
                .val(),
            hard_binding_printing_type: $(this)
                .find("select[name='hard_binding_printing_type[]']")
                .val(),
            hard_binding_a4_pockets: $(this)
                .find("input[name='hard_binding_a4_pockets[]']")
                .val(),

            hard_binding_cd_pockets: $(this)
                .find("input[name='hard_binding_cd_pockets[]']")
                .val(),

            hard_binding_information: $(this)
                .find("textarea[name='hard_binding_information[]']")
                .val(),
        };
        hard_bindings_orders.push(hard_bindings_order);
    });

    // Get Soft Details
    var soft_bindings_orders = [];
    $("#soft_binding_accordion .soft_binding_card").each(function() {
        console.log("soft_binding_card");
        let soft_bindings_order = {
            soft_binding_paper_size: $(this)
                .find("select[name='soft_binding_paper_size[]']")
                .val(),
            soft_binding_qty: $(this)
                .find("input[name='soft_binding_qty[]']")
                .val(),
            soft_binding_paper_type: $(this)
                .find("select[name='soft_binding_paper_type[]']")
                .val(),
            soft_binding_paper_color: $(this)
                .find("select[name='soft_binding_paper_color[]']")
                .val(),
            soft_binding_printing_type: $(this)
                .find("select[name='soft_binding_printing_type[]']")
                .val(),
            soft_binding_a4_pockets: $(this)
                .find("input[name='soft_binding_a4_pockets[]']")
                .val(),

            soft_binding_cd_pockets: $(this)
                .find("input[name='soft_binding_cd_pockets[]']")
                .val(),

            soft_binding_information: $(this)
                .find("textarea[name='soft_binding_information[]']")
                .val(),
        };

        soft_bindings_orders.push(soft_bindings_order);
    });

    // Get Synopsis Details
    var synopsis_bindings_orders = [];
    $("#synopsis_binding_accordion .synopsis_binding_card").each(
        function() {
            console.log("synopsis_binding_card");
            let synopsis_bindings_order = {
                synopsis_binding_paper_size: $(this)
                    .find("select[name='synopsis_binding_paper_size[]']")
                    .val(),
                synopsis_binding_qty: $(this)
                    .find("input[name='synopsis_binding_qty[]']")
                    .val(),
                synopsis_binding_paper_type: $(this)
                    .find("select[name='synopsis_binding_paper_type[]']")
                    .val(),
                synopsis_binding_paper_color: $(this)
                    .find("select[name='synopsis_binding_paper_color[]']")
                    .val(),
                synopsis_binding_printing_type: $(this)
                    .find("select[name='synopsis_binding_printing_type[]']")
                    .val(),
            };

            synopsis_bindings_orders.push(synopsis_bindings_order);
        }
    );

    var hard_binding_other_details = {
        hard_binding_cover_color_db: $("input[name='hard_binding_cover_color_db']:checked").val(),
        hard_binding_cover_text_color: $("select[name='hard_binding_cover_text_color']").val(),
        hard_binding_cover_design: window.hard_binding_cover_design,
        hard_binding_spine: $("input[name='hard_binding_spine']:checked").val(),
        hard_binding_spine_top_content: $("input[name='hard_binding_spine_top_content']").val(),
        hard_binding_spine_middle_content: $("input[name='hard_binding_spine_top_content']").val(),
        hard_binding_spine_bottom_content: $("input[name='hard_binding_spine_top_content']").val(),
    }

    var soft_binding_other_details = {
        soft_binding_cover_color_db: $("input[name='soft_binding_cover_color_db']:checked").val(),
        soft_binding_cover_text_color: $("select[name='soft_binding_cover_text_color']").val(),
        soft_binding_cover_design: window.soft_binding_cover_design,
        soft_binding_spine: $("input[name='soft_binding_spine']:checked").val(),
        soft_binding_spine_top_content: $("input[name='soft_binding_spine_top_content']").val(),
        soft_binding_spine_middle_content: $("input[name='soft_binding_spine_top_content']").val(),
        soft_binding_spine_bottom_content: $("input[name='soft_binding_spine_top_content']").val(),
    }
    
    var synopsis_binding_other_details = {
        synopsis_binding_cover_design: $("input[name='synopsis_binding_cover_design']:checked").val(),
    }


    order_summery = {
        thesis_file: window.thesis_file,
        hard_bindings_orders,
        hard_binding_other_details, 
        soft_bindings_orders,
        soft_binding_other_details,
        synopsis_bindings_orders,
        soft_binding_other_details,
        color_page,
        bw_page
    }

    // Hard Binding Order Summary DOM
    var hard_binding_order_html = ""
    hard_bindings_orders.forEach(order => {
        let rate = get_rate(order.hard_binding_paper_type, order.hard_binding_paper_color)
        let total = 0

        let number_of_color_page = color_page
        let number_of_bw_page = bw_page
        let number_of_total_page = 0

        if (order.hard_binding_paper_color == "Normal - Black & White" || order.hard_binding_paper_color ==
            "Royal - Black & White") {
            number_of_bw_page = number_of_bw_page + number_of_color_page
            number_of_color_page = 0
            number_of_total_page = number_of_bw_page
        } else {
            number_of_color_page = number_of_color_page + number_of_bw_page
            number_of_bw_page = 0
            number_of_total_page = number_of_color_page
        }

        // Calculate Page Printing Price
        if (order.hard_binding_qty == 1) {
            total += number_of_total_page * rate.first_page
        } else if (order.hard_binding_qty > 1) {
            total += number_of_total_page * rate.first_page

            total += ((order.hard_binding_qty - 1) * number_of_total_page) * rate.other_page
        } else {
            total += 0
        }

        // Calculate Binding Price
        if (order.hard_binding_qty < 3) {
            total += order.hard_binding_qty * 300
        } else if (order.hard_binding_qty >= 3) {
            total += order.hard_binding_qty * 270
        } else {
            total += 0
        }

        hard_binding_copies = Number(hard_binding_copies) + Number(order.hard_binding_qty)
        hard_binding_total_price = hard_binding_total_price + total

        hard_binding_order_html = hard_binding_order_html + `<tr>
                                                                    <td>${order.hard_binding_paper_type}</td>
                                                                    <td>${order.hard_binding_qty}</td>
                                                                    <td>${order.hard_binding_paper_color}</td>
                                                                    <td>${rate.first_page}</td>
                                                                    <td>${rate.other_page}</td>
                                                                    <td class="text-right">₹ ${total}</td>
                                                                </tr>`
    })

    if (hard_binding_selected) {
        $("#order_summery").append(
            `<div class="multisteps-form__content">
                    <div>
                        <div class="printing__wrapp p-4 bg-white mt-5 hard_binding_order_summery">
                        <h3 class="mb-4">Hard Binding & Printing</h3>
                        <div class="printing__Details table-responsive">
                            <p>Binding Details <a href="#"
                                data-toggle="tooltip" title="Hooray!">
                                <i class=" fa-solid fa-circle-info"
                                    aria-hidden="true"></i>
                            </a></p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Description</th>
                                        <th scope="col">Copies</th>
                                        <th scope="col" class="text-right">Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Hard Bind</td>
                                        <td>${hard_binding_copies}</td>
                                        <td class="text-right">₹ ${hard_binding_total_price}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="printing__Details table-responsive">
                            <p>Print Details<a href="#"
                                data-toggle="tooltip" title="Hooray!">
                                <i class=" fa-solid fa-circle-info"
                                    aria-hidden="true"></i>
                            </a></p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Description</th>
                                        <th scope="col">Copies</th>
                                        <th scope="col">Colour/ BW</th>
                                        <th scope="col">1st Copy Rate</th>
                                        <th scope="col">Additional Copy Rate</th>
                                        <th scope="col" class="text-right">Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ${hard_binding_order_html}
                                </tbody>
                            </table>
                            <div class="sub_total">
                                <h4>Sub Total</h4>
                                <h5>₹ ${hard_binding_total_price}</h5>
                            </div>
                        </div>
                        <div class="edit__wrapp" id="#step-3-link">
                            <h6>
                            <i class="fa-solid fa-pen-to-square"></i> Edit Order
                            </h6>
                        </div>
                        </div>
                    </div>
                </div>`
        )
    }

    // Soft Binding Order Summery DOM
    var soft_binding_order_html = ""
    soft_bindings_orders.forEach(order => {
        let rate = get_rate(order.soft_binding_paper_type, order.soft_binding_paper_color)
        let total = 0

        let number_of_color_page = color_page
        let number_of_bw_page = bw_page
        let number_of_total_page = 0

        if (order.soft_binding_paper_color == "Normal - Black & White" || order.soft_binding_paper_color ==
            "Royal - Black & White") {
            number_of_bw_page = number_of_bw_page + number_of_color_page
            number_of_color_page = 0
            number_of_total_page = number_of_bw_page
        } else {
            number_of_color_page = number_of_color_page + number_of_bw_page
            number_of_bw_page = 0
            number_of_total_page = number_of_color_page
        }

        // Calculate Page Printing Price
        if (order.soft_binding_qty == 1) {
            total += number_of_total_page * rate.first_page
        } else if (order.soft_binding_qty > 1) {
            total += number_of_total_page * rate.first_page

            total += ((order.soft_binding_qty - 1) * number_of_total_page) * rate.other_page
        } else {
            total += 0
        }

        // Calculate Binding Price
        total += order.soft_binding_qty * 270

        soft_binding_copies = Number(soft_binding_copies) + Number(order.soft_binding_qty)
        soft_binding_total_price = soft_binding_total_price + total

        soft_binding_order_html = soft_binding_order_html + `<tr>
                                                                    <td>${order.soft_binding_paper_type}</td>
                                                                    <td>${order.soft_binding_qty}</td>
                                                                    <td>${order.soft_binding_paper_color}</td>
                                                                    <td>${rate.first_page}</td>
                                                                    <td>${rate.other_page}</td>
                                                                    <td class="text-right">₹ ${total}</td>
                                                                </tr>`
    })

    if (soft_binding_selected) {
        $("#order_summery").append(
            `<div class="multisteps-form__content">
                    <div>
                        <div class="printing__wrapp p-4 bg-white mt-5 soft_binding_order_summery">
                        <h3 class="mb-4">soft Binding & Printing</h3>
                        <div class="printing__Details table-responsive">
                            <p>Binding Details<a href="#"
                                data-toggle="tooltip" title="Hooray!">
                                <i class=" fa-solid fa-circle-info"
                                    aria-hidden="true"></i>
                            </a></p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Description</th>
                                        <th scope="col">Copies</th>
                                        <th scope="col" class="text-right">Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>soft Bind</td>
                                        <td>${soft_binding_copies}</td>
                                        <td class="text-right">₹ ${soft_binding_total_price}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="printing__Details table-responsive">
                            <p>Print Details<a href="#"
                                data-toggle="tooltip" title="Hooray!">
                                <i class=" fa-solid fa-circle-info"
                                    aria-hidden="true"></i>
                            </a></p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Description</th>
                                        <th scope="col">Copies</th>
                                        <th scope="col">Colour/ BW</th>
                                        <th scope="col">1st Copy Rate</th>
                                        <th scope="col">Additional Copy Rate</th>
                                        <th scope="col" class="text-right">Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ${soft_binding_order_html}
                                </tbody>
                            </table>
                            <div class="sub_total">
                                <h4>Sub Total</h4>
                                <h5>₹ ${soft_binding_total_price}</h5>
                            </div>
                        </div>
                        <div class="edit__wrapp">
                            <h6>
                            <i class="fa-solid fa-pen-to-square"></i> Edit Order
                            </h6>
                        </div>
                        </div>
                    </div>
                </div>`
        )
    }

    // Synopsis Binding Order Summery DOm
    var synopsis_binding_order_html = ""
    synopsis_bindings_orders.forEach(order => {
        let rate = get_rate(order.synopsis_binding_paper_type, order.synopsis_binding_paper_color)
        let total = 0

        let number_of_color_page = color_page
        let number_of_bw_page = bw_page
        let number_of_total_page = 0

        if (order.synopsis_binding_paper_color == "Normal - Black & White" || order.synopsis_binding_paper_color ==
            "Royal - Black & White") {
            number_of_bw_page = number_of_bw_page + number_of_color_page
            number_of_color_page = 0
            number_of_total_page = number_of_bw_page
        } else {
            number_of_color_page = number_of_color_page + number_of_bw_page
            number_of_bw_page = 0
            number_of_total_page = number_of_color_page
        }

        // Calculate Page Printing Price
        if (order.synopsis_binding_qty == 1) {
            total += number_of_total_page * rate.first_page
        } else if (order.synopsis_binding_qty > 1) {
            total += number_of_total_page * rate.first_page

            total += ((order.synopsis_binding_qty - 1) * number_of_total_page) * rate.other_page
        } else {
            total += 0
        }

        // Calculate Binding Price
        total += order.synopsis_binding_qty * 30

        synopsis_binding_copies = Number(synopsis_binding_copies) + Number(order.synopsis_binding_qty)
        synopsis_binding_total_price = synopsis_binding_total_price + total

        synopsis_binding_order_html = synopsis_binding_order_html + `<tr>
                                                                    <td>${order.synopsis_binding_paper_type}</td>
                                                                    <td>${order.synopsis_binding_qty}</td>
                                                                    <td>${order.synopsis_binding_paper_color}</td>
                                                                    <td>${rate.first_page}</td>
                                                                    <td>${rate.other_page}</td>
                                                                    <td class="text-right">₹ ${total}</td>
                                                                </tr>`
    })

    if (synopsis_binding_selected) {
        $("#order_summery").append(
            `<div class="multisteps-form__content">
                    <div>
                        <div class="printing__wrapp p-4 bg-white mt-5 synopsis_binding_order_summery">
                        <h3 class="mb-4">Synopsis Binding & Printing</h3>
                        <div class="printing__Details table-responsive">
                            <p>Binding Details<a href="#"
                                data-toggle="tooltip" title="Hooray!">
                                <i class=" fa-solid fa-circle-info"
                                    aria-hidden="true"></i>
                            </a></p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Description</th>
                                        <th scope="col">Copies</th>
                                        <th scope="col" class="text-right">Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Synopsis Bind</td>
                                        <td>${synopsis_binding_copies}</td>
                                        <td class="text-right">₹ ${synopsis_binding_total_price}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="printing__Details table-responsive">
                            <p>Print Details<a href="#"
                                data-toggle="tooltip" title="Hooray!">
                                <i class=" fa-solid fa-circle-info"
                                    aria-hidden="true"></i>
                            </a></p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Description</th>
                                        <th scope="col">Copies</th>
                                        <th scope="col">Colour/ BW</th>
                                        <th scope="col">1st Copy Rate</th>
                                        <th scope="col">Additional Copy Rate</th>
                                        <th scope="col" class="text-right">Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ${synopsis_binding_order_html}
                                </tbody>
                            </table>
                            <div class="sub_total">
                                <h4>Sub Total</h4>
                                <h5>₹ ${synopsis_binding_total_price}</h5>
                            </div>
                        </div>
                        <div class="edit__wrapp">
                            <h6>
                            <i class="fa-solid fa-pen-to-square"></i> Edit Order
                            </h6>
                        </div>
                        </div>
                    </div>
                </div>`
        )
    }

    let order_summery_json = JSON.stringify(order_summery)
    $("#order_summery").append(`
        <div class="button-row d-flex mt-4">
            <form action="{{ route('web.checkout') }}" method="POST">
            @csrf
                <input type="text" class="d-none" name="order" value='${order_summery_json}' />
                <input type="text" class="d-none" name="order_amount" value="${hard_binding_total_price + soft_binding_total_price + synopsis_binding_total_price}" />
                
                <input type="text" class="d-none" name="hard_binding_total_price" value="${hard_binding_total_price}" />
                <input type="text" class="d-none" name="soft_binding_total_price" value="${soft_binding_total_price}" />
                <input type="text" class="d-none" name="synopsis_binding_total_price" value="${synopsis_binding_total_price}" />
                
                <button class="btn ml-auto next__button" type="submit" title="Send">Confrom Order</button>
            </form>
        </div>
    `)
}

$("#next_step_6").on("click", function() {
    generate_order_summery();
});

$("#step-6-link").on("click", function() {
    generate_order_summery();
});

function calculate_hard_binding() {}

function calculate_soft_binding() {}

function calculate_synopsis_binding() {}
</script>
@stop