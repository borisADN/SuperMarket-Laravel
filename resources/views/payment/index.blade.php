<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
    <h1>Payment Page</h1>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif

    <form action="{{ route('payment.process') }}" method="POST" id="payment-form">
        @csrf
        <label for="amount">Amount (USD):</label>
        <input type="number" name="amount" id="amount" required>
        
        <div id="card-element"></div>

        <button type="submit">Pay Now</button>
    </form>

    <script>
        var stripe = Stripe('{{ config('services.stripe.key') }}');
        var elements = stripe.elements();

        var card = elements.create('card');
        card.mount('#card-element');

        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            
            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error
                    console.error(result.error.message);
                } else {
                    // Send the token to your server
                    var form = document.getElementById('payment-form');
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', result.token.id);
                    form.appendChild(hiddenInput);
                    
                    form.submit();
                }
            });
        });
    </script>
</body>
</html>
