// // function sendMail(){
// //     var params = {
// //         name:document.getElementById('name').value,
// //         number:document.getElementById('number').value,
// //         email:document.getElementById('email').value,
// //         subject:document.getElementById('subject').value,
// //         message:document.getElementById('message').value,
// //     };
// //     const serviceID = "re";
// //     const templateID = "sdag";

// //     emailjs
// //         .send(serviceID, templateID, params)
// //         .then((res) => {
// //             document.getElementById('name').value = "";
// //             document.getElementById('number').value ="";
// //             document.getElementById('email').value ="";
// //             document.getElementById('subject').value ="";
// //             console.log(res);
// //             alert(" your message was sent successfully")
// //         })
// //         .catch((err) =>  console.log(err));
// // }

// function sendMail() {
//   var params = {
//     name: document.getElementById("name").value,
//     number: document.getElementById("number").value,
//     email: document.getElementById("email").value,
//     subject: document.getElementById("subject").value,
//     message: document.getElementById("message").value,
//   };
//   const serviceID = "service_uqvb615";
//   const templateID = "template_70ljhdt";

//   emailjs
//     .send(serviceID, templateID, params)
//     .then((res) => {
//       document.getElementById("name").value = "";
//       document.getElementById("number").value = "";
//       document.getElementById("email").value = "";
//       document.getElementById("subject").value = "";
//       console.log(res);
//       alert("Your message was sent successfully");
//     })
//     .catch((err) => console.log(err));
// }
sendMail = () => {
  var params = {
    name: document.getElementById("name").value,
    number: document.getElementById("number").value,
    email: document.getElementById("email").value,
    subject: document.getElementById("subject").value,
    message: document.getElementById("message").value,
  };

const serviceID = "service_uqvb615";
const templateID = "template_70ljhdt";


  document.getElementById("user").innerHTML =
    document.getElementById("name").value;
  emailjs
    .send(serviceID, templateID, params)
    .then(() => {
      console.log("successfully");
      $("#myModal").modal("show");
      document.getElementById("name").value = "";
      document.getElementById("number").value = "";
      document.getElementById("email").value = "";
      document.getElementById("subject").value = "";
      document.getElementById("message").value = "";
    })
    .catch((error) => {
      console.log("failed", error);
    });
};
