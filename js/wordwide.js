// Show/hide back-to-top button based on scroll position
window.addEventListener('scroll', function() {
    const backToTop = document.getElementById('backToTop');
    if (window.pageYOffset > 300) {
        backToTop.classList.add('active');
    } else {
        backToTop.classList.remove('active');
    }
  });
  
  // Smooth scroll to top
  document.getElementById('backToTop').addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
    
    // Trigger take-off animation
    const plane = this.querySelector('.bi-airplane');
    plane.style.animation = 'none';
    void plane.offsetWidth; // Trigger reflow
    plane.style.animation = 'takeOff 0.5s ease-out forwards';
    
    // Reset animation after completion
    setTimeout(() => {
        plane.style.animation = '';
    }, 500);
  });
  
  $(document).bind("contextmenu",function(e) {
    e.preventDefault();
   });
   
   $(document).keydown(function(e){
       if(e.which === 123){
          return false;
       }
   });