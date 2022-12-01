arrbulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
date = new Date();
hari = date.getDay();
tanggal = date.getDate();
bulan = date.getMonth();
tahun = date.getFullYear();
document.write(tanggal + "-" + arrbulan[bulan] + "-" + tahun);

const target = document.querySelector(".target");
const links = document.querySelectorAll(".mynav a");
const colors = ["deepskyblue", "orange", "firebrick", "gold", "magenta", "black", "darkblue"];
