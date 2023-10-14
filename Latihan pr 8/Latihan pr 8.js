function hitungLingkaran() {
  var radius = parseFloat(document.getElementById("radius").value);
  var keliling = 2 * Math.PI * radius;
  var luas = Math.PI * radius * radius;
  document.getElementById("keliling").textContent = keliling.toFixed(2);
  document.getElementById("luas").textContent = luas.toFixed(2);
}

function hitungKubus() {
  var side = parseFloat(document.getElementById("side").value);
  var volume = side * side * side;
  document.getElementById("volume").textContent = volume.toFixed(2);
}

const lingkaranText = document.querySelector(".title-text .lingkaran");
const lingkaranForm = document.querySelector("form.lingkaran");
const lingkaranBtn = document.querySelector("label.lingkaran");
const kubusBtn = document.querySelector("label.kubus");
kubusBtn.onclick = () => {
  lingkaranForm.style.marginLeft = "-50%";
  lingkaranText.style.marginLeft = "-50%";
};
lingkaranBtn.onclick = () => {
  lingkaranForm.style.marginLeft = "0%";
  lingkaranText.style.marginLeft = "0%";
};
