//Newsletter sign up animation section

document.addEventListener('DOMContentLoaded', function() {
  const newsletter = document.getElementById('newsletter');

  // Function to check if an element is in viewport vertically
  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) + 400 //Adust this to change where it appears on the viewport
    );
  }

  // Function to handle scroll event
  function handleScroll() {
    if (isInViewport(newsletter)) {
      newsletter.style.marginLeft = '0'; // Slide in from left
      window.removeEventListener('scroll', handleScroll); // Remove event listener once animation is triggered
    }
  }
  // Initial check on page load
  handleScroll();
  // Listen for scroll events
  window.addEventListener('scroll', handleScroll);
});




//About us section appearing from the left side of the viewport
document.addEventListener('DOMContentLoaded', function() {
  const aboutContainer = document.getElementById('about-container');

  // Function to check if an element is in viewport vertically
  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top >= -100 && // Adjust this value to change the trigger point
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) + 400 // Adjust this value to change the trigger point
    );
  }

  // Function to handle scroll event
  function handleScroll() {
    if (isInViewport(aboutContainer)) {
      aboutContainer.classList.add('visible'); // Slide in from left
      window.removeEventListener('scroll', handleScroll); // Remove event listener once animation is triggered
    }
  }

  // Initial check on page load
  handleScroll();

  // Listen for scroll events
  window.addEventListener('scroll', handleScroll);
});


// Preparation container
document.addEventListener('DOMContentLoaded', function() {
  const preparationContainer = document.getElementById('preparation-container');

  setTimeout(function() {
      preparationContainer.classList.add('visible');
  }, 300); // Delay of 0.3 seconds
});


