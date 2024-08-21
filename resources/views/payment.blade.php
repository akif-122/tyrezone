<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div>{{ $errors->first() }}</div>
    @endif

    <form action="{{ route('payment.process') }}" method="POST" id="payment-form">
        @csrf

        <div id="card-element"></div> <!-- Stripe Card Element -->

        <button type="submit">Pay</button>
    </form>

    <script>
        var stripe = Stripe('{{ env('STRIPE_KEY') }}');
        var elements = stripe.elements();

        var cardElement = elements.create('card');
        cardElement.mount('#card-element');

        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(cardElement).then(function(result) {
                if (result.error) {
                    // Show error in payment form
                    alert(result.error.message);
                } else {
                    // Send the token to your server
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', result.token.id);
                    form.appendChild(hiddenInput);

                    // Submit the form
                    form.submit();
                }
            });
        });
    </script>
</body>
</html>
