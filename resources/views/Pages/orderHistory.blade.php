@extends('layouts.master')
@section('name', 'Login')
@section('content')

<!DOCTYPE html>
<!-- THIS IS NOT BEING USED LEAVE IT FOR COMMITMENT ONLY-->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <title>Order History</title>
  </head>
  <body>

    <div class="containerFluid mt-80">
      <div class="rows">
        <div class="col-md-12">
          <div class="OrderHistory">
            <div class="orderHeader">
              <h5>Order-History</h5>
            </div>
            <div class="orderBody order">
              <div class="col-sm-12 empty-order-cls text-center">
                <img
                  src="Order-history.png"
                  width="110"
                  height="110"
                  class="image-fluid mb-3 mr-2"
                />
                <h3>
                  <strong>Please sign in to view the order history.</strong>
                </h3>
                <!--Please add link to go back to the products page-->
                <a
                  href="#"
                  class="btn btn-primary basket-btn-transform m-2"
                  data="true"
                  >Login</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
@endsection