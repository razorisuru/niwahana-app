let sqft = 0;
let cost = 0;


setInterval(function multiply() {
  let i1 = document.getElementById("i1").value;
  let i2 = document.getElementById("i2").value;
  let i3 = document.getElementById("i3").value;
  let i4 = document.getElementById("i4").value;
  let l1 = document.getElementById("l1").value;
  let w1 = document.getElementById("w1").value;
  let l2 = document.getElementById("l2").value;
  let w2 = document.getElementById("w2").value;
  let l3 = document.getElementById("l3").value;
  let w3 = document.getElementById("w3").value;
  let l4 = document.getElementById("l4").value;
  let w4 = document.getElementById("w4").value;

  let ilw1 = i1 * l1 * w1;
  let ilw2 = i2 * l2 * w2;
  let ilw3 = i3 * l3 * w3;
  let ilw4 = i4 * l4 * w4;

  let sqft = ilw1 + ilw2 + ilw3 + ilw4;
  // Cost for 1 square foot
  let sqft1 = 5000;
  let cost = sqft * sqft1;


  document.getElementById("ilw1").innerHTML = " = " + " " + ilw1 + "ft²";
  document.getElementById("ilw2").innerHTML = " = " + " " + ilw2 + "ft²";
  document.getElementById("ilw3").innerHTML = " = " + " " + ilw3 + "ft²";
  document.getElementById("ilw4").innerHTML = " = " + " " + ilw4 + "ft²";

  document.getElementById("sqft").innerHTML = "Total sq. ft : " + sqft + "ft²";
  document.getElementById("sqft1").innerHTML = "Cost for 1 sq. ft : Rs " + sqft1 + ".00";
  document.getElementById("cost").innerHTML = "Total Cost : Rs " + cost + ".00";

  document.getElementById("sqftmodal").innerHTML = "Total sq. ft : " + sqft + "ft²";


}, 500);

function updateTotal(percentage) {
  let cost = parseFloat(document.getElementById('cost').textContent.split("Rs ")[1]);
  let fcost = cost + (cost * percentage);
  document.getElementById("fcost").innerHTML = " Rs " + fcost + ".00";
}
function updateTotal2(percentage) {
  let fcost = parseFloat(document.getElementById('fcost').textContent.split("Rs ")[1]);
  let fcost2 = fcost + (fcost * percentage);
  document.getElementById("fcost2").innerHTML = " Rs " + fcost2 + ".00";
}

function updateTotal3(percentage) {
  let fcost2 = parseFloat(document.getElementById('fcost2').textContent.split("Rs ")[1]);
  let fcost3 = fcost2 + (fcost2 * percentage);
  document.getElementById("fcost3").innerHTML = " Rs " + fcost3 + ".00";
  document.getElementById("modalcost").innerHTML = " Rs " + fcost3 + ".00";


}



  
  
  
  
  
  

  
  
