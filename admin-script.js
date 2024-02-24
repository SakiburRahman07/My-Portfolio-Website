const  sideMenu = document.querySelector('aside');
const menuBtn = document.querySelector('#menu_bar');
const closeBtn = document.querySelector('#close_btn');


const themeToggler = document.querySelector('.theme-toggler');



menuBtn.addEventListener('click',()=>{
       sideMenu.style.display = "block"
})
closeBtn.addEventListener('click',()=>{
    sideMenu.style.display = "none"
})

themeToggler.addEventListener('click',()=>{
     document.body.classList.toggle('dark-theme-variables')
     themeToggler.querySelector('span:nth-child(1').classList.toggle('active')
     themeToggler.querySelector('span:nth-child(2').classList.toggle('active')
})

document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".sidebar a").click();
});

//about me page 
// document.getElementById("about-me-btn").addEventListener("click", function(){
//     console.log("Button clicked"); // Debugging line
//     selectItem("about-me-btn");
//     let data = "yo yo pops here";

//     let contentElement = document.getElementById("about-me-description");
//     console.log(contentElement); // Debugging line
//     if(contentElement) {
//         contentElement.innerHTML = data;
//     }
// });

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("about-me-btn").addEventListener("click", function(){
        console.log("Button clicked"); // Debugging line
        selectItem("about-me-btn");
        let data = "yo yo pops here";

        let contentElement = document.querySelector(".about-me-content");
        console.log(contentElement); // Debugging line
        if(contentElement) {
            document.getElementById("about-me-description").innerHTML = data;
            contentElement.style.display = "block"; // Make the div visible
            console.log("Element should now be visible"); // Debugging line
        } else {
            console.log("Element not found"); // Debugging line
        }
    });
});


function selectItem(id){
    document.querySelectorAll(".sidebar a").forEach(function(a){
        a.classList.remove("selected");
    });
    document.getElementById(id).classList.add("selected");
}

document.addEventListener("DOMContentLoaded", function() {
    // Get all links in the sidebar
    let links = document.querySelectorAll(".sidebar a");

    // Add event listener to each link
    links.forEach(function(link) {
        link.addEventListener("click", function(e) {
            // Prevent the default action
            e.preventDefault();

            // Remove active class from all links
            links.forEach(function(link) {
                link.classList.remove("active");
            });

            // Add active class to the clicked link
            this.classList.add("active");
        });
    });
});