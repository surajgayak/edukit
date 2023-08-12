function nextSection(nextSectionId) {
    const currentSection = document.querySelector(
        '.form-section:not([style*="display: none"])'
    );
    currentSection.style.display = "none";

    const nextSection = document.getElementById(nextSectionId);
    nextSection.style.display = "block";
}

function prevSection(prevSectionId) {
    const currentSection = document.querySelector(
        '.form-section:not([style*="display: none"])'
    );
    currentSection.style.display = "none";

    const prevSection = document.getElementById(prevSectionId);
    prevSection.style.display = "block";
}

document.addEventListener("DOMContentLoaded", function () {
    const expandIcons = document.querySelectorAll(".expand-icon");

    expandIcons.forEach((icon) => {
        icon.addEventListener("click", function () {
            const content = icon.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
                icon.classList.remove("fa-chevron-up");
                icon.classList.add("fa-chevron-down");
            } else {
                content.style.display = "block";
                icon.classList.remove("fa-chevron-down");
                icon.classList.add("fa-chevron-up");
            }
        });
    });
});
// document.addEventListener("DOMContentLoaded", function () {
//   const icon1 = document.getElementById("expandicon1");
//   const contents = document.getElementById("expandablecontent1");

//   icon1.addEventListener("click", function () {
//     if (contents.style.display === "block") {
//       contents.style.display = "none";
//       icon1.classList.remove("fa-chevron-up"); // Remove the "up" arrow class
//       icon1.classList.add("fa-chevron-down"); // Add the "down" arrow class
//     } else {
//       contents.style.display = "block";
//       icon1.classList.remove("fa-chevron-down"); // Remove the "down" arrow class
//       icon1.classList.add("fa-chevron-up"); // Add the "up" arrow class
//     }
//   });
// });
// document.addEventListener("DOMContentLoaded", function () {
//   const icon1 = document.getElementById("expandicon2");
//   const contents = document.getElementById("expandablecontent2");

//   icon1.addEventListener("click", function () {
//     if (contents.style.display === "block") {
//       contents.style.display = "none";
//       icon1.classList.remove("fa-chevron-up"); // Remove the "up" arrow class
//       icon1.classList.add("fa-chevron-down"); // Add the "down" arrow class
//     } else {
//       contents.style.display = "block";
//       icon1.classList.remove("fa-chevron-down"); // Remove the "down" arrow class
//       icon1.classList.add("fa-chevron-up"); // Add the "up" arrow class
//     }
//   });
// });
// document.addEventListener("DOMContentLoaded", function () {
//   const icon1 = document.getElementById("expandicon3");
//   const contents = document.getElementById("expandablecontent3");

//   icon1.addEventListener("click", function () {
//     if (contents.style.display === "block") {
//       contents.style.display = "none";
//       icon1.classList.remove("fa-chevron-up"); // Remove the "up" arrow class
//       icon1.classList.add("fa-chevron-down"); // Add the "down" arrow class
//     } else {
//       contents.style.display = "block";
//       icon1.classList.remove("fa-chevron-down"); // Remove the "down" arrow class
//       icon1.classList.add("fa-chevron-up"); // Add the "up" arrow class
//     }
//   });
// });
// document.addEventListener("DOMContentLoaded", function () {
//   const icon1 = document.getElementById("expandicon4");
//   const contents = document.getElementById("expandablecontent4");

//   icon1.addEventListener("click", function () {
//     if (contents.style.display === "block") {
//       contents.style.display = "none";
//       icon1.classList.remove("fa-chevron-up"); // Remove the "up" arrow class
//       icon1.classList.add("fa-chevron-down"); // Add the "down" arrow class
//     } else {
//       contents.style.display = "block";
//       icon1.classList.remove("fa-chevron-down"); // Remove the "down" arrow class
//       icon1.classList.add("fa-chevron-up"); // Add the "up" arrow class
//     }
//   });
// });

// document.addEventListener("DOMContentLoaded", function () {
//   const imageContainers = document.querySelectorAll(".image-container");
//   imageContainers.forEach((container) => {
//     container.addEventListener("click", function () {
//       const checkbox = container.querySelector(".checkbox");
//       checkbox.style.display =
//         checkbox.style.display === "none" ? "block" : "none";
//     });
//   });
// });
