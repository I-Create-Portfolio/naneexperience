// Wait for the page to load before executing the code inside the function
document.addEventListener("DOMContentLoaded", function () {
  // Get the hour, minute, and second hand elements from the HTML document
  const hourHand = document.querySelector(".hour-hand");
  const minuteHand = document.querySelector(".minute-hand");
  const secondHand = document.querySelector(".second-hand");

  // Define a function that will be called repeatedly to update the clock hands
  function setDate() {
    // Get the current time as a Date object
    const now = new Date();

    // Calculate the angle in degrees for the second hand based on the current seconds
    const seconds = now.getSeconds();
    const secondsDegrees = (seconds / 60) * 360 + 90;

    // Set the transform style of the second hand element to rotate it to the correct angle
    secondHand.style.transform = `rotate(${secondsDegrees}deg)`;

    // Calculate the angle in degrees for the minute hand based on the current minutes and seconds
    const minutes = now.getMinutes();
    const minutesDegrees = (minutes / 60) * 360 + (seconds / 60) * 6 + 90;

    // Set the transform style of the minute hand element to rotate it to the correct angle
    minuteHand.style.transform = `rotate(${minutesDegrees}deg)`;

    // Calculate the angle in degrees for the hour hand based on the current hours, minutes, and seconds
    const hours = now.getHours();
    const hoursDegrees = (hours / 12) * 360 + (minutes / 60) * 30 + 90;

    // Set the transform style of the hour hand element to rotate it to the correct angle
    hourHand.style.transform = `rotate(${hoursDegrees}deg)`;
  }

  // Call the setDate function every 1000 milliseconds (1 second) to update the clock hands
  setInterval(setDate, 1000);
});
