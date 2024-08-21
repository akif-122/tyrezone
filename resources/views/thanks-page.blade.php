<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('thanks.css') }}">

</head>

<body>

    <div class="wrapper">
        <section class="thanks-wrapper">
            <div class="container">
                

                <div class="thanks text-center">
                    <img src="assets/imgs/tick.gif" alt="">
                    <h5>Thank You!</h5>
                    <p>Your order has been received successfully.</p>
                </div>


                <div class="order-banner">
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <h5>Your Order is <span class="badge bg-warning fw-semibold text-dark" style="background: #fdac04 !important;">Received</span> <img
                                    src="assets/imgs/live.gif" alt=""></h5>
                                
                            <div class="table-responsive">
                                <table class="table table-bordered order-table">
                                    <thead>
                                        <tr>
                                            <th>Order #</th>
                                            <th>Product Name</th>
                                            <th>Product Image</th>
                                            <th>Product Price</th>
                                            <th>Payment Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#4489</td>
                                            <td>Product Name here</td>
                                            <td>
                                                <img src="" width="40px" style="width: 50px;" alt="">
                                            </td>
                                            <td>$ 1200</td>
                                            <td>Pending</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                                    
                            <h4>What happens next?</h4>
                            <p>One of our expert will call you in the next 20 minutes to confirm the order. Please make sure you answer the call for swift solution.</p>
                            
                        </div>
                    </div>
                </div>

              


            </div>
        </section>
    </div>

</body>

</html>