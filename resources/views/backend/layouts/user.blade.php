<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>ManderaYSP</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('back/assets/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('back/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('back/assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('back/assets/css/custom.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href='back/assets/img/mdr1.png' />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>




</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                        data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <h5>{{ Auth::user()->name }}</h5>
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                                src="{{asset('back/assets/img/mdr1.png')}}" class="user-img-radious-style"> <span
                                class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>


                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html"> <img alt="image" src="{{asset('back/assets/img/mdr1.png')}}"
                                class="header-logo" />
                            <span class="logo-name">Mandera</span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
                        <li class="dropdown active">
                            <a href="/user/home" class="nav-link"><i data-feather="monitor"></i><span>Home</span></a>
                        </li>

                        <li class="dropdown ">
                            <a href="/user/application" class="nav-link"><i
                                    data-feather="briefcase"></i><span>Applications</span></a>
                        </li>


                    </ul>
                </aside>
            </div>
            @yield('content')
            <div class="settingSidebar">
                <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                </a>
                <div class="settingSidebar-body ps-container ps-theme-default">
                    <div class=" fade show active">
                        <div class="setting-panel-header">Setting Panel
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">Select Layout</h6>
                            <div class="selectgroup layout-color w-50">
                                <label class="selectgroup-item">
                                    <input type="radio" name="value" value="1"
                                        class="selectgroup-input-radio select-layout" checked>
                                    <span class="selectgroup-button">Light</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="value" value="2"
                                        class="selectgroup-input-radio select-layout">
                                    <span class="selectgroup-button">Dark</span>
                                </label>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">Sidebar Color</h6>
                            <div class="selectgroup selectgroup-pills sidebar-color">
                                <label class="selectgroup-item">
                                    <input type="radio" name="icon-input" value="1"
                                        class="selectgroup-input select-sidebar">
                                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                        data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="icon-input" value="2"
                                        class="selectgroup-input select-sidebar" checked>
                                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                        data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                </label>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">Color Theme</h6>
                            <div class="theme-setting-options">
                                <ul class="choose-theme list-unstyled mb-0">
                                    <li title="white" class="active">
                                        <div class="white"></div>
                                    </li>
                                    <li title="cyan">
                                        <div class="cyan"></div>
                                    </li>
                                    <li title="black">
                                        <div class="black"></div>
                                    </li>
                                    <li title="purple">
                                        <div class="purple"></div>
                                    </li>
                                    <li title="orange">
                                        <div class="orange"></div>
                                    </li>
                                    <li title="green">
                                        <div class="green"></div>
                                    </li>
                                    <li title="red">
                                        <div class="red"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <div class="theme-setting-options">
                                <label class="m-b-0">
                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                        id="mini_sidebar_setting">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="control-label p-l-10">Mini Sidebar</span>
                                </label>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <div class="theme-setting-options">
                                <label class="m-b-0">
                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                        id="sticky_header_setting">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="control-label p-l-10">Sticky Header</span>
                                </label>
                            </div>
                        </div>
                        <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                            <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                <i class="fas fa-undo"></i> Restore Default
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    <p> Copyright &copy; 2023-<script>
                        document.write(new Date().getFullYear())
                        </script> Mandera County Powered by Abdotech Solutions</p>
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('back/assets/js/app.min.js') }}">
    </script>
    <!-- JS Libraies -->
    <script src="{{ asset('back/assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('back/assets/js/page/index.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ asset('back/assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('back/assets/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('back/assets/bundles/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('back/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('back/assets/bundles/datatables/export-tables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('back/assets/bundles/datatables/export-tables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('back/assets/bundles/datatables/export-tables/jszip.min.js') }}"></script>
    <script src="{{ asset('back/assets/bundles/datatables/export-tables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('back/assets/bundles/datatables/export-tables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('back/assets/bundles/datatables/export-tables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/page/datatables.js') }}"></script>
    <!-- Template JS File -->



    <script>
    function downloadCV() {
        // Hide the buttons before generating the PDF
        const buttonsSection = document.getElementById("buttons-section");
        buttonsSection.style.display = "none";

        const element = document.getElementById("invoice-content");
        const opt = {
            margin: 10,
            filename: "CV.pdf",
            image: {
                type: "jpeg",
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: "mm",
                format: "a4",
                orientation: "portrait"
            },
        };

        html2pdf().from(element).set(opt).save();

        // Show the buttons again after generating the PDF
        buttonsSection.style.display = "block";
    }

    // Add event listener to the "Download CV" button
    const downloadBtn = document.querySelector(".btn-download-cv");
    downloadBtn.addEventListener("click", downloadCV);
    </script>


    <!-- career change -->
    <script>
    $(document).ready(function() {
        // Initially, hide the Passport fields
        $("#passportno").hide();
        $("#passdate").hide();

        // Show/hide Passport fields based on Passport selection
        $("#passport").on("change", function() {
            if ($(this).val() === "yes") {
                $("#passportno").show();
                $("#passdate").show();
            } else {
                $("#passportno").hide();
                $("#passdate").hide();
            }
        });


    });
    </script>
    <!-- subcounty -->
    <script>
    // Define the subcounty and ward data
    var data = {
        "lafey": ["Sala", "Fino", "Lafey", "Waranqara", "Alango Gof"],
        "elwak": ["Wargadud", "Kutulo", "Elwak South", "Elwak North", "Shimbir Fatuma"],
        "mandera": ["Arabia", "Libehia", "Khalalio", "Neboi", "Township"],
        "rhamu": ["Ashabito", "Guticha", "Marothile", "Rhamu", "Rhamu Ditmu"],
        "takaba": ["Takaba South", "Takaba", "Lagsure", "Dandu", "Gither"],
        "banisa": ["Banissa", "Derkhale", "Guba", "Malkamari", "Kiliwehiri"]
    };

    // Function to populate the ward select field based on the selected subcounty
    function populateWards() {
        var subcountySelect = document.getElementById("subcounty");
        var wardSelect = document.getElementById("ward");

        // Clear previous options
        wardSelect.innerHTML = '<option value="">Select Ward</option>';

        // Get the selected subcounty
        var selectedSubcounty = subcountySelect.value;

        // Check if a subcounty is selected
        if (selectedSubcounty) {
            // Get the wards for the selected subcounty from the data object
            var wards = data[selectedSubcounty];

            // Populate the ward select field with the corresponding wards
            wards.forEach(function(ward) {
                var option = document.createElement("option");
                option.text = ward;
                option.value = ward;
                wardSelect.appendChild(option);
            });
        }
    }
    </script>

    <!-- work experience  -->
    <script>
    const experienceSelect = document.getElementById('experience');
    const toggleFields = document.querySelectorAll('.toggle-fields');

    experienceSelect.addEventListener('change', function() {
        const selectedValue = this.value;
        if (selectedValue === '0') {
            // Hide the fields when 'None' is selected
            toggleFields.forEach(field => {
                field.style.display = 'none';
            });
        } else {
            // Show the fields for other options
            toggleFields.forEach(field => {
                field.style.display = 'block';
            });
        }
    });
    </script>

    <!-- career  -->
    <script>
    function toggleSkillsField(select) {
        var skillsField = document.getElementById("skills");

        if (select.value === "none") {
            skillsField.style.display = "none";
        } else {
            skillsField.style.display = "block";
        }
    }
    </script>

    <!-- text validae -->
    <script>
    $(document).ready(function() {
        $('.validate-text').on('input', function() {
            var input = $(this).val();
            if (/[^A-Za-z\s]/.test(input)) {
                $(this).addClass('is-invalid');
                $(this).removeClass('is-valid');
            } else {
                $(this).removeClass('is-invalid');
                $(this).addClass('is-valid');
            }
        });
    });
    </script>
    <!-- id validate -->

    <script>
    $(document).ready(function() {
        $('#idno').on('input', function() {
            var idNumber = $(this).val();
            var url = $(this).data('url').replace('PLACEHOLDER_IDNO', idNumber);

            // Check if ID number is valid
            var errorElement = $('#id-number-error');
            if (!/^\d{8}$/.test(idNumber)) {
                errorElement.text('Please enter a valid 8-digit ID number.');
                $('#submit-button').prop('disabled', true); // Disable submit button
                return;
            }

            $.get(url, function(data) {
                if (data.exists) {
                    errorElement.text('ID number already exists in the database');
                    $('#submit-button').prop('disabled', true); // Disable submit button
                } else {
                    errorElement.text('');
                    $('#submit-button').prop('disabled', false); // Enable submit button
                }
            });
        });
    });
    </script>






    <!-- mobile -->

    <script>
    document.getElementById('phone').addEventListener('input', function() {
        var phone = this.value;
        var errorElement = document.getElementById('mobile-number-error');

        if (!/^\d{10}$/.test(phone)) {
            errorElement.textContent = 'Please enter a valid 10-digit  number.';
        } else {
            errorElement.textContent = '';
        }
    });
    </script>

    <!-- parent number -->

    <script>
    document.getElementById('pphone').addEventListener('input', function() {
        var pphone = this.value;
        var errorElement = document.getElementById('pphone-number-error');

        if (!/^\d{10}$/.test(pphone)) {
            errorElement.textContent = 'Please enter a valid 10-digit  number.';
        } else {
            errorElement.textContent = '';
        }
    });
    </script>





</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>