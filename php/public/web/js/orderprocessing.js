
const thesis_color_page = 200;
const thesis_bw_page = 200;

const synopsis_color_page = 50;
const synopsis_bw_page = 50;

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
var synopsis_file = null
var hard_binding_cover_design = null
var soft_binding_cover_design = null
var synopsis_binding_cover_design = null


var apiUrl = "{{route('web.upload_file')}}";

$(document).ready(function(event) {

    // Upload Thesis File
    $('#thesis').on('change', function () {
        var formData = new FormData();
        formData.append("file", this.files[0]); // Append the file

        if($('#thesis')[0].files.length === 0)
        {
            $("#thesis_file_details").remove()
        }
        else
        {
            $("#file_upload_details").append(`
            <div id="thesis_file_details">
                <div class="document__details mb-4">
                    <h3>Thesis File Name : <span id="file_name">${$('#thesis')[0].files[0].name}</span></h3>
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td class="pl-4">Total page</td>
                                <td class="pr-4 text-right" id="total_page">${thesis_color_page + thesis_bw_page}</td>
                            </tr>
                            <tr>
                                <td class="pl-4">Color page</td>
                                <td class="pr-4 text-right" id="thesis_color_page">${thesis_color_page}</td>
                            </tr>
                            <tr>
                                <td class="pl-4">BW page</td>
                                <td class="pr-4 text-right" id="thesis_bw_page">${thesis_bw_page}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
                    <div class="check__holder d-none">
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
            `)
        }

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

    // Upload Synopsis File
    $('#synopsis').on('change', function () {
        var formData = new FormData();
        formData.append("file", this.files[0]); // Append the file

        if($('#synopsis')[0].files.length === 0)
        {
            // Deduct Cover Price
            synopsis_binding_total_price -= SYNOPSIS_BINDING_COVER_PRICE;

            // Hide Tab Link
            synopsis_binding_selected = false;
            $("#step-5-link").addClass("d-none");

            $("#synopsis_file_details").remove()
        }  
        else 
        {
            // Add Cover Price
            synopsis_binding_total_price += SYNOPSIS_BINDING_COVER_PRICE;

            // Display Tab Link
            synopsis_binding_selected = true;
            $("#step-5-link").removeClass("d-none");

            $("#file_upload_details").append(`
            <div id="synopsis_file_details">
                <div class="document__details mb-4">
                    <h3>Synopsis File Name : <span id="file_name">${$('#synopsis')[0].files[0].name}</span></h3>
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td class="pl-4">Total page</td>
                                <td class="pr-4 text-right" id="total_page">${synopsis_color_page + synopsis_bw_page}</td>
                            </tr>
                            <tr>
                                <td class="pl-4">Color page</td>
                                <td class="pr-4 text-right" id="thesis_color_page">${synopsis_color_page}</td>
                            </tr>
                            <tr>
                                <td class="pl-4">BW page</td>
                                <td class="pr-4 text-right" id="thesis_bw_page">${synopsis_bw_page}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            `)
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
            window.synopsis_file = data.file_name
            // Handle the server response here
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    });

    // Upload Hard binding Cover Image Design
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

    // Upload Soft binding Cover Image Design
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

    // Upload Soft binding Cover Image Design
    $('#synopsis_binding_cover_design').on('change', function () {
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
    
    // If User click on hard binding
    $(document).on("change", "input[name='hard_binding']", function() {
        // If hard binding is checked
        if (this.checked) {
            // Add Cover Price
            hard_binding_total_price += HARD_BINDING_COVER_BELOW_3_PRICE;

            // Display Tab Link
            hard_binding_selected = true;
            $("#step-3-link").removeClass("d-none");
            $("#synopsis_binding_hard_cover_design").show()
        } else {
            // Deduct Cover Price
            hard_binding_total_price -= HARD_BINDING_COVER_BELOW_3_PRICE;

            // Hide Tab Link
            hard_binding_selected = false;
            $("#synopsis_binding_hard_cover_design").hide()
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
    $(document).on("change", "input[name='soft_binding']", function() {
        // If soft binding is checked
        if (this.checked) {
            // Add Cover Price
            soft_binding_total_price += SOFT_BINDING_COVER_PRICE;

            // Display Tab Link
            soft_binding_selected = true;
            $("#synopsis_binding_soft_cover_design").show()
            $("#step-4-link").removeClass("d-none");
        } else {
            // Deduct Cover Price
            soft_binding_total_price -= SOFT_BINDING_COVER_PRICE;

            // Hide Tab Link
            soft_binding_selected = false;
            $("#synopsis_binding_soft_cover_design").hide()
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
    $(document).on("change", "input[name='synopsis_binding']", function() {
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
    
    $('input[name="synopsis_binding_cover_design"]').change(function () {
        if ($(this).val() === "Custom") {
            $('#synopsis_upload').show();
        } else {
            $('#synopsis_upload').hide();
        }
    });

    // Hard Binding Create Button
    $(".add_btn_hard_binding").on("click", function(event) {
        let time = new Date().valueOf();

        $("#hard_binding_accordion").append(`
          <div class="card hard_binding_card">
            <div class="card-header" data-toggle="collapse"
                data-target="#collapse_${time}" aria-expanded="true">
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
            <div id="collapse_${time}" class="collapse"
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
                                    <option value="A4 - Full">A4 - Full</option>
                                    <option value="A4 - 95% Reduction">A4 - 95% Reduction</option>
                                    <option value="A4 - 90%">A4 - 90%</option>
                                    <option value="A4 - 85%">A4 - 85%</option>
                                    <option value="A4 - 80%">A4 - 80%</option>
                                    <option value="A4 - 70%">A4 - 70%</option>
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
                                        value="All Black & White">
                                        All Black & White
                                    </option>
                                    <option value="Black & White & Color">
                                        Black & White & Color
                                    </option>
                                    <option
                                        value="Royal Print">
                                        Royal Print
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
                                    <option value="Double Side">
                                        Double Side
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="searche__wrapp" style="display: none;">
                                <p>A4 Pockets (in copies) <a
                                        href="#"
                                        data-toggle="tooltip"
                                        title="Hooray!">
                                        <i class=" fa-solid fa-circle-info"
                                            aria-hidden="true"></i>
                                    </a>
                                </p>
                                <div class="qty-container">
                                    <button
                                        class="qty-btn-minus btn-light"
                                        type="button">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <input type="text" value="0"
                                        class="input-qty"
                                        name="hard_binding_a4_pockets[]" />
                                    <button
                                        class="qty-btn-plus btn-light"
                                        type="button">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="searche__wrapp" style="display: none;">
                                <p>CD Pockets (in copies)</p>
                                <div class="qty-container">
                                    <button
                                        class="qty-btn-minus btn-light"
                                        type="button">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <input type="text" value="0"
                                        class="input-qty"
                                        name="hard_binding_cd_pockets[]" />
                                    <button
                                        class="qty-btn-plus btn-light"
                                        type="button">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
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
        `);

        // Hard Binding A4, CD and Total Quantity Validation Logic
        $('.hard_binding_card').each(function() {
            var card = $(this);
            card.find('[name="hard_binding_qty[]"], [name="hard_binding_a4_pockets[]"], [name="hard_binding_cd_pockets[]"], [name="hard_binding_paper_size[]"]').on('change', function() {
                validateHardBinding(card, $(this));
            });
        });
    });

    // Soft Binding Create Button
    $(".add_btn_soft_binding").on("click", function(event) {
        let time = new Date().valueOf();

        $(this).parent().parent().find(".accordion").append(`
          <div class="card soft_binding_card">
            <div class="card-header" data-toggle="collapse"
                data-target="#collapse_${time}" aria-expanded="true">
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
            <div id="collapse_${time}" class="collapse"
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
                                    <option value="A4 - Full">A4 - Full</option>
                                    <option value="A4 - 95% Reduction">A4 - 95% Reduction</option>
                                    <option value="A4 - 90%">A4 - 90%</option>
                                    <option value="A4 - 85%">A4 - 85%</option>
                                    <option value="A4 - 80%">A4 - 80%</option>
                                    <option value="A4 - 70%">A4 - 70%</option>
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
                                        value="All Black & White">
                                        All Black & White
                                    </option>
                                    <option value="Black & White & Color">
                                        Black & White & Color
                                    </option>
                                    <option
                                        value="Royal Print">
                                        Royal Print
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
                                    <option value="Double Side">
                                        Double Side
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="searche__wrapp" style="display: none;">
                                <p>A4 Pockets (in copies) <a
                                        href="#"
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
                                        name="soft_binding_a4_pockets[]" />
                                    <button
                                        class="qty-btn-plus btn-light"
                                        type="button">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="searche__wrapp" style="display: none;">
                                <p>CD Pockets (in copies) <a
                                        href="#"
                                        data-toggle="tooltip"
                                        title="Hooray!">
                                        <i class=" fa-solid fa-circle-info"
                                            aria-hidden="true"></i>
                                    </a>
                                </p>
                                <div class="qty-container">
                                    <button
                                        class="qty-btn-minus btn-light"
                                        type="button">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <input type="text" value="0"
                                        class="input-qty"
                                        name="soft_binding_cd_pockets[]" />
                                    <button
                                        class="qty-btn-plus btn-light"
                                        type="button">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
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
        `);
        
        // Soft Binding A4, CD and Total Quantity Validation Logic
        $('.soft_binding_card').each(function() {
            var card = $(this);
            card.find('[name="soft_binding_qty[]"], [name="soft_binding_a4_pockets[]"], [name="soft_binding_cd_pockets[]"], [name="soft_binding_paper_size[]"]').on('change', function() {
                validateSoftBinding(card, $(this));
            });
        });
    });

    // Synopsis Binding Create Button
    $(".add_btn_synopsis_binding").on("click", function(event) {
        let time = new Date().valueOf();

        $(this).parent().parent().find(".accordion").append(`
           <div class="card synopsis_binding_card">
            <div class="card-header" data-toggle="collapse"
                data-target="#collapse_${time}" aria-expanded="true">
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
            <div id="collapse_${time}" class="collapse"
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
                                    <option value="A4 - Full">A4 - Full</option>
                                    <option value="A4 - 95% Reduction">A4 - 95% Reduction</option>
                                    <option value="A4 - 90%">A4 - 90%</option>
                                    <option value="A4 - 85%">A4 - 85%</option>
                                    <option value="A4 - 80%">A4 - 80%</option>
                                    <option value="A4 - 70%">A4 - 70%</option>
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
                                        value="All Black & White">
                                        All Black & White
                                    </option>
                                    <option value="Black & White & Color">
                                        Black & White & Color
                                    </option>
                                    <option
                                        value="Royal Print">
                                        Royal Print
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
                                    <option value="Double Side">
                                        Double Side
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `);
    });

    // Hard Binding A4, CD and Total Quantity Validation Logic
    $('.hard_binding_card').each(function() {
        var card = $(this);
        card.find('[name="hard_binding_qty[]"], [name="hard_binding_a4_pockets[]"], [name="hard_binding_cd_pockets[]"], [name="hard_binding_paper_size[]"]').on('change', function() {
            validateHardBinding(card, $(this));
        });
    });

    // Soft Binding A4, CD and Total Quantity Validation Logic
    $('.soft_binding_card').each(function() {
        var card = $(this);
        card.find('[name="soft_binding_qty[]"], [name="soft_binding_a4_pockets[]"], [name="soft_binding_cd_pockets[]"], [name="soft_binding_paper_size[]"]').on('change', function() {
            validateSoftBinding(card, $(this));
        });
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

// Hard Binding Validate Logic
function validateHardBinding(card, target) {
    console.log(target)
    var totalQty = parseInt(card.find('[name="hard_binding_qty[]"]').val()) || 0;
    var a4Pockets = parseInt(card.find('[name="hard_binding_a4_pockets[]"]').val()) || 0;
    var cdPockets = parseInt(card.find('[name="hard_binding_cd_pockets[]"]').val()) || 0;
    var paperSize = card.find('[name="hard_binding_paper_size[]"]').val();

    console.log({totalQty, a4Pockets, cdPockets, paperSize})
    // Validate quantities
    if ((a4Pockets + cdPockets) > totalQty) {
        target.val(target.val() - 1)
        alert("The sum of A4 pockets and CD pockets must be less than or equal to the total number of copies.");
        return false;
    }

    // Update visibility of pockets fields based on paper size
    var pocketsFields = card.find('.searche__wrapp').has('[name="hard_binding_a4_pockets[]"], [name="hard_binding_cd_pockets[]"]');
    if (paperSize === "A4 - Full") {
        pocketsFields.show();
    } else {
        pocketsFields.hide();
    }
}

// Hard Binding Validate Logic
function validateSoftBinding(card, target) {
    console.log(target)
    var totalQty = parseInt(card.find('[name="soft_binding_qty[]"]').val()) || 0;
    var a4Pockets = parseInt(card.find('[name="soft_binding_a4_pockets[]"]').val()) || 0;
    var cdPockets = parseInt(card.find('[name="soft_binding_cd_pockets[]"]').val()) || 0;
    var paperSize = card.find('[name="soft_binding_paper_size[]"]').val();

    console.log({totalQty, a4Pockets, cdPockets, paperSize})
    // Validate quantities
    if ((a4Pockets + cdPockets) > totalQty) {
        target.val(target.val() - 1)
        alert("The sum of A4 pockets and CD pockets must be less than or equal to the total number of copies.");
        return false;
    }

    // Update visibility of pockets fields based on paper size
    var pocketsFields = card.find('.searche__wrapp').has('[name="soft_binding_a4_pockets[]"], [name="soft_binding_cd_pockets[]"]');
    if (paperSize === "A4 - Full") {
        pocketsFields.show();
    } else {
        pocketsFields.hide();
    }
}

function get_rate(paper_type, color) {
    if (paper_type == "Paper One 100 GSM or Equivalent") 
    {
        if (color == "All Black & White") 
        {
            return {
               bw:      {first_page: 6, other_page: 2},
               color:   {first_page: 0, ther_page: 0}
            }
        } 
        else if (color == "Black & White & Color") 
        {
            return {
               bw:      {first_page: 6, other_page: 2},
               color:   {first_page: 10, other_page: 8}
            }
        } 
        else if (color == "Royal Print") 
        {
            return {
               bw:      {first_page: 8, other_page: 5},
               color:   {first_page: 10, other_page: 8}
            }
        }
        else 
        {
            return {
               bw:      {first_page: 0, other_page: 0},
               color:   {first_page: 0, other_page: 0}
            }
        }
    } 
    else if (paper_type == "Bond Paper 85 GSM or Equivalent") 
    {
        if (color == "All Black & White") 
        {
            return {
               bw:      {first_page: 6, other_page: 2},
               color:   {first_page: 0, ther_page: 0}
            }
        } 
        else if (color == "Black & White & Color") 
        {
            return {
               bw:      {first_page: 6, other_page: 2},
               color:   {first_page: 10, other_page: 8}
            }
        } 
        else if (color == "Royal Print") 
        {
            return {
               bw:      {first_page: 8, other_page: 5},
               color:   {first_page: 10, other_page: 8}
            }
        }
        else 
        {
            return {
               bw:      {first_page: 0, other_page: 0},
               color:   {first_page: 0, other_page: 0}
            }
        }
    } 
    else 
    {
        if (color == "All Black & White") 
        {
            return {
               bw:      {first_page: 5, other_page: 1.5},
               color:   {first_page: 0, ther_page: 0}
            }
        } 
        else if (color == "Black & White & Color") 
        {
            return {
               bw:      {first_page: 5, other_page: 1.5},
               color:   {first_page: 10, other_page: 8}
            }
        } 
        else if (color == "Royal Print") 
        {
            return {
               bw:      {first_page: 6, other_page: 4},
               color:   {first_page: 10, other_page: 8}
            }
        }
        else 
        {
            return {
               bw:      {first_page: 0, other_page: 0},
               color:   {first_page: 0, other_page: 0}
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
        thesis_color_page,
        thesis_bw_page
    }

    // Hard Binding Order Summary DOM
    var hard_binding_order_html = ""
    hard_bindings_orders.forEach(order => {
        let rate = get_rate(order.hard_binding_paper_type, order.hard_binding_paper_color)
        let total = 0

        let number_of_thesis_color_page = thesis_color_page
        let number_of_thesis_bw_page = thesis_bw_page
        let number_of_total_page = 0

        if (order.hard_binding_paper_color == "All Black & White") {
            number_of_thesis_bw_page = number_of_thesis_bw_page + number_of_thesis_color_page
            number_of_thesis_color_page = 0
            number_of_total_page = number_of_thesis_bw_page
        } 
        else {
            number_of_thesis_color_page = number_of_thesis_color_page + number_of_thesis_bw_page
            number_of_thesis_bw_page = 0
            number_of_total_page = number_of_thesis_color_page
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

        let number_of_thesis_color_page = thesis_color_page
        let number_of_thesis_bw_page = thesis_bw_page
        let number_of_total_page = 0

        if (order.soft_binding_paper_color == "All Black & White" || order.soft_binding_paper_color ==
            "Royal Print") {
            number_of_thesis_bw_page = number_of_thesis_bw_page + number_of_thesis_color_page
            number_of_thesis_color_page = 0
            number_of_total_page = number_of_thesis_bw_page
        } else {
            number_of_thesis_color_page = number_of_thesis_color_page + number_of_thesis_bw_page
            number_of_thesis_bw_page = 0
            number_of_total_page = number_of_thesis_color_page
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
                        <h3 class="mb-4">Soft Binding & Printing</h3>
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

        let number_of_thesis_color_page = thesis_color_page
        let number_of_thesis_bw_page = thesis_bw_page
        let number_of_total_page = 0

        if (order.synopsis_binding_paper_color == "All Black & White" || order.synopsis_binding_paper_color ==
            "Royal Print") {
            number_of_thesis_bw_page = number_of_thesis_bw_page + number_of_thesis_color_page
            number_of_thesis_color_page = 0
            number_of_total_page = number_of_thesis_bw_page
        } else {
            number_of_thesis_color_page = number_of_thesis_color_page + number_of_thesis_bw_page
            number_of_thesis_bw_page = 0
            number_of_total_page = number_of_thesis_color_page
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

    let sub_amount = hard_binding_total_price + soft_binding_total_price + synopsis_binding_total_price
    let cgst = 17
    let sgst = 17
    let total_amount = sub_amount + ((sub_amount * (cgst + sgst)) / 100)

    $("#order_summery").append(`
        <div class="table-responsive">
           <table class="table">
                <tbody>
                    <tr>
                        <td>Sub Total</td>
                        <td>${sub_amount} INR</td>    
                    </tr>  
                    <tr>
                        <td>CGST</td>
                        <td>${cgst} INR</td>    
                    </tr>  
                    <tr>
                        <td>SGST</td>
                        <td>${sgst} INR</td>    
                    </tr>  
                    <tr>
                        <td>Total</td>
                        <td>${total_amount} INR</td>    
                    </tr>    
                </tbody>
            </table>
        </div>
    `)

    let order_summery_json = JSON.stringify(order_summery)
    $("#order_summery").append(`
        <div class="button-row mt-4">
            <form action="{{ route('web.checkout') }}" method="POST">
            @csrf
                <input type="text" class="d-none" name="order" value='${order_summery_json}' />
                <input type="text" class="d-none" name="order_amount" value="${hard_binding_total_price + soft_binding_total_price + synopsis_binding_total_price}" />
                
                <input type="text" class="d-none" name="hard_binding_total_price" value="${hard_binding_total_price}" />
                <input type="text" class="d-none" name="soft_binding_total_price" value="${soft_binding_total_price}" />
                <input type="text" class="d-none" name="synopsis_binding_total_price" value="${synopsis_binding_total_price}" />
                
                <button class="btn ml-auto next__buttonone" type="submit" title="Send">Confrom Order</button>
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
