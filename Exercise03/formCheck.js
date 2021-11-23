function cole() {
alert("hhhe");
}

function updateCart(val, label) {

  if (label == 'BPF')
  {
    document.getElementById("1").innerHTML = "Bissell PowerForce ------------------------ " + val + "x";
  }
  else if (label == 'DD')
  {
    document.getElementById("2").innerHTML = "Dirt Devil -------------------------------- " + val + "x";

  }
  else if (label == 'B31')
  {
    document.getElementById("3").innerHTML = "Bissell 3-in-1 ---------------------------- " + val + "x";

  }
  else if (label == 'shark')
  {
    document.getElementById("4").innerHTML = "Shark Pro Swivel -------------------------- " + val + "x";
  }
  else if (label == 'eureka')
  {
    document.getElementById("5").innerHTML = "Eureka FloorRover ------------------------- " + val + "x";
  }
  else if (label == 'hoov')
  {
    document.getElementById("6").innerHTML = "Hoover WindTunnel ------------------------- " + val + "x";
  }
}