function showPrint(url, width = 700, height = 500){
  window.open(url, 'newwindow','width=' + width + ',height=' + height); 
  return false;
}
function cetakKwitansi(url, width = 700, height = 500){
  url += "&waktu=" + moment().format('HH:mm') + "&tanggal=" + moment().format('Do MMMM YYYY')
  return showPrint(url, width, height);
}
