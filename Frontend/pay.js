document.getElementById('payment-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    const paymentMethod = document.getElementById('payment-method').value;
    const cardholderName = document.getElementById('card-name').value;
    const cardNumber = document.getElementById('card-number').value;
    const expiryDate = document.getElementById('expiry-date').value;
    const cvv = document.getElementById('cvv').value;

    // Validate cardholder name (only letters)
    const nameRegex = /^[A-Za-z\s]+$/;
    if (paymentMethod === 'credit-debit-card' && !nameRegex.test(cardholderName)) {
      alert('Please enter a valid cardholder name (letters only).');
      return;
    }

    // Validate card number (only digits and length 16)
    const cardNumberRegex = /^\d{16}$/;
    if (paymentMethod === 'credit-debit-card' && !cardNumberRegex.test(cardNumber)) {
      alert('Please enter a valid 16-digit card number.');
      return;
    }

    // Validate expiry date (MM/YY format)
    const expiryRegex = /^(0[1-9]|1[0-2])\/\d{2}$/;
    if (paymentMethod === 'credit-debit-card' && !expiryRegex.test(expiryDate)) {
      alert('Please enter a valid expiry date in MM/YY format.');
      return;
    }

    // Validate CVV (only 3 digits)
    const cvvRegex = /^\d{3}$/;
    if (paymentMethod === 'credit-debit-card' && !cvvRegex.test(cvv)) {
      alert('Please enter a valid 3-digit CVV.');
      return;
    }

    let successMessage = '';

    // Determine success message based on payment method
    if (paymentMethod === 'cod') {
      successMessage = 'Order placed successfully! Thank you for choosing Cash on Delivery.';
    } else if (paymentMethod === 'credit-debit-card') {
      successMessage = 'Payment Successful! Thank you for your purchase.';
    }

    alert(successMessage); // Show alert with success message

    // Optionally reset the form
    this.reset();
});

// Toggle card details visibility based on payment method
document.getElementById('payment-method').addEventListener('change', function() {
    const cardDetails = document.getElementById('card-details');
    const payButton = document.querySelector('button[type="submit"]');

    if (this.value === 'cod') {
      cardDetails.classList.add('hidden'); // Hide card details for COD
      payButton.textContent = 'Submit'; // Change button text to Submit for COD
    } else if (this.value === 'credit-debit-card') {
      cardDetails.classList.remove('hidden'); // Show card details for credit/debit card
      payButton.textContent = 'Pay Now'; // Change button text to Pay Now for card payment
    }
});

// Prevent non-letter input for cardholder name
document.getElementById('card-name').addEventListener('input', function() {
    this.value = this.value.replace(/[^A-Za-z\s]/g, ''); // Allow only letters and spaces
});

// Prevent non-digit input for card number, expiry date, and CVV
document.getElementById('card-number').addEventListener('input', function() {
    this.value = this.value.replace(/\D/g, ''); // Allow only digits
});

document.getElementById('expiry-date').addEventListener('input', function() {
    this.value = this.value.replace(/[^0-9\/]/g, ''); // Allow only digits and /
});

document.getElementById('cvv').addEventListener('input', function() {
    this.value = this.value.replace(/\D/g, ''); // Allow only digits
});
