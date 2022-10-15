<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
            </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
            </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
            integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
            </script>

        </div>
        <div id="menu-popup" style="background-color: black; position: fixed; width: 100%;height:100%; z-index: 5; display: none; padding: 20px;">
            <div class="row  justify-content-between">
                <div class="col">
                    <img src="./img/sgp-logo-white.svg" class="footer-logo" />
                </div>
                <div class="col-1" style="font-weight: 1000; color: white;" onclick="document.getElementById('menu-popup').style.display='none';">X</div>
            </div>
            <br/>
            <a style="display: block; color: white;" href="./index.php">Home</a>
            <br/>
            <a style="display: block; color: white;"  href="./page2.php">Page2</a>
            <br/>
            <a style="display: block; color: white;"  href="./page3.php">Page3</a>
            <br/>
            <a style="display: block; color: white;"  href="./last.php">Last</a>
        </div>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <div class="row  row-cols-3" style="width: 100%;">
                    <div class="col">
                        <svg onclick="document.getElementById('menu-popup').style.display='block';" style="width: 35px; height: 35px;" viewbox="0 0 35 35" xmlns="http://www.w3.org/2000/svg">
                            <g transform="translate(22881 24144)">
                                <rect fill="none" height="35" transform="translate(-22881 -24144)" width="35">
                                </rect>
                                <g transform="translate(-24216.5 -24181.5)">
                                    <line fill="none" stroke="#333" stroke-width="1" transform="translate(1337.5 45.5)"
                                        x2="30"></line>
                                    <line fill="none" stroke="#333" stroke-width="1" transform="translate(1337.5 55.5)"
                                        x2="20"></line>
                                    <line fill="none" stroke="#333" stroke-width="1" transform="translate(1337.5 65.5)"
                                        x2="30"></line>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="col">
                        <div class="row text-center" style="width: 100%;">
                            <div class="col">
                                <img src="./img/logo.png" />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <h1>Track Your Item</h1>
            <div class="input-group mb-3">
                <input style="border-radius: 0;" type="text" placeholder="Enter: tracking numbers separated by comma."
                    class="form-control" id="numberInput" aria-label="Amount (to the nearest dollar)">
            </div>
            <button type="button" onclick="document.getElementById('warningDiv').style.display='block';"
                class="btn btn-primary" style="border-radius: 0;" data-bs-toggle="modal"
                data-bs-target="#searchResultModal">
                SEARCH NOW
            </button>
            <br />
            <br /><br />
            <div id="warningDiv"
                style="background-color: rgb(185, 229, 250); padding: 20px; color: darkblue; font-weight: 500;display: none;">
                <div>SM601695206SG</div>
                <div>Status: <span style="color: darkred; font-size: 13px;">Delay delivery. Wait for the distribution
                        center
                        to delivery it again</span></div>
            </div>
            <br />

            <!-- Modal -->
            <div class="modal fade" id="searchResultModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">singpost tracking number error
                                notification:</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ol style="list-style: lower-roman;">
                                <li>Package label damaged,</li>
                                <li>Consignee information needs to be confirmed</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="accordion accordion-flush" style="color: darkblue;" id="accordionFlushExample">
                <div class="accordion-item" style="margin-bottom:10px">
                    <h2 class="accordion-header">
                        <button style="background-color: rgb(185, 229, 250);" class="accordion-button collapsed"
                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                            aria-expanded="false" aria-controls="flush-collapseOne">
                            Tips from Singapore Post:
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div style="background-color: rgb(185, 229, 250); margin-top: 10px; margin-bottom: 10px;"
                            class="accordion-body">
                            We apologise that we,The original receipt label is damaged,Failure to deliver normally.
                            status of the package has
                            stopped updating.Consignee information to be confirmed
                        </div>
                    </div>
                </div>
                <div class="accordion-item" style="margin-bottom:10px">
                    <h2 class="accordion-header">
                        <button style="background-color: rgb(185, 229, 250);" class="accordion-button collapsed"
                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                            aria-expanded="false" aria-controls="flush-collapseTwo">
                            Service Type: Speedpost Standard (Singapore)
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div style="background-color: rgb(185, 229, 250); margin-top: 10px; margin-bottom: 10px;"
                            class="accordion-body">
                            Reference No. sm601695206SG
                            <img src="./img/product.png" />
                        </div>
                    </div>
                </div>
                <br />
            </div>
        </div>
        <div class="container">
            <h1 style="background-color: rgb(195, 17, 38);"><img src="./img/tableTitle.png" style="max-width: 100%;" />
            </h1>
            <label style="color: rgb(100,100,100); margin-top: 10px; margin-bottom: 10px;font-size: 13px;">FIRST
                NAME</label><span style="color: red;">*</span>
            <div style="margin-bottom: 10px;" class="input-group mb-3">
                <input style="border-radius: 0;" type="text" placeholder="Enter: tracking numbers separated by comma."
                    class="form-control" id="numberInput" aria-label="Amount (to the nearest dollar)">
            </div>
            <label style="color: rgb(100,100,100); margin-top: 10px; margin-bottom: 10px;font-size: 13px;">LAST
                NAME</label><span style="color: red;">*</span>
            <div style="margin-bottom: 10px;" class="input-group mb-3">
                <input style="border-radius: 0;" type="text" placeholder="Enter: tracking numbers separated by comma."
                    class="form-control" id="numberInput" aria-label="Amount (to the nearest dollar)">
            </div>
            <label style="color: rgb(100,100,100); margin-top: 10px; margin-bottom: 10px;font-size: 13px;">PHONE
                NUMBER</label><span style="color: red;">*</span>
            <div style="margin-bottom: 10px;" class="input-group mb-3">
                <input style="border-radius: 0;" type="text" placeholder="Phone Number" class="form-control"
                    id="numberInput" aria-label="Amount (to the nearest dollar)">
            </div>
            <label
                style="color: rgb(100,100,100); margin-top: 10px; margin-bottom: 10px;font-size: 13px;">COUNTRY</label><span
                style="color: red;">*</span>
            <div style="margin-bottom: 10px;" class="input-group mb-3">
                <input style="border-radius: 0;" type="text" placeholder="Enter: tracking numbers separated by comma."
                    class="form-control" id="numberInput" aria-label="Amount (to the nearest dollar)">
            </div>
            <label style="color: rgb(100,100,100); margin-top: 10px; margin-bottom: 10px;font-size: 13px;">ZIP / POSTAL
                CODE</label><span style="color: red;">*</span>
            <div style="margin-bottom: 10px;" class="input-group mb-3">
                <input style="border-radius: 0;" type="text" placeholder="Zip/Postal Code" class="form-control"
                    id="numberInput" aria-label="Amount (to the nearest dollar)">
            </div>
            <label
                style="color: rgb(100,100,100); margin-top: 10px; margin-bottom: 10px;font-size: 13px;">CITY</label><span
                style="color: red;">*</span>
            <div style="margin-bottom: 10px;" class="input-group mb-3">
                <input style="border-radius: 0;" type="text" placeholder="City" class="form-control" id="numberInput"
                    aria-label="Amount (to the nearest dollar)">
            </div>
            <label style="color: rgb(100,100,100); margin-top: 10px; margin-bottom: 10px;font-size: 13px;">STATE /
                PROVINCE</label><span style="color: red;">*</span>
            <div style="margin-bottom: 10px;" class="input-group mb-3">
                <input style="border-radius: 0;" type="text" placeholder="State/Province" class="form-control"
                    id="numberInput" aria-label="Amount (to the nearest dollar)">
            </div>
            <label style="color: rgb(100,100,100); margin-top: 10px; margin-bottom: 10px;font-size: 13px;">BUILDING
                NUMBER</label><span style="color: red;">*</span>
            <div style="margin-bottom: 10px;" class="input-group mb-3">
                <input style="border-radius: 0;" type="text" placeholder="Building Number" class="form-control"
                    id="numberInput" aria-label="Amount (to the nearest dollar)">
            </div>
            <label style="color: rgb(100,100,100); margin-top: 10px; margin-bottom: 10px;font-size: 13px;">BUILDING
                NAME</label><span style="color: red;">*</span>
            <div style="margin-bottom: 10px;" class="input-group mb-3">
                <input style="border-radius: 0;" type="text" placeholder="Building Name" class="form-control"
                    id="numberInput" aria-label="Amount (to the nearest dollar)">
            </div>
            <label style="color: rgb(100,100,100); margin-top: 10px; margin-bottom: 10px;font-size: 13px;">STREET
                ADDRESS</label><span style="color: red;">*</span>
            <div style="margin-bottom: 10px;" class="input-group mb-3">
                <input style="border-radius: 0;" type="text" placeholder="Street Address" class="form-control"
                    id="numberInput" aria-label="Amount (to the nearest dollar)">
            </div>
            <label style="color: rgb(100,100,100); margin-top: 10px; margin-bottom: 10px;font-size: 13px;">FLOOR / UNIT
                NUMBER</label><span style="color: red;">*</span>
            <div style="margin-bottom: 10px;" class="input-group mb-3">
                <input style="border-radius: 0;" type="text" placeholder="Floor/Unit Number" class="form-control"
                    id="numberInput" aria-label="Amount (to the nearest dollar)">
            </div>
            <input type="checkbox" /> <label
                style="color: rgb(100,100,100); margin-top: 10px; margin-bottom: 10px;font-size: 13px;">Property with no
                FLoor/Unit Number</label>
        </div>
        <div class="footer">
            <div class="footer-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
                </svg>
                GO TO TOP
            </div>
            <div class="footer-body">
                <br /><br />
                <div class="container">
                    <div class="row row-cols-3">
                        <div class="col">
                            <img src="./img/sgp-logo-white.svg" class="footer-logo" />
                            <div style="color: white;">
                                Follow us at:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                </svg>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-col-1">
                                <h7>SEND & RECEIVE</h7>
                                <p>
                                <div>Sending within Singapore</div>
                                <div>Sending Overseas</div>
                                <div>Receive Mail / Parcel</div>
                                </p>
                                <h7>SHOP</h7>
                                <p>
                                <div>Packing Materials</div>
                                <div>Shop Overseas & Ship</div>
                                <div>Home</div>
                                </p>
                                <h7>PAY</h7>
                                <p>
                                <div>Education</div>
                                <div>Government Fines</div>
                                <div>Government Bills</div>
                                <div>Credit Card & Loans</div>
                                <div>Healthcare</div>
                                <div>Insurance</div>
                                <div>Telco</div>
                                <div>Top-Ups</div>
                                <div>Town Council</div>
                                <div>Utilities</div>
                                <div>Others</div>
                                </p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-col-2">
                                <h7>OTHER SERVICES</h7>
                                <p>
                                <div>Financial Services</div>
                                <div>Money Services</div>
                                <div>Applications / Collections</div>
                                </p>
                                <h7>BUSINESS SOLUTIONS</h7>
                                <p>
                                <div>Logistics Solutions</div>
                                <div>Delivery & Returns (Outside of Singapore)</div>
                                <div>Mail Solutions</div>
                                <div>Marketing Solutions</div>
                                <div>Property Solutions</div>
                                </p>
                                <p>
                                    <h7>ABOUT US</h7>
                                </p>
                                <p>
                                    <h7>OUR SUBSIDIARIES</h7>
                                </p>
                                <p>
                                <div>CouriersPlease</div>
                                <div>Famous Holdings</div>
                                <div>Quantium Solutions</div>
                                <div>SP Parcels</div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <p>© 2022 Singapore Post Limited. All Rights Reserved.</p>
                    <p>Support Center | Contact Us | Privacy Policy | Online Security & You | Terms of Use | Sitemap</p>
                </div>
            </div>
    </body>

</html>
