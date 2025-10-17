
setTimeout(() => {
    console.log("JAVASCRIPT IS WORKING with setttimeout function");
}, 1000);
$(function() {
    $('#hamburger').on('click', function() {
        console.log('clicking');
      $(this).toggleClass('close');
      $('nav').toggleClass('visible');
    });
  });

  // Set the target date and time
  const targetDate = new Date("November 14, 2025 16:00:00").getTime();
  console.log('target date', targetDate);

  // Update the countdown every second
  const countdown = setInterval(() => {
    const now = new Date().getTime();
    const distance = targetDate - now;

    // Calculate time parts
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display result
    document.getElementById("countdown").innerHTML = 
      `${days}d ${hours}h ${minutes}m ${seconds}s`;

    // If countdown is over
    if (distance < 0) {
      clearInterval(countdown);
      document.getElementById("countdown").innerHTML = "Time's up!";
    }
  }, 1000);
