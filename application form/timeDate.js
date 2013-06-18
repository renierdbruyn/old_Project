function showDate() {
    var currentDate = new Date()
    var day = currentDate.getDate()
    var month = currentDate.getMonth() + 1
    var year = currentDate.getFullYear()
    var displayDate = day + "/" + month + "/" + year;
    document.getElementById("txtDate").value = displayDate;
}
