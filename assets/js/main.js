//Javascript Function Parameters
function fn1() {

  //delcaring the variables to hold the result values
  let s0, s1, s2, s3;


  //FIRST PART

  //This is to check whether more than 7 elements are selected in the left option
  //The ids for all the left radio buttons are odd and i'm using left selected to count the number of left radio buttons slected
  let leftSelected = 0;

  for (let i = 1; i <= 29; i += 2) {
    if (document.getElementById(`rd${i}`).checked) {
      leftSelected++;
    }
  }
  if (leftSelected > 7) {
    s0 = 'E';
  } else {
    s0 = 'I';
  }

  //SECOND PART

  //This is to check whether more than 7 elements are selected in the left option
  //The ids for all the left radio buttons are odd and i'm using left selected to count the number of left radio buttons slected
  let left1Selected = 0;
  for (let i = 31; i <= 59; i += 2) {
    if (document.getElementById(`rd${i}`).checked) {
      left1Selected++;
    }
  } if (left1Selected > 7) {
    s1 = 'S';
  } else {
    s1 = 'I';
  }


  //THIRD PART

  //This is to check whether more than 7 elements are selected in the left option
  //The ids for all the left radio buttons are odd and i'm using left selected to count the number of left radio buttons slected
  let left2Selected = 0;

  for (let i = 61; i <= 89; i += 2) {
    if (document.getElementById(`rd${i}`).checked) {
      left2Selected++;
    }
  } if (left2Selected > 7) {
    s2 = 'T';
  } else {

    s2 = 'F';
  }


  //FOURTH PART

  //This is to check whether more than 7 elements are selected in the left option
  //The ids for all the left radio buttons are odd and i'm using left selected to count the number of left radio buttons slected
  let left3Selected = 0;

  for (let i = 91; i <= 119; i += 2) {
    if (document.getElementById(`rd${i}`).checked) {
      left3Selected++;
    }
  } if (left3Selected > 7) {
    s3 = 'J';
  } else {
    s3 = 'P';
  }

  //Summation of all the results from the previous pages
  var a = s0 + s1 + s2 + s3;
  window.location.href = window.location.href+'?a='+a;
  //Displaying the result to the User
  alert(result);


  // var xhr = new XMLHttpRequest();

  // //👇 set the PHP page you want to send data to
  // xhr.open("POST", "./includes/submit.php", true);
  // xhr.setRequestHeader("Content-Type", "application/json");

  // //👇 what to do when you receive a response
  // xhr.onreadystatechange = function () {
  //   if (xhr.readyState == XMLHttpRequest.DONE) {
  //     alert(xhr.responseText);
  //   }
  // };
}

const info = document.querySelector(".alert-info");

function process(event) {
  event.preventDefault();

  const phoneNumber = phoneInput.getNumber();

  info.style.display = "";
  info.innerHTML = `Phone number in E.164 format: <strong>${phoneNumber}</strong>`;
}