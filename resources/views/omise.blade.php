{{-- <html>
<head>
</head>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<body>
    <?php  $amount = 300 ?>
<form name="checkoutForm" method="POST" action="{{ route('addDepartment') }}">
    @csrf
    <input type="hidden" name="amount" value="<?php echo $amount?>">

      <script type="text/javascript" src="https://cdn.omise.co/omise.js"
    data-key="pkey_test_5vuc5ef7isx31v174y5"
    data-image="http://bit.ly/customer_image"
    data-frame-label="Merchant site name"
    data-button-label="Pay now"
    data-submit-label="Submit"
    data-location="no"
    data-amount="<?php echo $amount ?>00"
    data-currency="thb"
    data-locale="TH"
	data-other-payment-methods="promptpay"
    >
    $(document).ready(function() {
        window.addEventListener('load', function () {
            document.getElementByClass("omise-checkout-button").click();
        })
    }
  </script>
</form>
</body>
</html> --}}
<!doctype html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">

        <title></title>

    </head>

    <body>
        <?php  $amount = $price ?>
        <div class="container">
            <form id="checkoutForm" method="POST" action="{{ route('addDepartment') }}">
                @csrf
                <input type="hidden" name="omiseToken">
                <input type="hidden" name="omiseSource">
                <input type="hidden" name="amount" id="amount" value="<?php echo $amount?>">
                <button style="display: none" type="submit" id="checkoutButton">Checkout</button>
              </form>

              <script type="text/javascript" src="https://cdn.omise.co/omise.js">
              </script>
              <script>
                  window.addEventListener('load', function () {
                    document.getElementById("checkoutButton").click();
                })
                OmiseCard.configure({
                    publicKey: "pkey_test_5vuc5ef7isx31v174y5"
                });

                var button = document.querySelector("#checkoutButton");
                var form = document.querySelector("#checkoutForm");
                var amount = document.getElementById("amount").value;

                button.addEventListener("click", (event) => {
                  event.preventDefault();
                  OmiseCard.open({
                    amount: amount*100,
                    currency: "THB",
	                locale: "TH",
	                submitLabel: "ชำระเงิน",
	                otherPaymentMethods: "promptpay",
                    defaultPaymentMethod: "credit_card",
                    onCreateTokenSuccess: (nonce) => {
                        if (nonce.startsWith("tokn_")) {
                            form.omiseToken.value = nonce;
                        } else {
                            form.omiseSource.value = nonce;
                        };
                      form.submit();
                    }
                  });
                });
              </script>
        </div>

        {{-- <script type="text/javascript" src="https://cdn.omise.co/omise.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>

	$(document).ready(function() {
        // window.addEventListener('load', function () {
        //     document.getElementById("checkoutButton").click();
        // })

	    OmiseCard.configure({

	        publicKey: "pkey_test_5vuc5ef7isx31v174y5"

	    });

	    var button = document.querySelector("#checkoutButton");

	    var form = document.querySelector("#checkoutTrueWallet");

        var amount = document.getElementById("amount").value;
	    button.addEventListener("click", (event) => {

	        event.preventDefault();

	        OmiseCard.open({

	            amount: amount*100, // จำนวนเงิน 300 ต้องระบุเป็น 30000 หรือ คูณด้วย 100

	            currency: "THB",

	            locale: "TH",

	            submitLabel: "ชำระเงิน",

	            defaultPaymentMethod: "truemoney", // สามารถใช้เป็น rabbit_linepay, promptpay,credit_card

	            otherPaymentMethods: "promptpay", // สามารถใช้เป็น rabbit_linepay, promptpay,credit_card

	            frameDescription: "ร้าน Matumweb",

	            // image: "img/logo.img",

	            onCreateTokenSuccess: (nonce) => {
	                if (nonce.startsWith("tokn_")) {
                        alert("1");

	                    form.omiseToken.value = nonce;

	                } else {
                        alert("2");

	                    form.omiseSource.value = nonce;

	                };

	                form.submit();

	            }

                    });

                });

            });

        </script> --}}


        </body>

</html>
