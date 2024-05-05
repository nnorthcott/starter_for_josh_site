gsap.registerPlugin(ScrollTrigger);


window.addEventListener("load", function() {
    const tl = gsap.timeline({
        scrollTrigger: {
         trigger: '.aboutbg',
         markers:true,
         start:"bottom 90%", 
         end:"top 30%",
         scrub:3, 
              }
      
 });
 
 tl.from('.about-text',{
     duration:1,
          y:250,
     opacity:0,
 }).from('.blocker',{
     duration:1,
     x:250,
 opacity:0,
 });
            
});