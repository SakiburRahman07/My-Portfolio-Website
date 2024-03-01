// // nav background
// let header = document.querySelector("header");

// window.addEventListener("scroll", () => {
//     header.classList.toggle("shadow", window.scrollY > 0)
// })

// //Filter
// $(document).ready(function () {
//     $(".filter-item").click(function () {
//         const value = $(this).attr("data-filter");
//         if (value == "all"){
//             $(".post-box").show("1000")
//         } else{
//             $(".post-box")
//                 .not("." + value)
//                 .hide(1000);
//             $(".post-box")
//             .filter("." + value)
//             .show("1000")
//         }
//     });
//     $(".filter-item").click(function () {
//         $(this).addClass("active-filter").siblings().removeClass("active-filter")
//     });
// });

// nav background
let header = document.querySelector("header");

window.addEventListener("scroll", () => {
    header.classList.toggle("shadow", window.scrollY > 0)
})

//Filter
document.addEventListener("DOMContentLoaded", function() {
    let filterItems = document.querySelectorAll(".filter-item");
    let postBoxes = document.querySelectorAll(".post-box");

    filterItems.forEach(filterItem => {
        filterItem.addEventListener("click", function() {
            let value = this.getAttribute("data-filter");

            if (value == "all") {
                postBoxes.forEach(postBox => {
                    postBox.style.display = "block";
                });
            } else {
                postBoxes.forEach(postBox => {
                    if (!postBox.classList.contains(value)) {
                        postBox.style.display = "none";
                    } else {
                        postBox.style.display = "block";
                    }
                });
            }

            filterItems.forEach(item => {
                item.classList.remove("active-filter");
            });

            this.classList.add("active-filter");
        });
    });
});

postBoxes.forEach(postBox => {
    if (!postBox.classList.contains(value)) {
      postBox.style.display = "none";
      postBox.classList.remove("fade-in");
    } else {
      postBox.style.display = "block";
      postBox.classList.add("fade-in");
    }
  });

  postBoxes.forEach(postBox => {
    if (!postBox.classList.contains(value)) {
      postBox.style.display = "none";
      postBox.classList.remove("fade-in");
    } else {
      postBox.style.display = "block";
      postBox.classList.remove("fade-in");
      // Use setTimeout to allow the browser to update the display property before adding the class
      setTimeout(() => postBox.classList.add("fade-in"), 0);
    }
  });


  