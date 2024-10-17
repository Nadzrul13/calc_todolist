function calculateSum() {
    // Get the values from the input fields
    const num1 = parseFloat(document.getElementById("num1").value);
    const num2 = parseFloat(document.getElementById("num2").value);

    // Check if inputs are valid numbers
    if (isNaN(num1) || isNaN(num2)) {
      alert("Please enter valid numbers.");
      return;
    }

    // Calculate the sum
    const sum = num1 + num2;

    // Display the result
    document.getElementById("result").textContent = sum;
  }