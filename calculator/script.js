function append(char) {
    document.getElementById("result").value += char;
  }
  
  function clearDisplay() {
    document.getElementById("result").value = "";
  }
  
  function calculate() {
    try {
      const output = eval(document.getElementById("result").value);
      document.getElementById("result").value = output;
    } catch (e) {
      alert("Invalid Expression");
      clearDisplay();
    }
  }
  