// document.getElementById("bookingForm").addEventListener("submit", function(event) {
//     event.preventDefault();

//     let name = document.getElementById("name").value;
//     let email = document.getElementById("email").value;
//     let date = document.getElementById("date").value;
//     let time = document.getElementById("time").value;

//     let formData = new FormData();
//     formData.append("name", name);
//     formData.append("email", email);
//     formData.append("date", date);
//     formData.append("time", time);

//     fetch("book.php", {
//         method: "POST",
//         body: formData
//     })
//     .then(response => response.text())
//     .then(data => {
//         document.getElementById("responseMessage").innerHTML = data;
//     })
//     .catch(error => console.error("Error:", error));
// });
document.getElementById("bookingForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let date = document.getElementById("date").value;
    let time = document.getElementById("time").value;

    let formData = new FormData();
    formData.append("name", name);
    formData.append("email", email);
    formData.append("date", date);
    formData.append("time", time);

    fetch("book.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("responseMessage").innerHTML = data;
    })
    .catch(error => console.error("Error:", error));
});
