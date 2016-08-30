  
  
  function checkMessage(){
	var a=document.forms["form"]["message"].value;
    if (a==null || a=="")
      {
      alert("Please enter a message");
      return false;
      }  
	  alert("Message Send!");
	  return true;
  }
