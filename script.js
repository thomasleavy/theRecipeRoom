//Newsletter sign up animation section START
document.addEventListener('DOMContentLoaded', function() {
  const newsletter = document.getElementById('newsletter');

  // Function used to see if an element is in the viewport vertically
  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) + 400 // Adjust this to change where it appears on the viewport
    );
  }

  // Function used to handle a scroll event
  function handleScroll() {
    if (isInViewport(newsletter)) {
      newsletter.style.left = '50%'; // Move to the centre of viewport
      newsletter.style.transform = 'translate(-0%, -0%)'; // Ensure it's centered (if it was 50%, 50% it'd slant upwards)
      window.removeEventListener('scroll', handleScroll); // Remove event listener once animation happens
    }
  }

  handleScroll(); // Initial check in case the element is already in the viewport
  window.addEventListener('scroll', handleScroll); // Add scroll event listener
});
//Newsletter sign up animation section END



//About us section appearing from the left side of the viewport START
document.addEventListener('DOMContentLoaded', function() {
  const aboutContainer = document.getElementById('about-container');

  // Function to check if element is in viewport but vertically
  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top >= -100 && // Adjust to change the trigger point
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) + 300 // Adjust trigger point for the about container to appear
    );
  }

  // Function to handle scroll event
  function handleScroll() {
    if (isInViewport(aboutContainer)) {
      aboutContainer.classList.add('visible'); // Come in from left
      window.removeEventListener('scroll', handleScroll); // Get rid of event listener once animation is triggered
    }
  }
//handler
  handleScroll();

  // Listen for scroll events
  window.addEventListener('scroll', handleScroll);
});

//About us section appearing from the left side of the viewport END


// Preparation container START
document.addEventListener('DOMContentLoaded', function() {
  const preparationContainer = document.getElementById('preparation-container');

  setTimeout(function() {
      preparationContainer.classList.add('visible');
  }, 300); // 0.3 second delay
});

// Preparation container END
