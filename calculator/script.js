// script.js

function appendToDisplay(value) {
    const display = document.getElementById("display");
    display.value += value;
  }
  
  function clearDisplay() {
    document.getElementById("display").value = "";
  }
  
  function calculate() {
    const display = document.getElementById("display");
    let expression = display.value;
  
    // Replace ^ with ** for exponentiation
    expression = expression.replace(/\^/g, '^');
  
    try {
      // Use Math.js to evaluate the expression
      display.value = math.evaluate(expression);
    } catch (error) {
      display.value = "Error";
    }
  }
  