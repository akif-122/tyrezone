<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- BOOTSTRAP 5 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />

    <!-- OWL CAROUSEL  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../admin/assets/css/style.css">

</head>

<body>


    <div class="wrapper">
        <div class="main">
            @includeIf('admin.includes.sidebar')

            <div class="main-wrap" id="mainArea">

            @includeIf('admin.includes.topbar')

                
              
                <div class="content-area mt-5">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Orders</h5>


                    </div>


                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Image</th>
                                    <th>Manufac. Name</th>
                                    <th>Tyre Patteren</th>
                                    <th>fuel Effic.</th>
                                    <th>Wet Grip</th>
                                    <th>Road Noise</th>
                                    <th>Size</th>
                                    <th>Shipping Address</th>
                                    <th>Postcode</th>
                                    <th>Qty</th>
                                    <th>Price</th>

                                </tr>
                            </thead>

                            <tbody>


                                <tr>
                                    <td>Note 10 Pro</td>
                                    <td>Image</td>
                                    <td>Dunlop</td>
                                    <td>ECONO DRIVE</td>
                                    <td>C</td>
                                    <td>B</td>
                                    <td>70</td>
                                    <td>225/45 R17 94Y</td>
                                    <td>User Address</td>
                                    <td>
                                        24420 </td>
                                    <td>4</td>
                                    <td>40000</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


            </div>

        </div>
    </div>

    <!-- JQUERY  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- BOOTSTRAP 5 JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>



    <script>
        let sideBar = document.getElementById("sideBar");
        let sideToggler = document.getElementById("sideToggler");
        let mainArea = document.getElementById("mainArea");
        let closeBtn = document.getElementById("sideCloseBtn");

        sideToggler.addEventListener("click", function (e) {
            sideBar.classList.toggle("none")
            mainArea.classList.toggle("side-none")
        })

        closeBtn.addEventListener("click", function (e) {
            sideBar.classList.remove("none")
            mainArea.classList.remove("side-none")
        })

    </script>

</body>

</html>