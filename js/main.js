

$(document).on("click", ({ target }) => {
  if ($(target).hasClass("submit")) {
    var time = new Date();
    var stri = document.getElementById("messageToSend").value;
    const messageContainer = $("#messageContainer");
    template = document.importNode(document.getElementById("messagePart").content, true);
    $("#textPart", template).text(`${stri}`);
    $("#timePart", template).text(`${time.getTime()}`);
    // console.log(template);
    messageContainer.append(template);  
    var obj = {
      message: stri,
      time: time.getTime()
    };
    $.ajax({
      type: "POST",
      url: './add.php',
      data: obj
    });
    
  }
})

var id = setInterval(()=>{$.get('/js/text.json', async(js)=>{
      $("#messageContainer").find(".container").remove();
    js.forEach(element => {
      const messageContainer = $("#messageContainer");
      template = document.importNode(document.getElementById("messagePart").content, true);
      $("#textPart", template).text(element["message"]);
      $("#timePart", template).text(element["time"]);
      // console.log(template);
      messageContainer.append(template);
    });
    })},1000);
  
function myAjax(obj) {
     
 }