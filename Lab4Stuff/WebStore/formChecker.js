function formCheck()
{
var username = document.getElementById("username");
var password = document.getElementById("password");
var storeStore = document.getElementById("storeStore");
var normalStore = document.getElementById("normalStore");
var random = document.getElementById("random");
var shippingFree = document.getElementById("shippingFree");
var shippingOver = document.getElementById("shippingOver");
var shippingThree = document.getElementById("shippingThree");
var webCheck = /[abcdefghijklmnopqrstuvwxyz 123456789]+@[abcdefghijklmnopqrstuvwxyz 123456789]+.[abcdefghijklmnopqrstuvwxyz 123456789]+/i;
if(storeStore.value !== "" && normalStore.value !== "" && random.value !== "" && password.value !== "")
{
  if (shippingFree.checked || shippingOver.checked || shippingThree.checked)
  {
      if (webCheck.test(username.value))
      {
        alert("everythingworks");
      }
  }
}

}
