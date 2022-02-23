function validateEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

function insertBefore (element, htmlString) {
  element.insertAdjacentHTML("beforebegin", htmlString);
} 
function insertAfter (element, htmlString) {
  element.insertAdjacentHTML("afterend", htmlString);
} 
function validateTel(phone) {
  const re = /^[\+]?[(]?[0-9]{2,4}[)]?[-\s\.]?[0-9]{2,4}[-\s\.]?[0-9]{2,6}$/im;
  return re.test(phone);
}
function removeElementsByClass(className){
  var elements = document.getElementsByClassName(className);
  while(elements.length > 0){
      elements[0].parentNode.removeChild(elements[0]);
  }
}

function validate() {
  var flag = true;
  removeElementsByClass("error-txt");
  var node = document.createElement("div");  
  node.setAttribute("class", "error-txt");              
  var errornode = document.createTextNode("必須項目を入力してください。");        
  node.appendChild(errornode);                           
  var name = document.getElementById('name').value ;
  var company = document.getElementById('company') ? document.getElementById('company').value : "" ;
  var email = document.getElementById('email').value ;
  var phone = document.getElementById('phone').value ;
  var subject = document.getElementById('subject').value ;
  var message = document.getElementById('message').value ;
  if(name == "" ) {
      flag = false;
      document.getElementById('name').classList.add("error-input");
      insertAfter( document.getElementById("name"), "<div class='error-txt'>" + error_message.name + "</div>");
  }
  if(subject == "" ) {
      flag = false;
      document.getElementById('subject').classList.add("error-input");
      insertAfter( document.getElementById("subject"), "<div class='error-txt'>" + error_message.subject + "</div>");
  }
  if(email == "" ) {
      flag = false;
      document.getElementById('email').classList.add("error-input");
      insertAfter( document.getElementById("email"), "<div class='error-txt'>" + error_message.email1 + "</div>");
  }
  if(email != "" && !validateEmail(email)) {
      flag = false;
      insertAfter( document.getElementById("email"), "<div class='error-txt'>" + error_message.email2 + "</div>");
      document.getElementById('email').classList.add("error-input");
  }
  if(phone != "" && !validateTel(phone)) {
      flag = false;
      insertAfter( document.getElementById("phone"), "<div class='error-txt'>" + error_message.phone + "</div>");
      document.getElementById('phone').classList.add("error-input");
  }
  if(message == "" ) {
    flag = false;
    insertAfter( document.getElementById("message"), "<div class='error-txt'>" + error_message.message + "</div>");
    document.getElementById('message').classList.add("error-input");
  }
  if(flag) {
    document.getElementById('inputData').style.display='none';
    document.getElementById('ensureData').style.display='block';
    document.getElementById('ensureName').value = name;
    var company = document.getElementById('ensureCompany') ? company : "" ;
    document.getElementById('ensurePhone').value = phone;
    document.getElementById('ensureEmail').value = email;
    document.getElementById('ensureSubject').value = subject;
    document.getElementById('ensureMessage').value = message;
    setTimeout(() => {
      document.getElementById("scrollPosition").scrollIntoView({behavior: "smooth"});
    }, 300);
  } else {
      document.getElementById("scrollPosition").scrollIntoView({behavior: "smooth"});
  }
}

function sendForm() {
  var form = document.getElementById('contactForm');
  form.submit();
}

function back() {
  document.getElementById('inputData').style.display='block';
  document.getElementById('ensureData').style.display='none';
  setTimeout(() => {
    document.getElementById("scrollPosition").scrollIntoView({behavior: "smooth"});
  }, 300);
}