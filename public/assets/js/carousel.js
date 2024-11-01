// Array of video sources
const videoSources = [
  "../videos/vid.mp4",
  "../videos/vid.mp4",
  "../videos/vid.mp4",
];

// Select the video element
const videoElement = document.getElementById("heroVideo");

// Function to change the video source
let currentVideoIndex = 0;
function changeVideoSource() {
  // Set the video source to the current video in the array
  videoElement.src = videoSources[currentVideoIndex];
  videoElement.play(); // Play the video after source update

  // Move to the next video in the array
  currentVideoIndex = (currentVideoIndex + 1) % videoSources.length;
}

// Set interval to change video every 10 seconds
setInterval(changeVideoSource, 10000);

const hamburgerMenu = document.getElementById("hamburger-menu");
const navLinks = document.getElementById("nav-links");

hamburgerMenu.addEventListener("click", () => {
  navLinks.classList.toggle("mobile");
});