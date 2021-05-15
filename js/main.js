// $(document).on("click", ({ target }) => {
//   if ($(target).hasClass("submit")) {
//     var time = new Date();
//     var namejs = document.getElementById("name").value;
//     var meal = document.getElementById("meal").value;
//     // const messageContainer = $("#messageContainer");
//     // template = document.importNode(document.getElementById("messagePart").content, true);
//     // $("#namePart", template).text(`${name}`);
//     // $("#mealPart", template).text(`${meal}`);
//     // $("#timePart", template).text(`${time.getTime()}`);
//     // // console.log(template);
//     // messageContainer.append(template);  
//     var obj = {
//       name = namejs,
//       meal = meal,
//       arriveTime = time.getTime(),
//       isGet = 0
//     };
//     $.ajax({
//       type: "POST",
//       url: './php/add.php',
//       data: obj
//     });
    
//   } else if ($(target).hasClass("confirm")) {
//     var orderId = document.getElementById("sendId").value;
//     $.ajax({
//       type: "POST",
//       url: './php/confirm.php',
//       data: orderId
//     });
//   }
// })

// var id = setInterval(()=>{$.get('./text.json', async(js)=>{
//       $("#messageContainer").find(".container").remove();
//     js.forEach(element => {
//       const messageContainer = $("#messageContainer");
//       template = document.importNode(document.getElementById("messagePart").content, true);
//       $("#textPart", template).text(element["message"]);
//       $("#timePart", template).text(element["time"]);
//       // console.log(template);
//       messageContainer.append(template);
//     });
//     })},1000);
  
// function myAjax(obj) {
     
//  }