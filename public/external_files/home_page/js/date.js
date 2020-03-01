function getInputDateFormat(date) {
    return date.toISOString().split('T')[0];
  }
  
  function validDate() {
    var today = new Date();
    var unDate = new Date();
    unDate.setDate(unDate.getDate() + 14);
  
    document.getElementsByName("date")[0].setAttribute('min', getInputDateFormat(unDate));
    
  }