const firstTab = document.querySelector('#progress-form_panel-1');
const secondTab = document.querySelector('#progress-form_panel-2');
const details = document.querySelector('.checkout-details');
const checkbox = document.querySelector('input[type="checkbox"]');
const btns = document.querySelectorAll("button");

checkbox.addEventListener("change", function() {
  const checked = this.checked;
  for (const btn of btns) {
    checked ? (btn.disabled = false) : (btn.disabled = true);
  }
});


var form1 = document.getElementById('sheetdb-form');
form1.addEventListener("submit", e => {
e.preventDefault();
fetch("https://sheetdb.io/api/v1/7fhpx4s7kf5wh", {
  method : "POST",
  body: new FormData(document.getElementById("sheetdb-form")),
}).then(
  // response => response.json()
  firstTab.hidden = true
).then(secondTab.removeAttribute('hidden')
).then(details.hidden = true
)
});


function validatePassword(){
    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
  password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
}

     function Paypal()
    {

        var pricee = sessionStorage.getItem("price");
         alert(pricee);

    }
    
