let c = 45;

function draw() {
  document.documentElement.style.setProperty('--direction', c++ + 'deg');
  requestAnimationFrame(draw);
}

//read more button

const parentContainer =  document.querySelector('.read-more-container');

parentContainer.addEventListener('click', event=>{

    const current = event.target;

    const isReadMoreBtn = current.className.includes('read-more-btn');

    if(!isReadMoreBtn) return;

    const currentText = event.target.parentNode.querySelector('.read-more-text');

    currentText.classList.toggle('read-more-text--show');

    current.textContent = current.textContent.includes('Read More') ? "Read Less..." : "Read More...";

})



requestAnimationFrame(draw);
const sections = document.querySelectorAll('.section');
const sectBtns = document.querySelectorAll('.controlls');
const sectBtn = document.querySelectorAll('.control');
const allSections = document.querySelectorAll('.main-content');

function PageTransitions()
{
    //button click active class
    for(let i=0; i<sectBtn.length; i++){
        sectBtn[i].addEventListener('click', function(){
            let currentBtn = document.querySelectorAll('.active-btn');
            currentBtn[0].className=currentBtn[0].className.replace('active-btn', '');
            this.className += ' active-btn';
        })
    }

    //sections active
   for (let i = 0; i < allSections.length; i++) {
        allSections[i].addEventListener('click', function (e) {
            const id = e.target.dataset.id;
            if (id) {
                // remove selected from the other buttons
                sectBtns.forEach((btn) => {
                    btn.classList.remove('active');
                });

                e.target.classList.add('active');

                // hide other sections
                sections.forEach((section) => {
                    section.classList.remove('active');
                });

                const element = document.getElementById(id);
                element.classList.add('active');
            }
        });
        //toggle theme
        const themeBtn = document.querySelector('.theme-btn');
        themeBtn.addEventListener('click', ()=>{
            let element = document.body;
            element.classList.toggle('light-mode')
        })
    }

    
}

PageTransitions();




let btns = document.querySelectorAll('.btn');
btns.forEach(btn => {
    btn.addEventListener('mousemove', (e) => {
        let x = e.offsetX;
        let y = e.offsetY;
        let btnWidth = btn.clientWidth;
        let btnHeight = btn.clientHeight;
        let transX = (x - btnWidth / 2);
        let transY = (y - btnHeight / 2);
        btn.style.transform = `translateX(${transX}px) translateY(${transY}px)`;

        let mx = e.pageX - btn.offsetLeft;
        let my = e.pageY - btn.offsetTop;
        btn.style.setProperty('--x' , mx+'px');
        btn.style.setProperty('--y', my+'px');
    });

    btn.addEventListener('mouseout', (e) => {
        btn.style.transform = '';
    });
});


//about us - education 

const carousel = document.querySelector(".carousel");
const arrowBtns = document.querySelectorAll(".wrapper i");
const firstCardWidth = carousel.querySelector(".card").offsetwidth;




let isDragging = false, startX , startScrollLeft;

arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {

    

      carousel.scrollLeft += btn.id === "left" ? -firstCardWidth : firstCardWidth;
    })
});

const dragStart = (e) => {
    isDragging =true;
    carousel.classList.add("dragging");
    startX=e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return ;
    carousel.scrollLeft = startScrollLeft -( e.pageX-startX);
}

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);


// project filter
function filterProjects(category) {
    var projects = document.getElementsByClassName('project');
    for (var i = 0; i < projects.length; i++) {
            var project = projects[i];
            if (category === '' || project.getAttribute('data-category') === category) {
                    project.classList.remove('hidden');
                    project.classList.add('fade-in');
            } else {
                    project.classList.add('hidden');
                    project.classList.remove('fade-in');
            }
    }
}

function toggleFilter() {
    var toggleFilter = document.querySelector('.toggle-filter');
    toggleFilter.classList.toggle('open');
}

// document.addEventListener('DOMContentLoaded', (event) => {
//     const hiddenElements = document.querySelectorAll('.hidden');

//     const observer = new IntersectionObserver((entries) => {
//         entries.forEach((entry) => {
//             console.log(entry);
//             if(entry.isIntersecting) {
//                 entry.target.classList.add('show');
//             } else {
//                 entry.target.classList.remove('show');
//             }
//         });
//     });

//     hiddenElements.forEach((el) => observer.observe(el));
// });

